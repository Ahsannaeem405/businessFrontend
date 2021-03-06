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
use App\Models\Copy;
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
use App\Models\Filling_section3;
use App\Models\Formation;
use App\Models\Helpfile_dissolution;
use App\Models\Obtain;
use App\Models\Step_dissolution;
use App\Models\Tax_description;
use App\Models\Usage;
use App\Models\Good;
use App\Models\Reason;
use App\Models\Helpline_certificate;
use App\Models\Hometab1;
use App\Models\Hometab2;
use App\Models\Hometab3;
use App\Models\Hometab4;
use App\Models\Hometab5;
use App\Models\Launch;
use App\Models\Legal;
use App\Models\Legal_disclaimer;
use App\Models\Privacy;
use App\Models\Privacy_policy;

class AdminController extends Controller
{
    function slider()
    {
        $banners = Banner::all();
        return view('Admin_asstes.slider', compact('banners'));
    }
    function edit_header($id)
    {

        $header = Banner::find($id);
        return view('Admin_asstes.edit_header', compact('header'));
    }
    function update_header(Request $request)
    {
        $header = Banner::find($request->id);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $request->file->extension();
            $fileName = rand(11111, 99999) . "_." . $extension;
            $request->file->move('Upload/header/', $fileName);
            $header->image = $fileName;
        }
        $header->heading = $request->heading;
        $header->sub_heading = $request->sub_heading;
        $header->button_name = $request->button_name;
        $header->button_link = $request->button_link;
        $header->save();
        return back()->with('success', 'Successfully Updated');
    }
    function card()
    {
        $headers = Home_card::all();
        return view('Admin_asstes.card', compact('headers'));
    }
    function edit_cards($id)
    {
        $header = Home_card::find($id);
        return view('Admin_asstes.edit_cards', compact('header'));
    }
    function update_card(Request $request)
    {
        $header = Home_card::find($request->id);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $request->file->extension();
            $fileName = rand(11111, 99999) . "_." . $extension;
            $request->file->move('Upload/cards/', $fileName);
            $header->image = $fileName;
        }
        $header->heading = $request->heading;
        $header->link = $request->link;


        $header->save();
        return back()->with('success', 'Successfully Updated');
    }
    function launch()
    {
        $headers = Launch_bussiness::all();
        return view('Admin_asstes.imagediv', compact('headers'));
    }
    function edit_launch($id)
    {
        $header = Launch_bussiness::find($id);
        return view('Admin_asstes.edit_launch', compact('header'));
    }
    function update_launch(Request $request)
    {
        $header = Launch_bussiness::find($request->id);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $request->file->extension();
            $fileName = rand(11111, 99999) . "_." . $extension;
            $request->file->move('Upload/launch/', $fileName);
            $header->image = $fileName;
        }
        $header->heading = $request->heading;
        $header->button_name = $request->button_name;
        $header->button_link = $request->button_link;
        $header->text = $request->text;




        $header->save();
        return back()->with('success', 'Successfully Updated');
    }
    function Corporations()
    {
        $headers = Corporation::all();
        return view('Admin_asstes.Corporations', compact('headers'));
    }
    function edit_corp($id)
    {
        $header = Corporation::find($id);
        return view('Admin_asstes.edit_corp', compact('header'));
    }
    function update_corp(Request $request)
    {
        $header = Corporation::find($request->id);

        $header->heading = $request->heading;
        $header->text = $request->text;

        $header->save();
        return back()->with('success', 'Successfully Updated');
    }
    function logo()
    {
        $headers = Logo::all();
        return view('Admin_asstes.logo', compact('headers'));
    }
    function edit_logo($id)
    {
        $header = Logo::find($id);
        return view('Admin_asstes.edit_logo', compact('header'));
    }
    function update_logo(Request $request)
    {
        $header = Logo::find($request->id);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $request->file->extension();
            $fileName = rand(11111, 99999) . "_." . $extension;
            $request->file->move('Upload/logo/', $fileName);
            $header->image = $fileName;
        }

        $header->save();
        return back()->with('success', 'Successfully Updated');
    }
    function chart_heading()
    {
        $headers = Table_heading::all();
        return view('Admin_asstes.chart_heading', compact('headers'));
    }
    function edit_tableheading($id)
    {
        $header = Table_heading::find($id);
        return view('Admin_asstes.edit_tableheading', compact('header'));
    }
    function update_tableheading(Request $request)
    {
        $header = Table_heading::find($request->id);
        $header->Heading = $request->Heading;
        $header->Heading1 = $request->Heading1;
        $header->Heading2 = $request->Heading2;
        $header->Heading3 = $request->Heading3;
        $header->Heading4 = $request->Heading4;
        $header->Heading5 = $request->Heading5;
        $header->save();
        return back()->with('success', 'Successfully Updated');
    }
    function row1(){
        $headers=F_row::all();
        return view('Admin_asstes.row1',compact('headers'));
    }
    function edit_row1($id){
      $header=F_row::find($id);
      return view('Admin_asstes.edit_row1',compact('header'));
    }
    function update_row1(Request $request){
      $header=  F_row::find($request->id);
      $header->Title=$request->Title;
      $header->Sub_heading=$request->Sub_heading;
      $header->status1=$request->status1;
      $header->status2=$request->status2;
      $header->status3=$request->status3;
      $header->status4=$request->status4;
      $header->heading1=$request->heading1;
      $header->heading2=$request->heading2;
      $header->heading3=$request->heading3;
      $header->heading4=$request->heading4;
      $header->detail1=$request->detail1;
      $header->detail2=$request->detail2;
      $header->detail3=$request->detail3;
      $header->detail4=$request->detail4;
      $header->save();
      return back()->with('success', 'Successfully Updated');















    }
    function row2(){
        $headers=S_row::all();
        return view('Admin_asstes.row2',compact('headers'));
    }
    function edit_row2($id){
        $header=S_row::find($id);
        return view('Admin_asstes.edit_row2',compact('header'));
    }
    function update_row2(Request $request){
        $header=  S_row::find($request->id);
        $header->Title=$request->Title;
        $header->Sub_heading=$request->Sub_heading;
        $header->Sub_heading2=$request->Sub_heading2;
        $header->status1=$request->status1;
        $header->status2=$request->status2;
        $header->status3=$request->status3;
        $header->status4=$request->status4;

        $header->status5=$request->status5;
          $header->status6=$request->status6;
            $header->status7=$request->status7;
              $header->status8=$request->status8;



        $header->heading1=$request->heading1;
        $header->heading2=$request->heading2;
        $header->heading3=$request->heading3;
        $header->heading4=$request->heading4;
        $header->heading5=$request->heading5;
         $header->heading6=$request->heading6;
          $header->heading7=$request->heading7;
           $header->heading8=$request->heading8;

        $header->detail1=$request->detail1;
        $header->detail2=$request->detail2;
        $header->detail3=$request->detail3;
        $header->detail4=$request->detail4;
        $header->detail5=$request->detail5;
           $header->detail6=$request->detail6;
            $header->detail7=$request->detail7;
              $header->detail8=$request->detail8;
        $header->save();
        return back()->with('success', 'Successfully Updated');
    }
    function row3(){
        $headers=Trow::all();
        return view('Admin_asstes.row3',compact('headers'));
    }
    function edit_row3($id){
        $header=Trow::find($id);
        return view('Admin_asstes.edit_row3',compact('header'));
    }
    function update_row3(Request $request){
        $header=  Trow::find($request->id);
        $header->Title=$request->Title;
        $header->Sub_heading=$request->Sub_heading;
        $header->Sub_heading2=$request->Sub_heading2;
        $header->Sub_heading3=$request->Sub_heading3;
        $header->Sub_heading4=$request->Sub_heading4;
        $header->status1=$request->status1;
        $header->status2=$request->status2;
        $header->status3=$request->status3;
        $header->status4=$request->status4;

        $header->status5=$request->status5;
          $header->status6=$request->status6;
            $header->status7=$request->status7;
              $header->status8=$request->status8;

              $header->status9=$request->status9;
              $header->status10=$request->status10;
                $header->status11=$request->status11;
                  $header->status12=$request->status12;


                  $header->status13=$request->status13;
                  $header->status14=$request->status14;
                    $header->status15=$request->status15;
                      $header->status16=$request->status16;



        $header->heading1=$request->heading1;
        $header->heading2=$request->heading2;
        $header->heading3=$request->heading3;
        $header->heading4=$request->heading4;
        $header->heading5=$request->heading5;
         $header->heading6=$request->heading6;
          $header->heading7=$request->heading7;
           $header->heading8=$request->heading8;

           $header->heading9=$request->heading9;
           $header->heading10=$request->heading10;
            $header->heading11=$request->heading11;
             $header->heading12=$request->heading12;


             $header->heading13=$request->heading13;
             $header->heading14=$request->heading14;
              $header->heading15=$request->heading15;
               $header->heading16=$request->heading16;

        $header->detail1=$request->detail1;
        $header->detail2=$request->detail2;
        $header->detail3=$request->detail3;
        $header->detail4=$request->detail4;
        $header->detail5=$request->detail5;
           $header->detail6=$request->detail6;
            $header->detail7=$request->detail7;
              $header->detail8=$request->detail8;

              $header->detail9=$request->detail9;
              $header->detail10=$request->detail10;
               $header->detail11=$request->detail11;
                 $header->detail12=$request->detail12;


                 $header->detail13=$request->detail13;
                 $header->detail14=$request->detail14;
                  $header->detail15=$request->detail15;
                    $header->detail16=$request->detail16;
        $header->save();
        return back()->with('success', 'Successfully Updated');
    }
    function row4(){
        $headers=Four_row::all();
        return view('Admin_asstes.row4',compact('headers'));
    }
    function edit_row4($id){
        $header=Four_row::find($id);
        return view('Admin_asstes.edit_row4',compact('header'));
    }
    function update_row4(Request $request){
        $header=Four_row::find($request->id);
        $header->Title=$request->Title;
        $header->Sub_heading=$request->Sub_heading;
        $header->Sub_heading2=$request->Sub_heading2;
        $header->Sub_heading3=$request->Sub_heading3;

        $header->status1=$request->status1;
        $header->status2=$request->status2;
        $header->status3=$request->status3;
        $header->status4=$request->status4;

        $header->status5=$request->status5;
          $header->status6=$request->status6;
            $header->status7=$request->status7;
              $header->status8=$request->status8;

              $header->status9=$request->status9;
              $header->status10=$request->status10;
                $header->status11=$request->status11;
                  $header->status12=$request->status12;






        $header->heading1=$request->heading1;
        $header->heading2=$request->heading2;
        $header->heading3=$request->heading3;
        $header->heading4=$request->heading4;
        $header->heading5=$request->heading5;
         $header->heading6=$request->heading6;
          $header->heading7=$request->heading7;
           $header->heading8=$request->heading8;

           $header->heading9=$request->heading9;
           $header->heading10=$request->heading10;
            $header->heading11=$request->heading11;
             $header->heading12=$request->heading12;

        $header->detail1=$request->detail1;
        $header->detail2=$request->detail2;
        $header->detail3=$request->detail3;
        $header->detail4=$request->detail4;
        $header->detail5=$request->detail5;
           $header->detail6=$request->detail6;
            $header->detail7=$request->detail7;
              $header->detail8=$request->detail8;

              $header->detail9=$request->detail9;
              $header->detail10=$request->detail10;
               $header->detail11=$request->detail11;
                 $header->detail12=$request->detail12;



        $header->save();
        return back()->with('success', 'Successfully Updated');

    }
    function annual_def(){
        $headers=Annualreport::all();
        return view('Admin_asstes.annual_def',compact('headers'));
    }
    function edit_annual($id){
        $header=Annualreport::find($id);
        return view('Admin_asstes.edit_annual',compact('header'));
    }
    function update_annual(Request $request){
        $header=Annualreport::find($request->id);
        $header->link=$request->link;
        $header->heading=$request->heading;
        $header->detail=$request->detail;
$header->save();
return back()->with('success', 'Successfully Updated');



    }
    function Formal(){
        $headers=Formal::all();
        return view('Admin_asstes.Formal',compact('headers'));

    }
    function edit_formal($id){
        $header=Formal::find($id);
        return view('Admin_asstes.edit_formal',compact('header'));
    }
    function update_formal(Request $request){
        $header=Formal::find($request->id);
        $header->heading=$request->heading;
        $header->detail=$request->detail;
$header->save();
return back()->with('success', 'Successfully Updated');
    }
    function llc(){
        $headers=Annualllc::all();

    return view('Admin_asstes.AnnualLLC',compact('headers'));

    }
    function edit_llc($id){
        $header=Annualllc::find($id);
        return view('Admin_asstes.edit_llc',compact('header'));
    }
    function update_llc(Request $request){
        $header=Annualllc::find($request->id);
        $header->heading=$request->heading;
        $header->detail=$request->detail;
$header->save();
return back()->with('success', 'Successfully Updated');
    }
    function File(){
        $headers=Howtofile::all();

        return view('Admin_asstes.File',compact('headers'));

    }
    function edit_file($id){
        $header=Howtofile::find($id);
        return view('Admin_asstes.edit_file',compact('header'));
    }
    function update_file(Request $request){
        $header=Howtofile::find($request->id);
        $header->heading=$request->heading;
        $header->detail=$request->detail;
$header->save();
return back()->with('success', 'Successfully Updated');

    }
    function duedate(){
        $headers=Duedate::all();
    return view('Admin_asstes.duedate',compact('headers'));

    }
    function edit_duedate($id){
        $header=Duedate::find($id);
        return view('Admin_asstes.edit_duedate',compact('header'));
    }
    function update_duedate(Request $request){
        $header=Duedate::find($request->id);
        $header->heading=$request->heading;
        $header->Sub_heading=$request->Sub_heading;

        $header->detail=$request->detail;
        $header->point1=$request->point1;
        $header->point2=$request->point2;
        $header->point3=$request->point3;



$header->save();
return back()->with('success', 'Successfully Updated');

    }
    function Business(){
        $headers=Bussiness::all();

        return view('Admin_asstes.Business&Financial',compact('headers'));

    }
    function edit_bussiness($id){
        $header=Bussiness::find($id);
        return view('Admin_asstes.edit_bussness',compact('header'));
    }
    function update_bussiness(Request $request){
        $header=Bussiness::find($request->id);
        $header->heading1=$request->heading1;
        $header->heading2=$request->heading2;



        $header->detail1=$request->detail1;
        $header->detail2=$request->detail2;

        $header->point1=$request->point1;
        $header->point2=$request->point2;
        $header->point3=$request->point3;
        $header->point4=$request->point4;




$header->save();
return back()->with('success', 'Successfully Updated');

    }
    function HelpFile(){
        $headers=Help_line::all();
        return view('Admin_asstes.HelpFile',compact('headers'));

    }
    function edit_helpfile($id){
       $header= Help_line::find($id);
       return view('Admin_asstes.edit_helpfile',compact('header'));
    }
    function update_helpfile(Request $request){
        $header=Help_line::find($request->id);
        $header->heading=$request->heading;
        $header->Sub_heading=$request->Sub_heading;
        $header->detail=$request->detail;
        $header->save();
return back()->with('success', 'Successfully Updated');



    }
    function ChangeLLC(){
        $headers=Changellc::all();
        return view('Admin_asstes.ChangeLLC',compact('headers'));

    }
    function edit_changellc($id){
        $header=Changellc::find($id);
       return view('Admin_asstes.edit_changellc',compact('header'));


    }
    function update_changellc(Request $request){
        $header=Changellc::find($request->id);
        $header->heading=$request->heading;

        $header->detail=$request->detail;
        $header->save();
return back()->with('success', 'Successfully Updated');
    }
    function HelpFile_amendment(){
        $headers=Helpfile_amendment::all();

        return view('Admin_asstes.HelpFile_amendment',compact('headers'));

    }
    function edit_helpfile_amendment($id){
        $header= Helpfile_amendment::find($id);
        return view('Admin_asstes.edit_helpfile_amendment',compact('header'));
    }
    function update_helpfile_amendment(Request $request){
        $header=Helpfile_amendment::find($request->id);
        $header->heading=$request->heading;
        $header->Sub_heading=$request->Sub_heading;
        $header->detail=$request->detail;
        $header->point1=$request->point1;
        $header->point2=$request->point2;
        $header->point3=$request->point3;
        $header->point4=$request->point4;


        $header->save();
return back()->with('success', 'Successfully Updated');

    }
    function faq_amendment(){
        $headers=Faq_amendment::all();
        return view('Admin_asstes.faq_amendment',compact('headers'));

    }
    function edit_faq_amendment($id){
        // dd("helloo");
        $header=Faq_amendment::find($id);
        return view('Admin_asstes.edit_faq_amendment',compact('header'));
    }
    function  update_FAQ_amendment(Request $request){
        $header=Faq_amendment::find($request->id);
        $header->q1=$request->q1;
        $header->q2=$request->q2;
        $header->q3=$request->q3;
        $header->q4=$request->q4;
        $header->q5=$request->q5;

        $header->a1=$request->a1;
        $header->a2=$request->a2;
        $header->a3=$request->a3;
        $header->a4=$request->a4;
        $header->a5=$request->a5;
$header->save();
return back()->with('success', 'Successfully Updated');



    }
    function desc_disolution(){
        $headers=Desc_dissoluton::all();
        return view('Admin_asstes.desc_disolution',compact('headers'));

    }
    function edit_decs_diss($id){
        $header=Desc_dissoluton::find($id);
        return view('Admin_asstes.edit_decs_diss',compact('header'));

    }
    function update_disc(Request $request){
        $header=Desc_dissoluton::find($request->id);
        $header->detail=$request->detail;
        $header->save();
return back()->with('success', 'Successfully Updated');
    }
    function CloseLLC(){
        $headers=Closellc::all();
     return view('Admin_asstes.CloseLLC',compact('headers'));

    }
    function edit_closellc($id){
        $header=Closellc::find($id);
        return view('Admin_asstes.edit_CloseLLC',compact('header'));

    }
    function update_closurellc(Request $request){
        $header=Closellc::find($request->id);
        $header->heading=$request->heading;
        $header->detail=$request->detail;

        $header->video_heading=$request->video_heading;
        $header->video_link=$request->video_link;
        $header->save();
        return back()->with('success', 'Successfully Updated');


    }
    function step_dissolving(){
        $headers=Step_dissolution::all();


        return view('Admin_asstes.step_dissolving',compact('headers'));

    }
    function edit_step_dissolution($id){
        $header=Step_dissolution::find($id);
        return view('Admin_asstes.edit_step_dissolution',compact('header'));

    }
    function update_steps_diss(Request $request){
        $header=Step_dissolution::find($request->id);
        $header->heading1=$request->heading1;
        $header->detail1=$request->detail1;

        $header->heading2=$request->heading2;
        $header->detail2=$request->detail2;
        $header->heading3=$request->heading3;
        $header->detail3=$request->detail3;
        $header->save();
        return back()->with('success', 'Successfully Updated');
    }
    function requirement_dissolution(){
        $headers=Helpfile_dissolution::all();

        return view('Admin_asstes.requirement_dissolution',compact('headers'));

    }
    function edit_helpfile_dissolution($id){
        $header=Helpfile_dissolution::find($id);
        return view('Admin_asstes.edit_helpfile_dissolution',compact('header'));
    }
    function update_helpfile_dissolution(Request $request){
        $header=Helpfile_dissolution::find($request->id);
        $header->heading=$request->heading;
        $header->Sub_heading=$request->Sub_heading;
        $header->detail=$request->detail;
        $header->save();
        return back()->with('success', 'Successfully Updated');

    }
    function faq_dissolution(){
        $headers=Faq_dissolution::all();
        return view('Admin_asstes.faq_dissolution',compact('headers'));

    }
    function edit_faq_dissolution($id){
        $header=Faq_dissolution::find($id);
        return view('Admin_asstes.edit_faq_dissolution',compact('header'));


    }
    function update_FAQ_dissolution(Request $request){
        $header=Faq_dissolution::find($request->id);
        $header->heading=$request->heading;
        $header->q1=$request->q1;
        $header->q2=$request->q2;
        $header->q3=$request->q3;
        $header->q4=$request->q4;
        $header->q5=$request->q5;

        $header->a1=$request->a1;
        $header->a2=$request->a2;
        $header->a3=$request->a3;
        $header->a4=$request->a4;
        $header->a5=$request->a5;
        // dd($header);
$header->save();
return back()->with('success', 'Successfully Updated');


    }
    function tax_description(){
        $headers=Tax_description::all();
        return view('Admin_asstes.tax_description',compact('headers'));

    }
    function edit_tax_desc($id){
        $header=Tax_description::find($id);
        return view('Admin_asstes.edit_tax_desc',compact('header'));
    }
    function update_tax_desc(Request $request){
        $header=Tax_description::find($request->id);
        $header->detail=$request->detail;
        $header->video_link=$request->video_link;
        $header->save();
return back()->with('success', 'Successfully Updated');



    }
    function Employer(){
        $headers=Employer::all();
        return view('Admin_asstes.Employer',compact('headers'));

    }
    function edit_employee($id){
        $header=Employer::find($id);
        return view('Admin_asstes.edit_employee',compact('header'));
    }
    function update_employee(Request $request){
        $header=Employer::find($request->id);
        $header->question=$request->question;
        $header->answer=$request->answer;
        $header->save();
        return back()->with('success', 'Successfully Updated');


    }
    function FederalEIN(){
        $headers=Federal::all();
        return view('Admin_asstes.FederalEIN',compact('headers'));

    }
    function edit_federal($id){
        $header=Federal::find($id);
        return view('Admin_asstes.edit_federal',compact('header'));
    }
    function update_federal(Request $request){
        $header=Federal::find($request->id);
        $header->heading=$request->heading;
        $header->detail=$request->detail;
        $header->point_heading=$request->point_heading;
        $header->p1=$request->p1;
        $header->p2=$request->p2;
        $header->p3=$request->p3;
        $header->p4=$request->p4;
        $header->p5=$request->p5;
        $header->save();
        return back()->with('success', 'Successfully Updated');

    }
    function UseanEIN(){
        $headers=Usage::all();
        return view('Admin_asstes.UseanEIN',compact('headers'));

    }
    function edit_usage($id){
        $header=Usage::find($id);
        return view('Admin_asstes.edit_UseanEIN',compact('header'));
    }
    function update_usage(Request $request){
        $header=Usage::find($request->id);
        $header->q1=$request->q1;
        $header->a1=$request->a1;
        $header->q2=$request->q2;
        $header->a2=$request->a2;
        $header->save();
        return back()->with('success', 'Successfully Updated');


    }
    function ObtainEIN(){
        $headers=Obtain::all();
        return view('Admin_asstes.ObtainEIN',compact('headers'));

    }
    function edit_obtain($id){
        $header=Obtain::find($id);
        return view('Admin_asstes.edit_ObtainEIN',compact('header'));
    }
    function update_obtain(Request $request){
        $header=Obtain::find($request->id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $request->image->extension();
            $fileName = rand(11111, 99999) . "_." . $extension;
            $request->image->move('Upload/obtain/', $fileName);
            $header->image = $fileName;
        }
        $header->heading = $request->heading;
        $header->Sub_heading = $request->Sub_heading;
        $header->Sub_heading2 = $request->Sub_heading2;
        $header->detail = $request->detail;
        $header->price = $request->price;



        $header->button_name = $request->button_name;
        $header->button_link = $request->button_link;
        $header->save();
        return back()->with('success', 'Successfully Updated');

    }
    function taxfaq(){
        $headers=Faq_tax::all();
        return view('Admin_asstes.taxfaq',compact('headers'));

    }
    function edit_faq_tax($id){
        $header=Faq_tax::find($id);
        return view('Admin_asstes.edit_faq_tax',compact('header'));
    }
    function update_FAQ_tax(Request $request){
        $header=Faq_tax::find($request->id);
        $header->heading=$request->heading;
        $header->q1=$request->q1;
        $header->q2=$request->q2;
        $header->q3=$request->q3;
        $header->q4=$request->q4;
        $header->q5=$request->q5;

        $header->a1=$request->a1;
        $header->a2=$request->a2;
        $header->a3=$request->a3;
        $header->a4=$request->a4;
        $header->a5=$request->a5;
        // dd($header);
$header->save();
return back()->with('success', 'Successfully Updated');
    }
    function tax_card(){
$headers=Entity::all();
        return view('Admin_asstes.tax_card',compact('headers'));

    }
    function edit_taxcard($id){
        $header=Entity::find($id);
        return view('Admin_asstes.edit_taxcard',compact('header'));
    }
    function update_taxcard(Request $request){
        $header=Entity::find($request->id);
        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $extension = $request->image1->extension();
            $fileName = rand(11111, 99999) . "_." . $extension;
            $request->image1->move('Upload/taxcard/', $fileName);
            $header->image1 = $fileName;
        }


        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $extension = $request->image2->extension();
            $fileName = rand(11111, 99999) . "_." . $extension;
            $request->image2->move('Upload/taxcard/', $fileName);
            $header->image2 = $fileName;
        }

        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $extension = $request->image3->extension();
            $fileName = rand(11111, 99999) . "_." . $extension;
            $request->image3->move('Upload/taxcard/', $fileName);
            $header->image3 = $fileName;
        }
        if ($request->hasFile('image4')) {
            $file = $request->file('image4');
            $extension = $request->image4->extension();
            $fileName = rand(11111, 99999) . "_." . $extension;
            $request->image4->move('Upload/taxcard/', $fileName);
            $header->image4 = $fileName;
        }
        $header->heading=$request->heading;
        $header->title1=$request->title1;
        $header->title2=$request->title2;
        $header->title3=$request->title3;
        $header->title4=$request->title4;

        $header->link1=$request->link1;
        $header->link2=$request->link2;
        $header->link3=$request->link3;
        $header->link4=$request->link4;
        $header->Button_name=$request->Button_name;
        $header->Button_link=$request->Button_link;

        $header->save();
return back()->with('success', 'Successfully Updated');
    }
    function goods(){
        $headers=Good::all();
        return view('Admin_asstes.Goods',compact('headers'));
    }
    function edit_goods($id){
        $header=Good::find($id);
        return view('Admin_asstes.edit_goods',compact('header'));
    }
    function update_goods(Request $request){
        $header=Good::find($request->id);
        $header->heading1=$request->heading1;
        $header->heading2=$request->heading2;
        $header->heading3=$request->heading3;

        $header->certificate1=$request->certificate1;
        $header->certificate2=$request->certificate2;
        $header->certificate3=$request->certificate3;

        $header->detail1=$request->detail1;
        $header->detail2=$request->detail2;
        $header->detail3=$request->detail3;









        $header->save();
return back()->with('success', 'Successfully Updated');
    }

    function reason(){
        $headers=Reason::all();
return view('Admin_asstes.reason',compact('headers'));
    }
    function edit_reason($id){
        $header=Reason::find($id);
        return view('Admin_asstes.edit_reason',compact('header'));
    }
    function update_reason(Request $request){
        $header=Reason::find($request->id);
        $header->heading1=$request->heading1;
        $header->heading2=$request->heading2;
        $header->detail1=$request->detail1;
        $header->detail2=$request->detail2;

        $header->point1=$request->point1;
        $header->point2=$request->point2;
        $header->point3=$request->point3;
        $header->point4=$request->point4;
        $header->point5=$request->point5;
        $header->point6=$request->point6;
        $header->point7=$request->point7;
        $header->point8=$request->point8;
        $header->save();
return back()->with('success', 'Successfully Updated');
    }
    function helpfile_certificate(){
        $headers=Helpline_certificate::all();
        return view('Admin_asstes.helpfile_certificate',compact('headers'));

    }
    function edit_helpfile_certificate($id){
        $header=Helpline_certificate::find($id);
        return view('Admin_asstes.edit_helpfile_certificate',compact('header'));
    }
    function update_helpfile_certificate(Request $request){
        $header=Helpline_certificate::find($request->id);
        $header->heading=$request->heading;
        $header->link_text=$request->link_text;
        $header->link=$request->link;


        $header->Sub_heading=$request->Sub_heading;
        $header->detail=$request->detail;
        $header->save();
        return back()->with('success', 'Successfully Updated');


    }
    function faq_certificate(){
        $headers=Faq_certificate::all();
        return view('Admin_asstes.faq_certificate',compact('headers'));
    }
    function edit_faq_certificate($id){
        $header=Faq_certificate::find($id);
        return view('Admin_asstes.edit_faq_certificate',compact('header'));
    }
    function update_FAQ_certificate(Request $request){
        $header=Faq_certificate::find($request->id);
        $header->heading=$request->heading;
        $header->q1=$request->q1;
        $header->q2=$request->q2;
        $header->q3=$request->q3;
        $header->q4=$request->q4;
        $header->q5=$request->q5;

        $header->a1=$request->a1;
        $header->a2=$request->a2;
        $header->a3=$request->a3;
        $header->a4=$request->a4;
        $header->a5=$request->a5;
        // dd($header);
$header->save();
return back()->with('success', 'Successfully Updated');

    }
    function formation(){
        $headers=Formation::all();
        return view('Admin_asstes.formation',compact('headers'));
    }
    function edit_formation($id){
        $header=Formation::find($id);
        return view('Admin_asstes.edit_formation',compact('header'));
    }
    function update_formation(Request $request){
        $header=Formation::find($request->id);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $request->file->extension();
            $fileName = rand(11111, 99999) . "_." . $extension;
            $request->file->move('Upload/whychoose/', $fileName);
            $header->image = $fileName;
        }
        $header->heading=$request->heading;
        $header->detail=$request->detail;
        $header->save();
        return back()->with('success', 'Successfully Updated');
    }
    function faq_whychoose(){
        $headers=Faq_whychoose::all();
return view('Admin_asstes.faq_whychoose',compact('headers'));
    }
    function edit_faq_whychoose($id){
        $header=Faq_whychoose::find($id);
        return view('Admin_asstes.edit_faq_whychoose',compact('header'));
    }
    function update_FAQ_whychoose(Request $request){
        $header=Faq_whychoose::find($request->id);
        $header->heading=$request->heading;
        $header->q1=$request->q1;
        $header->q2=$request->q2;
        $header->q3=$request->q3;
        $header->q4=$request->q4;

        $header->a1=$request->a1;
        $header->a2=$request->a2;
        $header->a3=$request->a3;
        $header->a4=$request->a4;
        // dd($header);
$header->save();
return back()->with('success', 'Successfully Updated');

    }
    function business_whychoose(){
        $headers=Launch::all();
        return view('Admin_asstes.business_whychoose',compact('headers'));
    }
    function edit_launch_whychoose($id){
        $header=Launch::find($id);
        return view('Admin_asstes.edit_launch_whychoose',compact('header'));
    }
    function update_whychoose(Request $request){
        $header=Launch::find($request->id);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $request->file->extension();
            $fileName = rand(11111, 99999) . "_." . $extension;
            $request->file->move('Upload/whychoose/', $fileName);
            $header->image = $fileName;
        }
        $header->heading=$request->heading;
        $header->detail=$request->detail;
        $header->button_name=$request->button_name;
        $header->button_link=$request->button_link;
        $header->save();
return back()->with('success', 'Successfully Updated');








    }
    function slider_annual(){
        $headers=Annual_slider::all();
        return view('Admin_asstes.slider_annual',compact('headers'));
    }
    function edit_annualslider($id){
        $header=Annual_slider::find($id);
        return view('Admin_asstes.edit_slider_annual',compact('header'));

    }
    function update_annualslider(Request $request){
        $header=Annual_slider::find($request->id);
        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $extension = $request->image1->extension();
            $fileName = rand(11111, 99999) . "_." . $extension;
            $request->image1->move('Upload/annual/', $fileName);
            $header->image1 = $fileName;
        }
        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $extension = $request->image2->extension();
            $fileName = rand(11111, 99999) . "_." . $extension;
            $request->image2->move('Upload/annual/', $fileName);
            $header->image2 = $fileName;
        }
        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $extension = $request->image3->extension();
            $fileName = rand(11111, 99999) . "_." . $extension;
            $request->image3->move('Upload/annual/', $fileName);
            $header->image3 = $fileName;
        }
        if ($request->hasFile('image4')) {
            $file = $request->file('image4');
            $extension = $request->image4->extension();
            $fileName = rand(11111, 99999) . "_." . $extension;
            $request->image4->move('Upload/annual/', $fileName);
            $header->image4 = $fileName;
        }
        $header->heading=$request->heading;
        $header->detail=$request->detail;
        $header->link_text1=$request->link_text1;
        $header->link_text2=$request->link_text2;
        $header->link_text3=$request->link_text3;
        $header->link_text4=$request->link_text4;

        $header->link1=$request->link1;
        $header->link2=$request->link2;
        $header->link3=$request->link3;
        $header->link4=$request->link4;

        $header->save();
        return back()->with('success', 'Successfully Updated');







    }
    function home_tab1(){
        $data=Hometab1::first();
        return view('Admin_asstes.home_tab1',compact('data'));
    }
    function home_tab1_save(Request $request){
        if (isset($request->id)) {
            $header=Hometab1::find($request->id);
            $header->name=$request->name;

        $header->section1 = $request->section1;
        $header->section2 = $request->section2;
        $header->video = $request->video;
        $header->save();
        }
        else {
            $header=new Hometab1();
            $header->name=$request->name;

        $header->section1 = $request->section1;
        $header->section2 = $request->section2;
        $header->video = $request->video;
        $header->save();
        }
        return back()->with('success', 'Successfully Updated');
    }
function home_tab2(){
    $data=Hometab2::first();
    return view('Admin_asstes.home_tab2',compact('data'));
}

function home_tab2_save(Request $request){
    if (isset($request->id)) {
        $header=Hometab2::find($request->id);
        $header->name=$request->name;

    $header->section1 = $request->section1;

    $header->save();
    }
    else {
        $header=new Hometab2();
        $header->name=$request->name;

    $header->section1 = $request->section1;

    $header->save();
    }
    return back()->with('success', 'Successfully Updated');
}
function home_tab3(){
    $data=Hometab3::first();
    return view('Admin_asstes.home_tab3',compact('data'));
}
function home_tab3_save(Request $request){
    if (isset($request->id)) {
        $header=Hometab3::find($request->id);
        $header->name=$request->name;

    $header->section1 = $request->section1;

    $header->save();
    }
    else {
        $header=new Hometab3();
        $header->name=$request->name;

    $header->section1 = $request->section1;

    $header->save();
    }
    return back()->with('success', 'Successfully Updated');
}
function home_tab4(){
    $data=Hometab4::first();
    return view('Admin_asstes.home_tab4',compact('data'));
}

function home_tab4_save(Request $request){
    if (isset($request->id)) {
        $header=Hometab4::find($request->id);
        $header->name=$request->name;

    $header->section1 = $request->section1;


    $header->save();
    }
    else {
        $header=new Hometab4();
        $header->name=$request->name;

    $header->section1 = $request->section1;

    $header->save();
    }
    return back()->with('success', 'Successfully Updated');
}
function home_tab5(){
    $data=Hometab5::first();
    return view('Admin_asstes.home_tab5',compact('data'));
}

function home_tab5_save(Request $request){
    if (isset($request->id)) {
        $header=Hometab5::find($request->id);
        $header->name=$request->name;

    $header->section1 = $request->section1;

    $header->save();
    }
    else {
        $header=new Hometab5();
        $header->name=$request->name;

    $header->section1 = $request->section1;

    $header->save();
    }
    return back()->with('success', 'Successfully Updated');
}

function filling_section1(){
 $data=Filling_section1::first();

 return view('Admin_asstes.filling_section1',compact('data'));
}
function update_filling_sec1(Request $request){
    if (isset($request->id)) {
 $data=Filling_section1::find($request->id);
 $data->video=$request->video;
 $data->text=$request->text;
 $data->save();


    }
    else {
        $data=new Filling_section1();
 $data->video=$request->video;
 $data->text=$request->text;
 $data->save();
    }
    return back()->with('success', 'Successfully Updated');

}
function filling_section2(){
    $data=Filling_section2::first();

    return view('Admin_asstes.filling_section2',compact('data'));
}
function filling_section2_save(Request $request){
    if (isset($request->id)) {
        $data=Filling_section2::find($request->id);
        $data->section2=$request->section2;
        $data->save();
    }
    else {
        $data=new Filling_section2();
        $data->section2=$request->section2;
        $data->save();
    }
    return back()->with('success', 'Successfully Updated');

}
function filling_section3(){
    $data=Filling_section3::first();

    return view('Admin_asstes.filling_section3',compact('data'));
}
function update_filling_sec3(Request $request){
    if (isset($request->id)) {
        $data=Filling_section3::find($request->id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $request->image->extension();
            $fileName = rand(11111, 99999) . "_." . $extension;
            $request->image->move('Upload/filling/', $fileName);
            $data->image = $fileName;
        }
        $data->heading=$request->heading;
        $data->detail=$request->detail;
        $data->button_name=$request->button_name;
        $data->button_link=$request->button_link;
        $data->save();




    }
    else{
        $data=new Filling_section3();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $request->image->extension();
            $fileName = rand(11111, 99999) . "_." . $extension;
            $request->image->move('Upload/filling/', $fileName);
            $data->image = $fileName;
        }
        $data->heading=$request->heading;
        $data->detail=$request->detail;
        $data->button_name=$request->button_name;
        $data->button_link=$request->button_link;
        $data->save();
    }
    return back()->with('success', 'Successfully Updated');

}
function privacy(){
    $headers=Privacy::all();
    return view('Admin_asstes.privacy',compact('headers'));
}
function edit_privacy($id){
    $header=Privacy::find($id);
    return view('Admin_asstes.edit_privacy',compact('header'));
}
function update_privacy(Request $request){
    $header=Privacy::find($request->id);
    $header->heading=$request->heading;
    $header->detail=$request->detail;
$header->save();
return back()->with('success', 'Successfully Updated');

}
function legal(){
    $headers=Legal::all();
    return view('Admin_asstes.legal',compact('headers'));
}
function edit_legal($id){
    $header=Legal::find($id);
    return view('Admin_asstes.edit_legal',compact('header'));
}


function update_legal(Request $request){
    $header=Legal::find($request->id);
    $header->heading=$request->heading;
    $header->detail=$request->detail;
$header->save();
return back()->with('success', 'Successfully Updated');

}
function copy(){
    $headers=Copy::all();
    return view('Admin_asstes.copy',compact('headers'));
}
function edit_copy($id){
    $header=Copy::find($id);
    return view('Admin_asstes.edit_copy',compact('header'));
}
function update_copy(Request $request){
    $header=Copy::find($request->id);
    $header->heading=$request->heading;

$header->save();
return back()->with('success', 'Successfully Updated');
}
function privacy_policy(){
    $data=Privacy_policy::first();

    return view('Admin_asstes.privacy_policy',compact('data'));
}
function Privacy_policy_save(Request $request){
    if (isset($request->id)) {
        $data=Privacy_policy::find($request->id);
        $data->section1=$request->section1;
        $data->save();
    }
    else {
        $data=new Privacy_policy();
        $data->section1=$request->section1;
        $data->save();
    }
return back()->with('success', 'Successfully Updated');

}
function Legal_disclaimer(){
    $data=Legal_disclaimer::first();

    return view('Admin_asstes.Legal_disclaimer',compact('data'));
}



function Legal_Disclaimer_save(Request $request){
    if (isset($request->id)) {
        $data=Legal_disclaimer::find($request->id);
        $data->section1=$request->section1;
        $data->save();
    }
    else {
        $data=new Legal_disclaimer();
        $data->section1=$request->section1;
        $data->save();
    }
return back()->with('success', 'Successfully Updated');

}
}
