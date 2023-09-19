<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::pluck('name', 'id');
        return view('admin.users.create', compact('roles'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name'     => ['required'],
            'email'    => ['required','unique:users',],
            'roles.*'  => ['integer',],
            'roles'    => ['required','array',],
        ]);

        $user = User::create($request->only(['name', 'email']) + ['password' => bcrypt($request->password)]);

        $user->roles()->sync($request->input('roles')); 
       
        return redirect()->route('admin.users.index')
                        ->with('success','User created successfully.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('name','id');
        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'     => ['required'],
            'roles.*'  => ['integer',],
            'roles'    => ['required','array',],
        ]);
        $user = User::findOrFail($id);
        $user->update($request->only(['name']) + ['password' => bcrypt($request->password)]);
        $user->roles()->sync($request->input('roles')); 

        return redirect()->route('admin.users.index')
        ->with('success','User updated successfully.');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return redirect()->route('admin.users.index')
                        ->with('success','User deleted successfully.');
    }
}
