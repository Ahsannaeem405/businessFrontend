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
}
