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
    return view('dashboard');
});

Route::get('/form_registrasi', function () {
    return view('form_registrasi');
});

Route::get('/data_activity', function () {
    return view('data_activity');
});

Route::get('/data_activity_detail', function () {
    return view('data_activity_detail');
});

Route::get('/data_activity_edit', function () {
    return view('data_activity_edit');
});