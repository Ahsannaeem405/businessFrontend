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
                                                    {{-- <div id="hs_cos_wrapper_widget_1614256769396"
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
                                                </div> --}}
                                                <div class="row-fluid-wrapper row-depth-1 row-number-6 dnd-section DND_banner-row-2-force-full-width-section">
                                                    <div class="row-fluid ">
                                                        <div class="span12 widget-span widget-type-cell cell_16137356465322-padding dnd-column cell_16137356465322-margin" style="" data-widget-type="cell" data-x="0" data-w="12">

                                                            <div class="row-fluid-wrapper row-depth-1 row-number-7 dnd-row">
                                                                <div class="row-fluid ">
                                                                    <div class="span12 widget-span widget-type-custom_widget dnd-module" style="" data-widget-type="custom_widget" data-x="0" data-w="12">
                                                                        <div id="hs_cos_wrapper_widget_1613735646530" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                                                            <div class="ad_tabber widget_1613735646530_ad_tabber ad_tabber_type_tabber">
                                                                                <div id="tabs" class="two-col-section">
                                                                                    <div class="page-center">
                                                                                        <div class="two-col-section-inner">
                                                                                            <div class="two-col_sidebar">
                                                                                                <div class="two-col_sidebar-inner">
                                                                                                    <div class="left-tab-pages__Sticky">

                                                                                                        <a data-id="widget_1613735646530_1" class="active">
                                                                                                            <div class="left-tab-pages__Icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"><g fill="none" fill-rule="evenodd"><path fill="#E0F1FA" fill-rule="nonzero" d="M25.501 5.586v22.256a3.278 3.278 0 01-.334 1.463 4.342 4.342 0 01-1.652.323H10.227c-1.062 0-2.08-.383-2.831-1.065-.751-.683-1.173-1.608-1.173-2.573V4.238c-.002-.5.112-.996.335-1.454a4.257 4.257 0 011.578-.323h13.926c.938-.087 1.87.214 2.537.82.667.606.998 1.453.902 2.305z"></path><path stroke="#1D1D1B" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M27.164 4.015V25.93c.015 1.453-.913 2.777-2.363 3.372a4.21 4.21 0 01-1.641.325H9.84c-1.068-.002-2.091-.394-2.843-1.088-.751-.694-1.169-1.633-1.16-2.61V4.016c0-.504.118-1.002.344-1.462C6.807 1.215 8.248.35 9.841.355H23.16c2.209.006 3.998 1.64 4.004 3.66z"></path><g stroke="#1D1D1B" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"><path d="M15.371 5.792v8.196M13.988 14.113h5.878M13.988 5.75h2.742m3.157 6.779v1.584"></path></g><path fill="#E0F1FA" d="M19.636 25.091h3.136v5.227h-3.136z"></path><path stroke="#1D1D1B" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M19.636 27.136v.937-.28 3.275l.747-.713.927-.882.392.429 1.071 1.158v-3.674 1.463m1.706-6.632c.17.03.31.157.363.33a.496.496 0 01-.114.487l-.204.208-.103.1-1.118 1.146.07.435.275 1.674a.46.46 0 01-.172.457.413.413 0 01-.468.019l-1.438-.79-.371-.208-1.771.971a.438.438 0 01-.463-.051.487.487 0 01-.177-.451l.34-2.056-1.28-1.286-.166-.174a.494.494 0 01-.115-.486.461.461 0 01.365-.325l1.918-.294h.038l.819-1.628.102-.214a.453.453 0 01.406-.263c.172 0 .329.102.406.263l.882 1.868 1.976.268zM9.182 19.864h4.37m-4.37 4.181h2.185"></path></g></svg></div>
                                                                                                            <div class="left-tab-pages__Content-">
                                                                                                                <span>Limited Liability Company</span>
                                                                                                                <div class="left-tab-pages__Arrow-sc">
                                                                                                                    <svg width="12" height="11" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z" fill="#1D1D1D" fill-rule="nonzero"></path>
                                        </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>

                                                                                                        <a data-id="widget_1613735646530_2">
                                                                                                            <div class="left-tab-pages__Icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="33"><g fill="none" fill-rule="evenodd"><path fill="#D5F3E8" fill-rule="nonzero" d="M16.1 3.14V31.5h-1.45V17.02h-1.91v-6.63h1.91V2.5h.82c.169 0 .33.068.45.188.117.12.183.283.18.452z"></path><path fill="#D5F3E8" fill-rule="nonzero" d="M13.43 12.3v4.58H4.27L.99 13.65l1.37-1.35z"></path><path stroke="#1D1D1B" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M17.68 2.9v28.9h-3.36V2.9c0-.928.752-1.68 1.68-1.68h0c.928 0 1.68.752 1.68 1.68zm-3.36 7.81v6.63H4.67a1.448 1.448 0 01-1-.42L.8 14.11l-.1-.09 3-2.9c.27-.258.627-.404 1-.41h9.62z"></path><path fill="#D5F3E8" fill-rule="nonzero" d="M18.35 5.01v4.57h9.17l3.28-3.22-1.38-1.35z"></path><path stroke="#1D1D1B" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M17.68 3.42v6.62h9.76c.309 0 .606-.118.83-.33l3-3-3-3c-.22-.22-.52-.341-.83-.34l-9.76.05zM11.3 31.8h9.57"></path></g></svg></div>
                                                                                                            <div class="left-tab-pages__Content-">
                                                                                                                <span>S Corporation or C Corp</span>
                                                                                                                <div class="left-tab-pages__Arrow-sc">
                                                                                                                    <svg width="12" height="11" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z" fill="#1D1D1D" fill-rule="nonzero"></path>
                                        </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>

                                                                                                        <a data-id="widget_1613735646530_3">
                                                                                                            <div class="left-tab-pages__Icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"><g fill="none" fill-rule="evenodd"><path fill="#F9F2D7" fill-rule="nonzero" d="M5.87 21.22l-1.95 4.66 5-1.65-6.98 7.71 9.78-4.87a4.14 4.14 0 00-5.85-5.85z"></path><path fill="#F9F2D7" fill-rule="nonzero" d="M12.05 21a4.079 4.079 0 011.13 3.73l-.27-.26-.76-.77-.42-.42-1.16-1.15-1-1L8.48 20H8.4l-.07-.09A4.119 4.119 0 0112.05 21z"></path><path fill="#F9F2D7" fill-rule="nonzero" d="M29.51 3.48l-.22 4.33.22 2.79-4.63 4.19s-.1.25-.41 1.14c-.7 2-1.86 5.7-1.81 7.73.05 2.03.48 4.13-.19 6.2a7.03 7.03 0 01-.47 1.07L14.11 23l-1.77-1.76-.29-.24-.69-.69L10 18.92l-8.91-9s.43-.33 1-.68A18.876 18.876 0 018 8.47a66.028 66.028 0 009.49-1.22l.51-.48 3.61-3.62.28.28-.06-.5 1-.05 1.5-.08 4.33-.22a.858.858 0 01.85.9z"></path><path stroke="#1D1D1B" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M30.71 9.69l-3.94 3.94h0l-2.29 2.28-6.92 6.93a2.58 2.58 0 01-3.44.18l-1.77-1.76-.3-.26-.69-.69L10 18.92h0a2.58 2.58 0 01.2-3.41l9-9h0l3.54-3.54.56-.56"></path><path stroke="#1D1D1B" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M26.77 13.63h0c-.14.36-2.39 6.36-2.32 9.17 0 2.12.47 4.13-.2 6.21-.384.945-.877 1.84-1.47 2.67l-.78-.75L14.11 23l-1.77-1.76m6.9-14.82h0L18 6.77h0a40.048 40.048 0 01-8.18 1.44c-2.12 0-4.13-.48-6.21.19-.545.2-1.065.461-1.55.78-.57.35-1 .68-1 .68l8.91 9h0l1.37 1.38m1.84 4.48a4.09 4.09 0 01-1.13 2.11l-.2.09h0L2.28 31.7 9.22 24l-5 1.65L6.2 21c.12-.118.246-.228.38-.33h0a3.914 3.914 0 011.73-.8h0a4.14 4.14 0 014.85 4.87l.02-.02zM30.94 9.46L27.42 6l-3.86-3.91 6.82-.35a.858.858 0 01.9.91l-.34 6.81z"></path></g></svg></div>
                                                                                                            <div class="left-tab-pages__Content-">
                                                                                                                <span>The C Corporation</span>
                                                                                                                <div class="left-tab-pages__Arrow-sc">
                                                                                                                    <svg width="12" height="11" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z" fill="#1D1D1D" fill-rule="nonzero"></path>
                                        </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>

                                                                                                        <a data-id="widget_1613735646530_4">
                                                                                                            <div class="left-tab-pages__Icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"><g fill="none" fill-rule="evenodd" transform="translate(8)"><path fill="#FCE7D0" fill-rule="nonzero" d="M14.5 7.3a.683.683 0 01-.11.13c-.67.7-3.43 3-4.8 4.15a.892.892 0 01-1.15 0c-1.25-1.05-4.18-3.51-4.8-4.15a4 4 0 01-.94-4.07 3.002 3.002 0 012.22-1A3.2 3.2 0 017.68 4a.57.57 0 001 0 3.198 3.198 0 012.76-1.71 3.35 3.35 0 013 2.31 3.93 3.93 0 01.06 2.7z"></path><path stroke="#1D1D1B" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M14.5 7.3a.683.683 0 01-.11.13c-.67.7-3.43 3-4.8 4.15a.892.892 0 01-1.15 0c-1.25-1.05-4.18-3.51-4.8-4.15a4 4 0 01-.94-4.07.88.88 0 01.05-.15 3.33 3.33 0 013-2.31 3.219 3.219 0 012.76 1.71.58.58 0 001 0A3.191 3.191 0 0112.27.9a3.34 3.34 0 013 2.31 3.998 3.998 0 01-.77 4.09z"></path><path fill="#FCE7D0" fill-rule="nonzero" d="M16.34 18.49v2.59h-1.19a.839.839 0 00-.82.67l-1.43 7.31A2.39 2.39 0 0110.56 31H4.22L1.87 20.62l-1.49-.48-.07-1v-1.51h15.17a.86.86 0 01.86.86z"></path><path stroke="#1D1D1B" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M16.13 20.17l-.05.21-.21 1L14 30.3a1.29 1.29 0 01-1.26 1H5.2a1.29 1.29 0 01-1.27-1L1.76 19.49"></path><rect width="17.94" height="3.45" x="0.05" y="16.03" stroke="#1D1D1B" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" rx="0.75"></rect><path stroke="#1D1D1B" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M9.01 15.58V11.88"></path></g></svg></div>
                                                                                                            <div class="left-tab-pages__Content-">
                                                                                                                <span>The Nonprofit Corporation</span>
                                                                                                                <div class="left-tab-pages__Arrow-sc">
                                                                                                                    <svg width="12" height="11" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z" fill="#1D1D1D" fill-rule="nonzero"></path>
                                        </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>

                                                                                                        <a data-id="widget_1613735646530_5">
                                                                                                            <div class="left-tab-pages__Icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="33"><g fill="none" fill-rule="evenodd" transform="translate(4 .5)"><path fill="#E6D7EA" fill-rule="nonzero" d="M18.77 9.19a7.455 7.455 0 01-1.47 4.47 10.353 10.353 0 01-4.73 1.77A7.67 7.67 0 015 7.72C5 6 6.21 4.09 7.13 2.83a7.553 7.553 0 017.71-.28 7.552 7.552 0 013.93 6.64zm-6.72 11.07l-1.68 1.87L12 28.27H.84c0-2.58.67-6.32 2-8.3a12.247 12.247 0 018.08-3h.17l-1 1.3 1.96 1.99zm9.85 8.01h-8.36l1.6-6.14-1.68-1.87 1.93-2-.51-.66a12.23 12.23 0 018.05 9s0 .23.06.47a1.103 1.103 0 01-1.09 1.2z"></path><path stroke="#1D1D1B" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M11.21 28.07H2.42a2.07 2.07 0 01-2-2.51 12.27 12.27 0 0124 0 2.07 2.07 0 01-2 2.48h-8.14"></path><circle cx="12.57" cy="8.26" r="7.55" stroke="#1D1D1B" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4"></circle><path stroke="#1D1D1B" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" d="M13.85 16.27l1.54 1.98-1.93 2.01 1.68 1.87-1.6 6.14-.79 3.02-.78-3.02-1.6-6.14 1.68-1.87-1.94-2.01 1.55-1.98z"></path></g></svg></div>
                                                                                                            <div class="left-tab-pages__Content-">
                                                                                                                <span>Sole Proprietorships</span>
                                                                                                                <div class="left-tab-pages__Arrow-sc">
                                                                                                                    <svg width="12" height="11" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z" fill="#1D1D1D" fill-rule="nonzero"></path>
                                        </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </a>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="two-col_main-section">
                                                                                                <div class="ad_tabber_contents clearfix">






                                                                                                    <div class="ad_tabber_contents_item widget_1613735646530_1_1 active" data-id="widget_1613735646530_1" data-scrollid="widget_1613735646530_1">





                                                                                                        <div class="ad_tabber_contents_item_rich_text" style="margin-top: 24px; margin-bottom: 32px;">
                                                                                                            <h3 style="margin-bottom: 24px;">Different Types of Corporate Structures</h3>
                                                                                                            <p style="margin-bottom: 48px;">You’ll learn about the four main types of business entity below — LLCs, S Corporations, C Corporations and nonprofits, so you can decide which will best meet your
                                                                                                                needs.
                                                                                                            </p>
                                                                                                            <h3 style="margin-bottom: 24px;">Limited Liability Company (LLC)</h3>
                                                                                                            <p style="margin-bottom: 40px;">The LLC is one of the most popular types of business entities. It’s ideally suited for smaller organizations and startups, for several reasons:</p>
                                                                                                        </div>




                                                                                                    </div>





                                                                                                    <div class="ad_tabber_contents_item widget_1613735646530_1_2 active" data-id="widget_1613735646530_1">




                                                                                                        <div class="ad_tabber_contents_item_boxed_content">
                                                                                                            <div class="boxed-content-container">

                                                                                                                <div class="boxed-color-box">

                                                                                                                    <ul>
                                                                                                                        <li style="margin-bottom: 16px;">LLCs are fast and easy to setup.</li>
                                                                                                                        <li style="margin-bottom: 16px;">LLCs have a simple business structure.</li>
                                                                                                                        <li style="margin-bottom: 16px;">Forming an LLC is generally inexpensive.</li>
                                                                                                                        <li style="margin-bottom: 16px;">Running an LLC is easier than running a C Corp or S Corp.</li>
                                                                                                                        <li style="margin-bottom: 16px;">There are fewer rules, regulations and legal compliance issues for LLCs.</li>
                                                                                                                        <li>LLCs are formed and regulated on a state level.</li>
                                                                                                                    </ul>

                                                                                                                </div>
                                                                                                            </div>

                                                                                                        </div>



                                                                                                    </div>





                                                                                                    <div class="ad_tabber_contents_item widget_1613735646530_1_3 active" data-id="widget_1613735646530_1">





                                                                                                        <div class="ad_tabber_contents_item_rich_text" style="margin-top: 0px; margin-bottom: 0px;">
                                                                                                            <p style="margin-bottom: 48px;">The cost and policies governing an LLC do vary from state to state. Check out our <a style="font-weight: 900;" href="llc-state-information.html" rel="noopener">LLC State Information</a>                                                                                            resource for additional info on your state.</p>
                                                                                                            <h3 style="margin-bottom: 24px;">LLC Limited Liability Protection</h3>
                                                                                                        </div>




                                                                                                    </div>





                                                                                                    <div class="ad_tabber_contents_item widget_1613735646530_1_4 active" data-id="widget_1613735646530_1">




                                                                                                        <div class="ad_tabber_contents_item_popup_video">
                                                                                                            <div class="popup-video-container al_left">
                                                                                                                <div class="gatsby-image-wrapper">
                                                                                                                    <div class="pop-video-thumb-bg" data-background="../f.hubspotusercontent30.net/hubfs/3787982/Incfile_February_2021/images/is-llc-or-corporation-video-thumb-09122020.jpg"></div>
                                                                                                                </div>
                                                                                                                <div class="video-button popup_video_trigger_widget_1613735646530_1_4">
                                                                                                                    <span>
                                          <svg viewbox="0 0 17 21" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.08.463C1.379-.623 0 .267 0 2.449v16.1c0 2.185 1.379 3.073 3.08 1.988l12.644-8.07c1.701-1.087 1.701-2.847 0-3.933L3.08.463z" fill="#FFF" fill-rule="nonzero"></path>
                                          </svg>
                                        </span>
                                                                                                                </div>
                                                                                                                <div class="video-pop-container popup_video_wrapper_widget_1613735646530_1_4">
                                                                                                                    <div class="video-pop-container-inner">
                                                                                                                        <iframe class="video-frame" src="#" width="500" height="349" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                                                                        <!--                       <div class="LightBox__Control">
                                            <button>
                                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001">
                                                <path d="M284.286 256.002L506.143 34.144c7.811-7.811 7.811-20.475 0-28.285-7.811-7.81-20.475-7.811-28.285 0L256 227.717 34.143 5.859c-7.811-7.811-20.475-7.811-28.285 0-7.81 7.811-7.811 20.475 0 28.285l221.857 221.857L5.858 477.859c-7.811 7.811-7.811 20.475 0 28.285a19.938 19.938 0 0014.143 5.857 19.94 19.94 0 0014.143-5.857L256 284.287l221.857 221.857c3.905 3.905 9.024 5.857 14.143 5.857s10.237-1.952 14.143-5.857c7.811-7.811 7.811-20.475 0-28.285L284.286 256.002z"></path>
                                              </svg>
                                            </button>
                                          </div> -->
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>


                                                                                                        </div>



                                                                                                    </div>





                                                                                                    <div class="ad_tabber_contents_item widget_1613735646530_1_5 active" data-id="widget_1613735646530_1">





                                                                                                        <div class="ad_tabber_contents_item_rich_text" style="margin-top: 42px; margin-bottom: 0px;">
                                                                                                            <p style="margin-bottom: 48px;">Like C Corps and S Corps, LLCs provide their owners with limited liability protection. This means the business assets are owned separately by the LLC, not by the owners.
                                                                                                                Any liability the business has (e.g. monies owed, equipment, depreciation, lawsuits, etc.) are purely the liability of the business, and do not (generally) have
                                                                                                                any impact on the individual owner’s personal assets.</p>
                                                                                                            <h3 style="margin-bottom: 24px;">LLC Taxes and Tax Returns</h3>
                                                                                                            <p style="margin-bottom: 72px;">An LLC does not pay federal income tax itself. Instead, any net profit or loss is “passed through” to the personal tax returns of the owners or members. It is then
                                                                                                                taxed as personal income by the IRS. In this sense, taxation of an LLC is very similar to taxation of a sole-proprietorship or partnership.</p>
                                                                                                            <h3 style="margin-bottom: 24px;">Types of Tax an LLC is Liable For</h3>
                                                                                                            <p style="margin-bottom: 40px;">It’s important to note that an LLC will be liable for certain types of tax, for example:</p>
                                                                                                        </div>




                                                                                                    </div>





                                                                                                    <div class="ad_tabber_contents_item widget_1613735646530_1_6 active last-item" data-id="widget_1613735646530_1">




                                                                                                        <div class="ad_tabber_contents_item_boxed_content">
                                                                                                            <div class="boxed-content-container">

                                                                                                                <div class="boxed-color-box">

                                                                                                                    <ul>
                                                                                                                        <li style="margin-bottom: 16px;">Payroll tax on salaries paid to employees (but not to members or owners — they will pay self-employment tax on their personal tax returns).</li>
                                                                                                                        <li style="margin-bottom: 16px;">Sales tax on goods purchased by and for the business.</li>
                                                                                                                        <li style="margin-bottom: 16px;">Property taxes on owned business property.</li>
                                                                                                                        <li style="margin-bottom: 16px;">In certain cases, other types of tax or tariffs may need to be paid by an LLC.</li>
                                                                                                                        <li>Generally, these taxes can be subtracted as business expenses and do not flow through to individual owner’s tax returns.</li>
                                                                                                                    </ul>

                                                                                                                </div>
                                                                                                            </div>

                                                                                                        </div>



                                                                                                    </div>








                                                                                                    <div class="ad_tabber_contents_item widget_1613735646530_2_1" data-id="widget_1613735646530_2" data-scrollid="widget_1613735646530_2">





                                                                                                        <div class="ad_tabber_contents_item_rich_text" style="margin-top: 24px; margin-bottom: 0px;">
                                                                                                            <h3 style="margin-bottom: 24px;">Subchapter or Small Business Corporation (S Corporation or S Corp)</h3>
                                                                                                            <p style="margin-bottom: 40px;">The S Corporation, or S Corp, is a business entity that was created and enacted into law by Congress in 1958. It was created to encourage small and family business
                                                                                                                creation, while eliminating the double taxation that conventional corporations (C Corps) had to pay. Key factors for S Corps include:</p>
                                                                                                        </div>




                                                                                                    </div>





                                                                                                    <div class="ad_tabber_contents_item widget_1613735646530_2_2" data-id="widget_1613735646530_2">




                                                                                                        <div class="ad_tabber_contents_item_boxed_content">
                                                                                                            <div class="boxed-content-container">

                                                                                                                <div class="boxed-color-box">

                                                                                                                    <ul>
                                                                                                                        <li style="margin-bottom: 16px;">S Corps are formed and regulated on a state level.</li>
                                                                                                                        <li style="margin-bottom: 16px;">The liability of the S Corp and the personal liability of the owners and investors are separate.</li>
                                                                                                                        <li style="margin-bottom: 16px;">The liability of the owners and investors in an S Corp is limited only to the value of their investment.</li>
                                                                                                                        <li style="margin-bottom: 16px;">The owners of a corporation are not personally liable for business debts, claims, or other liabilities.</li>
                                                                                                                        <li style="margin-bottom: 16px;">There are some more legalities, rules, and compliance for an S Corp than an LLC.</li>
                                                                                                                        <li style="margin-bottom: 16px;">An S Corp has a slightly more complex corporate structure.</li>
                                                                                                                        <li style="margin-bottom: 16px;">S Corps are limited to having 100 shareholders.</li>
                                                                                                                        <li>Running an S Corp is simpler and easier than running a C Corp.</li>
                                                                                                                    </ul>

                                                                                                                </div>
                                                                                                            </div>

                                                                                                        </div>



                                                                                                    </div>





                                                                                                    <div class="ad_tabber_contents_item widget_1613735646530_2_3" data-id="widget_1613735646530_2">





                                                                                                        <div class="ad_tabber_contents_item_rich_text" style="margin-top: 0px; margin-bottom: 0px;">
                                                                                                            <p style="margin-bottom: 48px;">The cost and policies governing an LLC do vary from state to state. Check out our <a href="llc-state-information.html" rel="noopener">LLC State Information</a> resource
                                                                                                                for additional info on your state.</p>
                                                                                                            <h3 style="margin-bottom: 24px;">S Corporation Taxes and Tax Returns</h3>
                                                                                                            <p style="margin-bottom: 32px;">Unlike traditional C Corporations, the S Corporation does not need to pay corporate income tax. The S Corporation is a separate tax designation recognized by the IRS.
                                                                                                                Similar to the LLC, the net profit or loss generated by an S Corporation will flow through to the personal income tax returns of the shareholders and owners, and
                                                                                                                be subject to tax there.</p>
                                                                                                            <p style="margin-bottom: 48px;">As with LLCs, an S Corp will have to pay certain other types of taxes like payroll, property and sales tax on business purchases.</p>
                                                                                                            <h3 style="margin-bottom: 24px;">Forming an LLC but Paying Tax as an S Corp</h3>
                                                                                                            <p style="margin-bottom: 40px;">When you create an LLC, you may have the option to choose to be treated as an S Corp for taxation purposes. This takes advantage of both business types, as follows:</p>
                                                                                                        </div>




                                                                                                    </div>





                                                                                                    <div class="ad_tabber_contents_item widget_1613735646530_2_4" data-id="widget_1613735646530_2">




                                                                                                        <div class="ad_tabber_contents_item_boxed_content">
                                                                                                            <div class="boxed-content-container">

                                                                                                                <div class="boxed-color-box">

                                                                                                                    <ul>
                                                                                                                        <li style="margin-bottom: 16px;">The rules and regulations for running an LLC are less onerous than running an S Corp.</li>
                                                                                                                        <li style="margin-bottom: 16px;">There may be tax advantages to being taxed as an S Corp, specifically around owners and members taking money out of the business.</li>
                                                                                                                        <li>You can choose to pay yourself a “reasonable” salary and deduct monies above that as share dividend income. That additional income would not be subject
                                                                                                                            to self-employment tax, although it would still be subject to personal income tax.</li>
                                                                                                                    </ul>

                                                                                                                </div>
                                                                                                            </div>

                                                                                                        </div>



                                                                                                    </div>





                                                                                                    <div class="ad_tabber_contents_item widget_1613735646530_2_5 last-item" data-id="widget_1613735646530_2">





                                                                                                        <div class="ad_tabber_contents_item_rich_text" style="margin-top: 0px; margin-bottom: 0px;">
                                                                                                            <p style="margin: 0;">If you're interested in how to save additional money on taxes by filing your business as an S Corporation,<a style="font-weight: 900;" href="s-corporation-tax-calculator/index.html"
                                                                                                                    target="_blank" rel="noopener"> check out our S Corporation Tax Calculator. </a></p>
                                                                                                        </div>




                                                                                                    </div>








                                                                                                    <div class="ad_tabber_contents_item widget_1613735646530_3_1" data-id="widget_1613735646530_3" data-scrollid="widget_1613735646530_3">





                                                                                                        <div class="ad_tabber_contents_item_rich_text" style="margin-top: 24px; margin-bottom: 0px;">
                                                                                                            <h3 style="margin-bottom: 24px;">The C Corporation</h3>
                                                                                                            <p style="margin-bottom: 40px;">A <a style="font-weight: 900;" href="what-is-c-corporation/index.html">C Corp, also known as a C Corporation</a>, is a type of business entity that is formed and regulated
                                                                                                                on a state level. It is created by filing “Articles of Incorporation” with the secretary of state within the state of incorporation. It is the most formal type
                                                                                                                of company and a corporate structure. The policies and cost of creating a C Corp vary from state to state. Factors affecting whether you would want to create a
                                                                                                                C Corp include:</p>
                                                                                                        </div>




                                                                                                    </div>





                                                                                                    <div class="ad_tabber_contents_item widget_1613735646530_3_2" data-id="widget_1613735646530_3">




                                                                                                        <div class="ad_tabber_contents_item_boxed_content">
                                                                                                            <div class="boxed-content-container">

                                                                                                                <div class="boxed-color-box">

                                                                                                                    <ul>
                                                                                                                        <li style="margin-bottom: 16px;">A C Corp has limited liability, so the investors and owners of a C Corp are not generally liable for business debts and other liabilities.</li>
                                                                                                                        <li style="margin-bottom: 16px;">Ownership of a C Corp is determined by who owns stock in the company.</li>
                                                                                                                        <li style="margin-bottom: 16px;">A C Corporation must issue stock.</li>
                                                                                                                        <li style="margin-bottom: 16px;">A C Corporation must hold an Annual General Meeting.</li>
                                                                                                                        <li style="margin-bottom: 16px;">The ownership of a C Corp can be fluid and transferred, depending on who holds stock at a particular moment in time.</li>
                                                                                                                        <li style="margin-bottom: 16px;">Stocks in a C Corp can be bought and sold on a public stock market if the C Corp holds an “Initial Public Offering (IPO)” where it makes it stocks available
                                                                                                                            to the public.</li>
                                                                                                                        <li style="margin-bottom: 16px;">A C Corp is required to have a board of directors.</li>
                                                                                                                        <li style="margin-bottom: 16px;">A C Corp can raise more finances by issuing stock.</li>
                                                                                                                        <li style="margin-bottom: 16px;">A C Corp is required to meet numerous rules and regulations.</li>
                                                                                                                        <li>Money earned by a C Corp may be subject to “double taxation.”</li>
                                                                                                                    </ul>

                                                                                                                </div>
                                                                                                            </div>

                                                                                                        </div>



                                                                                                    </div>





                                                                                                    <div class="ad_tabber_contents_item widget_1613735646530_3_3 last-item" data-id="widget_1613735646530_3">





                                                                                                        <div class="ad_tabber_contents_item_rich_text" style="margin-top: 0px; margin-bottom: 0px;">
                                                                                                            <h3 style="margin-bottom: 24px;">How Taxes Work In A C Corp</h3>
                                                                                                            <p style="margin-bottom: 48px;">Unlike the the Limited Liability Company and the S Corporation, a corporation is required to file a corporate tax return and pay corporation taxes on any profits.
                                                                                                                When those taxes are paid to shareholders as dividends, they will also be subjected to taxation on that individual’s tax return. This is known as “double taxation.”</p>
                                                                                                            <h3 style="margin-bottom: 24px;">C-Corporation Tax Rates</h3>
                                                                                                            <p style="margin-bottom: 24px;">C-Corporation tax rates are as follows:</p>
                                                                                                            <table class="taxes-c-corp-table" style="width: 100%;" data-table="two-col">
                                                                                                                <tbody>
                                                                                                                    <tr>
                                                                                                                        <td>
                                                                                                                            <p style="margin: 0;">Profit up to $50,000</p>
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                            <p style="margin: 0;"><mark>15%</mark></p>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td>
                                                                                                                            <p style="margin: 0;">$50,000 - $75,000</p>
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                            <p style="margin: 0;"><mark>25%</mark></p>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td>
                                                                                                                            <p style="margin: 0;">$75,000 - $100,000</p>
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                            <p style="margin: 0;"><mark>34%</mark></p>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td>
                                                                                                                            <p style="margin: 0;">$100,000 - $335,000</p>
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                            <p style="margin: 0;"><mark>39%</mark></p>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td>
                                                                                                                            <p style="margin: 0;">$335,000 - $10,000,000</p>
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                            <p style="margin: 0;"><mark>34%</mark></p>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td>
                                                                                                                            <p style="margin: 0;">$10,000,000 - $15,000,000</p>
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                            <p style="margin: 0;"><mark>35%</mark></p>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td>
                                                                                                                            <p style="margin: 0;">$15,000,000 - $18,333,333</p>
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                            <p style="margin: 0;"><mark>38%</mark></p>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td>
                                                                                                                            <p style="margin: 0;">More than $18,333,333 — 35%</p>
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                            <p style="margin: 0;"><mark>35%</mark></p>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </tbody>
                                                                                                            </table>
                                                                                                        </div>




                                                                                                    </div>








                                                                                                    <div class="ad_tabber_contents_item widget_1613735646530_4_1 last-item" data-id="widget_1613735646530_4" data-scrollid="widget_1613735646530_4">





                                                                                                        <div class="ad_tabber_contents_item_rich_text" style="margin-top: 24px; margin-bottom: 0px;">
                                                                                                            <h3 style="margin-bottom: 24px;">The Nonprofit Corporation</h3>
                                                                                                            <p style="margin-bottom: 32px;">A <a href="what-is-non-profit-corporation/index.html">Nonprofit Corporation</a> is a type of corporation that donates any revenues generated to achieve a specific
                                                                                                                goal that is of public benefit. Nonprofit corporations are allowed to create profits, however those profits must be used to preserve the existence and expansion
                                                                                                                of the corporation.</p>
                                                                                                            <p style="margin-bottom: 48px;">In the United States, a nonprofit corporation is formed by filing articles of incorporation in the state in which it will operate. Incorporating the nonprofit creates
                                                                                                                a legal entity and enables the organization to be treated as a corporation by law, granting it the same rights and privileges afforded to for-profit corporations.</p>
                                                                                                            <h3 style="margin-bottom: 24px;">How Taxes Work In A Nonprofit</h3>
                                                                                                            <p style="margin-bottom: 24px;">Unlike the the Limited Liability Company and the S Corporation, a corporation is required to file a corporate tax return and pay corporation taxes on any profits.
                                                                                                                When those taxes are paid to shareholders as dividends, they will also be subjected to taxation on that individual’s tax return. This is known as “double taxation.”</p>
                                                                                                            <table class="taxes-nonprofit-table" style="width: 100%;" data-table="three-col">
                                                                                                                <tbody>
                                                                                                                    <tr>
                                                                                                                        <td>
                                                                                                                            <p style="margin: 0;">Fedaral tax</p>
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                            <hr>
                                                                                                                        </td>
                                                                                                                        <td><img alt="Cross Icon" src="hubfs/Incfile_February_2021/images/close_x.svg"></td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td>
                                                                                                                            <p style="margin: 0;">Sales tax</p>
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                            <hr>
                                                                                                                        </td>
                                                                                                                        <td><img alt="Cross Icon" src="hubfs/Incfile_February_2021/images/close_x.svg"></td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td>
                                                                                                                            <p style="margin: 0;">Property tax</p>
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                            <hr>
                                                                                                                        </td>
                                                                                                                        <td><img alt="Cross Icon" src="hubfs/Incfile_February_2021/images/close_x.svg"></td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td>
                                                                                                                            <p style="margin: 0;">Payroll tax</p>
                                                                                                                        </td>
                                                                                                                        <td><img alt="Check" src="hubfs/Incfile_February_2021/images/fill_checklist.svg"></td>
                                                                                                                        <td>
                                                                                                                            <hr>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td>
                                                                                                                            <p style="margin: 0;">Taxes on income unrelated to the main purpose</p>
                                                                                                                        </td>
                                                                                                                        <td><img alt="Check" src="hubfs/Incfile_February_2021/images/fill_checklist.svg"></td>
                                                                                                                        <td>
                                                                                                                            <hr>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </tbody>
                                                                                                            </table>
                                                                                                        </div>




                                                                                                    </div>








                                                                                                    <div class="ad_tabber_contents_item widget_1613735646530_5_1 last-item" data-id="widget_1613735646530_5" data-scrollid="widget_1613735646530_5">





                                                                                                        <div class="ad_tabber_contents_item_rich_text" style="margin-top: 24px; margin-bottom: 0px;">
                                                                                                            <h3 style="margin-bottom: 24px;">A Note on Sole Proprietorships and Partnerships</h3>
                                                                                                            <p style="margin-bottom: 32px;">Before closing, a word on sole-proprietorships and partnerships: although these may not be “formal” business entities, some people may choose to complete work as a
                                                                                                                sole proprietor or partner. In these cases, there’s generally no separate business entity — the business and the proprietor (or partnership) are effectively one
                                                                                                                and the same. This means all income, expenses and other financial matters would be reported on an individual’s personal tax return, and they’d pay tax accordingly.
                                                                                                                It also means there’s no separation for areas like personal liability.</p>
                                                                                                            <p style="margin-bottom: 0;">We always recommend setting up a formal business entity — it keeps everything neater, removes personal liability for your business, and may have several tax advantages.
                                                                                                                Incorporate your business today using <a style="font-weight: 900;" href="https://orders.incfile.com/form-order-now.php" rel="noopener" target="_blank" targrt="_blank">Incfile's three easy steps to online business formation.</a></p>
                                                                                                        </div>




                                                                                                    </div>




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

                    <div class="row-fluid-wrapper row-depth-1 row-number-1 dnd_area-row-0-force-full-width-section dnd-section dnd_area-row-0-padding">
                        <div class="row-fluid ">
                            <div class="span12 widget-span widget-type-cell dnd-column" style="" data-widget-type="cell" data-x="0" data-w="12">

                                <div class="row-fluid-wrapper row-depth-1 row-number-2 dnd-row">
                                    <div class="row-fluid ">
                                        <div class="span12 widget-span widget-type-custom_widget dnd-module" style="" data-widget-type="custom_widget" data-x="0" data-w="12">
                                            <div id="hs_cos_wrapper_widget_1615203080926" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module" style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                                <div class="bsc-container">
                                                    <div class="oval__Wrapper-sc">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 720 720">
<defs>
<lineargradient id="bottom-right-transparent-green1_inline_svg__a" x1="100%" x2="100%" y1="95.674%" y2="0%">
  <stop offset="0%" stop-color="#FFF" stop-opacity="0"></stop>
  <stop offset="100%" stop-color="#D5F3E8"></stop>
</lineargradient>
</defs>
<path fill="url(#bottom-right-transparent-green1_inline_svg__a)" fill-rule="evenodd" d="M720 0v720H0C0 322.355 322.355 0 720 0z"></path>
</svg>
                                                    </div>
                                                    <div class="heading-center__Wrapper">
                                                        <div class="page-center">
                                                            <div class="content-center__Wrapper">
                                                                <div class="content-center__Content">
                                                                    <h2 class="heading__HeadingWrapper">Lorem ipsum dolor sit amet.</h2>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="page-center">
                                                        <div class="content-center__Wrapper">
                                                            <div class="content-center__Content">
                                                                <div class="comparison-chart-table__Wrapper">
                                                                    <div class="comparison-chart-table__Curve">
                                                                        <svg width="29" height="25" xmlns="http://www.w3.org/2000/svg">
      <path d="M29 1.389c0 .746-.599 1.349-1.354 1.384a26.869 26.869 0 00-12.317 3.66C8.575 10.388 4.231 16.836 2.785 23.885A1.4 1.4 0 011.408 25c-.89 0-1.556-.806-1.38-1.666 1.599-7.79 6.398-14.916 13.863-19.286A29.704 29.704 0 0127.54.002C28.337-.036 29 .602 29 1.387v.002z" fill="#FD8550" fill-rule="evenodd"></path>
    </svg>
                                                                    </div>
                                                                    <div class="white-box__Wrapper">
                                                                        <div class="grid-table-row__Cell">
                                                                            <span class="span-as-heading__HeadingWrapper-sc">Lorem, ipsum dolor.</span>
                                                                        </div>
                                                                        <div class="grid-table-row__Cell">
                                                                            <span class="span-as-heading__HeadingWrapper-sc">lorem</span>
                                                                        </div>
                                                                        <div class="grid-table-row__Cell">
                                                                            <span class="span-as-heading__HeadingWrapper-sc">lorem</span>
                                                                        </div>
                                                                        <div class="grid-table-row__Cell">
                                                                            <span class="span-as-heading__HeadingWrapper-sc">loerm</span>
                                                                        </div>
                                                                        <div class="grid-table-row__Cell">
                                                                            <span class="span-as-heading__HeadingWrapper-sc">lorem</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="comparison-chart-table__TabsWrapper ">

                                                                        <div class="comparison-chart-table__TabBox  active">

                                                                            <div class="comparison-chart-table__Separator">
                                                                                <span>lorem</span>
                                                                            </div>

                                                                            <button class="comparison-chart-table__Button" data-id="widget_1615203080926-protection1">
        <div class="comparison-chart-table__Icon">
          <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" fill-rule="evenodd">
              <circle fill="#FEF6ED" cx="16" cy="16" r="16"></circle>
              <path d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z" fill="#FD8550"></path>
            </g>
          </svg>
        </div>
        <div class="comparison-chart-table__Content">
          <div class="white-box__Wrappergrid-table-row">
            <div class="grid-table-row__Cell">
              <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
          </div>
        </div>
      </button>
                                                                            <div class="accordion-panel " style="display: block;" data-id="widget_1615203080926-protection1">
                                                                                <div class="comparison-chart-table__PanelWrapper">
                                                                                    <div class="comparison-chart-table__Grid-sc">
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam, quia?</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, saepe!.</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, ea!</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, ducimus.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="comparison-chart-table__TabBox ">

                                                                            <div class="comparison-chart-table__Separator">
                                                                                <span>Lorem, ipsum dolor.</span>
                                                                            </div>

                                                                            <button class="comparison-chart-table__Button" data-id="widget_1615203080926-statefilingfees2">
        <div class="comparison-chart-table__Icon">
          <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" fill-rule="evenodd">
              <circle fill="#FEF6ED" cx="16" cy="16" r="16"></circle>
              <path d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z" fill="#FD8550"></path>
            </g>
          </svg>
        </div>
        <div class="comparison-chart-table__Content">
          <div class="white-box__Wrappergrid-table-row">
            <div class="grid-table-row__Cell">
              <p class="paragraph__StyledParagraph">Lorem, ipsum dolor.</p>
            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
          </div>
        </div>
      </button>
                                                                            <div class="accordion-panel " data-id="widget_1615203080926-statefilingfees2">
                                                                                <div class="comparison-chart-table__PanelWrapper">
                                                                                    <div class="comparison-chart-table__Grid-sc">
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi, voluptas!</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, accusamus!</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, rem!.</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, minus..</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="comparison-chart-table__TabBox ">

                                                                            <button class="comparison-chart-table__Button" data-id="widget_1615203080926-3">
        <div class="comparison-chart-table__Icon">
          <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" fill-rule="evenodd">
              <circle fill="#FEF6ED" cx="16" cy="16" r="16"></circle>
              <path d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z" fill="#FD8550"></path>
            </g>
          </svg>
        </div>
        <div class="comparison-chart-table__Content">
          <div class="white-box__Wrappergrid-table-row">
            <div class="grid-table-row__Cell">
              <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
          </div>
        </div>
      </button>
                                                                            <div class="accordion-panel " data-id="widget_1615203080926-3">
                                                                                <div class="comparison-chart-table__PanelWrapper">
                                                                                    <div class="comparison-chart-table__Grid-sc">
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, minima..</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, dolorum.</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate, corporis!.</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos, pariatur.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="comparison-chart-table__TabBox ">

                                                                            <div class="comparison-chart-table__Separator">
                                                                                <span>Lorem, ipsum dolor.</span>
                                                                            </div>

                                                                            <button class="comparison-chart-table__Button" data-id="widget_1615203080926-managingyourbusinessfees4">
        <div class="comparison-chart-table__Icon">
          <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" fill-rule="evenodd">
              <circle fill="#FEF6ED" cx="16" cy="16" r="16"></circle>
              <path d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z" fill="#FD8550"></path>
            </g>
          </svg>
        </div>
        <div class="comparison-chart-table__Content">
          <div class="white-box__Wrappergrid-table-row">
            <div class="grid-table-row__Cell">
              <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <span class="circle__Wrapper-sc"></span>

            </div>
            <div class="grid-table-row__Cell">

              <span class="circle__Wrapper-sc"></span>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
          </div>
        </div>
      </button>
                                                                            <div class="accordion-panel " data-id="widget_1615203080926-managingyourbusinessfees4">
                                                                                <div class="comparison-chart-table__PanelWrapper">
                                                                                    <div class="comparison-chart-table__Grid-sc">
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">loreem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, nesciunt.</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, eius.</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, corrupti..</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, ad?</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="comparison-chart-table__TabBox ">

                                                                            <button class="comparison-chart-table__Button" data-id="widget_1615203080926-5">
        <div class="comparison-chart-table__Icon">
          <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" fill-rule="evenodd">
              <circle fill="#FEF6ED" cx="16" cy="16" r="16"></circle>
              <path d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z" fill="#FD8550"></path>
            </g>
          </svg>
        </div>
        <div class="comparison-chart-table__Content">
          <div class="white-box__Wrappergrid-table-row">
            <div class="grid-table-row__Cell">
              <p class="paragraph__StyledParagraph">Lorem, ipsum dolor.</p>
            </div>
            <div class="grid-table-row__Cell">

              <p class="paragraph__StyledParagraph">lorem</p>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
          </div>
        </div>
      </button>
                                                                            <div class="accordion-panel " data-id="widget_1615203080926-5">
                                                                                <div class="comparison-chart-table__PanelWrapper">
                                                                                    <div class="comparison-chart-table__Grid-sc">
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, laborum.</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, ratione!</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, officia.</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit..</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="comparison-chart-table__TabBox ">

                                                                            <button class="comparison-chart-table__Button" data-id="widget_1615203080926-6">
        <div class="comparison-chart-table__Icon">
          <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" fill-rule="evenodd">
              <circle fill="#FEF6ED" cx="16" cy="16" r="16"></circle>
              <path d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z" fill="#FD8550"></path>
            </g>
          </svg>
        </div>
        <div class="comparison-chart-table__Content">
          <div class="white-box__Wrappergrid-table-row">
            <div class="grid-table-row__Cell">
              <p class="paragraph__StyledParagraph">Lorem, ipsum.</p>
            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
          </div>
        </div>
      </button>
                                                                            <div class="accordion-panel " data-id="widget_1615203080926-6">
                                                                                <div class="comparison-chart-table__PanelWrapper">
                                                                                    <div class="comparison-chart-table__Grid-sc">
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, deserunt..</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum totam nihil, tenetur cum mollitia minima et voluptates inventore ipsam fuga.</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio aspernatur facilis voluptas harum inventore maiores dicta officiis eveniet, itaque quam!</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente enim illum modi quasi architecto, ad repudiandae vel totam doloribus obcaecati?</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="comparison-chart-table__TabBox ">

                                                                            <button class="comparison-chart-table__Button" data-id="widget_1615203080926-7">
        <div class="comparison-chart-table__Icon">
          <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" fill-rule="evenodd">
              <circle fill="#FEF6ED" cx="16" cy="16" r="16"></circle>
              <path d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z" fill="#FD8550"></path>
            </g>
          </svg>
        </div>
        <div class="comparison-chart-table__Content">
          <div class="white-box__Wrappergrid-table-row">
            <div class="grid-table-row__Cell">
              <p class="paragraph__StyledParagraph">lorem</p>
            </div>
            <div class="grid-table-row__Cell">

              <p class="paragraph__StyledParagraph">lorem</p>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
          </div>
        </div>
      </button>
                                                                            <div class="accordion-panel " data-id="widget_1615203080926-7">
                                                                                <div class="comparison-chart-table__PanelWrapper">
                                                                                    <div class="comparison-chart-table__Grid-sc">
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorrem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur aut est sunt voluptatem quod et iure, nobis impedit minus quidem!.</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate iure illo fugit delectus voluptatibus suscipit explicabo doloribus libero sint officia.</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis provident laboriosam sapiente quos dignissimos cupiditate fuga enim nesciunt quod iure!</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia consequuntur quo deleniti aperiam quia minus quam dicta voluptate minima aliquam!</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="comparison-chart-table__TabBox ">

                                                                            <div class="comparison-chart-table__Separator">
                                                                                <span>TAX</span>
                                                                            </div>

                                                                            <button class="comparison-chart-table__Button" data-id="widget_1615203080926-tax8">
        <div class="comparison-chart-table__Icon">
          <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" fill-rule="evenodd">
              <circle fill="#FEF6ED" cx="16" cy="16" r="16"></circle>
              <path d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z" fill="#FD8550"></path>
            </g>
          </svg>
        </div>
        <div class="comparison-chart-table__Content">
          <div class="white-box__Wrappergrid-table-row">
            <div class="grid-table-row__Cell">
              <p class="paragraph__StyledParagraph">Lorem, ipsum.</p>
            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <span class="circle__Wrapper-sc"></span>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
          </div>
        </div>
      </button>
                                                                            <div class="accordion-panel " data-id="widget_1615203080926-tax8">
                                                                                <div class="comparison-chart-table__PanelWrapper">
                                                                                    <div class="comparison-chart-table__Grid-sc">
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi quaerat ipsa eveniet nesciunt, tempore temporibus error veniam consequuntur ratione illo!</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit similique earum nisi harum consequuntur ratione voluptas impedit obcaecati commodi. Error commodi aliquid, officia nostrum quos non dignissimos quidem quas ipsum.</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, exercitationem! Qui, laudantium eaque. Provident, quibusdam quas. Facere eius illo ea!.</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia minima aliquid laborum perferendis aperiam nihil soluta tempora architecto alias quo.</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="comparison-chart-table__TabBox ">

                                                                            <button class="comparison-chart-table__Button" data-id="widget_1615203080926-9">
        <div class="comparison-chart-table__Icon">
          <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" fill-rule="evenodd">
              <circle fill="#FEF6ED" cx="16" cy="16" r="16"></circle>
              <path d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z" fill="#FD8550"></path>
            </g>
          </svg>
        </div>
        <div class="comparison-chart-table__Content">
          <div class="white-box__Wrappergrid-table-row">
            <div class="grid-table-row__Cell">
              <p class="paragraph__StyledParagraph">Lorem, ipsum.</p>
            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#F1A0A0" cx="16" cy="16" r="16"></circle><path d="M11.78 10.263L16 14.484l4.22-4.221a1 1 0 011.415 0l.102.102a1 1 0 010 1.414L17.516 16l4.221 4.22a1 1 0 010 1.415l-.102.102a1 1 0 01-1.414 0L16 17.516l-4.22 4.221a1 1 0 01-1.415 0l-.102-.102a1 1 0 010-1.414L14.484 16l-4.221-4.22a1 1 0 010-1.415l.102-.102a1 1 0 011.414 0z" fill="#FFF"></path></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#F1A0A0" cx="16" cy="16" r="16"></circle><path d="M11.78 10.263L16 14.484l4.22-4.221a1 1 0 011.415 0l.102.102a1 1 0 010 1.414L17.516 16l4.221 4.22a1 1 0 010 1.415l-.102.102a1 1 0 01-1.414 0L16 17.516l-4.22 4.221a1 1 0 01-1.415 0l-.102-.102a1 1 0 010-1.414L14.484 16l-4.221-4.22a1 1 0 010-1.415l.102-.102a1 1 0 011.414 0z" fill="#FFF"></path></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#F1A0A0" cx="16" cy="16" r="16"></circle><path d="M11.78 10.263L16 14.484l4.22-4.221a1 1 0 011.415 0l.102.102a1 1 0 010 1.414L17.516 16l4.221 4.22a1 1 0 010 1.415l-.102.102a1 1 0 01-1.414 0L16 17.516l-4.22 4.221a1 1 0 01-1.415 0l-.102-.102a1 1 0 010-1.414L14.484 16l-4.221-4.22a1 1 0 010-1.415l.102-.102a1 1 0 011.414 0z" fill="#FFF"></path></g></svg>

            </div>
          </div>
        </div>
      </button>
                                                                            <div class="accordion-panel " data-id="widget_1615203080926-9">
                                                                                <div class="comparison-chart-table__PanelWrapper">
                                                                                    <div class="comparison-chart-table__Grid-sc">
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet.</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, expedita.</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, eaque?</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste maiores ipsum accusantium sint necessitatibus quae vero porro eius dolores sit!</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="comparison-chart-table__TabBox ">

                                                                            <button class="comparison-chart-table__Button" data-id="widget_1615203080926-10">
        <div class="comparison-chart-table__Icon">
          <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg">
            <g fill="none" fill-rule="evenodd">
              <circle fill="#FEF6ED" cx="16" cy="16" r="16"></circle>
              <path d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z" fill="#FD8550"></path>
            </g>
          </svg>
        </div>
        <div class="comparison-chart-table__Content">
          <div class="white-box__Wrappergrid-table-row">
            <div class="grid-table-row__Cell">
              <p class="paragraph__StyledParagraph">Tax Exempt</p>
            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#F1A0A0" cx="16" cy="16" r="16"></circle><path d="M11.78 10.263L16 14.484l4.22-4.221a1 1 0 011.415 0l.102.102a1 1 0 010 1.414L17.516 16l4.221 4.22a1 1 0 010 1.415l-.102.102a1 1 0 01-1.414 0L16 17.516l-4.22 4.221a1 1 0 01-1.415 0l-.102-.102a1 1 0 010-1.414L14.484 16l-4.221-4.22a1 1 0 010-1.415l.102-.102a1 1 0 011.414 0z" fill="#FFF"></path></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#F1A0A0" cx="16" cy="16" r="16"></circle><path d="M11.78 10.263L16 14.484l4.22-4.221a1 1 0 011.415 0l.102.102a1 1 0 010 1.414L17.516 16l4.221 4.22a1 1 0 010 1.415l-.102.102a1 1 0 01-1.414 0L16 17.516l-4.22 4.221a1 1 0 01-1.415 0l-.102-.102a1 1 0 010-1.414L14.484 16l-4.221-4.22a1 1 0 010-1.415l.102-.102a1 1 0 011.414 0z" fill="#FFF"></path></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#F1A0A0" cx="16" cy="16" r="16"></circle><path d="M11.78 10.263L16 14.484l4.22-4.221a1 1 0 011.415 0l.102.102a1 1 0 010 1.414L17.516 16l4.221 4.22a1 1 0 010 1.415l-.102.102a1 1 0 01-1.414 0L16 17.516l-4.22 4.221a1 1 0 01-1.415 0l-.102-.102a1 1 0 010-1.414L14.484 16l-4.221-4.22a1 1 0 010-1.415l.102-.102a1 1 0 011.414 0z" fill="#FFF"></path></g></svg>

            </div>
            <div class="grid-table-row__Cell">

              <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg>

            </div>
          </div>
        </div>
      </button>
                                                                            <div class="accordion-panel " data-id="widget_1615203080926-10">
                                                                                <div class="comparison-chart-table__PanelWrapper">
                                                                                    <div class="comparison-chart-table__Grid-sc">
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea, nulla.</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias, tempora.</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, magni!.</p>
                                                                                        </div>
                                                                                        <div class="comparison-chart-table__Column">
                                                                                            <p class="p-to-heading__HeadingWrapper">lorem</p>
                                                                                            <p class="paragraph__StyledParagraph">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, itaque..</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

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
                                                                @foreach ($cards as $card )
                                                                <div class="get-started-right-business-features-item">





                                                                    <a href="{{$card->link}}">

                                                                        <div class="card pt-3 text-center" style="width:100%;">



                                                                            <img class="card-img-top" src="{{asset('Upload/cards/'.$card->image)}}" style="width: 30%;"  alt="Card image cap">

                                                                            <div class="card-body">
                                                                                <div class="d-flex justify-content-between">
                                                                                    <h5 class="card-title">{{$card->heading}}</h5>

                                                                                    <a href="#" class="float-right"> <span class="circle__IconWrapper">
                                                                                      <svg width="12" height="11" xmlns="http://www.w3.org/2000/svg"><path d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z" fill="#1D1D1D" fill-rule="nonzero"></path></svg>
                                                                                    </span></a>
                                                                                </div>

                                                                            </div>
                                                                          </div>
                                                                    </a>
                                                                </div>
                                                                @endforeach





                                                                {{-- <div class="get-started-right-business-features-item">







                                                                    <a href="#" target="_blank" rel="noopener">

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
                                                                </div> --}}


                                                            </div>
                                                        </div>


                                                        {{-- <div class="get-started-right-business-bottom-btn">








                                                            <a class="hs-button" href="#" target="_blank" rel="noopener">
                                                                <span>Get started</span>
                                                                <div class="button__Arrow">
                                                                    <svg width="12" height="11" xmlns="http://www.w3.org/2000/svg"><path d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z" fill="#1D1D1D" fill-rule="nonzero"></path></svg>
                                                                </div>
                                                            </a>

                                                        </div> --}}


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
                                                                <img src="{{asset('Upload/launch/'.$launch->image)}}" class="img-fluid" alt="">
                                                            </div>
                                                        </div>

                                                        <div class="rocket__Content">
                                                            <div>
                                                                <h2>{{$launch->heading}}</h2>
                                                                <p>{{$launch->text}}</p>








                                                                <a href="{{$launch->button_link}}" target="_blank" rel="noopener" class="hs-button btn-with-icon">
    {{$launch->button_name}}
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
