<?php

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
    return view('dashboard');
});

Route::get('/user', function () {
    return view('user.index');
});

Route::get('/proforma', function () {
    return view('proforma.index');
});

Route::get('/invoice', function () {
    return view('invoice.index');
});

Route::get('/clients', function () {
    return view('customers.index');
});

Route::get('/userprofile', function () {
    return view('user.profile');
});

