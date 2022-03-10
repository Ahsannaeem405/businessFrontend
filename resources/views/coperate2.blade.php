@extends('layout.main')
{{-- navtab link css --}}
<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41951289498/1620380498964/module_41951289498_Benefits_Tabber.min.css')}}">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
<style>
    .accordion .accordion-item {
  border-bottom: 1px solid #e5e5e5;
}

.accordion .accordion-item button[aria-expanded='true'] {
  border-bottom: 1px solid #03b5d2;
}

.accordion button {
  position: relative;
  display: block;
  text-align: left;
  width: 100%;
  padding: 1em 0;
  color: #7288a2;
  font-size: 1.15rem;
  font-weight: 400;
  border: none;
  background: none;
  outline: none;
}

.accordion button:hover,
.accordion button:focus {
  cursor: pointer;
  color: #03b5d2;
}

.accordion button:hover::after,
.accordion button:focus::after {
  cursor: pointer;
  color: #03b5d2;
  border: 1px solid #03b5d2;
}

.accordion button .accordion-title {
  padding: 1em 1.5em 1em 0;
}

.accordion button .icon {
  display: inline-block;
  position: absolute;
  top: 18px;
  right: 0;
  width: 22px;
  height: 22px;
  border: 1px solid;
  border-radius: 22px;
}

.accordion button .icon::before {
  display: block;
  position: absolute;
  content: '';
  top: 9px;
  left: 5px;
  width: 10px;
  height: 2px;
  background: currentColor;
}
.accordion button .icon::after {
  display: block;
  position: absolute;
  content: '';
  top: 5px;
  left: 9px;
  width: 2px;
  height: 10px;
  background: currentColor;
}

.accordion button[aria-expanded='true'] {
  color: #03b5d2;
}
.accordion button[aria-expanded='true'] .icon::after {
  width: 0;
}
.accordion button[aria-expanded='true'] + .accordion-content {
  opacity: 1;
  max-height: 9em;
  transition: all 200ms linear;
  will-change: opacity, max-height;
}
.accordion .accordion-content {
  opacity: 0;
  max-height: 0;
  overflow: hidden;
  transition: opacity 200ms linear, max-height 200ms linear;
  will-change: opacity, max-height;
}
.accordion .accordion-content p {
  font-size: 1rem;
  font-weight: 300;
  margin: 2em 0;
}


</style>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Rubik&display=swap");

/*==================== VARIABLES CSS ====================*/
:root {
  /*========== Colors ==========*/
  /* Change favorite color - Blue 210 - Purple 250 - Green 142 - Pink 340*/
  --hue-color: 210;

  /* HSL color mode */
  --first-color: hsl(var(--hue-color), 96%, 54%);
  --first-color-light: hsl(var(--hue-color), 96%, 69%);
  --first-color-alt: hsl(var(--hue-color), 96%, 37%);
  --first-color-lighter: hsl(var(--hue-color), 14%, 96%);
  --title-color: hsl(var(--hue-color), 12%, 15%);
  --text-color: hsl(var(--hue-color), 12%, 35%);
  --text-color-light: hsl(var(--hue-color), 12%, 65%);
  --white-color: #FFF;
  --body-color: hsl(var(--hue-color), 100%, 99%);
  --container-color: #FFF;

  /*========== Font and typography ==========*/
  --body-font: 'Lato', sans-serif;
  --pricing-font: 'Rubik', sans-serif;
  --biggest-font-size: 1.75rem;
  --normal-font-size: .938rem;
  --h2-font-size: 1.25rem;
  --small-font-size: .813rem;
  --smaller-font-size: .75rem;
  --tiny-font-size: .625rem;

  /*========== Margenes Bottom ==========*/
  --mb-0-25: .25rem;
  --mb-0-5: .5rem;
  --mb-1: 1rem;
  --mb-1-25: 1.25rem;
  --mb-1-5: 1.5rem;
  --mb-2: 2rem;
}

@media screen and (min-width: 968px) {
  :root {
    --biggest-font-size: 2.125rem;
    --h2-font-size: 1.5rem;
    --normal-font-size: 1rem;
    --small-font-size: .875rem;
    --smaller-font-size: .813rem;
    --tiny-font-size: .688rem;
  }
}

/*==================== BASE ====================*/




ul {
  list-style: none;
}

img {
  max-width: 100%;
  height: auto;
}

/*==================== REUSABLE CSS CLASSES ====================*/
.container {
  max-width: 1024px;
  margin-left: var(--mb-1-5);
  margin-right: var(--mb-1-5);
}

.grid {
  display: grid;
}

/*==================== CARD PRICING ====================*/
.card {
  padding: 3rem 0;
  border:none !important;
}
.card:hover{
    box-shadow: none !important;
}

.card__container {
  gap: 3rem 1.25rem;
}

.card__content {
  position: relative;
  background-color: var(--container-color);
  padding: 2rem 1.5rem 2.5rem;
  border-radius: 1.75rem;
  /* box-shadow: 0 12px 24px hsla(var(--hue-color), 61%, 16%, 0.1); */
  transition: .4s;
}

.card__content:hover {
  box-shadow: 0 16px 24px hsla(var(--hue-color), 61%, 16%, 0.15);
}

.card__header-img {
  width: 30px;
  height: 30px;
}

.card__header-circle {
  width: 40px;
  height: 40px;
  background-color: var(--first-color-lighter);
  border-radius: 50%;
  margin-bottom: var(--mb-1);
  place-items: center;
}

.card__header-subtitle {
  display: block;
  font-size: var(--smaller-font-size);
  color: var(--text-color-light);
  text-transform: uppercase;
  margin-bottom: var(--mb-0-25);
}

.card__header-title {
  font-size: var(--biggest-font-size);
  color: var(--title-color);
  margin-bottom: var(--mb-1);
}

.card__pricing {
  position: absolute;
  background: linear-gradient(157deg, var(--first-color-light) -12%, var(--first-color) 109%);
  width: 60px;
  height: 88px;
  right: 1.5rem;
  top: -1rem;
  padding-top: 1.25rem;
  text-align: center;
}

.card__pricing-number {
  font-family: var(--pricing-font);
}

.card__pricing-symbol {
  font-size: var(--smaller-font-size);
}

.card__pricing-number {
  font-size: var(--h2-font-size);
}

.card__pricing-month {
  display: block;
  font-size: var(--tiny-font-size);
}

.card__pricing-number,
.card__pricing-month {
  color: var(--white-color);
}

.card__pricing::after,
.card__pricing::before {
  content: '';
  position: absolute;
}

.card__pricing::after {
  width: 100%;
  height: 14px;
  background-color: var(--white-color);
  left: 0;
  bottom: 0;
  clip-path: polygon(0 100%, 50% 0, 100% 100%);
}

.card__pricing::before {
  width: 14px;
  height: 16px;
  background-color: var(--first-color-alt);
  top: 0;
  left: -14px;
  clip-path: polygon(0 100%, 100% 0, 100% 100%);
}

.card__list {
  row-gap: .5rem;
  margin-bottom: var(--mb-2);
}

.card__list-item {
  display: flex;
  align-items: center;
}

.card__list-icon {
  font-size: 1.5rem;
  color: var(--first-color);
  margin-right: var(--mb-0-5);
}

.card__button {
  padding: 1.25rem;
  border: none;
  font-size: var(--normal-font-size);
  border-radius: .5rem;
  background: linear-gradient(157deg, var(--first-color-light) -12%, var(--first-color) 109%);
  color: var(--white-color);
  cursor: pointer;
  transition: .4s;
}

.card__button:hover {
  box-shadow: 0 12px 24px hsla(var(--hue-color), 97%, 54%, 0.2);
}

/*==================== MEDIA QUERIES ====================*/
/* For small devices */
@media screen and (max-width: 320px) {
  .container {
    margin-left: var(--mb-1);
    margin-right: var(--mb-1);
  }
  .card__content {
    padding: 2rem 1.25rem;
    border-radius: 1rem;
  }
}

/* For medium devices */
@media screen and (min-width: 568px) {
  .card__container {
    grid-template-columns: repeat(2, 1fr);
  }
  .card__content {
    grid-template-rows: repeat(2, max-content);
  }
  .card__button {
    align-self: flex-end;
  }
}

/* For large devices */
@media screen and (min-width: 968px) {
  .container {
    margin-left: auto;
    margin-right: auto;
  }
  .card {
    height: 100vh;
    align-items: center;
  }
  .card__container {
    grid-template-columns: repeat(3, 1fr);
  }
  .card__header-circle {
    margin-bottom: var(--mb-1-25);
  }
  .card__header-subtitle {
    font-size: var(--small-font-size);
  }
}
</style>
<style>
    .text-dark{
        color: black !important;
    }
    .box{
        border-radius: 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
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
                                <div class="container">
                                    <div class="row p-2 pl-md-5 pr-md-5">
                                        <div class="col-12 text-center">
                                            <h3>Learn more about incorporating in North Dakota</h3>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <h5>North Dakota Filing Time & Price</h5>
                                        </div>
                                        <div class="col-12">
                                            <div class="row box">
                                                <div class="col-md-4 col-6 mt-2 p-2 border-right">
                                                    <p class="text-dark">State Fee</p>
                                                </div>
                                                <div class="col-md-8 col-6 mt-2 p-2">
                                                    <p>$200</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-3">
                                            <div class="row box">
                                                <div class="col-md-4 col-6 mt-2 p-2 border-right">
                                                    <p class="text-dark">State Filing Time</p>
                                                </div>
                                                <div class="col-md-8 col-6 mt-2 p-2">
                                                    <p>3 Weeks</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-3">
                                            <div class="row box">
                                                <div class="col-md-4 col-6 mt-2 p-2 border-right">
                                                    <p class="text-dark">Expedited Filing Time</p>
                                                </div>
                                                <div class="col-md-8 col-6 mt-2 p-2">
                                                    <p>5 Business Days</p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row p-2 pl-md-5 pr-md-5">
                                        <div class="col-12 text-center">
                                            <h3>North Dakota Compliance Requirements</h3>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <h5>Annual Report</h5>
                                        </div>
                                        <div class="col-12">
                                            <div class="row box">
                                                <div class="col-md-4 col-6 mt-2 p-2 border-right">
                                                    <p class="text-dark">Frequency: </p>
                                                </div>
                                                <div class="col-md-8 col-6 mt-2 p-2">
                                                    <p>Annually</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-3">
                                            <div class="row box">
                                                <div class="col-md-4 col-6 mt-2 p-2 border-right">
                                                    <p class="text-dark">Due Date : </p>
                                                </div>
                                                <div class="col-md-8 col-6 mt-2 p-2">
                                                    <p>August 1st</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-3">
                                            <div class="row box">
                                                <div class="col-md-4 col-6 mt-2 p-2 border-right">
                                                    <p class="text-dark">Filing Fee:</p>
                                                </div>
                                                <div class="col-md-8 col-6 mt-2 p-2">
                                                    <p>$25</p>
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

                     <section class="card container grid mt-3 mb-3">
                                    <div class="card__container grid">
                                        <!--==================== CARD 1 ====================-->
                                        <article class="card__content grid">
                                            <div class="card__pricing">
                                                <div class="card__pricing-number">
                                                    <span class="card__pricing-symbol">$</span>0
                                                </div>
                                                <span class="card__pricing-month">/month</span>
                                            </div>

                                            <header class="card__header">
                                                {{-- <div class="card__header-circle grid">
                                                    <img src="assets/img/free-coin.png" alt="" class="card__header-img">
                                                </div> --}}

                                                {{-- <span class="card__header-subtitle">Free plan</span> --}}
                                                <h1 class="card__header-title">Silver</h1>
                                            </header>

                                            <ul class="card__list grid">
                                                <li class="card__list-item">
                                                    <i class="uil uil-check card__list-icon"></i>
                                                    <p class="card__list-description">3 user request</p>
                                                </li>

                                            </ul>

                                            <button class="card__button">Choose this plan</button>
                                        </article>

                                        <!--==================== CARD 2 ====================-->
                                        <article class="card__content grid">
                                            <div class="card__pricing">
                                                <div class="card__pricing-number">
                                                    <span class="card__pricing-symbol">$</span>19
                                                </div>
                                                <span class="card__pricing-month">/month</span>
                                            </div>

                                            <header class="card__header">
                                                {{-- <div class="card__header-circle grid">
                                                    <img src="assets/img/pro-coin.png" alt="" class="card__header-img">
                                                </div> --}}

                                                <span class="card__header-subtitle">Everything from silver+</span>
                                                <h1 class="card__header-title">Gold</h1>
                                            </header>

                                            <ul class="card__list grid">
                                                <li class="card__list-item">
                                                    <i class="uil uil-check card__list-icon"></i>
                                                    <p class="card__list-description">100 user request</p>
                                                </li>
                                                <li class="card__list-item">
                                                    <i class="uil uil-check card__list-icon"></i>
                                                    <p class="card__list-description">Unlimited downloads</p>
                                                </li>

                                            </ul>

                                            <button class="card__button">Choose this plan</button>
                                        </article>

                                        <!--==================== CARD 3 ====================-->
                                        <article class="card__content grid">
                                            <div class="card__pricing">
                                                <div class="card__pricing-number">
                                                    <span class="card__pricing-symbol">$</span>29
                                                </div>
                                                <span class="card__pricing-month">/month</span>
                                            </div>

                                            <header class="card__header">
                                                {{-- <div class="card__header-circle grid">
                                                    <img src="assets/img/enterprise-coin.png" alt="" class="card__header-img">
                                                </div> --}}

                                                <span class="card__header-subtitle">Everything from silver & gold+</span>
                                                <h5 class="card__header-title">Platinum</h5>
                                            </header>

                                            <ul class="card__list grid">
                                                <li class="card__list-item">
                                                    <i class="uil uil-check card__list-icon"></i>
                                                    <p class="card__list-description">Unlimited  user request</p>
                                                </li>
                                                <li class="card__list-item">
                                                    <i class="uil uil-check card__list-icon"></i>
                                                    <p class="card__list-description">Unlimited downloads</p>
                                                </li>

                                            </ul>

                                            <button class="card__button">Choose this plan</button>
                                        </article>
                                    </div>
                                </section>
                                <div class="container pl-md-5 pr-md-5">

                                    <div class="accordion">
                                      <div class="accordion-item">
                                        <button id="accordion-button-1" aria-expanded="false">
                                          <span class="accordion-title">Why is the moon sometimes out during the day?</span>
                                          <span class="icon" aria-hidden="true"></span>
                                        </button>
                                        <div class="accordion-content">
                                          <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
                                            Ut tortor pretium viverra suspendisse potenti.
                                          </p>
                                        </div>
                                      </div>
                                      <div class="accordion-item">
                                        <button id="accordion-button-2" aria-expanded="false">
                                          <span class="accordion-title">Why is the sky blue?</span>
                                          <span class="icon" aria-hidden="true"></span>
                                        </button>
                                        <div class="accordion-content">
                                          <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
                                            Ut tortor pretium viverra suspendisse potenti.
                                          </p>
                                        </div>
                                      </div>
                                      <div class="accordion-item">
                                        <button id="accordion-button-3" aria-expanded="false">
                                          <span class="accordion-title">Will we ever discover aliens?</span>
                                          <span class="icon" aria-hidden="true"></span>
                                        </button>
                                        <div class="accordion-content">
                                          <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
                                            Ut tortor pretium viverra suspendisse potenti.
                                          </p>
                                        </div>
                                      </div>
                                      <div class="accordion-item">
                                        <button id="accordion-button-4" aria-expanded="false">
                                          <span class="accordion-title">How much does the Earth weigh?</span>
                                          <span class="icon" aria-hidden="true"></span>
                                        </button>
                                        <div class="accordion-content">
                                          <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
                                            Ut tortor pretium viverra suspendisse potenti.
                                          </p>
                                        </div>
                                      </div>
                                      <div class="accordion-item">
                                        <button id="accordion-button-5" aria-expanded="false">
                                          <span class="accordion-title">How do airplanes stay up?</span>
                                          <span class="icon" aria-hidden="true"></span>
                                        </button>
                                        <div class="accordion-content">
                                          <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
                                            Ut tortor pretium viverra suspendisse potenti.
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="container pt-5">
                                      <div class="row">
                                          <div class="col-md-6 col-12 pt-2">
                                            <img src="{{asset('image/whychooseus.png')}}" class="img-fluid" alt="">
                                          </div>
                                          <div class="col-md-6 col-12 pt-2 pt-md-5">
                                            <h3 class="text-dark mt-md-5">
                                                Launch Your Business with Incfile
                                            </h3>
                                            <p>No contracts. No surprises.
                                                Only $0 + state fee to launch your business.</p>
                                                <a class="hs-button" href="#" target="_blank" rel="noopener" aria-label="This link will open in a new tab.">
                                                    <span>Get started</span>

                                                </a>
                                          </div>
                                      </div>
                                  </div>




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


<script>
    const items = document.querySelectorAll('.accordion button');

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');

  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }

  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach((item) => item.addEventListener('click', toggleAccordion));




</script>
@endsection
