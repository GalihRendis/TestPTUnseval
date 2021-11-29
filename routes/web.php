<?php

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

// Auth::routes();
Route::get('/', function () {
	if(Auth::check()){
		return Redirect::to('/dashboard');
	}
    return view('form-login.master');
})->name('form-login');


Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'attemptLogin'])->name('login.attempt');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dahsboard.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
