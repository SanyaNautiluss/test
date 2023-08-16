<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {

        $results = Result::all();
        return view('admin.results.index', ['results' => $results]);
    }

    public function create()
    {
        return view('admin.results.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
  
        Result::create($request->all());
   
        return redirect()->route('admin.results.index')
                        ->with('success','User created successfully.');
    }

    public function show($id)
    {
        $results = Result::find($id);
        return view('admin.results.show',compact('results'));
    }

    public function edit($id)
    {
        $results = Result::find($id);
        return view('admin.results.edit', compact('results', 'id'));
    }

    public function update($id)
    {
        $results = Result::find($id);
        $results->name = request('name');
        $results->save(); 
        return redirect()->route('admin.results.index')
                        ->with('success','User updated successfully');
    }

    public function destroy($id)
    {
        Result::find($id)->delete();
  
        return redirect()->route('admin.results.index')
                        ->with('success','User deleted successfully');
    }
}
