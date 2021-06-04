<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Carbon\carbon;
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
    return view('auth.login');
});

Route::get('admin/home',[App\Http\Controllers\AdminController::class,'index'])->name('home');
Route::get('add-users',[App\Http\Controllers\AdminController::class,'create'])->name('add-users');
Route::post('add-users',[App\Http\Controllers\AdminController::class,'store'])->name('add-users');
Route::get('list-users',[App\Http\Controllers\AdminController::class,'show'])->name('list-users');
Route::get('edit-users/{id}/edit',[App\Http\Controllers\AdminController::class,'edit'])->name('edit-users');
Route::post('update-users',[App\Http\Controllers\AdminController::class,'update'])->name('update-users');

Route::delete('delete-users/{user}',[App\Http\Controllers\AdminController::class,'destroy'])->name('delete-users');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//USER

Route::get('add-email',[App\Http\Controllers\EmailController::class,'create'])->name('add-email');
Route::post('add-email',[App\Http\Controllers\EmailController::class,'store'])->name('add-email');

Route::get('list-messages',[App\Http\Controllers\EmailController::class,'index'])->name('list-messages');
Route::get('perfil-user',[App\Http\Controllers\UserController::class,'show'])->name('perfil-user');
