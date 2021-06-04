<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/countries/{id}/states',[\App\Http\Controllers\CountryController::class,'bystate'])->name('state');
Route::get('/states/{id}/cities',[\App\Http\Controllers\CityController::class,'bycity'])->name('city');


// Route::get('admin/home',[App\Http\Controllers\AdminController::class,'index'])->name('home');
