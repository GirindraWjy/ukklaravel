<?php

use App\Models\Date;
use App\Models\User;
use App\Models\Agenda;
use App\Models\Groups;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\RolesController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\LeavesController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\PermissionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Middleware
// Route::middleware(['auth', 'isAdmin'])->group(function() {
//     Route::get('/admin', function() {
//         return view('admin.dashboard');
//     })->name('dashboard');
// });


// Route::middleware('auth:sanctum')->group(function() {
//     Route::post('register', [AuthController::class, 'register']);
//     Route::post('login', [AuthController::class, 'login']);
//     Route::get('logout', [AuthController::class, 'logout']);

//     // Only authenticated users may enter...
// });


Route::get('/', function () {
    return redirect('admin');
})->middleware(['auth:sanctum']);

Route::post('/login', [LoginController::class, 'login'])->middleware('auth:sanctum')->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth:sanctum')->name('logout');

// Route::group(['middleware' => ['auth','ceklevel:1']], function() {
//     // Route::get('/dashboard', 'App\Http\Controllers\HomeController@index');
//     // Route::get('/admin', 'App\Http\Controllers\HomeController@adminpage');
//     Route::get('/user', 'App\Http\Controllers\UserController@user');

//     Route::get('/attendance', [LeavesController::class, 'attendance'])->name('attendance');
//     // Route::get('/attendance', 'App\Http\Controllers\LeavesController@filterAttendance');
//     Auth::routes(['register' => true]);
// });

Route::group(['middleware' => ['auth','role:admin|user'], 'as' => 'user.'], function() {
    Route::get('/dashboard', 'App\Http\Controllers\HomeController@index');
    Route::get('/history', 'App\Http\Controllers\AgendaController@history');

    Route::get('/agenda', 'App\Http\Controllers\GroupsController@group');

    Route::get('delete/{id}','App\Http\Controllers\AgendaController@destroy');
    Route::get('{id}/edit','App\Http\Controllers\AgendaController@edit');
    Route::post('update/{id}', 'App\Http\Controllers\AgendaController@update');
    Route::post('create', 'App\Http\Controllers\UserController@create');

    Route::resource('/agenda', AgendaController::class);
});

Route::group(['middleware' => ['auth', 'role:admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Auth::routes(['register' => true]);
    Route::get('/', 'App\Http\Controllers\HomeController@adminpage')->name('index');
    Route::get('/user', 'App\Http\Controllers\UserController@user');

    Route::get('/attendance', [LeavesController::class, 'attendance'])->name('attendance');

    Route::resource('/user', UserController::class);
    Route::resource('/attendance', LeavesController::class);
    Route::resource('/groups', GroupsController::class);
    Route::resource('/office', OfficeController::class);
    Route::resource('/roles', RolesController::class);
    Route::post('/roles/{role}/permission', [RolesController::class, 'givePermission'])->name('roles.permission');
    Route::delete('/roles/{role}/permission/{permission}', [RolesController::class, 'revokePermission'])->name('roles.permission.revoke');
    Route::resource('/permission', PermissionController::class);

});

Auth::routes(['register' => true]);

 Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//Route::get('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// Q U E R Y



Route::get('deleteuser/{id}','App\Http\Controllers\UserController@destroy');



// VIEW

view()->composer(['*'], function ($view) {
    $global_users = User::all();
    $count_user = User::count();
    $count_member = User::where('role_id', '2')->count();
    $count_admin = User::where('role_id', '1')->orwhere('role_id', '3')->count();
    $global_groups = Groups::all();
    $global_role = Role::all();

    $view->with('global_users', $global_users)
    ->with('global_groups', $global_groups)
    ->with('global_role', $global_role)
    ->with('count_user', $count_user)
    ->with('count_member', $count_member)
    ->with('count_admin', $count_admin);

    $userId = Auth::id();
    $currentuser = User::find($userId);
    $view->with('currentuser', $currentuser);

    $month = Date::select('month')->distinct()->get();
    $year = Date::select('year')->distinct()->get();
    $view->with('month', $month)
    ->with('year', $year);

    $usergroups = Groups::with('user')->get();
    $usergroup = User::all()->where('id', $userId);



    $view->with('usergroup', $usergroup)
    ->with('agendagroup', $usergroups);


});
