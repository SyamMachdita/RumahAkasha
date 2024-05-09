<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/home', function(){
    return view('customer.index');
});

Route::get('/event', function(){
    return view('customer.event');
});

Route::get('/event-about', function(){
    return view('customer.event_about');
});

Route::get('/profile', function(){
    return view('customer.profile');
});

