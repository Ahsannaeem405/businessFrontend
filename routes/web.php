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
Route::get('/login_page', function () {
    return view('login');
});
Route::get('/register_page', function () {
    return view('register');
});

Route::prefix('admin')->group(function () {
    Route::get('/index', function () {
        return view('Admin_asstes.index');
    });
    Route::get('/slider', function () {
        return view('Admin_asstes.slider');
    });
    Route::get('/navtab', function () {
        return view('Admin_asstes.navtabs');
    });

    Route::get('/table', function () {
        return view('Admin_asstes.table');
    });
    Route::get('/card', function () {
        return view('Admin_asstes.card');
    });
    Route::get('/launch', function () {
        return view('Admin_asstes.imagediv');
    });
    Route::get('/Corporations', function () {
        return view('Admin_asstes.Corporations');
    });
    Route::get('/serviceworks', function () {
        return view('Admin_asstes.serviceworks');
    });



});




