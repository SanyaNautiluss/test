<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::paginate();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        $tests = Test::paginate();
        return view('admin.categories.create', compact('tests'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'tests' =>'required', 'array',
            'tests.*' => [ 'number', Rule::exists('tests', 'id')]
        ]);
  
        /** @var Category $category */
        $category = Category::create($request->only(['name'])); // call to undefined method App\Models\Test::createOrFail()
   
        $category->tests()->sync($request->get('tests')); 
   
        return redirect()->route('admin.categories.index')
                        ->with('success','Category created successfully.');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.show',compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $tests = Test::paginate();
        return view('admin.categories.edit', compact('category', 'tests'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
                'name' => 'required',
                'tests' =>'required', 'array',
                'tests.*' => [ 'number', Rule::exists('tests', 'id')]
        ]);
        $category = Category::findOrFail($id);
        $category->update($request->only(['name']));

        $category->tests()->sync($request->get('tests')); 

        return redirect()->route('admin.categories.index')
                        ->with('success','Category updated successfully');
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
  
        return redirect()->route('admin.categories.index')
                        ->with('success','Category deleted successfully');
    }
}