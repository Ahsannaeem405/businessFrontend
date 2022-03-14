<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

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
}
