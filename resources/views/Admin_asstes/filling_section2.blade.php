@extends('Admin_asstes.layouts.main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/template_assets/41141851171/1625143722352/Incfile_February_2021/css/layout.min.css')}}">
<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/template_assets/51805631655/1646227967249/Incfile_February_2021/css/custom-main.min.css')}}">
<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/template_assets/41143039748/1643731110424/Incfile_February_2021/css/theme-overrides.min.css')}}">
<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/1646065739376/module_41143153420_Banner.css')}}">
<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/1638370530837/module_41216488591_Popup_Video.css')}}">
<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41289870117/1615356805188/module_41289870117_Full_Width_Content.min.css')}}">
<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/44255302177/1622801432068/module_44255302177_Review_State_Filing_Fees.min.css')}}">
<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/1631534448375/module_41246686164_Get_Started_Banner.css')}}">

@section('content')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<form id="btn_sub" action="{{url('admin/filling_section2_save')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
    @if (isset($data))
	<input type="hidden" name="id" value="{{$data->id}}">
    @else


    @endif


    <label for="inputAddress"><b><h1>Section2</b></h1></label>
	<div class="text1" contenteditable="true">
		@if(isset($data->section2))
        {!! $data->section2 !!}

	    @else
        <div class="row-fluid-wrapper row-depth-1 row-number-6 dnd-section">
            <div class="row-fluid ">
                <div class="span12 widget-span widget-type-cell dnd-column" style="" data-widget-type="cell" data-x="0" data-w="12">

                    <div class="row-fluid-wrapper row-depth-1 row-number-7 dnd-row">
                        <div class="row-fluid ">
                            <div class="span12 widget-span widget-type-custom_widget dnd-module" style="" data-widget-type="custom_widget" data-x="0" data-w="12">
                                <div id="hs_cos_wrapper_widget_1617253329156" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                    <div class="cm-rsff-wrapper dSYSzl">
                                        <div class="vGVSW">
                                            <div class="eWnpFH">State</div>
                                            <div style="cursor:pointer" class="eWnpFH">LLC</div>
                                            <div style="cursor:pointer" class="eWnpFH">C-Corp</div>
                                            <div style="cursor:pointer" class="eWnpFH">S-Corp</div>
                                            <div style="cursor:pointer" class="eWnpFH">Non-Profit</div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Alabama
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$237</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$236</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$236</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$237</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Alaska
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$250</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$250</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$250</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$50</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Arizona
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$85</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$95</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$95</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$75</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Arkansas
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$50</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$50</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$50</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$50</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                California
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$75</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$105</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$105</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$30</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Colorado
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$50</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$50</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$50</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$50</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Connecticut
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$120</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$250</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$250</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$50</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Delaware
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$110</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$109</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$109</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$105</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Florida
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$125</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$70</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$70</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$79</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Georgia
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$100</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$100</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$100</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$100</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Hawaii
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$51</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$51</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$51</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$26</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Idaho
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$100</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$100</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$100</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$31</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Illinois
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$154</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$179</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$179</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$52</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Indiana
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$98</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$98</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$98</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$31</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Iowa
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$50</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$50</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$50</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$20</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Kansas
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$160</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$80</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$80</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$20</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Kentucky
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$40</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$55</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$55</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$8</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Louisiana
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$105</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$75</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$75</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$80</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Maine
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$178</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$148</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$148</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$40</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Maryland
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$197</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$218</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$218</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$270</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Massachusetts
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$520</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$265</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$265</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$41</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Michigan
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$50</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$60</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$60</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$20</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Minnesota
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$155</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$155</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$155</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$90</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Mississippi
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$53</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$53</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$53</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$53</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Missouri
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$52</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$60</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$60</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$27</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Montana
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$70</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$70</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$70</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$20</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Nebraska
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$109</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$68</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$68</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$22</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Nevada
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$425</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$725</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$725</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$100</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                New Hampshire
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$102</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$125</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$165</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$27</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                New Jersey
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$130</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$130</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$130</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$79</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                New Mexico
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$50</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$100</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$100</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$25</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                New York
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$205</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$130</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$130</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$75</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                North Carolina
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$127</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$127</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$127</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$63</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                North Dakota
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$135</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$100</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$100</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$40</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Ohio
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$99</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$100</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$100</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$99</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Oklahoma
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$104</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$52</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$52</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$35</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Oregon
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$100</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$100</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$100</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$50</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Pennsylvania
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$131</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$131</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$131</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$131</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Rhode Island
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$156</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$230</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$238</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$65</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                South Carolina
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$150</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$325</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$325</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$50</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                South Dakota
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$150</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$150</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$150</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$30</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Tennessee
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$308</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$108</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$108</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$103</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Texas
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$300</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$300</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$300</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$25</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Utah
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$76</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$76</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$76</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$30</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Vermont
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$125</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$125</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$125</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$75</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Virginia
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$100</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$75</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$75</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$175</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Washington
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$200</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$200</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$200</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$50</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Washington DC
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$220</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$220</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$220</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$80</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                West Virginia
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$125</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$100</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$135</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$55</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Wisconsin
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$130</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$100</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$100</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$35</span>
                                            </div>
                                        </div>

                                        <div class="jIeZlR">
                                            <div class="ApJto">
                                                Wyoming
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$102</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$102</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$102</span>
                                            </div>
                                            <div class="ApJto">
                                                <span class="cMPyQK">$27</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!--end widget-span -->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end row-wrapper -->

                    <div class="row-fluid-wrapper row-depth-1 row-number-8 dnd-row">
                        <div class="row-fluid ">
                            <div class="span12 widget-span widget-type-custom_widget dnd-module" style="" data-widget-type="custom_widget" data-x="0" data-w="12">
                                <div id="hs_cos_wrapper_widget_1617182943470" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module"><span id="hs_cos_wrapper_widget_1617182943470_" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text" style="" data-hs-cos-general-type="widget" data-hs-cos-type="rich_text"><p style="margin-bottom: 0px;">Compare state filing times side by side using our <span style="font-weight: 900;">comparison tool</span>.</p></span></div>

                            </div>
                            <!--end widget-span -->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end row-wrapper -->

                </div>
                <!--end widget-span -->
            </div>
            <!--end row-->
        </div>
	    @endif


	</div>
	<textarea class="section1  d-none" name="section2"></textarea>
</div>


<button type="button" class="btn btn-primary">Update</button>
<button type="submit" class="btn btn-primary  d-none">Add Banner</button>
</form>

<script>
   $(document).ready(function(){

	    $(".btn").click(function(){
	      var txt1=$(".text1").html();
	      var txt2=$(".text2").html();
	      $(".section2").val(txt2);
	      $(".section1").val(txt1);
	      $("#btn_sub").submit();


	   });
});
</script>
@endsection
