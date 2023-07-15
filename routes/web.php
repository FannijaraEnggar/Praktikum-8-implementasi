<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', function () {
    return view('welcome');
});

//home route
Route::get('home', [HomeController::class, 'index'])->name('home');

//profile route
Route::get('profile', ProfileController::class)->name('profile');

//employee route
Route::resource('employees', EmployeeController::class);

Auth::routes();
Route::post('/login', [LoginController::class, 'authenticate']);
