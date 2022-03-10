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
Route::get('/tax', function () {
    return view('tax-id-ein');
});
Route::get('/why_chose', function () {
    return view('why-choose');
});

Route::get('/amendment', function () {
    return view('amendment');
});

Route::get('/dissolution', function () {
    return view('dissolution');
});
Route::get('/certificate', function () {
    return view('certificate-of-good-standing');
});
Route::get('/corporation', function () {
    return view('corporation-state-information');
});
Route::get('/llc-state-information', function () {
    return view('llc-state-information');
});
Route::get('/coperate', function () {
    return view('coperate2');
});
Route::get('/llc', function () {
    return view('llc2');
});




