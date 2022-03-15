<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Home_card;
use App\Models\Launch_bussiness;
use App\Models\Corporation;
use App\Models\F_row;
use App\Models\Four_row;
use App\Models\Logo;
use App\Models\S_row;
use App\Models\Table_heading;
use App\Models\Trow;

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
}
