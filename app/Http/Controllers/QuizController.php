<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Category;
use App\Models\Test;
use App\Models\Question;


class QuizController extends Controller
{
    public function index()
    {
        $categories = Category::paginate();
        return view('welcome', compact('categories'));
    }

    public function showcategory($id){
        $category=Category::findOrFail($id);
        return response()->json([
            'category'=>$category
        ],200);
    }

}

