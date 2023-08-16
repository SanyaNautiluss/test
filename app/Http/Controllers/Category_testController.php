<?php

namespace App\Http\Controllers;

use App\Models\Category_test;
use App\Models\Category;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Category_testController extends Controller
{
    public function index()
    {

        $category_tests = Category_test::all();
        return view('admin.category_tests.index', compact('category_tests'));
    }

    public function create()
    {
        $tests=Test::all()->pluck('name', 'id');
        $categories=Category::all()->pluck('name', 'id');
        return view('admin.category_tests.create', compact('tests', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'test_id' => ['required', Rule::exists('tests', 'id')],
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);
  
        Category_test::create($request->all());
   
        return redirect()->route('admin.category_tests.index')
                        ->with('success','User created successfully.');
    }

    public function show($id)
    {
        $category_tests = Category_test::find($id);
        return view('admin.category_tests.show',compact('category_tests'));
    }

    public function edit($id)
    {
        $tests=Test::all()->pluck('name', 'id');
        $categories=Category::all()->pluck('name', 'id');
        $category_tests = Category_test::find($id);
        return view('admin.category_tests.edit', compact('category_tests','tests', 'categories', 'id'));
    }

    public function update($id)
    {
        $category_tests = Category_test::find($id);
        $category_tests->test_id = request('test_id');
        $category_tests->category_id = request('category_id');
        $category_tests->save(); 
        return redirect()->route('admin.category_tests.index')
                        ->with('success','User updated successfully');
    }

    public function destroy($id)
    {
        Category_test::find($id)->delete();
  
        return redirect()->route('admin.category_tests.index')
                        ->with('success','User deleted successfully');
    }
}
