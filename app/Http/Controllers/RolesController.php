<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    public function index()
    {
        $permission = Permission::all();
        $roles = Role::all();
        return view('admin.roles', compact(['permission', 'roles']));
    }

    public function create()
    {
        return view('admin.modal.create_role');
    }

    public function edit()
    {

    }

    public function store(Request $request)
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        Role::create($validated);

        return to_route('admin.roles.index');
    }

    public function update(Request $request, Role $role)
    {
        $validated = $request->validate(['name' => 'required']);
        $role->update($validated);

        return to_route('admin.roles.index');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return back();
    }

    public function givePermission(Request $request, Role $role)
    {
        if($role->hasPermissionTo($request->permission)){
            return back()->with('message', 'Permission Exist');
        }
        $role->givePermissionTo($request->permission);
        return back()->with('message', 'Permission Added');
    }

    public function revokePermission(Role $role, Permission $permission)
    {
         if($role->hasPermissionTo($permission)){
            $role->revokePermissionTo($permission);
            return back()->with('message', 'Permission Revoked');
        }
    }
}
