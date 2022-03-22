<?php

namespace App\Http\Controllers;

use App\Models\Annual_slider;
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
use App\Models\Faq_certificate;
use App\Models\Faq_dissolution;
use App\Models\Faq_tax;
use App\Models\Faq_whychoose;
use App\Models\Federal;
use App\Models\Filling_section1;
use App\Models\Filling_section2;
use App\Models\Formation;
use App\Models\Good;
use App\Models\Helpfile_dissolution;
use App\Models\Helpline_certificate;
use App\Models\Hometab1;
use App\Models\Hometab2;
use App\Models\Hometab3;
use App\Models\Hometab4;
use App\Models\Hometab5;
use App\Models\Launch;
use App\Models\Obtain;
use App\Models\Reason;
use App\Models\Step_dissolution;
use App\Models\Tax_description;
use App\Models\Usage;
use App\Models\state;
use App\Models\state1;




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
        $data=Hometab1::first();
        $data2=Hometab2::first();
        $data3=Hometab3::first();
        $data4=Hometab4::first();
        $data5=Hometab5::first();









        return view('business-entity-comparison',compact('banners','cards','launch','corp','logo','table','row1','row2','row3','row4','data','data2','data3','data4','data5'));

    }
    function state(){
        $banners=Banner::all();
        $logo=Logo::first();
        $section1=Filling_section1::first();
        $section2=Filling_section2::first();

        return view('state-filing-fees',compact('banners','logo','section1','section2'));
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
        $slider=Annual_slider::first();





        $logo=Logo::first();
        return view('annual-report',compact('banners','logo','annual','formal','llc','file','duedate','bussiness','help_line','slider'));
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
        $formation=Formation::first();
        $faq=Faq_whychoose::first();
        $bussiness=Launch::first();




        return view('why-choose',compact('banners','logo','formation','faq','bussiness'));
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
        $goods=Good::first();
        $reason=Reason::first();
        $help=Helpline_certificate::first();
        $faq=Faq_certificate::first();




        return view('certificate-of-good-standing',compact('banners','logo','goods','reason','help','faq'));

    }
    function corporation(){
        $banners=Banner::all();
        $logo=Logo::first();
        $state=state::all();

        return view('corporation-state-information',compact('banners','logo','state'));

    }
    function llc_state_information(){
        $banners=Banner::all();
        $logo=Logo::first();
        $state=state::all();
        return view('llc-state-information',compact('banners','logo','state'));

    }

}
