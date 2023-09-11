<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use App\Models\Test;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Result;

class ResultController extends Controller
{
    public function index()
    {

        $results = Result::paginate();
       
        return view('admin.results.index', compact('results'));
    }

    public function create()
    {   
        $tests = Test::with('questions.answers')->get();

        return view('admin.results.create', compact('tests'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'test_id' => ['required', Rule::exists('tests', 'id')],
            'question_id' => ['required', Rule::exists('questions', 'id')],
            'answer_id' => ['required', Rule::exists('answers', 'id')],
        ]);

          /** @var Result $result */
      
         $result = Result::create($request->only('test_id', ['user_id' => auth()->id()]));
        $result->questions()->sync($request->input('questions', []));
 

        return redirect()->route('admin.results.index')
                        ->with('success','Result created successfully.');
    }

    public function show($id)
    {
        $result = Result::findOrFail($id);
        return view('admin.results.show',compact('result'));
    }

    public function edit($id)
    {
        $result = Result::findOrFail($id);
        $questions=Question::pluck('question_text','id');
        $answers=Answer::pluck('answer','id');
        return view('admin.results.edit', compact('result', 'questions', 'answers'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'question_id' => ['required', Rule::exists('questions', 'id')],
            'answer_id' => ['required', Rule::exists('answers', 'id')],
    ]);
    $result = Result::findOrFail($id);
    $result->update($request->only(['question_id', 'answer_id']));



        return redirect()->route('admin.results.index')
                        ->with('success','Result updated successfully');
    }

    public function destroy($id)
    {
        Result::find($id)->delete();
  
        return redirect()->route('admin.results.index')
                        ->with('success','Result deleted successfully');
    }
}
