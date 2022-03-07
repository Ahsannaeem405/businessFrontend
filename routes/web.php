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
    return view('business-entity-comparison');
});
Route::get('/state', function () {
    return view('state-filing-fees');
});
Route::get('/annual', function () {
    return view('annual-report');
});

