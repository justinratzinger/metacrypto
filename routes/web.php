<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


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

//Common resource routes
//index - show all
//find - show single
//create - show form to create
//store - store new
//edit - edit
//update - update
//destroy - delete

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

//Show register form
Route::get('/register', [AuthController::class, 'RegisterForm'])->middleware('guest')->name('register');
//create user
Route::post('/users', [AuthController::class, 'CreateUser']);
// Show Login Form
Route::get('/login', [AuthController::class, 'LoginForm'])->name('login')->middleware('guest');
// Log In User
Route::post('/users/authenticate', [AuthController::class, 'authenticate']);
// Log User Out
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

//DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');
Route::get('/profile', [DashboardController::class, 'profile'])->middleware('auth');
Route::get('/deposit', [DashboardController::class, 'deposit'])->middleware('auth');
Route::get('/withdraw', [DashboardController::class, 'withdraw'])->middleware('auth');
Route::get('/investments', [DashboardController::class, 'investments'])->middleware('auth');
Route::get('/referrals', [DashboardController::class, 'referrals'])->middleware('auth');