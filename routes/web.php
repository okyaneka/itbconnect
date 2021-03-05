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

Route::get('/', function () {
    return redirect('login');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('dashboard');

    Route::get('/search', function () {
        return view('search');
    })->name('search');
    
    Route::get('/u/{username}', function ($username) {
        return view('user', compact('username'));
    })->name('user');
});
