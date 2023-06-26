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
})->name('HOME');

Route::get('/careers', function () {
    return view('careers');
})->name('CAREERS');

Route::get('/contact', function () {
    return view('contact');
})->name('CONTACT');

Route::get('/industries', function () {
    return view('industries-discretion');
})->name('DISCRIPTION');

Route::get('/organization', function () {
    return view('organization');
})->name('ORGANIZATION');