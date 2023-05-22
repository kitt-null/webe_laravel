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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/profile', function(){
    return view('profile');
})->name('profile');

Route::get('/home', function(){
    return view('home');
})->name('home');

Route::get('/settings', function(){
    return view('settings');
})->name('settings');

Route::get('/menu', function(){
    return view('menu');
})->name('menu');

Route::get('/donate', function(){
    return view('donate');
})->name('donate');
