<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        
        $permissions = Permission::paginate();
        return view('admin.permissions.index', compact('permissions')); 
    }

    public function create()
    {
        return view('admin.permissions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
  
       Permission::create($request->only(['name'])); // call to undefined method App\Models\Test::createOrFail()  
   
        return redirect()->route('admin.permissions.index')
                        ->with('success','Category created successfully.');
    }

    public function edit($id)
    {
        $permission = Permission::findOrFail($id);
        return view('admin.permissions.edit', compact('permission'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
                'name' => 'required'
        ]);
        $permission = Permission::findOrFail($id);
        $permission->update($request->only(['name']));

        return redirect()->route('admin.permissions.index')
                        ->with('success','Category updated successfully');
    }

    public function destroy($id)
    {
        Permission::findOrFail($id)->delete();
  
        return redirect()->route('admin.permissions.index')
                        ->with('success','Category deleted successfully');
    }
}
