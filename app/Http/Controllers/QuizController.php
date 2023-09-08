<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Category;
use App\Models\CategoryTest;
use App\Models\Test;
use App\Models\Question;


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



}

