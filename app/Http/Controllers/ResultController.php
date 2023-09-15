<?php

namespace App\Http\Controllers;

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
        $tests = Test::paginate();

        return view('admin.results.create', compact('tests'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'test_id' => ['required', Rule::exists('tests', 'id')],
            'total_points' => 'required',
            'time_taken' => 'required',
        ]);

          /** @var Result $result */
      
         Result::create($request->only('test_id', 'total_points', 'time_taken'));
       
 

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
        $test=Test::pluck('name','id');
        return view('admin.results.edit', compact('result', 'test'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'test_id' => ['required', Rule::exists('tests', 'id')],
            'total_points' => 'required',
            'time_taken' => 'required',
    ]);
    $result = Result::findOrFail($id);
    $result->update($request->only(['test_id', 'total_points', 'time_taken']));



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
