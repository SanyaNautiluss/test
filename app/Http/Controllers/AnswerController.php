<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AnswerController extends Controller
{
    public function index()
    {

        $answers = Answer::all();
        return view('admin.answers.index', compact('answers'));
    }

    public function create()
    {
        $questions = Question::all()->pluck('question_text', 'id');
        return view('admin.answers.create', compact('questions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question_id' => ['required', Rule::exists('questions', 'id')],
            'answer' => 'required',
            'is_correct' => 'required'
        ]);
  
        Answer::create($request->all());
   
        return redirect()->route('admin.answers.index')
                        ->with('success','User created successfully.');
    }

    public function show($id)
    {
        $answers = Answer::find($id);
        return view('admin.answers.show',compact('answers'));
    }

    public function edit($id)
    {
        $questions = Question::all()->pluck('question_text', 'id');
        $answers = Answer::find($id);
        return view('admin.answers.edit', compact('questions', 'answers', 'id'));
    }

    public function update($id)
    {
        $answers = Answer::find($id);
        $answers->question_id = request('question_id');
        $answers->answer = request('answer');
        $answers->is_correct = request('is_correct');
        $answers->save(); 
        return redirect()->route('admin.answers.index')
                        ->with('success','User updated successfully');
    }

    public function destroy($id)
    {
        Answer::find($id)->delete();
  
        return redirect()->route('admin.answers.index')
                        ->with('success','User deleted successfully');
    }
}
