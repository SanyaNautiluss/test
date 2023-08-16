<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class QuestionController extends Controller
{
    public function index()
    {

        $questions = Question::all();
        return view('admin.questions.index', compact('questions'));
    }

    public function create()
    {
        $tests=Test::all()->pluck('name', 'id');
        return view('admin.questions.create', compact('tests'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'test_id' => ['required', Rule::exists('tests', 'id')],
            'question_text' => 'required'
        ]);
  
        Question::create($request->all());
   
        return redirect()->route('admin.questions.index')
                        ->with('success','User created successfully.');
    }

    public function show($id)
    {
        $questions = Question::find($id);
        return view('admin.questions.show',compact('questions'));
    }

    public function edit($id)
    {
        $tests=Test::all()->pluck('name', 'id');
        $questions = Question::find($id);
        return view('admin.questions.edit', compact('tests', 'questions', 'id'));
    }

    public function update($id)
    {
        $questions = Question::find($id);
        $questions->test_id = request('test_id');
        $questions->question_text = request('question_text');
        $questions->save(); 
        return redirect()->route('admin.questions.index')
                        ->with('success','User updated successfully');
    }

    public function destroy($id)
    {
        Question::find($id)->delete();
  
        return redirect()->route('admin.questions.index')
                        ->with('success','User deleted successfully');
    }
}
