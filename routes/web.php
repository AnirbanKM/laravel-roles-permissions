<?php

use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login',  [HomeController::class, 'login'])->name('login');
    Route::get('/register',  [HomeController::class, 'register'])->name('register');

    Route::post('/createUser',  [AuthController::class, 'createUser'])->name('createUser');
    Route::post('/loginAction',  [AuthController::class, 'loginAction'])->name('loginAction');
});


Route::group(['middleware' => 'auth'], function () {

    Route::get('/logout',  [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard',  [AuthController::class, 'dashboard'])->name('dashboard');

    Route::resource('/posts', PostController::class);
});



Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('/admin')->group(function () {

    Route::get('/dashboard',  [AdminController::class, 'index'])->name('index');

    // Role Routes
    Route::resource('/roles', RoleController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class, 'assignPermissions'])->name('roles.permissions');

    // Permissions Routes
    Route::resource('/permissions', PermissionController::class);

    // Users Routes
    Route::resource('/users', UserController::class);
});
