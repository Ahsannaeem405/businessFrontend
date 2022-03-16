<?php

namespace App\Http\Controllers;

use App\Models\Annualllc;
use App\Models\Annualreport;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Bussiness;
use App\Models\Changellc;
use App\Models\Home_card;
use App\Models\Launch_bussiness;
use App\Models\Corporation;
use App\Models\Duedate;
use App\Models\F_row;
use App\Models\Faq_amendment;
use App\Models\Formal;
use App\Models\Four_row;
use App\Models\Help_line;
use App\Models\Helpfile_amendment;
use App\Models\Howtofile;
use App\Models\Logo;
use App\Models\S_row;
use App\Models\Table_heading;
use App\Models\Trow;

class FrontController extends Controller
{
    function llc(){
        $logo=Logo::first();
        $banners=Banner::all();
    return view('llc2',compact('logo','banners'));

    }
    function coperate(){
        $logo=Logo::first();
        $banners=Banner::all();
        return view('coperate2',compact('logo','banners'));

    }
    function home(){
        $corp=Corporation::first();
        $table=Table_heading::first();

        $banners=Banner::all();
        $cards=Home_card::all();
        $launch=Launch_bussiness::first();
        $logo=Logo::first();
        $row1=F_row::first();
        $row2=S_row::first();
        $row3=Trow::first();
        $row4=Four_row::first();





        return view('business-entity-comparison',compact('banners','cards','launch','corp','logo','table','row1','row2','row3','row4'));

    }
    function state(){
        $banners=Banner::all();
        $logo=Logo::first();
        return view('state-filing-fees',compact('banners','logo'));
    }
    function annual(){
        $banners=Banner::all();
        $annual=Annualreport::first();
        $formal=Formal::first();
        $llc=Annualllc::first();
        $file=Howtofile::first();
        $duedate=Duedate::first();
        $bussiness=Bussiness::first();
        $help_line=Help_line::first();





        $logo=Logo::first();
        return view('annual-report',compact('banners','logo','annual','formal','llc','file','duedate','bussiness','help_line'));
    }
    function tax(){
        $banners=Banner::all();
        $logo=Logo::first();
    return view('tax-id-ein',compact('banners','logo'));

    }
    function why_chose(){
        $banners=Banner::all();
        $logo=Logo::first();

        return view('why-choose',compact('banners','logo'));
    }
    function amendment(){
        $banners=Banner::all();
        $logo=Logo::first();
        $changellc=Changellc::first();
        $helpfile=Helpfile_amendment::first();
        $faq=Faq_amendment::first();

        return view('amendment',compact('banners','logo','changellc','helpfile','faq'));

    }
    function dissolution(){
        $banners=Banner::all();
        $logo=Logo::first();
        return view('dissolution',compact('banners','logo'));
    }
    function certificate(){
        $banners=Banner::all();
        $logo=Logo::first();
        return view('certificate-of-good-standing',compact('banners','logo'));

    }
    function corporation(){
        $banners=Banner::all();
        $logo=Logo::first();
        return view('corporation-state-information',compact('banners','logo'));

    }
    function llc_state_information(){
        $banners=Banner::all();
        $logo=Logo::first();
        return view('llc-state-information',compact('banners','logo'));

    }

}
