<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Category;
use App\Models\CategoryTest;
use App\Models\Test;
use App\Models\Question;
use App\Models\ResultQuestion;


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
        try {
            // Assuming your React component sends userAnswers as an array in the request
            $userAnswers = $request->input('userAnswers');
    
            // Loop through userAnswers and save them to the database
            foreach ($userAnswers as $userAnswer) {
                // Check if any of the selected answers is incorrect (isCorrect === 0)
                $hasIncorrectAnswer = collect($userAnswer['selectedAnswers'])->contains('isCorrect', 0);
    
                // Set is_correct to 0 if any selected answer is incorrect
                $isCorrect = $hasIncorrectAnswer ? 0 : $userAnswer['isCorrect'];
                
                ResultQuestion::create([
                    'question_id' => $userAnswer['questionId'],
                    'selected_answers' => json_encode($userAnswer['selectedAnswers']),
                    'is_correct' => $isCorrect,
                ]);
            }
    
            return response()->json(['message' => 'Quiz data saved successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to save quiz data'], 500);
        }
    }

}

