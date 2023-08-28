<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TestController extends Controller
{
    public function index()
    {

        $tests = Test::paginate();
        return view('admin.tests.index', compact('tests'));
    }

    public function create()
    {
        $categories = Category::paginate();
        return view('admin.tests.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'categories' =>'array',
            'categories.*' => [ 'numeric', Rule::exists('categories', 'id')]
        ]);
  
        /** @var Test $test */
        $test = Test::create($request->only(['name'])); // call to undefined method App\Models\Test::createOrFail()
   
        $test->categories()->sync($request->get('categories')); 

        return redirect()->route('admin.tests.index')
                        ->with('success','Test created successfully.');
    }

    public function show($id)
    {
        $test = Test::findOrFail($id);
        return view('admin.tests.show',compact('test'));
    }

    public function edit($id)
    {
        $test = Test::findOrFail($id);
        $categories = Category::paginate();
        return view('admin.tests.edit', compact('test', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'categories' =>'required', 'array',
            'categories.*' => [ 'number', Rule::exists('categories', 'id')]
    ]);
    $test = Test::findOrFail($id);
    $test->update($request->only(['name']));
    
    $test->categories()->sync($request->get('categories')); 

        return redirect()->route('admin.tests.index')
                        ->with('success','Test updated successfully');
    }

    public function destroy($id)
    {
        Test::findOrFail($id)->delete();
  
        return redirect()->route('admin.tests.index')
                        ->with('success','Test deleted successfully');
    }
}
