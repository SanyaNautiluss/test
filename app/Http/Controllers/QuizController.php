<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Category;
use App\Models\Test;
use App\Models\Question;


class QuizController extends Controller
{
    public function indexWelcome()
    {
        $categories = Category::all();
        return view('welcome', compact('categories'));
    }
    public function indexQuiz(Category $category)
    {
        
        // $category = Category::whereId($id)->first();
        
        return view('quiz', compact('category'));
    }



}

