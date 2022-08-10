<?php

use App\Http\Controllers\Backend\ClassesController;
use App\Http\Controllers\Backend\ParentsController;
use App\Http\Controllers\Backend\TeachersController;
use App\Http\Controllers\Backend\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('admin.auth.login');
    return view('admin.index');
});

Route::resource("parents",ParentsController::class);
Route::get("parent/view/{parent}",[ParentsController::class,"parentView"])->name("parent.view");

Route::resource("teachers",TeachersController::class);

Route::resource("users",UsersController::class)->except('destory');
Route::get("/delete/{id}",[UsersController::class,"deleteUser"])->name("delete.user");

Route::resource("classes",ClassesController::class);
