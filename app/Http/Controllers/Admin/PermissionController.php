<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();

        return view('admin.permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('admin.permissions.create');
    }

    public function store(Request $r)
    {
        $validate = $r->validate([
            'name' => 'required|unique:permissions,name|min:3'
        ]);
        Permission::create($validate);

        return to_route('admin.permissions.index')->with('message', 'New Permission Added');
    }

    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit', compact('permission'));
    }

    public function update(Request $r, Permission $permission)
    {
        $validate = $r->validate([
            'name' => 'required|min:3'
        ]);

        $permission->update($validate);

        return to_route('admin.permissions.index')->with('message', 'New Permission Updated');
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();
        return to_route('admin.permissions.index')->with('message', 'The Permission deleted');
    }
}
