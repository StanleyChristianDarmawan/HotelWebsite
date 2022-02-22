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
});

Route::get('/home', function () {
    return view('Visitor/home');
});

Route::get('/booking', function () {
    return view('Visitor/booking');
});

Route::get('/facilities', function () {
    return view('Visitor/facilities');
});

Route::get('/room type', function () {
    return view('Visitor/roomType');
});

Route::get('/admin room type', function () {
    return view('Admin.admin_roomType');
});

Route::get('/admin room facilities', function () {
    return view('Admin.admin_roomFacilities');
});

Route::get('/admin hotel facilities', function () {
    return view('Admin.admin_hotelFacilities');
});

Route::get('/receptionist', function () {
    return view('Receptionist.receptionist');
});