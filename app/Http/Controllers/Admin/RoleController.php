<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::whereNotIn('name', ['admin'])->orderBy('id', 'desc')->get();

        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(Request $r)
    {
        $validate = $r->validate([
            'name' => 'required|unique:roles,name|min:3'
        ]);
        Role::create($validate);

        return to_route('admin.roles.index')->with('message', 'New Role Added');
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all();

        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    public function update(Request $r, Role $role)
    {
        $validate = $r->validate([
            'name' => 'required|min:3'
        ]);

        $role->update($validate);

        return to_route('admin.roles.index')->with('message', 'New Role Updated');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return to_route('admin.roles.index')->with('message', 'The Role deleted');
    }

    public function assignPermissions(Request $r, Role $role)
    {
        $role->permissions()->sync($r->permissions);

        return back()->with('message', 'Permissions added successfully...');
    }
}
