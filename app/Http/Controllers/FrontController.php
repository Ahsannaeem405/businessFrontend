<?php

namespace App\Http\Controllers;

use App\Models\Annualllc;
use App\Models\Annualreport;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Bussiness;
use App\Models\Changellc;
use App\Models\Closellc;
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
use App\Models\Desc_dissoluton;
use App\Models\Employer;
use App\Models\Entity;
use App\Models\Faq_dissolution;
use App\Models\Faq_tax;
use App\Models\Federal;
use App\Models\Helpfile_dissolution;
use App\Models\Obtain;
use App\Models\Step_dissolution;
use App\Models\Tax_description;
use App\Models\Usage;

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
        $tax_desc=Tax_description::first();
        $employee=Employer::first();
        $federal=Federal::first();
        $usage=Usage::first();
        $obtain=Obtain::first();
        $faq=Faq_tax::first();
        $card=Entity::first();




    return view('tax-id-ein',compact('banners','logo','tax_desc','employee','federal','usage','obtain','faq','card'));

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
        $desc=Desc_dissoluton::first();
        $close=Closellc::first();
        $Step_dissolution=Step_dissolution::first();
        $helpfile=Helpfile_dissolution::first();
        $faq=Faq_dissolution::first();



        return view('dissolution',compact('banners','logo','desc','close','Step_dissolution','helpfile','faq'));
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
