<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\state;
use App\Models\state1;
use App\Models\state2;
use App\Models\state5;
use App\Models\state4;



use App\Models\Logo;
use App\Models\Banner;
use App\Models\Llc_state2;
use App\Models\llcinfo;
use App\Models\Llcstate1;
use App\Models\Llcstate3;
use App\Models\Llcstate4;
use App\Models\Llcstate5;
use App\Models\State3;
use App\Models\Stateinfo;


class statecontroller extends Controller
{

    function state_tab1()
    {
        $data=state::all();
        return view('Admin_asstes.state_tab1',compact('data'));
    }
    function get_step_1(Request $request)
    {
        $id= $request->id;
        if(state1::where('s_id',$id)->exists())
        {
            $data=state1::where('s_id',$id)->first();
            $k=1;
            return view('Admin_asstes.append_state_tab1',compact('id','data','k'));

        }
        else{
            $k=0;
            return view('Admin_asstes.append_state_tab1',compact('id','k'));
        }

    }
    function state_tab1_save(Request $request)
    {

        $header =state1::firstOrNew(array('s_id' => $request->id));

        $header->s_id = $request->id;
        $header->name = $request->name;

        $header->section1 = $request->section1;
        $header->section2 = $request->section2;
        $header->video = $request->video;
        $header->save();
        return back()->with('success', 'Successfully Updated');




    }

     function state_tab2()
    {
        $data=state::all();
        return view('Admin_asstes.state_tab2',compact('data'));
    }
    function get_step_2(Request $request)
    {
        $id= $request->id;
        if(state2::where('s_id',$id)->exists())
        {

            $data=state2::where('s_id',$id)->first();
            $k=1;
            return view('Admin_asstes.append_state_tab2',compact('id','data','k'));

        }
        else{


            $k=0;
            return view('Admin_asstes.append_state_tab2',compact('id','k'));
        }

    }
    function state_tab2_save(Request $request)
    {
        $header =state2::firstOrNew(array('s_id' => $request->id));

        $header->s_id = $request->id;
        $header->name = $request->name;

        $header->section1 = $request->section1;
        $header->save();

        return back()->with('success', 'Successfully Updated');






    }



function state_tab3(){
    $data=State::all();
    return view('Admin_asstes.state_tab3',compact('data'));

}
function get_step_3(Request $request)
{
    $id= $request->id;
    if(State3::where('s_id',$id)->exists())
    {

        $data=State3::where('s_id',$id)->first();
        $k=1;
        return view('Admin_asstes.append_state_tab3',compact('id','data','k'));

    }
    else{


        $k=0;
        return view('Admin_asstes.append_state_tab3',compact('id','k'));
    }

}

function state_tab3_save(Request $request)
{
    $header =State3::firstOrNew(array('s_id' => $request->id));

    $header->s_id = $request->id;
    $header->name = $request->name;

    $header->section1 = $request->section1;
    $header->save();


    return back()->with('success', 'Successfully Updated');






}





    function state_tab4()
    {
        $data=state::all();
        return view('Admin_asstes.state_tab4',compact('data'));
    }
    function get_step_4(Request $request)
    {
        $id= $request->id;
        if(state4::where('s_id',$id)->exists())
        {

            $data=state4::where('s_id',$id)->first();
            $k=1;
            return view('Admin_asstes.append_state_tab4',compact('id','data','k'));

        }
        else{


            $k=0;
            return view('Admin_asstes.append_state_tab4',compact('id','k'));
        }

    }
    function state_tab4_save(Request $request)
    {
        $header =state4::firstOrNew(array('s_id' => $request->id));

        $header->s_id = $request->id;
        $header->name = $request->name;

        $header->section1 = $request->section1;
        $header->save();


        return back()->with('success', 'Successfully Updated');






    }










    function state_tab5()
    {
        $data=state::all();
        return view('Admin_asstes.state_tab5',compact('data'));
    }
    function get_step_5(Request $request)
    {
        $id= $request->id;
        if(state5::where('s_id',$id)->exists())
        {

            $data=state5::where('s_id',$id)->first();
            $k=1;
            return view('Admin_asstes.append_state_tab5',compact('id','data','k'));

        }
        else{


            $k=0;
            return view('Admin_asstes.append_state_tab5',compact('id','k'));
        }

    }
    function state_tab5_save(Request $request)
    {

        $header =state5::firstOrNew(array('s_id' => $request->id));

        $header->s_id = $request->id;
        $header->name = $request->name;

        $header->section1 = $request->section1;
        $header->save();

        return back()->with('success', 'Successfully Updated');






    }
    function state_info(){
        $data=state::all();
        return view('Admin_asstes.state_info',compact('data'));
    }
    function get_stateinfo(Request $request)
    {
        $id= $request->id;
        if(Stateinfo::where('s_id',$id)->exists())
        {

            $data=Stateinfo::where('s_id',$id)->first();
            $k=1;
            return view('Admin_asstes.append_stateinformation',compact('id','data','k'));

        }
        else{


            $k=0;
            return view('Admin_asstes.append_stateinformation',compact('id','k'));
        }

    }
    function state_information_save(Request $request)
    {
        $header =Stateinfo::firstOrNew(array('s_id' => $request->id));

        $header->s_id = $request->id;
        $header->section1 = $request->section1;
        $header->save();

        return back()->with('success', 'Successfully Updated');






    }
   function dyn_coperate()
    {
        $id=$_GET['id'];

        $data=state1::where('s_id',$id)->first();
        $data2=state2::where('s_id',$id)->first();
        $data3=State3::where('s_id',$id)->first();

        $data4=state4::where('s_id',$id)->first();
        // dd($data4);

        $data5=state5::where('s_id',$id)->first();
        $state_info=Stateinfo::where('s_id',$id)->first();

        $logo=Logo::first();

        $banners=Banner::all();
        return view('dyncoperate2',compact('data','data5','data3','data2','data4','logo','banners','state_info'));
    }
    function llc_tab1()
    {
        $data=state::all();
        return view('Admin_asstes.llc_tab1',compact('data'));
    }
    function get_llcstep_1(Request $request)
    {
        $id= $request->id;
        if(Llcstate1::where('s_id',$id)->exists())
        {
            $data=Llcstate1::where('s_id',$id)->first();
            $k=1;
            return view('Admin_asstes.append_llc_tab1',compact('id','data','k'));

        }
        else{
            $k=0;
            return view('Admin_asstes.append_llc_tab1',compact('id','k'));
        }

    }

    function llc_tab1_save(Request $request)
    {

        $header =Llcstate1::firstOrNew(array('s_id' => $request->id));

        $header->s_id = $request->id;
$header->name=$request->name;

        $header->section1 = $request->section1;
        $header->section2 = $request->section2;
        $header->video = $request->video;
        $header->save();
        // $data=Llcstate1::all();
        // dd($data);
        return back()->with('success', 'Successfully Updated');




    }
    function llc_tab2()
    {
        $data=state::all();
        return view('Admin_asstes.llc_tab2',compact('data'));
    }
    function get_llcstep_2(Request $request)
    {
        $id= $request->id;
        if(Llc_state2::where('s_id',$id)->exists())
        {

            $data=Llc_state2::where('s_id',$id)->first();
            $k=1;
            return view('Admin_asstes.append_llcstate_tab2',compact('id','data','k'));

        }
        else{


            $k=0;
            return view('Admin_asstes.append_llcstate_tab2',compact('id','k'));
        }

    }
    function llcstate_tab2_save(Request $request){
        $header =Llc_state2::firstOrNew(array('s_id' => $request->id));

        $header->s_id = $request->id;
        $header->name = $request->name;

        $header->section1 = $request->section1;
        $header->save();

        return back()->with('success', 'Successfully Updated');








    }
    function llc_tab3(){
        $data=State::all();
        return view('Admin_asstes.llcstate_tab3',compact('data'));

    }
    function get_llcstep_3(Request $request)
    {
        $id= $request->id;
        if(Llcstate3::where('s_id',$id)->exists())
        {
            $data=Llcstate3::where('s_id',$id)->first();

            $k=1;
            return view('Admin_asstes.append_llcstate_tab3',compact('id','data','k'));

        }
        else{


            $k=0;
            return view('Admin_asstes.append_llcstate_tab3',compact('id','k'));
        }

    }
    function llcstate_tab3_save(Request $request){
        $header =Llcstate3::firstOrNew(array('s_id' => $request->id));

        $header->s_id = $request->id;
        $header->name = $request->name;

        $header->section1 = $request->section1;
        $header->save();


        return back()->with('success', 'Successfully Updated');
    }
    function llc_tab4(){
        $data=state::all();
        return view('Admin_asstes.llcstate_tab4',compact('data'));

    }
    function get_llcstep_4(Request $request)
    {
        $id= $request->id;
        if(Llcstate4::where('s_id',$id)->exists())
        {

            $data=Llcstate4::where('s_id',$id)->first();
            $k=1;
            return view('Admin_asstes.append_llcstate_tab4',compact('id','data','k'));

        }
        else{


            $k=0;
            return view('Admin_asstes.append_llcstate_tab4',compact('id','k'));
        }

    }
    function llcstate_tab4_save(Request $request){
        $header =Llcstate4::firstOrNew(array('s_id' => $request->id));

        $header->s_id = $request->id;
        $header->name = $request->name;

        $header->section1 = $request->section1;
        $header->save();


        return back()->with('success', 'Successfully Updated');
    }
    function llc_tab5(){
        $data=state::all();
        return view('Admin_asstes.llcstate_tab5',compact('data'));
    }
    function get_llcstep_5(Request $request){
        $id= $request->id;
        if(Llcstate5::where('s_id',$id)->exists())
        {

            $data=Llcstate5::where('s_id',$id)->first();
            $k=1;
            return view('Admin_asstes.append_llcstate_tab5',compact('id','data','k'));

        }
        else{


            $k=0;
            return view('Admin_asstes.append_llcstate_tab5',compact('id','k'));
        }

    }
    function llcstate_tab5_save(Request $request){
        $header =Llcstate5::firstOrNew(array('s_id' => $request->id));

        $header->s_id = $request->id;
        $header->name = $request->name;

        $header->section1 = $request->section1;
        $header->save();

        return back()->with('success', 'Successfully Updated');

    }
    function llc_info(){
        $data=state::all();
        return view('Admin_asstes.llcstate_info',compact('data'));

    }
    function llcstate_info(Request $request)
    {
        $id= $request->id;
        if(llcinfo::where('s_id',$id)->exists())
        {

            $data=llcinfo::where('s_id',$id)->first();
            $k=1;
            return view('Admin_asstes.append_llcstateinformation',compact('id','data','k'));

        }
        else{


            $k=0;
            return view('Admin_asstes.append_llcstateinformation',compact('id','k'));
        }

    }
    function llcstate_information_save(Request $request){
        $header =llcinfo::firstOrNew(array('s_id' => $request->id));

        $header->s_id = $request->id;
        $header->section1 = $request->section1;
        $header->save();

        return back()->with('success', 'Successfully Updated');
    }

    function dyn_llc_info(){
        $id=$_GET['id'];
        // dd($data);

        $banners=Banner::all();
        $logo=Logo::first();
        $data=Llcstate1::where('s_id',$id)->first();
        $data2=Llc_state2::where('s_id',$id)->first();
        $data3=Llcstate3::where('s_id',$id)->first();
        $data5=Llcstate5::where('s_id',$id)->first();
        $state_info=llcinfo::where('s_id',$id)->first();




        // $data=Llcstate1::all();

        // $data=Llcstate1::all();

        // dd($data);

        return view('llc2',compact('banners','logo','data','data2','data3','data5','state_info'));

    }

}
