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

        $questions = Question::paginate();
        return view('admin.questions.index', compact('questions'));
    }

    public function create()
    {
        $tests=Test::pluck('name','id');
        return view('admin.questions.create', compact('tests'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'test_id' => ['required', Rule::exists('tests', 'id')],
            'question_text' => 'required'
        ]);
  
          /** @var Question $question */
       Question::create($request->only(['test_id', 'question_text']));
   
        return redirect()->route('admin.questions.index')
                        ->with('success','User created successfully.');
    }

    public function show($id)
    {
        $question = Question::findOrFail($id);
        return view('admin.questions.show',compact('question'));
    }

    public function edit($id)
    {
        $question = Question::findOrFail($id);
        $tests = Test::pluck('name', 'id');
        return view('admin.questions.edit', compact('question', 'tests'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'test_id' => ['required', Rule::exists('tests', 'id')],
            'question_text' => 'required'
    ]);
    $question = Question::findOrFail($id);
    $question->update($request->only([ 'test_id', 'question_text']));



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
