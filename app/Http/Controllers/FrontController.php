<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Home_card;
use App\Models\Launch_bussiness;


class FrontController extends Controller
{
    function home(){
        $banners=Banner::all();
        $cards=Home_card::all();
        $launch=Launch_bussiness::first();
        return view('business-entity-comparison',compact('banners','cards','launch'));

    }
    function state(){
        $banners=Banner::all();
        return view('state-filing-fees',compact('banners'));
    }
    function annual(){
        $banners=Banner::all();

        return view('annual-report',compact('banners'));
    }
    function tax(){
        $banners=Banner::all();

    return view('tax-id-ein',compact('banners'));

    }
    function why_chose(){
        $banners=Banner::all();

        return view('why-choose',compact('banners'));
    }
    function amendment(){
        $banners=Banner::all();
        return view('amendment',compact('banners'));

    }
    function dissolution(){
        $banners=Banner::all();
        return view('dissolution',compact('banners'));
    }
    function certificate(){
        $banners=Banner::all();

        return view('certificate-of-good-standing',compact('banners'));

    }
    function corporation(){
        $banners=Banner::all();
        return view('corporation-state-information',compact('banners'));

    }
    function llc_state_information(){
        $banners=Banner::all();
        return view('llc-state-information',compact('banners'));

    }
}
