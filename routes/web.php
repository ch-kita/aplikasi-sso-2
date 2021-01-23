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
    return view('welcome');
})->middleware('auth');

Route::get('/login', function(){
    return redirect('http://aplikasi-1.domain.test/login');
})->name('login');

Route::get('/logout', function()
{
    return redirect('http://aplikasi-1.domain.test/logout');
})->name('logout');