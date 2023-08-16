<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {

        $tests = Test::all();
        return view('admin.tests.index', ['tests' => $tests]);
    }

    public function create()
    {
        return view('admin.tests.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
  
        Test::create($request->all());
   
        return redirect()->route('admin.tests.index')
                        ->with('success','User created successfully.');
    }

    public function show($id)
    {
        $tests = Test::find($id);
        return view('admin.tests.show',compact('tests'));
    }

    public function edit($id)
    {
        $tests = Test::find($id);
        return view('admin.tests.edit', compact('tests', 'id'));
    }

    public function update($id)
    {
        $tests = Test::find($id);
        $tests->name = request('name');
        $tests->save(); 
        return redirect()->route('admin.tests.index')
                        ->with('success','User updated successfully');
    }

    public function destroy($id)
    {
        Test::find($id)->delete();
  
        return redirect()->route('admin.tests.index')
                        ->with('success','User deleted successfully');
    }
}
