<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Category;
use App\Models\Question;
use App\Models\Result;
use App\Models\Test;

class QuizController extends Controller
{
    public function indexWelcome()
    {
        $categories = Category::all();
        return view('welcome', compact('categories'));
    }

    public function indexTest(Category $category)
    {
        // dd($category_test);
        // $category = Category::whereId($id)->first();

        $tests = $category->tests;
        return view('test', compact('category', 'tests'));
    }

    public function indexQuiz($test)
    {
        $question = Question::where('test_id', $test)->with(['answers'])->get();
        // $category = Category::whereId($id)->first();
        return view('quiz', compact('test', 'question'));
    }

    public function store(Request $request)
    {
        $postData = $request->input('postData');
        $userAnswers = $postData['userAnswers'];
        $testId = $postData['testId'];
        $timeTaken = $postData['elapsedTime'];
        $CorrectAnswers = 0;
        $selectedAnswerIds = [];
    
        // Loop through the user answers and insert records into the user_answers table
        foreach ($userAnswers as $userAnswer) {
            $questionId = $userAnswer['questionId'];
    
            // Check if any value in the isCorrect array is 0
            $isCorrectArray = $userAnswer['isCorrect'];
            $isCorrect = in_array(0, $isCorrectArray) || !in_array(1, $isCorrectArray) ? 0 : 1;
    
            // If isCorrect is still 1, check if there are enough 1s for this question
            if ($isCorrect == 1) {
                $allAnswersForQuestion = Answer::where('question_id', $questionId)
                    ->where('is_correct', 1)
                    ->count();
    
                $selectedAnswersCount = count(array_filter($isCorrectArray, function ($value) {
                    return $value == 1;
                }));
    
                // If not enough correct answers for this question, set isCorrect to 0
                if ($selectedAnswersCount < $allAnswersForQuestion) {
                    $isCorrect = 0;
                }
            }
    
            if ($isCorrect) {
                $CorrectAnswers++;
            }
    
            // Add selected answer IDs to the array
            $selectedAnswerIds = array_merge($selectedAnswerIds, $userAnswer['selectedAnswers']);
        }
    
        // Convert the selected answer IDs array to a comma-separated string
        $selectedAnswerIdsString = implode(',', $selectedAnswerIds);
    
        // Insert a new record into the user_answers table with the combined data
        $newResult = Result::create([
            'test_id' => $testId,
            'total_points' => $CorrectAnswers, 
            'time_taken' => $timeTaken,
            'answers' => $selectedAnswerIdsString, // Pass the selected answer IDs here
        ]);
       return response()->json(['result_id' => $newResult->id,
       'resulturl' => action('\App\Http\Controllers\QuizController@getResultData', ['resultId' => $newResult->id])]);

    }

    public function getResultData($newResultId)
{
    $result = Result::find($newResultId);

    if (!$result) {
        return response()->json(['message' => 'Result not found'], 404);
    }

    
    // You can customize the response data structure as needed
    $responseData = [
        'test_id' => $result->test_id,
        
        'total_points' => $result->total_points,
        'time_taken' => $result->time_taken,
        'answers' => explode(',', $result->answers), // Convert the comma-separated string to an array
    ];

    $question = Question::where('test_id', $result->test_id)->with(['answers'])->get();
    // $category = Category::whereId($id)->first();
    return view('result', compact('responseData','question'));

}


}