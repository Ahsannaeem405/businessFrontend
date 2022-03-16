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
Route::get('/coperate',[FrontController::class,'coperate']);
Route::get('/llc',[FrontController::class,'llc']);






















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
    Route::get('Corporations',[AdminController::class,'Corporations']);
    Route::get('edit_corp/{id}',[AdminController::class,'edit_corp']);
    Route::post('/update_corp',[AdminController::class,'update_corp']);
    Route::get('/logo',[AdminController::class,'logo']);
    Route::get('/edit_logo/{id}',[AdminController::class,'edit_logo']);
    Route::post('update_logo',[AdminController::class,'update_logo']);
Route::get('/chart_heading',[AdminController::class,'chart_heading']);
Route::get('/edit_tableheading/{id}',[AdminController::class,'edit_tableheading']);
Route::post('/update_tableheading',[AdminController::class,'update_tableheading']);
Route::get('/row1',[AdminController::class,'row1']);
Route::get('edit_row1/{id}',[AdminController::class,'edit_row1']);
Route::post('update_row1',[AdminController::class,'update_row1']);
Route::get('row2',[AdminController::class,'row2']);
Route::get('edit_row2/{id}',[AdminController::class,'edit_row2']);
Route::post('update_row2',[AdminController::class,'update_row2']);
Route::get('/row3',[AdminController::class,'row3']);
Route::get('edit_row3/{id}',[AdminController::class,'edit_row3']);
Route::post('update_row3',[AdminController::class,'update_row3']);
Route::get('/row4',[AdminController::class,'row4']);
Route::get('edit_row4/{id}',[AdminController::class,'edit_row4']);
Route::post('update_row4',[AdminController::class,'update_row4']);
Route::get('annual_def',[AdminController::class,'annual_def']);
Route::get('edit_annual/{id}',[AdminController::class,'edit_annual']);
Route::post('update_annual',[AdminController::class,'update_annual']);
Route::get('Formal',[AdminController::class,'Formal']);
Route::get('edit_formal/{id}',[AdminController::class,'edit_formal']);
Route::post('update_formal',[AdminController::class,'update_formal']);
Route::get('llc',[AdminController::class,'llc']);
Route::get('edit_llc/{id}',[AdminController::class,'edit_llc']);
Route::post('update_llc',[AdminController::class,'update_llc']);

Route::get('File',[AdminController::class,'File']);
Route::get('edit_file/{id}',[AdminController::class,'edit_file']);
Route::post('update_file',[AdminController::class,'update_file']);

Route::get('duedate',[AdminController::class,'duedate']);
Route::get('edit_duedate/{id}',[AdminController::class,'edit_duedate']);
Route::post('update_duedate',[AdminController::class,'update_duedate']);

Route::get('Business&Financial',[AdminController::class,'Business']);
Route::get('edit_bussiness/{id}',[AdminController::class,'edit_bussiness']);
Route::post('update_bussiness',[AdminController::class,'update_bussiness']);
Route::get('HelpFile',[AdminController::class,'HelpFile']);
Route::get('edit_helpfile/{id}',[AdminController::class,'edit_helpfile']);
Route::post('update_helpfile',[AdminController::class,'update_helpfile']);

Route::get('ChangeLLC',[AdminController::class,'ChangeLLC']);
Route::get('edit_changellc/{id}',[AdminController::class,'edit_changellc']);
Route::post('update_changellc',[AdminController::class,'update_changellc']);

Route::get('HelpFile_amendment',[AdminController::class,'HelpFile_amendment']);
Route::get('edit_helpfile_amendment/{id}',[AdminController::class,'edit_helpfile_amendment']);
Route::post('update_helpfile_amendment',[AdminController::class,'update_helpfile_amendment']);

Route::get('faq_amendment',[AdminController::class,'faq_amendment']);
Route::get('edit_faq_amendment/{id}',[AdminController::class,'edit_faq_amendment']);
Route::post('update_FAQ_amendment',[AdminController::class,'update_FAQ_amendment']);


Route::get('/desc_disolution',[AdminController::class,'desc_disolution']);


Route::get('edit_decs_diss/{id}',[AdminController::class,'edit_decs_diss']);
Route::post('update_disc',[AdminController::class,'update_disc']);

Route::get('/CloseLLC',[AdminController::class,'CloseLLC']);
Route::get('edit_closellc/{id}',[AdminController::class,'edit_closellc']);
Route::post('update_closurellc',[AdminController::class,'update_closurellc']);


Route::get('/step_dissolving',[AdminController::class,'step_dissolving']);
Route::get('edit_step_dissolution/{id}',[AdminController::class,'edit_step_dissolution']);
Route::post('update_steps_diss',[AdminController::class,'update_steps_diss']);


Route::get('/requirement_dissolution',[AdminController::class,'requirement_dissolution']);
Route::get('edit_helpfile_dissolution/{id}',[AdminController::class,'edit_helpfile_dissolution']);
Route::post('update_helpfile_dissolution',[AdminController::class,'update_helpfile_dissolution']);


Route::get('/faq_dissolution',[AdminController::class,'faq_dissolution']);
Route::get('edit_faq_dissolution/{id}',[AdminController::class,'edit_faq_dissolution']);
Route::post('update_FAQ_dissolution',[AdminController::class,'update_FAQ_dissolution']);

Route::get('/tax_description',[AdminController::class,'tax_description']);

Route::get('edit_tax_desc/{id}',[AdminController::class,'edit_tax_desc']);
Route::post('update_tax_desc',[AdminController::class,'update_tax_desc']);


Route::get('/Employer',[AdminController::class,'Employer']);
Route::get('/edit_employee/{id}',[AdminController::class,'edit_employee']);
Route::post('/update_employee',[AdminController::class,'update_employee']);

Route::get('/FederalEIN',[AdminController::class,'FederalEIN']);
Route::get('edit_federal/{id}',[AdminController::class,'edit_federal']);
Route::post('update_federal',[AdminController::class,'update_federal']);


Route::get('/UseanEIN',[AdminController::class,'UseanEIN']);
Route::get('edit_usage/{id}',[AdminController::class,'edit_usage']);
Route::post('update_usage',[AdminController::class,'update_usage']);

Route::get('/ObtainEIN',[AdminController::class,'ObtainEIN']);
Route::get('edit_obtain/{id}',[AdminController::class,'edit_obtain']);
Route::post('update_obtain',[AdminController::class,'update_obtain']);

Route::get('/taxfaq',[AdminController::class,'taxfaq']);
Route::get('/edit_faq_tax/{id}',[AdminController::class,'edit_faq_tax']);
Route::post('/update_FAQ_tax',[AdminController::class,'update_FAQ_tax']);




























    Route::get('/navtab', function () {
        return view('Admin_asstes.navtabs');
    });

    Route::get('/table', function () {
        return view('Admin_asstes.table');
    });



    Route::get('/serviceworks', function () {
        return view('Admin_asstes.serviceworks');
    });






    Route::get('/OtherBusinessReports', function () {
        return view('Admin_asstes.OtherBusinessReports');
    });








    Route::get('/tax_card', function () {
        return view('Admin_asstes.tax_card');
    });


















});




