@extends('layout.main')


<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41951289498/1620380498964/module_41951289498_Benefits_Tabber.min.css')}}">
<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/template_assets/41952706287/1619548359317/Incfile_February_2021/css/slick.min.css')}}">
<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/1646265821701/module_41952544958_Related_Articles.css')}}">
<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41148244352/1636038378453/module_41148244352_Footer_Social_Icons.min.css')}}">

<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41359297094/1620320068261/module_41359297094_Overlay_Icon.min.css')}}">
<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/1638370530837/module_41216488591_Popup_Video.css')}}">
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
  .video-wrapper_widget_1614259236854 {
    position: relative;
    margin-left: auto;
    margin-right: auto;
    width: 100%;
    max-width: 770px;
  }

  .video-wrapper_widget_1614259236854::before {
    content: '';
    display: block;
    padding-top: 56.2%;
  }

  .video-wrapper_widget_1614259236854 .video-pop-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    max-width: 770px;
    z-index: 5;
  }
</style>


<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/1628597401941/module_41218342583_Boxed_Content.css')}}">

<style>
    .module_1614250351915 .curve__Wrapper path{
      fill:rgba(80, 137, 253,1.0);
    }
    .module_1614250351915 .boxed-color-box{
      background:rgba(254, 247, 224,1.0);
    }

    .module_1614250351915.boxed-content-container {
      margin-right: 18px;
    }
    .carousel-inner{
        max-height: 500px;
    }
    @media (max-width: 991px) {
    .module_1614250351915.boxed-content-container {
      margin-right: 0;
    }
  }


    .module_1614250351915.boxed-content-container .boxed-color-box{
      padding-top:48px;
      padding-bottom:48px;
      padding-left:40px;
      padding-right:48px;
      border-top-left-radius: 5px;
      border-top-right-radius: 50px;
      border-bottom-left-radius: 5px;
      border-bottom-right-radius: 50px;
    }
    .module_1614250351915.boxed-content-container .boxed-color-box ul li:before{
      background-color: rgba(243, 214, 153,1.0);
    }

  </style>
<style>
    .widget_1614250567862 .curve__Wrapper path{
      fill:rgba(80, 137, 253,1.0);
    }
    .widget_1614250567862 .boxed-color-box{
      background:rgba(254, 246, 237,1.0);
    }

    .widget_1614250567862.boxed-content-container {
      margin-right: 18px;
    }

    @media (max-width: 991px) {
    .widget_1614250567862.boxed-content-container {
      margin-right: 0;
    }
  }


    .widget_1614250567862.boxed-content-container .boxed-color-box{
      padding-top:48px;
      padding-bottom:48px;
      padding-left:40px;
      padding-right:48px;
      border-top-left-radius: 5px;
      border-top-right-radius: 50px;
      border-bottom-left-radius: 5px;
      border-bottom-right-radius: 50px;
    }
    .widget_1614250567862.boxed-content-container .boxed-color-box ul li:before{
      background-color: rgba(253, 133, 80,1.0);
    }

  </style>

@section('content')
@include('slider')


        <div class="annual-report-layout">
            <div class="banner-section llc-page-banner">
                <div class="container-fluid banner-area">
                    <div class="row-fluid-wrapper">
                        <div class="row-fluid">
                            <div class="span12 widget-span widget-type-cell " style="" data-widget-type="cell"
                                data-x="0" data-w="12">

                                <div
                                    class="row-fluid-wrapper row-depth-1 row-number-1 dnd-section DND_banner-row-0-force-full-width-section">
                                    <div class="row-fluid ">
                                        <div class="span12 widget-span widget-type-cell dnd-column" style=""
                                            data-widget-type="cell" data-x="0" data-w="12">

                                            <div class="row-fluid-wrapper row-depth-1 row-number-2 dnd-row">
                                                <div class="row-fluid ">
                                                    <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                        style="" data-widget-type="custom_widget" data-x="0"
                                                        data-w="12">
                                                        <div id="hs_cos_wrapper_DND_banner-module-1"
                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                            style="" data-hs-cos-general-type="widget"
                                                            data-hs-cos-type="module">



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
                                                                let requestPath = '/manage-your-company/certificate-of-good-standing';
                                                                let path = requestPath.substring(1).split('../index.html')[0];

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
                                                    <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                        style="" data-widget-type="custom_widget" data-x="0"
                                                        data-w="12">
                                                        <div id="hs_cos_wrapper_widget_1614262813234"
                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                            style="" data-hs-cos-general-type="widget"
                                                            data-hs-cos-type="module">


                                                            <div class="overlay-icon-module overlay_icon_widget_1614262813234   "
                                                                style="
   max-width: 420px;
   max-height: 420px;
   top: 2040.250px;   right: 0;
   transform: rotate(0deg);



   "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 420 420">
                                                                    <defs>
                                                                        <lineargradient
                                                                            id="top-right-transparent-babyblue2_inline_svg__a"
                                                                            x1="100%" x2="100%" y1="95.674%" y2="0%">
                                                                            <stop offset="0%" stop-color="#FFF"
                                                                                stop-opacity="0"></stop>
                                                                            <stop offset="100%" stop-color="#EEF9FE">
                                                                            </stop>
                                                                        </lineargradient>
                                                                    </defs>
                                                                    <path
                                                                        fill="url(#top-right-transparent-babyblue2_inline_svg__a)"
                                                                        fill-rule="evenodd"
                                                                        d="M420 0v420H0C0 188.04 188.04 0 420 0z"
                                                                        transform="matrix(1 0 0 -1 0 420)"></path>
                                                                </svg></div>

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
                                        <div class="span12 widget-span widget-type-cell dnd-column" style=""
                                            data-widget-type="cell" data-x="0" data-w="12">

                                            <div class="row-fluid-wrapper row-depth-1 row-number-5 dnd-row">
                                                <div class="row-fluid ">
                                                    <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                        style="" data-widget-type="custom_widget" data-x="0"
                                                        data-w="12">
                                                        <div id="hs_cos_wrapper_widget_1614262401744"
                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                            style="" data-hs-cos-general-type="widget"
                                                            data-hs-cos-type="module">


                                                            <div class="overlay-icon-module overlay_icon_widget_1614262401744   "
                                                                style="
   max-width: 570px;
   max-height: 570px;
   top: -227px;  left: 0;
   transform: rotate(0deg);



   "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 570 570">
                                                                    <defs>
                                                                        <lineargradient
                                                                            id="top-left-transparent-pink_inline_svg__a"
                                                                            x1="100%" x2="100%" y1="95.674%" y2="0%">
                                                                            <stop offset="0%" stop-color="#FFF"
                                                                                stop-opacity="0"></stop>
                                                                            <stop offset="100%" stop-color="#FAF2F8">
                                                                            </stop>
                                                                        </lineargradient>
                                                                    </defs>
                                                                    <path
                                                                        fill="url(#top-left-transparent-pink_inline_svg__a)"
                                                                        fill-rule="evenodd"
                                                                        d="M570 0v570H0C0 255.198 255.198 0 570 0z"
                                                                        transform="rotate(180 285 285)"></path>
                                                                </svg></div>

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
            <main class="body-container-wrapper llc-page">
                <div id="tabs" class="two-col-section">
                    <div class="page-center">
                        <div class="two-col-section-inner">
                            <div class="two-col_sidebar">
                                <div class="two-col_sidebar-inner">
                                    <div class="container-fluid pages-sidebar-container">
                                        <div class="row-fluid-wrapper">
                                            <div class="row-fluid">
                                                <div class="span12 widget-span widget-type-cell " style=""
                                                    data-widget-type="cell" data-x="0" data-w="12">

                                                    <div
                                                        class="row-fluid-wrapper row-depth-1 row-number-1 sidebar-row-0-padding dnd-section">
                                                        <div class="row-fluid ">
                                                            <div class="span12 widget-span widget-type-cell cell_16142488649482-padding dnd-column"
                                                                style="" data-widget-type="cell" data-x="0" data-w="12">

                                                                <div
                                                                    class="row-fluid-wrapper row-depth-1 row-number-2 dnd-row">
                                                                    <div class="row-fluid ">
                                                                        <div class="span12 widget-span widget-type-custom_widget widget_1614248864336-hidden dnd-module widget_1614248864336-flexbox-positioning"
                                                                            style="" data-widget-type="custom_widget"
                                                                            data-x="0" data-w="12">
                                                                            <div id="hs_cos_wrapper_widget_1614248864336"
                                                                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-linked_image"
                                                                                style=""
                                                                                data-hs-cos-general-type="widget"
                                                                                data-hs-cos-type="module">











                                                                                <span
                                                                                    id="hs_cos_wrapper_widget_1614248864336_"
                                                                                    class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_linked_image"
                                                                                    style=""
                                                                                    data-hs-cos-general-type="widget"
                                                                                    data-hs-cos-type="linked_image"><img
                                                                                        src="{{asset('image/certificate.png')}}"
                                                                                        class="hs-image-widget "
                                                                                        style="max-width: 100%; height: auto;"
                                                                                        alt="What is a Certificate of Good Standing?"
                                                                                        title="What is a Certificate of Good Standing?"></span>
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
                            </div>
                            <div class="two-col_main-section">
                                <div class="container-fluid body-container body-container__website">
                                    <div class="row-fluid-wrapper">
                                        <div class="row-fluid">
                                            <div class="span12 widget-span widget-type-cell " style=""
                                                data-widget-type="cell" data-x="0" data-w="12">

                                                <div
                                                    class="row-fluid-wrapper row-depth-1 row-number-1 dnd-section dnd_area-row-0-padding">
                                                    <div class="row-fluid ">
                                                        <div class="span12 widget-span widget-type-cell cell_16142489146702-padding dnd-column"
                                                            style="" data-widget-type="cell" data-x="0" data-w="12">

                                                            <div
                                                                class="row-fluid-wrapper row-depth-1 row-number-2 dnd-row">
                                                                <div class="row-fluid ">
                                                                    <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                                        style="" data-widget-type="custom_widget"
                                                                        data-x="0" data-w="12">
                                                                        <div id="hs_cos_wrapper_widget_1614248914336"
                                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text"
                                                                            style="" data-hs-cos-general-type="widget"
                                                                            data-hs-cos-type="module"><span
                                                                                id="hs_cos_wrapper_widget_1614248914336_"
                                                                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text"
                                                                                style=""
                                                                                data-hs-cos-general-type="widget"
                                                                                data-hs-cos-type="rich_text">
                                                                                <h3>{{$goods->heading1}}</h3>
                                                                                <p style="margin-bottom: 40px;">{{$goods->detail1}}</p>
                                                                            </span></div>

                                                                    </div>
                                                                    <!--end widget-span -->
                                                                </div>
                                                                <!--end row-->
                                                            </div>
                                                            <!--end row-wrapper -->

                                                            <div
                                                                class="row-fluid-wrapper row-depth-1 row-number-3 dnd-row">
                                                                <div class="row-fluid ">
                                                                    <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                                        style="" data-widget-type="custom_widget"
                                                                        data-x="0" data-w="12">
                                                                        <div id="hs_cos_wrapper_widget_1614259236854"
                                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                                            style="" data-hs-cos-general-type="widget"
                                                                            data-hs-cos-type="module">
                                                                            {{-- <div
                                                                                class="video-wrapper_widget_1614259236854">
                                                                                <div
                                                                                    class="popup-video-container widget_1614259236854 al_left">

                                                                                    <div class="gatsby-image-wrapper">
                                                                                        <div class="pop-video-thumb-bg"
                                                                                            style="background:url('../hubfs/Incfile_February_2021/images/certificate-good-standing-video-thumb-01.jpg') center center / cover; background-size: cover;">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="video-button popup_video_btn_widget_1614259236854">
                                                                                        <span>
                                                                                            <svg viewBox="0 0 17 21"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M3.08.463C1.379-.623 0 .267 0 2.449v16.1c0 2.185 1.379 3.073 3.08 1.988l12.644-8.07c1.701-1.087 1.701-2.847 0-3.933L3.08.463z"
                                                                                                    fill="#FFF"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="video-pop-container popup_video_container_widget_1614259236854">
                                                                                    <div
                                                                                        class="video-pop-container-inner">
                                                                                        <iframe class="video-frame"
                                                                                            title="Incfile Video"
                                                                                            src="#" width="500"
                                                                                            height="349" frameborder="0"
                                                                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                                                            allowfullscreen></iframe>
                                                                                        <!--     <div class="LightBox__Control">
        <button>
          <svg
               xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001">
            <path d="M284.286 256.002L506.143 34.144c7.811-7.811 7.811-20.475 0-28.285-7.811-7.81-20.475-7.811-28.285 0L256 227.717 34.143 5.859c-7.811-7.811-20.475-7.811-28.285 0-7.81 7.811-7.811 20.475 0 28.285l221.857 221.857L5.858 477.859c-7.811 7.811-7.811 20.475 0 28.285a19.938 19.938 0 0014.143 5.857 19.94 19.94 0 0014.143-5.857L256 284.287l221.857 221.857c3.905 3.905 9.024 5.857 14.143 5.857s10.237-1.952 14.143-5.857c7.811-7.811 7.811-20.475 0-28.285L284.286 256.002z"></path>
          </svg>
        </button>
      </div> -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>



                                                                        </div>

                                                                    </div>
                                                                    <!--end widget-span -->
                                                                </div>
                                                                <!--end row-->
                                                            </div>
                                                            <!--end row-wrapper --> --}}

                                                            <div
                                                                class="row-fluid-wrapper row-depth-1 row-number-4 dnd-row">
                                                                <div class="row-fluid ">
                                                                    <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                                        style="" data-widget-type="custom_widget"
                                                                        data-x="0" data-w="12">
                                                                        <div id="hs_cos_wrapper_widget_1614259305357"
                                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text"
                                                                            style="" data-hs-cos-general-type="widget"
                                                                            data-hs-cos-type="module"><span
                                                                                id="hs_cos_wrapper_widget_1614259305357_"
                                                                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text"
                                                                                style=""
                                                                                data-hs-cos-general-type="widget"
                                                                                data-hs-cos-type="rich_text">
                                                                                <h3 style="margin-bottom: 32px;">{{$goods->heading2}}</h3>
                                                                            </span></div>

                                                                    </div>
                                                                    <!--end widget-span -->
                                                                </div>
                                                                <!--end row-->
                                                            </div>
                                                            <!--end row-wrapper -->

                                                            <div
                                                                class="row-fluid-wrapper row-depth-1 row-number-5 dnd-row">
                                                                <div class="row-fluid ">
                                                                    <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                                        style="" data-widget-type="custom_widget"
                                                                        data-x="0" data-w="12">
                                                                        <div id="hs_cos_wrapper_widget_1614259473330"
                                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                                            style="" data-hs-cos-general-type="widget"
                                                                            data-hs-cos-type="module">
                                                                            <div
                                                                                class="widget_1614259473330 content-list-icon-container">

                                                                                <div
                                                                                    class="content-list-icon-items it1 icon-svg">

                                                                                    <svg style="margin-right: 13px;"
                                                                                        width="32" height="32"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M23.49 15.63c-.25.77.49 2.06.58 3a4.689 4.689 0 00-2.26.3 2 2 0 00-.59.95 2 2 0 00-1 .27 1.83 1.83 0 00-.54.81c-.15.37-.27.81-.42 1.21-.2.62-.45 1.16-.9 1.3-1 .32-2.37-1.59-3.46-1.59-1.09 0-2.39 1.8-3.37 1.61V21h.63c-.28-.78-.48-1.68-1-2-.86-.63-3.11.11-3.74-.75-.63-.86.78-2.76.45-3.78S5.3 12.7 5.3 11.61c0-1.09 2.26-1.82 2.58-2.8.25-.77-.49-2.06-.59-3a4.69 4.69 0 002.26-.3 2 2 0 00.59-1c.35-.92.56-2.14 1.27-2.37.24-.06.495-.035.72.07.87.41 1.87 1.56 2.74 1.56 1.09 0 2.48-1.91 3.46-1.59.98.32 1 2.7 1.86 3.32.86.62 3.11-.11 3.74.75.63.86-.77 2.75-.44 3.75s2.58 1.71 2.58 2.8c0 1.09-2.26 1.84-2.58 2.83z"
                                                                                            fill="#fff"></path>
                                                                                        <path
                                                                                            d="M19.13 20.89v8.57l-2.51-3.84-1.34 1.54-.27-.32-3.51 4.02v-9.89l7.63-.08z"
                                                                                            fill="#fff"></path>
                                                                                        <path clip-rule="evenodd"
                                                                                            d="M27.2 11.4c0 1.09-2.26 1.81-2.58 2.8-.32.99 1.06 2.93.44 3.78-.62.85-2.88.12-3.74.75-.86.63-.84 3-1.86 3.32-1.02.32-2.37-1.6-3.46-1.6-1.09 0-2.47 1.92-3.46 1.6-.99-.32-1-2.71-1.86-3.32-.86-.61-3.11.11-3.74-.75-.63-.86.78-2.76.44-3.78S4.8 12.49 4.8 11.4c0-1.09 2.26-1.82 2.58-2.8.32-.98-1.06-2.93-.44-3.78.62-.85 2.88-.12 3.74-.75.86-.63.84-3 1.86-3.32C13.56.43 14.91 2.34 16 2.34c1.09 0 2.47-1.91 3.46-1.59.99.32 1 2.7 1.86 3.32.86.62 3.11-.11 3.74.75.63.86-.78 2.76-.44 3.78s2.58 1.71 2.58 2.8z"
                                                                                            stroke="#1D1D1B"
                                                                                            stroke-width="1.4"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round">
                                                                                        </path>
                                                                                        <path
                                                                                            d="M20.99 19.54v11.75l-4.86-5.88-5.12 5.88V19.54M11.53 11.47l2.64 3.25 6.3-6.64"
                                                                                            stroke="#1D1D1B"
                                                                                            stroke-width="1.4"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round">
                                                                                        </path>
                                                                                    </svg>

                                                                                    <div
                                                                                        class="content-list-icon-content">
                                                                                        <h4 style="margin: 0;">
                                                                                            {{$goods->certificate1}}
                                                                                        </h4>

                                                                                    </div>
                                                                                </div>

                                                                                <div
                                                                                    class="content-list-icon-items it2 icon-svg">

                                                                                    <svg style="margin-right: 13px;"
                                                                                        width="32" height="32"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M14.38 1.53a10.19 10.19 0 00-4 .78 10.53 10.53 0 00.26 18.05l.23.11.13 9.81 3.52-4 .43.52 1.17-1.34 3.25 3.93v-8c-.487.25-1.04.34-1.58.26a9.857 9.857 0 001.58-.39v.13c.21-.11.42-.23.62-.36a10.55 10.55 0 00-5.61-19.5z"
                                                                                            fill="#fff"></path>
                                                                                        <path
                                                                                            d="M20.98 20.66v10.63l-1.6-1.94-3.25-3.93-1.17 1.34-3.95 4.53V20.66"
                                                                                            stroke="#1D1D1B"
                                                                                            stroke-width="1.4"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round">
                                                                                        </path>
                                                                                        <path clip-rule="evenodd"
                                                                                            d="M26.55 11.25A10.57 10.57 0 0120 21l-.62.23a10.54 10.54 0 01-8.95-18.92A10.38 10.38 0 0116 .71c5.82.006 10.539 4.72 10.55 10.54z"
                                                                                            stroke="#1D1D1B"
                                                                                            stroke-width="1.4"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round">
                                                                                        </path>
                                                                                        <path
                                                                                            d="M11.53 11.47l2.64 3.25 6.29-6.64"
                                                                                            stroke="#1D1D1B"
                                                                                            stroke-width="1.4"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round">
                                                                                        </path>
                                                                                    </svg>

                                                                                    <div
                                                                                        class="content-list-icon-content">
                                                                                        <h4 style="margin: 0;">
                                                                                            {{$goods->certificate2}}

                                                                                        </h4>

                                                                                    </div>
                                                                                </div>

                                                                                <div
                                                                                    class="content-list-icon-items it3 icon-svg">

                                                                                    <svg style="margin-right: 13px;"
                                                                                        width="32" height="32"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M26 14.82a4 4 0 01-1 1.54l-4 4.05-1 1-.68.94.08 7-3.25-3.93L15 26.75l-4 4.53V19.86l-4.93-4.95a4.26 4.26 0 01-1-4.52l.07-.07 6.93-6.92a4.3 4.3 0 016.05 0L25 10.32a4.24 4.24 0 011 4.5z"
                                                                                            fill="#fff"></path>
                                                                                        <path
                                                                                            d="M11.01 19.86v11.42l3.95-4.53 1.17-1.34 3.25 3.93.7.84.91 1.1V19.96"
                                                                                            stroke="#1D1D1B"
                                                                                            stroke-width="1.4"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round">
                                                                                        </path>
                                                                                        <path clip-rule="evenodd"
                                                                                            d="M26 14.82a.28.28 0 01-.07.09L19 21.83a4.28 4.28 0 01-6.05 0l-2-2-4.88-4.92a4.27 4.27 0 010-6L13 2a4.28 4.28 0 016 0l6.91 6.92a4.25 4.25 0 01.09 5.9z"
                                                                                            stroke="#1D1D1B"
                                                                                            stroke-width="1.4"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round">
                                                                                        </path>
                                                                                        <path
                                                                                            d="M11.53 11.47l2.64 3.25 6.3-6.64"
                                                                                            stroke="#1D1D1B"
                                                                                            stroke-width="1.4"
                                                                                            stroke-linecap="round"
                                                                                            stroke-linejoin="round">
                                                                                        </path>
                                                                                    </svg>

                                                                                    <div
                                                                                        class="content-list-icon-content">
                                                                                        <h4 style="margin: 0;">
                                                                                            {{$goods->certificate3}}
                                                                                            </h4>

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

                                                            <div
                                                                class="row-fluid-wrapper row-depth-1 row-number-6 dnd-row">
                                                                <div class="row-fluid ">
                                                                    <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                                        style="" data-widget-type="custom_widget"
                                                                        data-x="0" data-w="12">
                                                                        <div id="hs_cos_wrapper_widget_1614249300775"
                                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text"
                                                                            style="" data-hs-cos-general-type="widget"
                                                                            data-hs-cos-type="module"><span
                                                                                id="hs_cos_wrapper_widget_1614249300775_"
                                                                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text"
                                                                                style=""
                                                                                data-hs-cos-general-type="widget"
                                                                                data-hs-cos-type="rich_text">
                                                                                <p style="margin-bottom: 72px;">{{$goods->detail2}}</p>
                                                                                <h3 style="margin-bottom: 24px;">{{$goods->heading3}}</h3>
                                                                                <p style="margin-bottom: 40px;">{{$goods->detail3}}</p>
                                                                            </span></div>

                                                                    </div>
                                                                    <!--end widget-span -->
                                                                </div>
                                                                <!--end row-->
                                                            </div>
                                                            <!--end row-wrapper -->

                                                            <div
                                                                class="row-fluid-wrapper row-depth-1 row-number-7 dnd-row">
                                                                <div class="row-fluid ">
                                                                    <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                                        style="" data-widget-type="custom_widget"
                                                                        data-x="0" data-w="12">
                                                                        <div id="hs_cos_wrapper_module_1614250351915"
                                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                                            style="" data-hs-cos-general-type="widget"
                                                                            data-hs-cos-type="module">
                                                                            <div
                                                                                class="module_1614250351915 boxed-content-container">

                                                                                <div class="boxed-color-box">

                                                                                    <h4 style="margin-bottom: 24px;">
                                                                                       {{$reason->heading1}}
                                                                                    </h4>
                                                                                    <ul>
                                                                                        <li>{{$reason->point1}}</li>
                                                                                        <li>{{$reason->point2}}</li>
                                                                                        <li>{{$reason->point3}}
                                                                                        </li>
                                                                                        <li>{{$reason->point4}}</li>
                                                                                        <li>{{$reason->point5}}</li>
                                                                                    </ul>
                                                                                    <div class="boxed-content-buttons">

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

                                                            <div
                                                                class="row-fluid-wrapper row-depth-1 row-number-8 dnd-row">
                                                                <div class="row-fluid ">
                                                                    <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                                        style="" data-widget-type="custom_widget"
                                                                        data-x="0" data-w="12">
                                                                        <div id="hs_cos_wrapper_widget_1614250434822"
                                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text"
                                                                            style="" data-hs-cos-general-type="widget"
                                                                            data-hs-cos-type="module"><span
                                                                                id="hs_cos_wrapper_widget_1614250434822_"
                                                                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text"
                                                                                style=""
                                                                                data-hs-cos-general-type="widget"
                                                                                data-hs-cos-type="rich_text">
                                                                                <p style="margin-bottom: 72px;">{{$reason->detail1}}
                                                                                </p>
                                                                                <h3 style="margin-bottom: 24px;">{{$reason->heading2}}</h3>
                                                                                <p style="margin-bottom: 40px;">{{$reason->detail2}}</p>
                                                                            </span></div>

                                                                    </div>
                                                                    <!--end widget-span -->
                                                                </div>
                                                                <!--end row-->
                                                            </div>
                                                            <!--end row-wrapper -->

                                                            <div
                                                                class="row-fluid-wrapper row-depth-1 row-number-9 dnd-row">
                                                                <div class="row-fluid ">
                                                                    <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                                        style="" data-widget-type="custom_widget"
                                                                        data-x="0" data-w="12">
                                                                        <div id="hs_cos_wrapper_widget_1614250567862"
                                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                                            style="" data-hs-cos-general-type="widget"
                                                                            data-hs-cos-type="module">
                                                                            <div
                                                                                class="widget_1614250567862 boxed-content-container">

                                                                                <div class="boxed-color-box">

                                                                                    <ul>
                                                                                        <li>{{$reason->point6}}</li>
                                                                                        <li>{{$reason->point7}}</li>
                                                                                        <li>{{$reason->point8}}
                                                                                        </li>
                                                                                    </ul>
                                                                                    <div class="boxed-content-buttons">

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

                                                            <div
                                                                class="row-fluid-wrapper row-depth-1 row-number-10 dnd-row">
                                                                <div class="row-fluid ">
                                                                    <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                                        style="" data-widget-type="custom_widget"
                                                                        data-x="0" data-w="12">
                                                                        <div id="hs_cos_wrapper_widget_1614250667556"
                                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text"
                                                                            style="" data-hs-cos-general-type="widget"
                                                                            data-hs-cos-type="module"><span
                                                                                id="hs_cos_wrapper_widget_1614250667556_"
                                                                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text"
                                                                                style=""
                                                                                data-hs-cos-general-type="widget"
                                                                                data-hs-cos-type="rich_text">

                                                                            </span></div>

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
                        </div>
                    </div>
                </div>
                <div class="container-fluid pages-bottom-section">
                    <div class="row-fluid-wrapper">
                        <div class="row-fluid">
                            <div class="span12 widget-span widget-type-cell " style="" data-widget-type="cell"
                                data-x="0" data-w="12">

                                <div
                                    class="row-fluid-wrapper row-depth-1 row-number-1 bottom_area-row-0-margin dnd-section bottom_area-row-0-force-full-width-section bottom_area-row-0-padding">
                                    <div class="row-fluid ">
                                        <div class="span12 widget-span widget-type-cell dnd-column" style=""
                                            data-widget-type="cell" data-x="0" data-w="12">

                                            <div class="row-fluid-wrapper row-depth-1 row-number-2 dnd-row">
                                                <div class="row-fluid ">
                                                    <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                        style="" data-widget-type="custom_widget" data-x="0"
                                                        data-w="12">
                                                        <div id="hs_cos_wrapper_widget_1614263388130"
                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                            style="" data-hs-cos-general-type="widget"
                                                            data-hs-cos-type="module">


                                                            <div class="overlay-icon-module overlay_icon_widget_1614263388130   "
                                                                style="
   max-width: 570px;
   max-height: 570px;
   top: 870px;  left: 0;
   transform: rotate(0deg);


 z-index: 0;


   "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 570 570">
                                                                    <defs>
                                                                        <lineargradient
                                                                            id="top-left-transparent-blue3_inline_svg__a"
                                                                            x1="100%" x2="100%" y1="95.674%" y2="0%">
                                                                            <stop offset="0%" stop-color="#FFF"
                                                                                stop-opacity="0"></stop>
                                                                            <stop offset="100%" stop-color="#D2E0FE">
                                                                            </stop>
                                                                        </lineargradient>
                                                                    </defs>
                                                                    <path
                                                                        fill="url(#top-left-transparent-blue3_inline_svg__a)"
                                                                        fill-rule="evenodd"
                                                                        d="M570 0v570H0C0 255.198 255.198 0 570 0z"
                                                                        opacity="0.4" transform="rotate(180 285 285)">
                                                                    </path>
                                                                </svg></div>

                                                        </div>

                                                    </div>
                                                    <!--end widget-span -->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <!--end row-wrapper -->

                                            <div class="row-fluid-wrapper row-depth-1 row-number-3 dnd-row">
                                                <div class="row-fluid ">
                                                    <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                        style="" data-widget-type="custom_widget" data-x="0"
                                                        data-w="12">
                                                        <div id="hs_cos_wrapper_widget_1614263638863"
                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                            style="" data-hs-cos-general-type="widget"
                                                            data-hs-cos-type="module">


                                                            <div class="overlay-icon-module overlay_icon_widget_1614263638863   "
                                                                style="
   max-width: 570px;
   max-height: 570px;
   top: 406px;   right: 0;
   transform: rotate(0deg);


 z-index: 0;


   "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 570 570">
                                                                    <defs>
                                                                        <lineargradient
                                                                            id="bottom-right-transparent-blue2_inline_svg__a"
                                                                            x1="100%" x2="100%" y1="95.674%" y2="0%">
                                                                            <stop offset="0%" stop-color="#FFF"
                                                                                stop-opacity="0"></stop>
                                                                            <stop offset="100%" stop-color="#D2E0FE">
                                                                            </stop>
                                                                        </lineargradient>
                                                                    </defs>
                                                                    <path
                                                                        fill="url(#bottom-right-transparent-blue2_inline_svg__a)"
                                                                        fill-rule="evenodd"
                                                                        d="M570 0v570H0C0 255.198 255.198 0 570 0z">
                                                                    </path>
                                                                </svg></div>

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

                                <div
                                    class="row-fluid-wrapper row-depth-1 row-number-4 bottom_area-row-1-vertical-alignment bottom_area-row-1-background-gradient dnd-section bottom_area-row-1-margin bottom_area-row-1-padding">
                                    <div class="row-fluid ">
                                        <div class="span12 widget-span widget-type-cell cell_1614251938391-vertical-alignment dnd-column"
                                            style="" data-widget-type="cell" data-x="0" data-w="12">

                                            <div
                                                class="row-fluid-wrapper row-depth-1 row-number-5 dnd-row cell_1614251938391-row-0-vertical-alignment">
                                                <div class="row-fluid ">
                                                    <div class="span7 widget-span widget-type-cell dnd-column cell_1622191440610-vertical-alignment"
                                                        style="" data-widget-type="cell" data-x="0" data-w="7">

                                                        <div
                                                            class="row-fluid-wrapper row-depth-1 row-number-6 dnd-row">
                                                            <div class="row-fluid ">
                                                                <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                                    style="" data-widget-type="custom_widget" data-x="0"
                                                                    data-w="12">
                                                                    <div id="hs_cos_wrapper_widget_1614255383124"
                                                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                                        style="" data-hs-cos-general-type="widget"
                                                                        data-hs-cos-type="module">
                                                                        <div class="my-annual-report-wrapper"
                                                                            id="widget_1614255383124">
                                                                            <div class="my-annual-report-row">
                                                                                <div
                                                                                    class="my-annual-report-wrapper-left-column">
                                                                                    <div
                                                                                        class="my-annual-report-wrapper-left-column-inner">

                                                                                        <div class="top_curve_icon"
                                                                                            color="#5089FD">
                                                                                            <svg width="29" height="25"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M0 1.389c0 .746.599 1.349 1.354 1.384a26.869 26.869 0 0112.317 3.66c6.754 3.954 11.098 10.402 12.544 17.451A1.4 1.4 0 0027.592 25c.89 0 1.556-.806 1.38-1.666-1.599-7.79-6.398-14.916-13.863-19.286A29.704 29.704 0 001.46.002 1.393 1.393 0 000 1.387v.002z"
                                                                                                    fill="#C9A3EE"
                                                                                                    fill-rule="evenodd">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>

                                                                                        <h2
                                                                                            style="margin-bottom: 80px;">
                                                                                          {{$help->heading}}</h2>
                                                                                        <h4
                                                                                            style="margin-bottom: 24px;">
                                                                                           {{$help->Sub_heading}}</h4>
                                                                                        <p style="margin-bottom: 32px;">
                                                                                          {{$help->detail}}</p>
                                                                                        <a style="display: flex; -webkit-box-align: center; align-items: center; text-decoration: none; margin-bottom: 32px;"
                                                                                            href="{{$help->link}}"
                                                                                            target="_blank"
                                                                                            rel="noopener noreferrer">
                                                                                            <div
                                                                                                style="display: flex; -webkit-box-align: center; align-items: center; -webkit-box-pack: center; justify-content: center; height: 12px; width: 12px; margin-top: 5px; margin-right: 10px;">
                                                                                                <svg width="12"
                                                                                                    height="11"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                        fill="#1D1D1D"
                                                                                                        fill-rule="nonzero"
                                                                                                        style="fill: currentColor;">
                                                                                                        &nbsp;</path>
                                                                                                </svg></div>
                                                                                            <span
                                                                                                style="font-weight: 600;">{{$help->link_text}}</span>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>

                                                                                <div
                                                                                    class="my-annual-report-wrapper-right-column">
                                                                                    <div
                                                                                        class="my-annual-report-wrapper-right-column-inner">

                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                        <style>
                                                                            #widget_1614255383124.my-annual-report-wrapper .top_curve_icon svg path {
                                                                                fill: rgba(80, 137, 253, 1.0);
                                                                            }

                                                                            @media (min-width: 1200px) {
                                                                                #widget_1614255383124.my-annual-report-wrapper .top_curve_icon {
                                                                                    right: 252px;
                                                                                }
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
                                                    <div class="span5 widget-span widget-type-cell dnd-column cell_1622191440612-vertical-alignment"
                                                        style="" data-widget-type="cell" data-x="7" data-w="5">

                                                        <div
                                                            class="row-fluid-wrapper row-depth-1 row-number-7 dnd-row">
                                                            <div class="row-fluid ">
                                                                <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                                    style="" data-widget-type="custom_widget" data-x="0"
                                                                    data-w="12">
                                                                    <div id="hs_cos_wrapper_widget_1622191440262"
                                                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                                        style="" data-hs-cos-general-type="widget"
                                                                        data-hs-cos-type="module">
                                                                        <div id="misc__order_form"
                                                                            class="misc__order_form">
                                                                            <div class="hfma-wrapper-right-column">
                                                                                <div
                                                                                    class="hfma-wrapper-right-column-inner">
                                                                                    <div
                                                                                        class="certificate-card-holder submit-with-icon">
                                                                                        <h3 class="gJQqAX">
                                                                                            Filing Your Certificate of
                                                                                            Good Standing</h3>
                                                                                        <div
                                                                                            id="hs_form_target_form_547796101">
                                                                                            <form>
                                                                                                <div
                                                                                                    class="hs_entity_typ hs-entity_typ hs-fieldtype-select field hs-form-field">
                                                                                                    <label
                                                                                                        placeholder="Enter your Entity Type"
                                                                                                        for="entityType">
                                                                                                        <span>Entity
                                                                                                            Type</span>
                                                                                                    </label>
                                                                                                    <div
                                                                                                        class="input">
                                                                                                        <select
                                                                                                            class="hs-input"
                                                                                                            v-model="entityType">
                                                                                                            <option
                                                                                                                v-for="option in entitiesType"
                                                                                                                value="option">
                                                                                                              State
                                                                                                            </option>
                                                                                                        </select>
                                                                                                        {{-- <span
                                                                                                            class="field__error"
                                                                                                            v-show="errors.entityTypeField">This
                                                                                                            field is
                                                                                                            required</span> --}}
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="hs_state_of_formation hs-state_of_formation hs-fieldtype-select field hs-form-field">
                                                                                                    <label
                                                                                                        class=""
                                                                                                        placeholder="Enter your Select State"
                                                                                                        for=""><span>State</span></label>
                                                                                                    <div
                                                                                                        class="input">
                                                                                                        <select
                                                                                                            class="hs-input"
                                                                                                            v-model="entityState">
                                                                                                            <option
                                                                                                                value="">
                                                                                                                Select
                                                                                                                State
                                                                                                            </option>
                                                                                                            <option
                                                                                                                v-for="state in exactStateList"
                                                                                                                value="state">
                                                                                                              demo
                                                                                                            </option>
                                                                                                        </select>
                                                                                                        {{-- <span
                                                                                                            class="field__error"
                                                                                                            v-show="errors.entityStateField">This
                                                                                                            field is
                                                                                                            required</span> --}}
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div v-if="getOrderType == 18"
                                                                                                    class="hs_state_of_formation hs-state_of_formation hs-fieldtype-select field hs-form-field">
                                                                                                    <label
                                                                                                        class=""
                                                                                                        placeholder="Enter your Select State"
                                                                                                        for=""><span>State
                                                                                                            of Foreign
                                                                                                            Qualification</span></label>
                                                                                                    <div
                                                                                                        class="input">
                                                                                                        <select
                                                                                                            class="hs-input"
                                                                                                            v-model="compState">
                                                                                                            <option
                                                                                                                value="">
                                                                                                                Select
                                                                                                                State
                                                                                                            </option>
                                                                                                            <option
                                                                                                                v-for="state in exactStateList"
                                                                                                                value="state">
                                                                                                              demo
                                                                                                            </option>
                                                                                                        </select>
                                                                                                        {{-- <span
                                                                                                            class="field__error"
                                                                                                            v-show="errors.compStateField">The
                                                                                                            State of
                                                                                                            Incorporation
                                                                                                            and State of
                                                                                                            Foreign
                                                                                                            Qualification
                                                                                                            should not
                                                                                                            same</span> --}}
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div>
                                                                                                    <div
                                                                                                        class="hs-richtext hs-main-font-element">
                                                                                                        <p
                                                                                                            style="text-align: center; font-size: 48px; font-weight: bold; line-height: 56px; color: #1d1d1d; margin-bottom: 8px;">
                                                                                                            $200 Fee
                                                                                                            </p>
                                                                                                        <p
                                                                                                            style="text-align: center; font-size: 16px; line-height: 24px; color: #7a7a7a;">
                                                                                                        $50 extraFee
                                                                                                            </p>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="hs_submit hs-submit">
                                                                                                    <div
                                                                                                        class="actions">
                                                                                                        <input
                                                                                                            type="submit"
                                                                                                            @click.prevent="handleSubmit"
                                                                                                            value="Order Now"
                                                                                                            class="hs-button primary large">
                                                                                                        <div
                                                                                                            class="button-action__Arrow-sc-1lf0xj6-1 ghTmmo arrow1">
                                                                                                            <svg width="12"
                                                                                                                height="11"
                                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                                <path
                                                                                                                    d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                                    fill="#1D1D1D"
                                                                                                                    fill-rule="nonzero">
                                                                                                                </path>
                                                                                                            </svg>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
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

                                            <div class="row-fluid-wrapper row-depth-1 row-number-8 dnd-row">
                                                <div class="row-fluid ">
                                                    <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                        style="" data-widget-type="custom_widget" data-x="0"
                                                        data-w="12">
                                                        <div id="hs_cos_wrapper_widget_1614255465082"
                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text"
                                                            style="" data-hs-cos-general-type="widget"
                                                            data-hs-cos-type="module"><span
                                                                id="hs_cos_wrapper_widget_1614255465082_"
                                                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text"
                                                                style="" data-hs-cos-general-type="widget"
                                                                data-hs-cos-type="rich_text">
                                                                <blockquote>
                                                                    <h2
                                                                        style="max-width: 640px; margin: 0px auto 24px;">
                                                                      {{$faq->heading}}</h2>
                                                                </blockquote>
                                                            </span></div>

                                                    </div>
                                                    <!--end widget-span -->
                                                </div>
                                                <!--end row-->
                                            </div>
                                            <!--end row-wrapper -->

                                            {{-- <div class="row-fluid-wrapper row-depth-1 row-number-9 dnd-row">
                                                <div class="row-fluid ">
                                                    <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                        style="" data-widget-type="custom_widget" data-x="0"
                                                        data-w="12">
                                                        <div id="hs_cos_wrapper_widget_1614260364663"
                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                            style="" data-hs-cos-general-type="widget"
                                                            data-hs-cos-type="module">
                                                            <div id="widget_1614260364663"
                                                                class=" acc_wrapper acc_mod_wrapper ic_widOutIcon  acc_allToggle">
                                                                <div class="inner">




                                                                    <div class="acc_item acc1">

                                                                        <div class="acc_header trigger"
                                                                            data-id="widget_1614260364663-whatarearticlesofdistributionexactly1">
                                                                            <div class="inner">

                                                                                <div class="arr_icon first_pos">
                                                                                    <svg width="32" height="32"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <g fill="none" fill-rule="evenodd">
                                                                                            <circle fill="#FEF6ED" cx="16"
                                                                                                cy="16" r="16">
                                                                                            </circle>
                                                                                            <path
                                                                                                d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z"
                                                                                                fill="#0000FF"></path>
                                                                                        </g>
                                                                                    </svg>
                                                                                </div>



                                                                                <div class="title">
                                                                                    <span>What are Articles of
                                                                                        Distribution exactly?</span>
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="acc_body"
                                                                            data-id="widget_1614260364663-whatarearticlesofdistributionexactly1">
                                                                            <div class="inner">
                                                                                <p><span>The articles formalize the
                                                                                        cessation of activity as an
                                                                                        incorporated entity. They define
                                                                                        parameters surrounding the
                                                                                        dissolution of a company. This
                                                                                        could include the distribution
                                                                                        or sale of assets, how
                                                                                        shareholders will be compensated
                                                                                        and responsibilities divided
                                                                                        among management.</span></p>


                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="acc_item acc2">

                                                                        <div class="acc_header trigger"
                                                                            data-id="widget_1614260364663-howmuchwillitcosttofilearticlesofdissolution2">
                                                                            <div class="inner">

                                                                                <div class="arr_icon first_pos">
                                                                                    <svg width="32" height="32"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <g fill="none" fill-rule="evenodd">
                                                                                            <circle fill="#FEF6ED" cx="16"
                                                                                                cy="16" r="16">
                                                                                            </circle>
                                                                                            <path
                                                                                                d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z"
                                                                                                fill="#0000FF"></path>
                                                                                        </g>
                                                                                    </svg>
                                                                                </div>



                                                                                <div class="title">
                                                                                    <span>How much will it cost to file
                                                                                        Articles of Dissolution?</span>
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="acc_body"
                                                                            data-id="widget_1614260364663-howmuchwillitcosttofilearticlesofdissolution2">
                                                                            <div class="inner">
                                                                                <p><span>The state fee varies by state
                                                                                        our service fee to file Articles
                                                                                        of Dissolution is $149. To
                                                                                        review the fee in your state
                                                                                        click on the “order now” button
                                                                                        and select the state and entity
                                                                                        type.</span></p>


                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="acc_item acc3">

                                                                        <div class="acc_header trigger"
                                                                            data-id="widget_1614260364663-whatcontingencieswouldprohibitmefromfilingadissolution3">
                                                                            <div class="inner">

                                                                                <div class="arr_icon first_pos">
                                                                                    <svg width="32" height="32"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <g fill="none" fill-rule="evenodd">
                                                                                            <circle fill="#FEF6ED" cx="16"
                                                                                                cy="16" r="16">
                                                                                            </circle>
                                                                                            <path
                                                                                                d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z"
                                                                                                fill="#0000FF"></path>
                                                                                        </g>
                                                                                    </svg>
                                                                                </div>



                                                                                <div class="title">
                                                                                    <span>What contingencies would
                                                                                        prohibit me from filing a
                                                                                        dissolution?</span>
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="acc_body"
                                                                            data-id="widget_1614260364663-whatcontingencieswouldprohibitmefromfilingadissolution3">
                                                                            <div class="inner">
                                                                                <p><span>The only stipulation that would
                                                                                        prohibit the owners of an entity
                                                                                        from filing a dissolution is if
                                                                                        the company owes outstanding
                                                                                        taxes or has annual reports
                                                                                        outstanding. In this event the
                                                                                        company would need to bring the
                                                                                        itself to good standing with the
                                                                                        state before filing the
                                                                                        dissolution.</span></p>


                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="acc_item acc4">

                                                                        <div class="acc_header trigger"
                                                                            data-id="widget_1614260364663-howlongwillittaketohavethearticlesofdissolutionfiled4">
                                                                            <div class="inner">

                                                                                <div class="arr_icon first_pos">
                                                                                    <svg width="32" height="32"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <g fill="none" fill-rule="evenodd">
                                                                                            <circle fill="#FEF6ED" cx="16"
                                                                                                cy="16" r="16">
                                                                                            </circle>
                                                                                            <path
                                                                                                d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z"
                                                                                                fill="#0000FF"></path>
                                                                                        </g>
                                                                                    </svg>
                                                                                </div>



                                                                                <div class="title">
                                                                                    <span>How long will it take to have
                                                                                        the Articles of Dissolution
                                                                                        filed?</span>
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="acc_body"
                                                                            data-id="widget_1614260364663-howlongwillittaketohavethearticlesofdissolutionfiled4">
                                                                            <div class="inner">
                                                                                <p><span>The filing time is dependent on
                                                                                        the governing state agency and
                                                                                        varies by state.</span></p>


                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="acc_item acc5">

                                                                        <div class="acc_header trigger"
                                                                            data-id="widget_1614260364663-whatwillireceivewhenthearticlesofdissolutionarefiled5">
                                                                            <div class="inner">

                                                                                <div class="arr_icon first_pos">
                                                                                    <svg width="32" height="32"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <g fill="none" fill-rule="evenodd">
                                                                                            <circle fill="#FEF6ED" cx="16"
                                                                                                cy="16" r="16">
                                                                                            </circle>
                                                                                            <path
                                                                                                d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z"
                                                                                                fill="#0000FF"></path>
                                                                                        </g>
                                                                                    </svg>
                                                                                </div>



                                                                                <div class="title">
                                                                                    <span>What will I receive when the
                                                                                        Articles of Dissolution are
                                                                                        filed?</span>
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="acc_body"
                                                                            data-id="widget_1614260364663-whatwillireceivewhenthearticlesofdissolutionarefiled5">
                                                                            <div class="inner">
                                                                                <p><span>The governing state agency will
                                                                                        return a copy of the filed
                                                                                        articles which are then mailed
                                                                                        to the client.</span></p>


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
                                            </div> --}}
                                            <div class="container pl-md-5 pr-md-5">

                                                <div class="accordion">
                                                  <div class="accordion-item">
                                                    <button id="accordion-button-1" aria-expanded="false">
                                                      <span class="accordion-title">{{$faq->q1}}</span>
                                                      <span class="icon" aria-hidden="true"></span>
                                                    </button>
                                                    <div class="accordion-content">
                                                      <p>
                                                        {{$faq->a1}}
                                                      </p>
                                                    </div>
                                                  </div>
                                                  <div class="accordion-item">
                                                    <button id="accordion-button-2" aria-expanded="false">
                                                      <span class="accordion-title">{{$faq->q2}}</span>
                                                      <span class="icon" aria-hidden="true"></span>
                                                    </button>
                                                    <div class="accordion-content">
                                                      <p>
                                                        {{$faq->a2}}
                                                      </p>
                                                    </div>
                                                  </div>
                                                  <div class="accordion-item">
                                                    <button id="accordion-button-3" aria-expanded="false">
                                                      <span class="accordion-title">{{$faq->q3}}</span>
                                                      <span class="icon" aria-hidden="true"></span>
                                                    </button>
                                                    <div class="accordion-content">
                                                      <p>
                                                        {{$faq->a3}}
                                                      </p>
                                                    </div>
                                                  </div>
                                                  <div class="accordion-item">
                                                    <button id="accordion-button-4" aria-expanded="false">
                                                      <span class="accordion-title">{{$faq->q4}}</span>
                                                      <span class="icon" aria-hidden="true"></span>
                                                    </button>
                                                    <div class="accordion-content">
                                                      <p>
                                                        {{$faq->a4}}
                                                      </p>
                                                    </div>
                                                  </div>
                                                  <div class="accordion-item">
                                                    <button id="accordion-button-5" aria-expanded="false">
                                                      <span class="accordion-title">{{$faq->q5}}</span>
                                                      <span class="icon" aria-hidden="true"></span>
                                                    </button>
                                                    <div class="accordion-content">
                                                      <p>
                                                        {{$faq->a5}}
                                                      </p>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            <!--end row-wrapper -->
                                            <!--end row-wrapper -->


                                            <!--end row-wrapper -->

                                        </div>
                                        <!--end widget-span -->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end row-wrapper -->

                                <div class="row-fluid-wrapper row-depth-1 row-number-12 dnd-section">
                                    <div class="row-fluid ">
                                        <div class="span12 widget-span widget-type-cell dnd-column" style=""
                                            data-widget-type="cell" data-x="0" data-w="12">

                                            {{-- <div class="row-fluid-wrapper row-depth-1 row-number-13 dnd-row">
                                                <div class="row-fluid ">
                                                    <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                        style="" data-widget-type="custom_widget" data-x="0"
                                                        data-w="12">
                                                        <div id="hs_cos_wrapper_widget_1614257526792"
                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                            style="" data-hs-cos-general-type="widget"
                                                            data-hs-cos-type="module">
                                                            <div class="related-post-main-wrapper">

                                                                <div class="related-post-se-header">
                                                                    <h2>Related Articles</h2>
                                                                </div>

                                                                <div class="related-post-wrapper">

                                                                    <div class="related_shape top_shape">
                                                                        <svg width="29" height="25"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M0 1.389c0 .746.599 1.349 1.354 1.384a26.869 26.869 0 0112.317 3.66c6.754 3.954 11.098 10.402 12.544 17.451A1.4 1.4 0 0027.592 25c.89 0 1.556-.806 1.38-1.666-1.599-7.79-6.398-14.916-13.863-19.286A29.704 29.704 0 001.46.002 1.393 1.393 0 000 1.387v.002z"
                                                                                fill="#C9A3EE" fill-rule="evenodd">
                                                                            </path>
                                                                        </svg>
                                                                    </div>




                                                                    <div class="related-post-grid related-post-slider">

                                                                        <div class="related-post-item">
                                                                            <div class="related-post-item-inner">
                                                                                <a
                                                                                    href="../blog/post/certificate-good-standing-why-matters.html">

                                                                                    <div class="related-post-featured">
                                                                                        <img src="../hubfs/whats-a-certificate-of-good-standing.jpg"
                                                                                            alt="What Is a Certificate of Good Standing and Why Do You Need It?">
                                                                                    </div>

                                                                                    <div
                                                                                        class="post-title-holder matchHeight">
                                                                                        <div class="title_arrow">
                                                                                            <svg width="12" height="11"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                    fill="#1D1D1D"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <h3>What Is a Certificate of
                                                                                            Good Standing and Why Do You
                                                                                            Need It?</h3>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>

                                                                        <div class="related-post-item">
                                                                            <div class="related-post-item-inner">
                                                                                <a
                                                                                    href="../blog/post/new-business-partner-need-certificate-of-good-standing.html">

                                                                                    <div class="related-post-featured">
                                                                                        <img src="../hubfs/Imported_Blog_Media/newbusinesspartnercertificateofgoodstanding-2.jpg"
                                                                                            alt="Bringing on a New Business Partner? Here's Why You Need a Certificate of Good Standing">
                                                                                    </div>

                                                                                    <div
                                                                                        class="post-title-holder matchHeight">
                                                                                        <div class="title_arrow">
                                                                                            <svg width="12" height="11"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                    fill="#1D1D1D"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <h3>Bringing on a New Business
                                                                                            Partner? Here's Why You Need
                                                                                            a Certificate of Good
                                                                                            Standing</h3>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>

                                                                        <div class="related-post-item">
                                                                            <div class="related-post-item-inner">
                                                                                <a
                                                                                    href="../blog/post/how-long-does-it-take-to-get-a-certificate-of-good-standing-with-incfile.html">

                                                                                    <div class="related-post-featured">
                                                                                        <img src="../hubfs/Imported_Blog_Media/lukas-blazek-UAvYasdkzq8-unsplash-3.jpg"
                                                                                            alt="How Long Does It Take to Get a Certificate of Good Standing with Incfile?">
                                                                                    </div>

                                                                                    <div
                                                                                        class="post-title-holder matchHeight">
                                                                                        <div class="title_arrow">
                                                                                            <svg width="12" height="11"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                    fill="#1D1D1D"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <h3>How Long Does It Take to Get
                                                                                            a Certificate of Good
                                                                                            Standing with Incfile?</h3>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>

                                                                        <div class="related-post-item">
                                                                            <div class="related-post-item-inner">
                                                                                <a
                                                                                    href="../blog/post/what-should-i-do-when-my-certificate-of-good-standing-expires.html">

                                                                                    <div class="related-post-featured">
                                                                                        <img src="../hubfs/Imported_Blog_Media/beatriz-perez-moya-XN4T2PVUUgk-unsplash-4.jpg"
                                                                                            alt="What Should I Do When My Certificate of Good Standing Expires?">
                                                                                    </div>

                                                                                    <div
                                                                                        class="post-title-holder matchHeight">
                                                                                        <div class="title_arrow">
                                                                                            <svg width="12" height="11"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                    fill="#1D1D1D"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <h3>What Should I Do When My
                                                                                            Certificate of Good Standing
                                                                                            Expires?</h3>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>

                                                                        <div class="related-post-item">
                                                                            <div class="related-post-item-inner">
                                                                                <a
                                                                                    href="../blog/post/obtaining-a-certificate-of-statuscertificate-of-good-standing-in-california.html">

                                                                                    <div class="related-post-featured">
                                                                                        <img src="../hubfs/Imported_Blog_Media/katya-austin-4Vg6ez9jaec-unsplash-3.jpg"
                                                                                            alt="Obtaining a Certificate of Status/Certificate of Good Standing in California">
                                                                                    </div>

                                                                                    <div
                                                                                        class="post-title-holder matchHeight">
                                                                                        <div class="title_arrow">
                                                                                            <svg width="12" height="11"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                    fill="#1D1D1D"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <h3>Obtaining a Certificate of
                                                                                            Status/Certificate of Good
                                                                                            Standing in California</h3>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                                <ul class="related-post-most-popular">


                                                                    <li>​Do LLCs Get a 1099 During Tax Time?</li>

                                                                    <li>LLC vs. S Corp: Which Is Right for Your
                                                                        Business?</li>

                                                                    <li>15 Items You Can Easily Flip for $100-$5,000 in
                                                                        Profit a Month</li>

                                                                    <li>7 Small Business Ideas That Take Under $500 to
                                                                        Start</li>

                                                                    <li>S Corp vs. C Corp: Differences and Benefits of
                                                                        Each</li>

                                                                    <li>Understanding DBAs and How They May Be
                                                                        Beneficial to Your Small Business</li>

                                                                    <li>How to Create and File an LLC for Free</li>

                                                                    <li>So You Moved? Follow This Guide to Moving Your
                                                                        LLC to Another State</li>

                                                                    <li>15 U.S. States with the Lowest State Fee to
                                                                        Start a Business Today</li>

                                                                    <li>Real Estate Investing for Dummies: Use LLCs for
                                                                        Each Property</li>

                                                                    <li>If You're Not a U.S. Citizen, Can You Get an EIN
                                                                        for Your Business?</li>

                                                                    <li>Why You Should Form an LLC vs. Sole
                                                                        Proprietorship</li>

                                                                    <li>Need a Physical Address for Your Business?</li>

                                                                    <li>Are Non-U.S. Residents Allowed to Own a
                                                                        Corporation or LLC?</li>

                                                                    <li>How to Search and Choose Your Business Name in
                                                                        All 50 States</li>

                                                                    <li>Manager-Managed LLC vs. Member-Managed LLC:
                                                                        Which One Is Right For Your Business?</li>

                                                                    <li>How Do I Change My LLC to Sole Proprietorship on
                                                                        My Own?</li>

                                                                    <li>5 Online Business Ideas You Can Start in 2022
                                                                        with Little or No Money</li>

                                                                    <li>Rules for Naming Your LLC — An Entire State
                                                                        Guide</li>

                                                                    <li>​Understanding When to Use LLC for Your Business
                                                                    </li>

                                                                </ul>
                                                            </div>

                                                            <script>
                                                                var relatedPostsFormatter = function(relatedPosts) {
                                                                    //     console.log(relatedPosts);
                                                                    //     $.each(relatedPosts, function(i, post) {
                                                                    //       console.log($(".related-post-most-popular").children());
                                                                    //       $(".related-post-most-popular").children().each(function(index, element) {
                                                                    //         if (post.name == element.innerText) {
                                                                    //           console.log("Match!");
                                                                    //           console.log(post.name);
                                                                    //           console.log($('.related-post-slider h3'));
                                                                    //           console.log($(`.related-post-slider h3:contains("${post.name}")`));
                                                                    //           setTimeout(function () { console.log($(`.related-post-slider h3:contains("${post.name}")`));}, 1000);
                                                                    //         }
                                                                    //       });
                                                                    //     });

                                                                    var formatted = '<div class="related-post-grid related-post-slider">';
                                                                    for (var i = 0; i < relatedPosts.length; i++) {
                                                                        var relatedPost = relatedPosts[i];
                                                                        formatted += '<div class="related-post-item">';
                                                                        formatted += '<div class="related-post-item-inner">';
                                                                        formatted += `<a href="${relatedPost.url}">`;
                                                                        if (relatedPost.featuredImage) {
                                                                            formatted += '<div class="related-post-featured">';
                                                                            formatted += `<img src="${relatedPost.featuredImage}" alt="${relatedPost.featuredImageAltText}">`;
                                                                            formatted += '</div>'
                                                                        } else {
                                                                            formatted += '<div class="related-post-incfile-logo">';
                                                                            formatted +=
                                                                                '<img src="https://f.hubspotusercontent30.net/hubfs/3787982/Incfile-email/body-incfile@2x.png" alt="Incfile Logo">';
                                                                            formatted += '</div>'
                                                                        };
                                                                        formatted += '<div class="post-title-holder matchHeight">';
                                                                        formatted += '<div class="title_arrow">';
                                                                        formatted +=
                                                                            '<svg width="12" height="11" xmlns="http://www.w3.org/2000/svg"><path d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z" fill="#1D1D1D" fill-rule="nonzero"></path></svg>';
                                                                        formatted += '</div>';
                                                                        formatted += `<h3>${relatedPost.name}</h3>`;
                                                                        formatted += '</div>';
                                                                        formatted += '</a>';
                                                                        formatted += '</div>';
                                                                        formatted += '</div>';
                                                                    }
                                                                    formatted += '</div>';
                                                                    return formatted;
                                                                }
                                                            </script>
                                                        </div>

                                                    </div>
                                                    <!--end widget-span -->
                                                </div>
                                                <!--end row-->
                                            </div> --}}
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
            </main>
        </div>
        <script
        src="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41143153380/1636114335499/module_41143153380_Button.min.js')}}">
    </script>
    <script
        src="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41351299817/1643216358461/module_41351299817_Accordion.min.js')}}">
    </script>
    <script
        src="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41951289498/1620380498784/module_41951289498_Benefits_Tabber.min.js')}}">
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
