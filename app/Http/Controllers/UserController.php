<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Groups;
use App\Models\Office;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;


class UserController extends Controller
{


    // public function users()
    // {
    //     $user = User::all();
    //     $count = User::count();

    //     View::share('user', $user);
    //     View::share('count', $count);

    // }

    protected function store(Request $data)
    {
        $createuser = User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
            'groups_id' => $data['groups_id'],
            'office_id' => $data['office_id'],
            'position_id' => $data['position_id'],
            'birthdate' => $data['birthdate'],
            'gender' => $data['gender'],
            'phone_number' => $data['phone_number'],
            'address' => $data['address'],
            'latest_education' => $data['latest_education'],
            'identity_number' => $data['identity_number'],
            'start_date' => $data['start_date'],
            'end_date' => $data['end_date'],
        ]);
        $createuser->assignRole($data['role_id']);
        return back();

    }

    public function update(Request $request, User $user)
    {
        $input = $request->all();
        $user->fill($input)->save();
        return back();
    }

    public function destroy($id) {
        $user = User::where('id',$id)->firstOrFail();
        $user->delete();
        return redirect('user')->with('status',"Hapus data berhasil!");
    }

    public function index() {
        $userlistgroup = Groups::with('user')->get();
        $user = User::all();
        $roles = Role::all();
        $office = Office::all();

        return view('admin.users', compact( 'user', 'userlistgroup', 'roles', 'office'));
    }

    public function agenda(Request $request) {
        $usergroups = Groups::with('user')->get();
        $usergroup = User::all();

        return view('agenda', compact( 'agenda', 'agendagroup'));
    }
}
