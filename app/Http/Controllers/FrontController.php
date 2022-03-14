<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class FrontController extends Controller
{
    function home(){
        $banners=Banner::all();
        return view('business-entity-comparison',compact('banners'));

    }
}
