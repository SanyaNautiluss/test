<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
  
        Category::create($request->all());
   
        return redirect()->route('admin.categories.index')
                        ->with('success','User created successfully.');
    }

    public function show($id)
    {
        $categories = Category::find($id);
        return view('admin.categories.show',compact('categories'));
    }

    public function edit($id)
    {
        $categories = Category::find($id);
        return view('admin.categories.edit', compact('categories', 'id'));
    }

    public function update($id)
    {
        $categories = Category::find($id);
        $categories->name = request('name');
        $categories->save(); 
        return redirect()->route('admin.categories.index')
                        ->with('success','User updated successfully');
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
  
        return redirect()->route('admin.categories.index')
                        ->with('success','User deleted successfully');
    }
}