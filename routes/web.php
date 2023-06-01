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

    return view('home');
})->name('home');

Route::get('/about', function () {

    $team = [
        [
            'name' => 'Mario',
            'lastname' => 'Rossi',
            'work' => 'CEO'
        ],
        [
            'name' => 'Giuseppe',
            'lastname' => 'Verdi',
            'work' => 'Collaborator'
        ],
        [
            'name' => 'Ugo',
            'lastname' => 'De Ughi',
            'work' => 'Social Media Manager'
        ],
    ];


    return view('about', compact('team'));
})->name('about');

Route::get('/news', function () {

    return view('news');
})->name('news');
