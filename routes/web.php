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
    return view('pages.home');
});

Route::get('/step1', function () {

    $student_level = [
        "1" => 'Postgraduate',
        "2" => 'New Undergraduate',
        "3" => 'Returning Student',
        "4" => 'PGDE Student',
        "5" => 'ERASMUS',
        "6" => 'Study Abroad Exchange Student',
    ]; 

    return view('pages.step1', ['student_level' => $student_level]);
});

Route::get('/step2', function () {
    return view('pages.step2');
});
