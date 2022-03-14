<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;


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

Route::get('/',[FrontController::class,'home']);
Route::get('/state',[FrontController::class,'state']);
Route::get('/annual',[FrontController::class,'annual']);
Route::get('/tax',[FrontController::class,'tax']);
Route::get('/why_chose',[FrontController::class,'why_chose']);
Route::get('/amendment',[FrontController::class,'amendment']);
Route::get('/dissolution',[FrontController::class,'dissolution']);
Route::get('/certificate',[FrontController::class,'certificate']);
Route::get('/corporation',[FrontController::class,'corporation']);
Route::get('/llc-state-information',[FrontController::class,'llc_state_information']);



















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
    Route::get('/slider',[AdminController::class,'slider']);
    Route::get('/editheader/{id}',[AdminController::class,'edit_header']);
    Route::post('/update_header',[AdminController::class,'update_header']);
    Route::get('/card',[AdminController::class,'card']);
    route::get('/edit_cards/{id}',[AdminController::class,'edit_cards']);
    Route::post('/update_card',[AdminController::class,'update_card']);
    route::get('/launch',[AdminController::class,'launch']);
    Route::get('edit_launch/{id}',[AdminController::class,'edit_launch']);
    Route::post('/update_launch',[AdminController::class,'update_launch']);




    Route::get('/navtab', function () {
        return view('Admin_asstes.navtabs');
    });

    Route::get('/table', function () {
        return view('Admin_asstes.table');
    });


    Route::get('/Corporations', function () {
        return view('Admin_asstes.Corporations');
    });
    Route::get('/serviceworks', function () {
        return view('Admin_asstes.serviceworks');
    });
    Route::get('/annual_def', function () {
        return view('Admin_asstes.annual_def');
    });
    Route::get('/Formal', function () {
        return view('Admin_asstes.Formal');
    });
    Route::get('/llc', function () {
        return view('Admin_asstes.AnnualLLC');
    });
    Route::get('/File', function () {
        return view('Admin_asstes.File');
    });
    Route::get('/duedate', function () {
        return view('Admin_asstes.duedate');
    });
    Route::get('/Business&Financial', function () {
        return view('Admin_asstes.Business&Financial');
    });
    Route::get('/OtherBusinessReports', function () {
        return view('Admin_asstes.OtherBusinessReports');
    });
    Route::get('/HelpFile', function () {
        return view('Admin_asstes.HelpFile');
    });
    Route::get('/tax_description', function () {
        return view('Admin_asstes.tax_description');
    });
    Route::get('/Employer', function () {
        return view('Admin_asstes.Employer');
    });
    Route::get('/FederalEIN', function () {
        return view('Admin_asstes.FederalEIN');
    });

    Route::get('/UseanEIN', function () {
        return view('Admin_asstes.UseanEIN');
    });

    Route::get('/ObtainEIN', function () {
        return view('Admin_asstes.ObtainEIN');
    });
    Route::get('/taxfaq', function () {
        return view('Admin_asstes.taxfaq');
    });
    Route::get('/tax_card', function () {
        return view('Admin_asstes.tax_card');
    });
    Route::get('/ChangeLLC', function () {
        return view('Admin_asstes.ChangeLLC');
    });
    Route::get('/HelpFile_amendment', function () {
        return view('Admin_asstes.HelpFile_amendment');
    });
    Route::get('/faq_amendment', function () {
        return view('Admin_asstes.faq_amendment');
    });
    Route::get('/desc_disolution', function () {
        return view('Admin_asstes.desc_disolution');
    });
    Route::get('/CloseLLC', function () {
        return view('Admin_asstes.CloseLLC');
    });
    Route::get('/step_dissolving', function () {
        return view('Admin_asstes.step_dissolving');
    });
    Route::get('/requirement_dissolution', function () {
        return view('Admin_asstes.requirement_dissolution');
    });
    Route::get('/faq_dissolution', function () {
        return view('Admin_asstes.faq_dissolution');
    });










});




