<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\statecontroller;


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

Route::get('/bussiness_entity',[FrontController::class,'home']);
Route::get('/state',[FrontController::class,'state']);
Route::get('/annual',[FrontController::class,'annual']);
Route::get('/tax',[FrontController::class,'tax']);
Route::get('/why_chose',[FrontController::class,'why_chose']);
Route::get('/amendment',[FrontController::class,'amendment']);
Route::get('/dissolution',[FrontController::class,'dissolution']);
Route::get('/certificate',[FrontController::class,'certificate']);
Route::get('/',[FrontController::class,'corporation']);
Route::get('/llc-state-information',[FrontController::class,'llc_state_information']);
Route::get('/coperate',[FrontController::class,'coperate']);
Route::get('/llc',[FrontController::class,'llc']);
Route::get('dyn_coperate/',[statecontroller::class,'dyn_coperate']);
Route::get('dyn_llc_info/',[statecontroller::class,'dyn_llc_info']);
























// Route::get('/login_page', function () {
//     return view('login');

// });
// Route::get('/register_page', function () {
//     return view('register');
// });
Route::get('/logout',[App\Http\Controllers\HomeController::class, 'logout']);
Route::prefix('admin')->middleware(['SessionCheck','auth'])->group(function () {
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

    Route::get('/tax_card',[AdminController::class,'tax_card']);
    Route::get('edit_taxcard/{id}',[AdminController::class,'edit_taxcard']);
    Route::post('/update_taxcard',[AdminController::class,'update_taxcard']);

    Route::get('/goods',[AdminController::class,'goods']);
    Route::get('/edit_goods/{id}',[AdminController::class,'edit_goods']);
    Route::post('/update_goods',[AdminController::class,'update_goods']);

    Route::get('/reason',[AdminController::class,'reason']);
    Route::get('/edit_reason/{id}',[AdminController::class,'edit_reason']);
    Route::post('/update_reason',[AdminController::class,'update_reason']);
    Route::get('helpfile_certificate',[AdminController::class,'helpfile_certificate']);
    Route::get('edit_helpfile_certificate/{id}',[AdminController::class,'edit_helpfile_certificate']);
    Route::post('update_helpfile_certificate',[AdminController::class,'update_helpfile_certificate']);

    Route::get('faq_certificate',[AdminController::class,'faq_certificate']);
    Route::get('edit_faq_certificate/{id}',[AdminController::class,'edit_faq_certificate']);
    Route::post('update_FAQ_certificate',[AdminController::class,'update_FAQ_certificate']);
    Route::get('formation',[AdminController::class,'formation']);
    Route::get('edit_formation/{id}',[AdminController::class,'edit_formation']);
    Route::post('update_formation',[AdminController::class,'update_formation']);
    Route::get('faq_whychoose',[AdminController::class,'faq_whychoose']);
    Route::get('edit_faq_whychoose/{id}',[AdminController::class,'edit_faq_whychoose']);
    Route::post('update_FAQ_whychoose',[AdminController::class,'update_FAQ_whychoose']);

    Route::get('business_whychoose',[AdminController::class,'business_whychoose']);
    Route::get('edit_launch_whychoose/{id}',[AdminController::class,'edit_launch_whychoose']);
    Route::post('update_whychoose',[AdminController::class,'update_whychoose']);

    Route::get('slider_annual',[AdminController::class,'slider_annual']);

    Route::get('edit_annualslider/{id}',[AdminController::class,'edit_annualslider']);


    Route::post('update_annualslider',[AdminController::class,'update_annualslider']);
    Route::get('state_tab1',[statecontroller::class,'state_tab1']);
    Route::get('get_step_1',[statecontroller::class,'get_step_1']);
    Route::post('state_tab1_save',[statecontroller::class,'state_tab1_save']);

    Route::get('state_tab2',[statecontroller::class,'state_tab2']);
    Route::get('get_step_2',[statecontroller::class,'get_step_2']);
    Route::post('state_tab2_save',[statecontroller::class,'state_tab2_save']);

    Route::get('state_tab3',[statecontroller::class,'state_tab3']);
    Route::get('get_step_3',[statecontroller::class,'get_step_3']);
    Route::post('state_tab3_save',[statecontroller::class,'state_tab3_save']);

    Route::get('state_tab4',[statecontroller::class,'state_tab4']);
    Route::get('get_step_4',[statecontroller::class,'get_step_4']);
    Route::post('state_tab4_save',[statecontroller::class,'state_tab4_save']);


    Route::get('state_tab5',[statecontroller::class,'state_tab5']);
    Route::get('get_step_5',[statecontroller::class,'get_step_5']);
    Route::post('state_tab5_save',[statecontroller::class,'state_tab5_save']);


    Route::get('/state_info',[statecontroller::class,'state_info']);
    Route::get('get_stateinfo',[statecontroller::class,'get_stateinfo']);
    Route::post('state_information_save',[statecontroller::class,'state_information_save']);



    Route::get('llc_tab1',[statecontroller::class,'llc_tab1']);
    Route::get('get_llcstep_1',[statecontroller::class,'get_llcstep_1']);
    Route::post('llc_tab1_save',[statecontroller::class,'llc_tab1_save']);


    Route::get('llc_tab2',[statecontroller::class,'llc_tab2']);
    Route::get('get_llcstep_2',[statecontroller::class,'get_llcstep_2']);
    Route::post('llcstate_tab2_save',[statecontroller::class,'llcstate_tab2_save']);



    Route::get('llc_tab3',[statecontroller::class,'llc_tab3']);
    Route::get('get_llcstep_3',[statecontroller::class,'get_llcstep_3']);
    Route::post('llcstate_tab3_save',[statecontroller::class,'llcstate_tab3_save']);



    Route::get('llc_tab4',[statecontroller::class,'llc_tab4']);
    Route::get('get_llcstep_4',[statecontroller::class,'get_llcstep_4']);
    Route::post('llcstate_tab4_save',[statecontroller::class,'llcstate_tab4_save']);



    Route::get('llc_tab5',[statecontroller::class,'llc_tab5']);
    Route::get('get_llcstep_5',[statecontroller::class,'get_llcstep_5']);
    Route::post('llcstate_tab5_save',[statecontroller::class,'llcstate_tab5_save']);

    Route::get('llc_info',[statecontroller::class,'llc_info']);
    Route::get('get_llcstateinfo',[statecontroller::class,'llcstate_info']);
    Route::post('llcstate_information_save',[statecontroller::class,'llcstate_information_save']);
    Route::get('home_tab1',[AdminController::class,'home_tab1']);

    Route::post('home_tab1_save',[AdminController::class,'home_tab1_save']);

    Route::get('home_tab2',[AdminController::class,'home_tab2']);
    Route::post('home_tab2_save',[AdminController::class,'home_tab2_save']);

    Route::get('home_tab3',[AdminController::class,'home_tab3']);
    Route::post('home_tab3_save',[AdminController::class,'home_tab3_save']);

    Route::get('home_tab4',[AdminController::class,'home_tab4']);
    Route::post('home_tab4_save',[AdminController::class,'home_tab4_save']);

    Route::get('home_tab5',[AdminController::class,'home_tab5']);
    Route::post('home_tab5_save',[AdminController::class,'home_tab5_save']);

    Route::get('filling_section1',[AdminController::class,'filling_section1']);
    Route::post('update_filling_sec1',[AdminController::class,'update_filling_sec1']);
    Route::get('filling_section2',[AdminController::class,'filling_section2']);
    Route::post('filling_section2_save',[AdminController::class,'filling_section2_save']);

    Route::get('filling_section3',[AdminController::class,'filling_section3']);
    Route::post('update_filling_sec3',[AdminController::class,'update_filling_sec3']);





































































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




























});







// Auth::routes();
Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
