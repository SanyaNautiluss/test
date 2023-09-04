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
        $categories = Category::paginate();
        return view('welcome', compact('categories'));
    }
    public function indexQuiz()
    {
        $categories = Category::paginate();
        return view('quiz', compact('categories'));
    }



}

