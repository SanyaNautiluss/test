<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Category;
use App\Models\StartResult;
use App\Models\Test;
use App\Models\Question;
use App\Models\QuestionResult;
use Illuminate\Support\Facades\Validator;


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

    public function startQuiz(Request $request)
    {
        $testId = $request->input('testId');

        StartResult::create([
        'test_id' => $testId,
        'user_name' => 'default',
        'total_points' => '0'
        ]);

    }

    public function store(Request $request)
    {
        $userAnswers = $request->input('userAnswers');

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

            // Insert a new record into the user_answers table
            QuestionResult::create([
                'question_id' => $questionId,
                'answer_id' => json_encode($userAnswer['selectedAnswers']),
                'is_correct' => $isCorrect,
            ]);
        }

        return response()->json(['message' => 'Quiz submitted successfully']);
    }

    public function showQuiz($result)
    {

        $question = StartResult::where('test_id', $result)->with(['questions','answers'])->get();
        // $category = Category::whereId($id)->first();
        return view('result', compact('result', 'question'));  
    }

}

