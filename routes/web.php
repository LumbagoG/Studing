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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/webinars', function () {
    return view('webinars');
})->name('webinars');

Route::get('/forums', function () {
    return view('forums');
})->name('forums');

Route::get('/tests', function () {
    return view('tests');
})->name('tests');
