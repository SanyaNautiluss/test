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

        $answers = Answer::paginate();
        return view('admin.answers.index', compact('answers'));
    }

    public function create()
    {
        $question = Question::pluck('question_text','id');
        return view('admin.answers.create', compact('question'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question_id' => ['required', Rule::exists('questions', 'id')],
            'answer' => 'required',
            'is_correct' => 'required'
        ]);
  
        Answer::create($request->only('question_id', 'answer', 'is_correct'));
   
        return redirect()->route('admin.answers.index')
                        ->with('success','Answer created successfully.');
    }

    public function show($id)
    {
        $answer = Answer::find($id);
        return view('admin.answers.show',compact('answer'));
    }

    public function edit($id)
    {
        $answer = Answer::findOrFail($id);
        $question = Question::pluck('question_text', 'id');
        return view('admin.answers.edit', compact('question', 'answer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'question_id' => ['required', Rule::exists('questions', 'id')],
            'answer' => 'required',
            'is_correct' => 'required', 'boolean'
        ]);
        $answer = Answer::findOrFail($id);
        $answer->update($request->only([ 'question_id', 'answer', 'is_correct']));
    

        return redirect()->route('admin.answers.index')
                        ->with('success','Answer updated successfully');
    }

    public function destroy($id)
    {
        Answer::find($id)->delete();
  
        return redirect()->route('admin.answers.index')
                        ->with('success','Answer deleted successfully');
    }
}
