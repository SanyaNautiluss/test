<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Category;
use App\Models\Test;
use App\Models\Question;


class QuizController extends Controller
{
    public function getcategories(){
        $categories=Category::paginate();
        return response()->json([
            'categories'=>$categories
        ],200);
    }

    public function showcategory($id){
        $category=Category::findOrFail($id);
        return response()->json([
            'category'=>$category
        ],200);
    }

}

