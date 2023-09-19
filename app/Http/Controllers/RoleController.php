<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::paginate();
        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::pluck('name','id');
        return view('admin.roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'permissions.*' => [
                'integer',
            ],
            'permissions'   => [
                'required',
                'array',
            ],
        ]);
 
        $role = Role::create($request->only('name'));
        $role->permissions()->sync($request->input('permissions'));

        return redirect()->route('admin.roles.index')
                        ->with('success','Role created successfully.');
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::pluck('name','id');
        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permissions.*' => [
                'integer',
            ],
            'permissions'   => [
                'required',
                'array',
            ],
        ]);
        $role = Role::findOrFail($id);
        $role->update($request->only(['name', 'permission_id']));
        $role->permissions()->sync($request->input('permissions'));

        return redirect()->route('admin.roles.index')
        ->with('success','Role updated successfully.');
    }

    public function destroy($id)
    {
        Role::findOrFail($id)->delete();

        return redirect()->route('admin.roles.index')
                        ->with('success','Role deleted successfully.');
    }
}

