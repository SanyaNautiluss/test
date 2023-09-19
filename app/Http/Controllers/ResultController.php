<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;
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
        $tests = Test::paginate();

        return view('admin.results.create', compact('tests'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'test_id' => ['required', Rule::exists('tests', 'id')],
        ]);

          /** @var Result $result */
      
          $result = $request->only('test_id') + ['total_points' => 0, 'time_taken' => 0];
          
          Result::create($result);
       
 

        return redirect()->route('admin.results.index')
                        ->with('success','Result created successfully.');
    }

    public function show($id)
    {

        $result = Result::findOrFail($id);
        $questions = Question::where('test_id', $result->test_id)->with(['answers'])->get();
        return view('admin.results.show',compact('result', 'questions'));
    }

    public function destroy($id)
    {
        Result::find($id)->delete();
  
        return redirect()->route('admin.results.index')
                        ->with('success','Result deleted successfully');
    }
}
