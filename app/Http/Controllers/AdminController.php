<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Home_card;
use App\Models\Launch_bussiness;
use App\Models\Corporation;
use App\Models\Logo;
use App\Models\Table_heading;






class AdminController extends Controller
{
    function slider(){
        $banners=Banner::all();
        return view('Admin_asstes.slider',compact('banners'));
    }
    function edit_header($id){

        $header=Banner::find($id);
        return view('Admin_asstes.edit_header',compact('header'));

    }
    function update_header(Request $request){
        $header=Banner::find($request->id);
        if($request->hasFile('file'))
        {
        $file=$request->file('file');
        $extension=$request->file->extension();
        $fileName=rand(11111,99999)."_.".$extension;
        $request->file->move('Upload/header/',$fileName);
        $header->image =$fileName;
        }
        $header->heading =$request->heading;
        $header->sub_heading =$request->sub_heading;
        $header->button_name =$request->button_name;
        $header->button_link =$request->button_link;
        $header->save();
        return back()->with('success','Successfully Updated');




    }
    function card(){
        $headers=Home_card::all();
        return view('Admin_asstes.card',compact('headers'));

    }
    function edit_cards($id){
        $header=Home_card::find($id);
        return view('Admin_asstes.edit_cards',compact('header'));


    }
    function update_card(Request $request){
        $header=Home_card::find($request->id);
        if($request->hasFile('file'))
        {
        $file=$request->file('file');
        $extension=$request->file->extension();
        $fileName=rand(11111,99999)."_.".$extension;
        $request->file->move('Upload/cards/',$fileName);
        $header->image =$fileName;
        }
        $header->heading =$request->heading;
        $header->link =$request->link;


        $header->save();
        return back()->with('success','Successfully Updated');
    }
    function launch(){
        $headers=Launch_bussiness::all();
        return view('Admin_asstes.imagediv',compact('headers'));

    }
    function edit_launch($id){
        $header=Launch_bussiness::find($id);
        return view('Admin_asstes.edit_launch',compact('header'));
    }
    function update_launch(Request $request){
        $header=Launch_bussiness::find($request->id);
        if($request->hasFile('file'))
        {
        $file=$request->file('file');
        $extension=$request->file->extension();
        $fileName=rand(11111,99999)."_.".$extension;
        $request->file->move('Upload/launch/',$fileName);
        $header->image =$fileName;
        }
        $header->heading =$request->heading;
        $header->button_name =$request->button_name;
        $header->button_link =$request->button_link;
        $header->text =$request->text;




        $header->save();
        return back()->with('success','Successfully Updated');

    }
    function Corporations(){
$headers=Corporation::all();
        return view('Admin_asstes.Corporations',compact('headers'));

    }
    function edit_corp($id){
$header=Corporation::find($id);
return view('Admin_asstes.edit_corp',compact('header'));

    }
    function update_corp(Request $request){
$header=Corporation::find($request->id);

$header->heading=$request->heading;
$header->text=$request->text;

$header->save();
return back()->with('success','Successfully Updated');

    }
    function logo(){
        $headers=Logo::all();
        return view('Admin_asstes.logo' ,compact('headers'));
    }
    function edit_logo($id){
        $header=Logo::find($id);
        return view('Admin_asstes.edit_logo',compact('header'));
    }
    function update_logo(Request $request){
        $header=Logo::find($request->id);
        if($request->hasFile('file'))
        {
        $file=$request->file('file');
        $extension=$request->file->extension();
        $fileName=rand(11111,99999)."_.".$extension;
        $request->file->move('Upload/logo/',$fileName);
        $header->image =$fileName;
        }

        $header->save();
return back()->with('success','Successfully Updated');
    }
    function chart_heading (){
        $headers=Table_heading::all();
            return view('Admin_asstes.chart_heading',compact('headers'));

    }
    function edit_tableheading($id){
        $header=Table_heading::find($id);
        return view('Admin_asstes.edit_tableheading',compact('header'));
    }
    function update_tableheading(Request $request){
        $header=Table_heading::find($request->id);
        $header->Heading=$request->Heading;
        $header->Heading1=$request->Heading1;
        $header->Heading2=$request->Heading2;
        $header->Heading3=$request->Heading3;
        $header->Heading4=$request->Heading4;
        $header->Heading5=$request->Heading5;
        $header->save();
return back()->with('success','Successfully Updated');




    }
}
