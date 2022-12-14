<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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



Route::get('/',[HomeController::class,"index"]);

Route::get('/redirects',[HomeController::class,"redirects"]);

Route::get('/redirects',[HomeController::class,"redirects"]);

Route::get('/admin',[App\Http\Controllers\AdminController::class,'index']);

Route::get('/company-info',[App\Http\Controllers\AdminController::class,'cominfo']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
