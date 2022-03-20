<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userscontrollerphp;


Route::get('/', function() {
    return view('Signup');
});

Route::view('/', 'Signup');
Route::view('/dashboard', 'dashboard');
Route::view('/Login', 'Login');
Route::view('/transaction', 'transaction');

Route::get('users', [userscontroller::class, 'index']);
Route::post('add', [userscontroller::class, 'add']);
