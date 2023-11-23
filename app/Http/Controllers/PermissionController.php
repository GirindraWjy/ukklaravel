<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
     public function index()
    {
        $permission = Permission::all();
        return view('admin.permissions')->with('permission', $permission);
    }

    public function create()
    {
        return view('admin.modal.create_permission');
    }

    public function store(Request $request)
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        Permission::create($validated);

        return to_route('admin.roles.index');
    }

    public function update(Request $request, Permission $permission)
    {
        $validated = $request->validate(['name' => 'required']);
        $permission->update($validated);

        return to_route('admin.roles.index');
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();
        return back();
    }
}
