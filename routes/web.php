<?php

use App\Http\Controllers\Backend\ParentsController;
use App\Http\Controllers\Backend\TeachersController;
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

Route::resource("teachers",TeachersController::class)->except('destroy');
Route::get("/delete/{id}",[TeachersController::class,"deleteTeacher"])->name("delete.teacher");
