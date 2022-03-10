@extends('layout.main')
{{-- navtab link css --}}
<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41951289498/1620380498964/module_41951289498_Benefits_Tabber.min.css')}}">

<style>
    .carousel-inner{
        max-height: 500px;
    }
    .label{
        font-size: 17px;
    }
</style>
{{-- navtabs --}}
<style>
    .ex1 {


  height: 150px;
  overflow-y:scroll;



}


.ex1::-webkit-scrollbar {
        width: 5px;


    }


    /* Track */
    .ex1::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px gray;
        border-radius: 15px;
    }


    /* Handle */
    .ex1::-webkit-scrollbar-thumb {
        background: #6f32e2;
        border-radius: 15px;
        height: 50px;

    }

    /* Handle on hover */
    .ex1::-webkit-scrollbar-thumb:hover {
        background: #C530D6;
    }


.cycle-tab-container {
  margin: 30px auto;
  width:100%;
  padding: 20px;
  /* box-shadow: 0 0 10px 2px #ddd; */
}

.cycle-tab-container a {
  color: #173649;
  font-size: 16px;

  text-align: center;
}

.tab-pane {
    text-align: center;
    height: 100px !important;
    margin: 30px auto;
    width: 100%;
    max-width: 100%;
}

.fade {
  opacity: 0;
  transition: opacity 4s ease-in-out;
}

.fade.active {
  opacity: 1;
}

.cycle-tab-item {
  width: 180px;
}

.cycle-tab-item:after {
  display:block;
  content: '';
  /* border-bottom: solid 3px orange; */
  transform: scaleX(0);
  transition: transform 0ms ease-out;
}
.cycle-tab-item.active:after {
  transform: scaleX(1);
  transform-origin:  0% 50%;
  transition: transform 5000ms ease-in;
}


.nav-link:focus,
.nav-link:hover,
.cycle-tab-item.active a {
  border-color: transparent !important;
  color: blue;
}


</style>
@section('content')

@include('slider')
<div class="banner-section corporation-filing-banner">
    <div class="container-fluid banner-area">
        <div class="row-fluid-wrapper">
            <div class="row-fluid">
                <div class="span12 widget-span widget-type-cell " style="" data-widget-type="cell" data-x="0" data-w="12">

                    <div class="row-fluid-wrapper row-depth-1 row-number-1 dnd-section DND_banner-row-0-force-full-width-section">
                        <div class="row-fluid ">
                            <div class="span12 widget-span widget-type-cell dnd-column" style="" data-widget-type="cell" data-x="0" data-w="12">

                                <div class="row-fluid-wrapper row-depth-1 row-number-2 dnd-row">
                                    <div class="row-fluid ">
                                        <div class="span12 widget-span widget-type-custom_widget dnd-module" style="" data-widget-type="custom_widget" data-x="0" data-w="12">
                                            <div id="hs_cos_wrapper_DND_banner-module-1" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">




                                                <script>
                                                    const entityStateList = ['alabama', 'alaska', 'arizona', 'arkansas',
                                                        'california', 'colorado', 'connecticut',
                                                        'delaware', 'florida', 'georgia', 'hawaii',
                                                        'idaho', 'illinois', 'indiana', 'iowa',
                                                        'kansas', 'kentucky',
                                                        'louisiana', 'maine', 'maryland', 'massachusetts',
                                                        'michigan', 'minnesota', 'mississippi', 'missouri',
                                                        'montana', 'nebraska', 'nevada', 'new-hampshire',
                                                        'new-jersey', 'new-mexico', 'new-york', 'north-carolina',
                                                        'north-dakota', 'ohio', 'oklahoma', 'oregon',
                                                        'pennsylvania', 'rhode-island', 'south-carolina',
                                                        'south-dakota', 'tennessee', 'texas',
                                                        'utah', 'vermont', 'virginia',
                                                        'washington', 'west-virginia', 'wisconsin',
                                                        'wyoming', 'washingtondc'
                                                    ];
                                                    let requestPath = '/business-entity-comparison';
                                                    let path = requestPath.substring(1).split('index.html')[0];

                                                    entityStateList.forEach(function(state) {
                                                        let isLLCPage = state + '-llc';
                                                        let isCorporationPage = state + '-corporation';

                                                        if (path === isLLCPage) {
                                                            document.querySelector('.banner-rating-container').style.display = 'none';
                                                        }
                                                    });
                                                </script>

                                            </div>

                                        </div>
                                        <!--end widget-span -->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end row-wrapper -->

                                <div class="row-fluid-wrapper row-depth-1 row-number-3 dnd-row">
                                    <div class="row-fluid ">
                                        <div class="span12 widget-span widget-type-custom_widget dnd-module" style="" data-widget-type="custom_widget" data-x="0" data-w="12">
                                            <div id="hs_cos_wrapper_widget_1615207828544" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">


                                                <div class="overlay-icon-module overlay_icon_widget_1615207828544   " style="
max-width: 420px;
max-height: 420px;
top: 961.672px;   right: 0;
transform: rotate(0deg);



"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 420 420"><defs><lineargradient id="bottom-right-transparent-babyblue3_inline_svg__a" x1="100%" x2="100%" y1="95.674%" y2=".854%"><stop offset="0%" stop-color="#FFF" stop-opacity="0"></stop><stop offset="100%" stop-color="#eef9fe"></stop></lineargradient></defs><path fill="url(#bottom-right-transparent-babyblue3_inline_svg__a)" fill-rule="evenodd" d="M420 0v420H0C0 188.04 188.04 0 420 0z"></path></svg></div>

                                            </div>

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
                    <!--end row-wrapper -->

                    <div class="row-fluid-wrapper row-depth-1 row-number-4 dnd-section">
                        <div class="row-fluid ">
                            <div class="span12 widget-span widget-type-cell dnd-column" style="" data-widget-type="cell" data-x="0" data-w="12">

                                <div class="row-fluid-wrapper row-depth-1 row-number-5 dnd-row">
                                    <div class="row-fluid ">
                                        <div class="span12 widget-span widget-type-custom_widget dnd-module" style="" data-widget-type="custom_widget" data-x="0" data-w="12">
                                            <div id="hs_cos_wrapper_widget_1612953295450" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">


                                                <div class="overlay-icon-module overlay_icon_widget_1612953295450   " style="
max-width: 570px;
max-height: 570px;
top: -228px;  left: 0;
transform: rotate(0deg);



"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 570 570"><defs><lineargradient id="top-left-transparent-pink_inline_svg__a" x1="100%" x2="100%" y1="95.674%" y2="0%"><stop offset="0%" stop-color="#FFF" stop-opacity="0"></stop><stop offset="100%" stop-color="#FAF2F8"></stop></lineargradient></defs><path fill="url(#top-left-transparent-pink_inline_svg__a)" fill-rule="evenodd" d="M570 0v570H0C0 255.198 255.198 0 570 0z" transform="rotate(180 285 285)"></path></svg></div>

                                            </div>

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
                    <!--end row-wrapper -->

                    <div class="row-fluid-wrapper row-depth-1 row-number-6 dnd-section DND_banner-row-2-force-full-width-section">
                        <div class="row-fluid ">
                            <div class="span12 widget-span widget-type-cell cell_16137356465322-padding dnd-column cell_16137356465322-margin" style="" data-widget-type="cell" data-x="0" data-w="12">

                                <div class="row-fluid-wrapper row-depth-1 row-number-7 dnd-row">
                                    <div class="row-fluid ">
                                        <div class="span12 widget-span widget-type-custom_widget dnd-module" style="" data-widget-type="custom_widget" data-x="0" data-w="12">
                                            <div id="hs_cos_wrapper_widget_1613735646530" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                                <div class="ad_tabber widget_1613735646530_ad_tabber ad_tabber_type_tabber">
                                                    {{-- <div class="cycle-tab-container">


                                                        <ul class="nav nav-tabs justify-content-center">

                                                        <li class="cycle-tab-item active">
                                                          <a class="nav-link" role="tab" data-toggle="tab" href="#home">Lorem Ipsum</a>
                                                        </li>
                                                        <li class="cycle-tab-item">
                                                          <a class="nav-link" role="tab" data-toggle="tab" href="#profile">Lorem Ipsum</a>
                                                        </li>
                                                        <li class="cycle-tab-item">
                                                          <a class="nav-link" role="tab" data-toggle="tab" href="#messages">Lorem Ipsum</a>
                                                        </li>
                                                        <li class="cycle-tab-item">
                                                          <a class="nav-link" role="tab" data-toggle="tab" href="#settings">Lorem Ipsum</a>
                                                        </li>

                                                      </ul>

                                                        <div class="tab-content">
                                                        <div class="tab-pane fade active in ex1" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                            Humblebrag activated charcoal ut in taiyaki PBR&B scenester dreamcatcher flannel offal air plant DIY. Selvage fingerstache in green juice jean shorts.   Humblebrag activated charcoal ut in taiyaki PBR&B scenester dreamcatcher flannel offal air plant DIY. Selvage fingerstache in green juice jean shorts.
                                                        </div>
                                                        <div class="tab-pane fade ex1" id="profile" role="tabpanel" aria-labelledby="profile-tab">Palo santo kogi ramps nostrud organic schlitz, art party PBR&B tbh taxidermy hammock officia chia farm-to-table irony. </div>
                                                        <div class="tab-pane fade ex1" id="messages" role="tabpanel" aria-labelledby="messages-tab">Asymmetrical sustainable live-edge tempor eiusmod kale chips cloud bread vexillologist et man bun pitchfork hashtag excepteur scenester ethical.</div>
                                                        <div class="tab-pane fade ex1" id="settings" role="tabpanel" aria-labelledby="settings-tab"> Literally wolf flexitarian snackwave raw denim bitters ut synth kombucha consequat twee polaroid.</div>
                                                      </div>
                                                      </div>
                                                    </div> --}}
                                                    <div id="hs_cos_wrapper_widget_1614256769396"
                                                    class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                    style="" data-hs-cos-general-type="widget"
                                                    data-hs-cos-type="module">
                                                    <div class="benefits-tabber-wrapper container"
                                                        style="margin-top:px; margin-bottom:px;">
                                                        <div class="benefits-tabber-nav">
                                                            <div class="benefits-tabber-nav-inner">

                                                                <a class="active"
                                                                    href="#widget_1614256769396tab1">Lorem Ipsum</a>

                                                                <a
                                                                    href="#widget_1614256769396tab2">Lorem Ipsum</a>

                                                                <a href="#widget_1614256769396tab3">Lorem Ipsum
                                                                    </a>

                                                                <a href="#widget_1614256769396tab4">Lorem Ipsum
                                                                    </a>

                                                            </div>
                                                        </div>
                                                        <div class="benefits-tabber-tabs-container">

                                                            <div class="benefits-tabber-tab-panal show"
                                                                id="widget_1614256769396tab1">
                                                                <div class="benefits-tabber-feature-grid">
                                                                    <div class="benefits-tabber-feature-item pl-md-5 pr-md-5 w-100">
                                                                    <p>Lorem Ipsum is simply dummy text of the printing and
                                                                        typesetting industry. Lorem Ipsum has been the industry's
                                                                        standard dummy text ever since the 1500s, when an unknown
                                                                        printer took a galley of type and scrambled it to make a
                                                                        type specimen book. It has survived not only five centuries,
                                                                        but also the leap into electronic typesetting,
                                                                        remaining essentially unchanged. </p>
                                                                </div>


                                                                </div>
                                                            </div>

                                                            <div class="benefits-tabber-tab-panal "
                                                                id="widget_1614256769396tab2">
                                                                <div class="benefits-tabber-feature-grid">

                                                                    <div class="benefits-tabber-feature-item pr-md-5 pl-md-5 w-100">
                                                                        <p>2Lorem Ipsum is simply dummy text of the printing and
                                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                                            standard dummy text ever since the 1500s, when an unknown
                                                                            printer took a galley of type and scrambled it to make a
                                                                            type specimen book. It has survived not only five centuries,
                                                                            but also the leap into electronic typesetting,
                                                                            remaining essentially unchanged. </p>
                                                                    </div>



                                                                </div>
                                                            </div>

                                                            <div class="benefits-tabber-tab-panal "
                                                                id="widget_1614256769396tab3">
                                                                <div class="benefits-tabber-feature-grid">

                                                                    <div class="benefits-tabber-feature-item pl-md-5 pr-md-5 w-100">
                                                                        <p>3Lorem Ipsum is simply dummy text of the printing and
                                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                                            standard dummy text ever since the 1500s, when an unknown
                                                                            printer took a galley of type and scrambled it to make a
                                                                            type specimen book. It has survived not only five centuries,
                                                                            but also the leap into electronic typesetting,
                                                                            remaining essentially unchanged. </p>
                                                                    </div>



                                                                </div>
                                                            </div>

                                                            <div class="benefits-tabber-tab-panal "
                                                                id="widget_1614256769396tab4">
                                                                <div class="benefits-tabber-feature-grid">
                                                                    <div class="benefits-tabber-feature-item pl-md-5 pr-md-5 w-100">
                                                                        <p>4Lorem Ipsum is simply dummy text of the printing and
                                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                                            standard dummy text ever since the 1500s, when an unknown
                                                                            printer took a galley of type and scrambled it to make a
                                                                            type specimen book. It has survived not only five centuries,
                                                                            but also the leap into electronic typesetting,
                                                                            remaining essentially unchanged. </p>
                                                                    </div>

                                                                </div>
                                                            </div>

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

                            </div>
                            <!--end widget-span -->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end row-wrapper -->

                </div>
                <!--end widget-span -->
            </div>
        </div>
    </div>
</div>
<main class="body-container-wrapper corporation-filing-page">
    <div class="container-fluid body-container body-container__website">
        <div class="row-fluid-wrapper">
            <div class="row-fluid">
                <div class="span12 widget-span widget-type-cell " style="" data-widget-type="cell" data-x="0" data-w="12">



                    <div class="row-fluid-wrapper row-depth-1 row-number-3 dnd_area-row-1-padding dnd-section dnd_area-row-1-force-full-width-section">
                        <div class="row-fluid ">
                            <div class="span12 widget-span widget-type-cell dnd-column" style="" data-widget-type="cell" data-x="0" data-w="12">

                                <div class="row-fluid-wrapper row-depth-1 row-number-4 dnd-row">
                                    <div class="row-fluid ">
                                        <div class="span12 widget-span widget-type-custom_widget dnd-module" style="" data-widget-type="custom_widget" data-x="0" data-w="12">
                                            <div id="hs_cos_wrapper_widget_1615204505115" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">


                                                <div class="overlay-icon-module overlay_icon_widget_1615204505115   " style="
max-width: 570px;
max-height: 570px;
top: 0;  left: 0;
transform: rotate(0deg);



"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 420 420"><defs><lineargradient id="top-left-transparent-orange2_inline_svg__a" x1="100%" x2="100%" y1="95.674%" y2="0%"><stop offset="0%" stop-color="#FFF" stop-opacity="0"></stop><stop offset="100%" stop-color="#FCE7D0"></stop></lineargradient></defs><path fill="url(#top-left-transparent-orange2_inline_svg__a)" fill-rule="evenodd" d="M420 0v420H0C0 188.04 188.04 0 420 0z" opacity="0.75" transform="rotate(180 210 210)"></path></svg></div>

                                            </div>

                                        </div>
                                        <!--end widget-span -->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end row-wrapper -->

                                <div class="row-fluid-wrapper row-depth-1 row-number-5 dnd-row">
                                    <div class="row-fluid ">
                                        <div class="span12 widget-span widget-type-custom_widget dnd-module" style="" data-widget-type="custom_widget" data-x="0" data-w="12">
                                            <div id="hs_cos_wrapper_widget_1615204488269" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                                <div class="get-started-right-business-wrapper">
                                                    <div class="page-center clearfix">
                                                        <div class="get-started-right-business-top-content">
                                                            <h2>Get started with the right type of business entity</h2>
                                                        </div>

                                                        <div class="get-started-right-business-features-container">

                                                            <div class="get-started-right-business-features">
                                                                <div class="curve__Wrapper">
                                                                    <svg width="29" height="25" xmlns="http://www.w3.org/2000/svg"><path d="M29 1.389c0 .746-.599 1.349-1.354 1.384a26.869 26.869 0 00-12.317 3.66C8.575 10.388 4.231 16.836 2.785 23.885A1.4 1.4 0 011.408 25c-.89 0-1.556-.806-1.38-1.666 1.599-7.79 6.398-14.916 13.863-19.286A29.704 29.704 0 0127.54.002C28.337-.036 29 .602 29 1.387v.002z" fill="#FD8550" fill-rule="evenodd"></path></svg>
                                                                </div>


                                                                <div class="get-started-right-business-features-item">





                                                                    <a href="#">
                                                                        {{-- <div class="get-started-right-business-features-card">
                                                                            <div class="icon-and-title-column">

                                                                                <div class="boxed__ImageWrapper" style="background-color: rgba(238, 249, 254,1.0);">

                                                                                    <img src="hubfs/Incfile_February_2021/images/cert-llc-232.png" alt="LLC" loading="lazy">
                                                                                </div>

                                                                                <span class="boxed__Imagetitle">LLC</span>
                                                                            </div>
                                                                            <span class="circle__IconWrapper">
        <svg width="12" height="11" xmlns="http://www.w3.org/2000/svg"><path d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z" fill="#1D1D1D" fill-rule="nonzero"></path></svg>
      </span>
                                                                        </div> --}}
                                                                        <div class="card pt-3 text-center" style="width:100%;">



                                                                            <img class="card-img-top" src="{{asset('hubfs/Incfile_February_2021/images/cert-llc-232.png')}}" style="width: 30%;"  alt="Card image cap">

                                                                            <div class="card-body">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <h5 class="card-title">LLC</h5>

                                                                                    <a href="#" class="float-right"> <span class="circle__IconWrapper">
                                                                                      <svg width="12" height="11" xmlns="http://www.w3.org/2000/svg"><path d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z" fill="#1D1D1D" fill-rule="nonzero"></path></svg>
                                                                                    </span></a>
                                                                                </div>

                                                                            </div>
                                                                          </div>
                                                                    </a>
                                                                </div>



                                                                <div class="get-started-right-business-features-item">







                                                                    <a href="#" target="_blank" rel="noopener">
                                                                        {{-- <div class="get-started-right-business-features-card">
                                                                            <div class="icon-and-title-column">

                                                                                <div class="boxed__ImageWrapper" style="background-color: rgba(250, 242, 248,1.0);">

                                                                                    <img src="hubfs/Incfile_February_2021/images/cert-s-433.png" alt="S Corporation" loading="lazy">
                                                                                </div>

                                                                                <span class="boxed__Imagetitle">S Corporation</span>
                                                                            </div>
                                                                            <span class="circle__IconWrapper">
        <svg width="12" height="11" xmlns="http://www.w3.org/2000/svg"><path d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z" fill="#1D1D1D" fill-rule="nonzero"></path></svg>
      </span>
                                                                        </div> --}}
                                                                        <div class="card pt-3 text-center" style="width:100%;">



                                                                            <img class="card-img-top " src="{{asset('hubfs/Incfile_February_2021/images/cert-s-433.png')}}" style="width: 30%"  alt="Card image cap">

                                                                            <div class="card-body">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <h5 class="card-title">S Corporation</h5>

                                                                                    <a href="#" class="float-right"> <span class="circle__IconWrapper">
                                                                                      <svg width="12" height="11" xmlns="http://www.w3.org/2000/svg"><path d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z" fill="#1D1D1D" fill-rule="nonzero"></path></svg>
                                                                                    </span></a>
                                                                                </div>

                                                                            </div>
                                                                          </div>
                                                                    </a>
                                                                </div>



                                                                <div class="get-started-right-business-features-item">





                                                                    <a href="#">
                                                                        {{-- <div class="get-started-right-business-features-card">
                                                                            <div class="icon-and-title-column">

                                                                                <div class="boxed__ImageWrapper" style="background-color: rgba(242, 248, 243,1.0);">

                                                                                    <img src="hubfs/Incfile_February_2021/images/cert-n-826.png" alt="Nonprofit" loading="lazy">
                                                                                </div>

                                                                                <span class="boxed__Imagetitle">Nonprofit</span>
                                                                            </div>
                                                                            <span class="circle__IconWrapper">
        <svg width="12" height="11" xmlns="http://www.w3.org/2000/svg"><path d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z" fill="#1D1D1D" fill-rule="nonzero"></path></svg>
      </span>
                                                                        </div> --}}
                                                                        <div class="card pt-3 text-center" style="width:100%;">



                                                                            <img class="card-img-top " src="{{asset('hubfs/Incfile_February_2021/images/cert-n-826.png')}}"  style="width: 30%"  alt="Card image cap">

                                                                            <div class="card-body">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <h5 class="card-title">Nonprofit</h5>

                                                                                    <a href="#" class="float-right"> <span class="circle__IconWrapper">
                                                                                      <svg width="12" height="11" xmlns="http://www.w3.org/2000/svg"><path d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z" fill="#1D1D1D" fill-rule="nonzero"></path></svg>
                                                                                    </span></a>
                                                                                </div>

                                                                            </div>
                                                                          </div>
                                                                    </a>
                                                                </div>



                                                                <div class="get-started-right-business-features-item">





                                                                    <a href="#">
                                                                        {{-- <div class="get-started-right-business-features-card">
                                                                            <div class="icon-and-title-column">

                                                                                <div class="boxed__ImageWrapper" style="background-color: rgba(254, 246, 237,1.0);">

                                                                                    <img src="hubfs/Incfile_February_2021/images/cert-c-831.png" alt="C Corporation" loading="lazy">
                                                                                </div>

                                                                                <span class="boxed__Imagetitle">C Corporation</span>
                                                                            </div>
                                                                            <span class="circle__IconWrapper">
        <svg width="12" height="11" xmlns="http://www.w3.org/2000/svg"><path d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z" fill="#1D1D1D" fill-rule="nonzero"></path></svg>
      </span>
                                                                        </div> --}}
                                                                        <div class="card pt-3 text-center" style="width:100%;">



                                                                            <img class="card-img-top " src="{{asset('hubfs/Incfile_February_2021/images/cert-c-831.png')}}"  style="width: 30%"  alt="Card image cap">

                                                                            <div class="card-body">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <h5 class="card-title">C Corporation</h5>

                                                                                    <a href="#" class="float-right"> <span class="circle__IconWrapper">
                                                                                      <svg width="12" height="11" xmlns="http://www.w3.org/2000/svg"><path d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z" fill="#1D1D1D" fill-rule="nonzero"></path></svg>
                                                                                    </span></a>
                                                                                </div>

                                                                            </div>
                                                                          </div>
                                                                    </a>
                                                                </div>


                                                            </div>
                                                        </div>


                                                        <div class="get-started-right-business-bottom-btn">








                                                            <a class="hs-button" href="#" target="_blank" rel="noopener">
                                                                <span>Get started</span>
                                                                <div class="button__Arrow">
                                                                    <svg width="12" height="11" xmlns="http://www.w3.org/2000/svg"><path d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z" fill="#1D1D1D" fill-rule="nonzero"></path></svg>
                                                                </div>
                                                            </a>

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

                            </div>
                            <!--end widget-span -->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end row-wrapper -->

                    <div class="row-fluid-wrapper row-depth-1 row-number-6 dnd_area-row-2-force-full-width-section dnd_area-row-2-padding dnd-section">
                        <div class="row-fluid ">
                            <div class="span12 widget-span widget-type-cell dnd-column" style="" data-widget-type="cell" data-x="0" data-w="12">

                                <div class="row-fluid-wrapper row-depth-1 row-number-7 dnd-row">
                                    <div class="row-fluid ">
                                        <div class="span12 widget-span widget-type-custom_widget dnd-module" style="overflow:hidden" data-widget-type="custom_widget" data-x="0" data-w="12">
                                            <div id="hs_cos_wrapper_widget_1615204963342" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                                <div class="get-started-banner widget_1615204963342_banner">
                                                    <div class="rocket__Oval">
                                                        <svg viewbox="0 0 370 460" xmlns="http://www.w3.org/2000/svg">
<defs>
<radialgradient cx="16.614%" cy="100%" fx="16.614%" fy="100%" r="96.459%" id="oval-yellow-3_inline_svg__a">
  <stop stop-color="#FFF7EA" offset="0%"></stop>
  <stop stop-color="#FFBA8C" offset="100%"></stop>
</radialgradient>
</defs>
<path d="M470 0v470H0C0 210.426 210.426 0 470 0z" transform="translate(0 -10)" fill="url(#oval-yellow-3_inline_svg__a)" fill-rule="evenodd" opacity="0.1"></path>
</svg>
                                                    </div>
                                                    <div class="rocket__Curve">
                                                        <svg width="81" height="97" xmlns="http://www.w3.org/2000/svg">
<path d="M115 1.61c0 3.014-2.375 5.45-5.37 5.594-16.722.82-33.478 5.622-48.842 14.788-26.784 15.971-44.01 42.02-49.744 70.5-.523 2.62-2.8 4.508-5.462 4.508-3.53 0-6.17-3.255-5.469-6.73 6.337-31.475 25.37-60.26 54.971-77.917C72.11 2.2 90.683-3.111 109.215-3.994c3.157-.15 5.785 2.425 5.785 5.6v.005z" fill="#FFE0A3" fill-rule="evenodd"></path>
</svg>
                                                    </div>

                                                    {{-- <div class="rocket__Moon">
                                                        <div class="gatsby-image-wrapper" style="position:relative;overflow:hidden">
                                                            <div class="moon-image" data-background="../f.hubspotusercontent30.net/hubfs/3787982/Incfile_February_2021/images/moon.png"></div>
                                                        </div>
                                                    </div> --}}

                                                    <div class="page-center">

                                                        <div class="rocket__RocketWrapper">
                                                            <div class=" gatsby-image-wrapper pb-0">
                                                                {{-- <div class="get-image-bg" data-background="{{asset('image/whychooseus.png')}}}"></div> --}}
                                                                <img src="{{asset('image/chos.png')}}" class="img-fluid" alt="">
                                                            </div>
                                                        </div>

                                                        <div class="rocket__Content">
                                                            <div>
                                                                <h2>lorem <br>Lorem ipsum dolor sit amet.</h2>
                                                                <p>Lorem ipsum dolor sit amet. <br>Lorem ipsum dolor sit amet.</p>








                                                                <a href="#" target="_blank" rel="noopener" class="hs-button btn-with-icon">
    Lorem, ipsum dolor.
    <div class="external-link__Arrow">
      <svg width="12" height="11" xmlns="http://www.w3.org/2000/svg">
        <path d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z" fill="#1D1D1D" fill-rule="nonzero"></path>
      </svg>
    </div>
  </a>

                                                            </div>
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

                            </div>
                            <!--end widget-span -->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end row-wrapper -->

                    <div class="row-fluid-wrapper row-depth-1 row-number-8 dnd-section dnd_area-row-3-padding dnd_area-row-3-force-full-width-section">
                        <div class="row-fluid ">
                            <div class="span12 widget-span widget-type-cell dnd-column" style="" data-widget-type="cell" data-x="0" data-w="12">

                                <div class="row-fluid-wrapper row-depth-1 row-number-9 dnd-row">
                                    <div class="row-fluid ">
                                        <div class="span12 widget-span widget-type-custom_widget dnd-module" style="" data-widget-type="custom_widget" data-x="0" data-w="12">
                                            <div id="hs_cos_wrapper_widget_1615205073177" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                                <div class="download-guide-form-md-wrapper" id="downloadForm" style="padding-top:104px; padding-bottom:104px; border-radius: 0px;">

                                                    <div class="curve__Wrapper_large">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="115" height="115"><path fill="#E0F4FD" fill-rule="evenodd" d="M0 19.61c0 3.014 2.375 5.45 5.37 5.594 16.722.82 33.478 5.622 48.842 14.788 26.784 15.971 44.01 42.02 49.744 70.5.523 2.62 2.8 4.508 5.462 4.508 3.53 0 6.17-3.255 5.469-6.73-6.337-31.475-25.37-60.26-54.971-77.917C42.89 20.2 24.317 14.889 5.785 14.006 2.628 13.856 0 16.431 0 19.606v.005z"></path></svg>
                                                    </div>

                                                    <div class="page-center clearfix">
                                                        <div class="download-guide-form-sec-header">
                                                            <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur, aliquid. &amp; Lorem, ipsum..</h2>
                                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur, incidunt!</p>
                                                        </div>
                                                        <div class="download-guide-form-box">

                                                            <div class="curve__Wrapper">
                                                                <svg width="29" height="25" xmlns="http://www.w3.org/2000/svg"><path d="M0 1.389c0 .746.599 1.349 1.354 1.384a26.869 26.869 0 0112.317 3.66c6.754 3.954 11.098 10.402 12.544 17.451A1.4 1.4 0 0027.592 25c.89 0 1.556-.806 1.38-1.666-1.599-7.79-6.398-14.916-13.863-19.286A29.704 29.704 0 001.46.002 1.393 1.393 0 000 1.387v.002z" fill="#C9A3EE" fill-rule="evenodd"></path></svg>
                                                            </div>


                                                            <div class="download-guide-form-box-inner">

                                                                <h3 id="boxTitle">Lorem ipsum dolor sit amet.</h3>
                                                                <label for="" class="label">Email</label>
                                                                <input type="email" class="form-control">
                                                                <label for="" class="label">First Name</label>
                                                                <input type="text" class="form-control">
                                                                <label for="" class="label">I'd Like to...</label>
                                                                <select name="select" id="" class="form-control">
                                                                    <option value="1">Start a Bussiness Soon</option>
                                                                    <option value="2">Start a Bussiness Now</option>
                                                                    <option value="3">Grow a Bussiness </option>


                                                                </select>
                                                                <button class="btn btn-primary mt-3 float-right">Submit</button><br>

                                                                <span id="hs_cos_wrapper_widget_1615205073177_" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_form" style="" data-hs-cos-general-type="widget" data-hs-cos-type="form"><h3 id="hs_cos_wrapper_form_303890057_title" class="hs_cos_wrapper form-title" data-hs-cos-general-type="widget_field" data-hs-cos-type="text"></h3>

<div id="hs_form_target_form_303890057"></div>









</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <style>
                                                    .download-guide-form-md-wrapper {
                                                        background-color: rgba(242, 246, 255, 1.0);
                                                    }
                                                </style>
                                            </div>

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
                    <!--end row-wrapper -->


    </div>
</main>
{{-- navtab js --}}
<script src="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41951289498/1620380498784/module_41951289498_Benefits_Tabber.min.js')}}"></script>
{{-- end navtab js --}}

<script>
    // Tab-Pane change function
function tabChange() {
    var tabs = $('.nav-tabs > li');
    var active = tabs.filter('.active');
    var next = active.next('li').length? active.next('li').find('a') : tabs.filter(':first-child').find('a');
    next.tab('show');
}

$('.tab-pane').hover(function() {
    clearInterval(tabCycle);
}, function() {
    tabCycle = setInterval(tabChange, 5000);
});

// Tab Cycle function
var tabCycle = setInterval(tabChange, 5000)

// Tab click event handler

$(function(){
    $('.nav-tabs a').click(function(e) {
        e.preventDefault();
        clearInterval(tabCycle);
        $(this).tab('show')
        tabCycle = setInterval(tabChange, 5000);
    });
});


</script>
@endsection
