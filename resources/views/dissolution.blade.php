@extends('layout.main')
<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41359297094/1620320068261/module_41359297094_Overlay_Icon.min.css')}}">

<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/1628597401941/module_41218342583_Boxed_Content.css')}}">
<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/1638370530837/module_41216488591_Popup_Video.css')}}">

<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41221399372/1624021311142/module_41221399372_Content_List_With_Icons.min.css')}}">
<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41968232339/1620217843091/module_41968232339_Help_File_My_Annual_Report.min.css')}}">
<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/48024845617/1622195496363/module_48024845617_Misc_Order_Form.min.css')}}">
<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/1643216358498/module_41351299817_Accordion.css')}}">



<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41951289498/1620380498964/module_41951289498_Benefits_Tabber.min.css')}}">
<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/template_assets/41952706287/1619548359317/Incfile_February_2021/css/slick.min.css')}}">
<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/1646265821701/module_41952544958_Related_Articles.css')}}">
<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41148244352/1636038378453/module_41148244352_Footer_Social_Icons.min.css')}}">
<style id="hs_editor_style" type="text/css">
    #hs_cos_wrapper_widget_1614255465082  { display: block !important; margin-bottom: 80px !important; padding-top: 80px !important }
    #hs_cos_wrapper_widget_1614256647308  { display: block !important; padding-top: 175px !important }
    #hs_cos_wrapper_widget_1614249300775  { display: block !important; margin-top: 72px !important }
    #hs_cos_wrapper_widget_1614265660004  { display: block !important; margin-top: 10px !important }
    #hs_cos_wrapper_widget_1614250434822  { display: block !important; margin-top: 48px !important }
    .DND_banner-row-0-force-full-width-section > .row-fluid {
      max-width: none !important;
    }
    .widget_1614248864336-flexbox-positioning {
      display: -ms-flexbox !important;
      -ms-flex-direction: column !important;
      -ms-flex-align: center !important;
      -ms-flex-pack: start;
      display: flex !important;
      flex-direction: column !important;
      align-items: center !important;
      justify-content: flex-start;
    }
    .widget_1614248864336-flexbox-positioning > div {
      max-width: 100%;
      flex-shrink: 0 !important;
    }
    .bottom_area-row-0-force-full-width-section > .row-fluid {
      max-width: none !important;
    }
    .bottom_area-row-1-background-gradient {
      background-image: linear-gradient(to bottom, rgba(242, 246, 255, 1), rgba(255, 255, 255, 0)) !important;
    }
    /* HubSpot Non-stacked Media Query Styles */
    @media (min-width:768px) {
      .bottom_area-row-1-vertical-alignment > .row-fluid {
        display: -ms-flexbox !important;
        -ms-flex-direction: row;
        display: flex !important;
        flex-direction: row;
      }
      .cell_1614251938391-vertical-alignment {
        display: -ms-flexbox !important;
        -ms-flex-direction: column !important;
        -ms-flex-pack: center !important;
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important;
      }
      .cell_1614251938391-vertical-alignment > div {
        flex-shrink: 0 !important;
      }
      .cell_1614251938391-row-0-vertical-alignment > .row-fluid {
        display: -ms-flexbox !important;
        -ms-flex-direction: row;
        display: flex !important;
        flex-direction: row;
      }
      .cell_1622191229738-vertical-alignment {
        display: -ms-flexbox !important;
        -ms-flex-direction: column !important;
        -ms-flex-pack: center !important;
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important;
      }
      .cell_1622191229738-vertical-alignment > div {
        flex-shrink: 0 !important;
      }
      .cell_1622191229736-vertical-alignment {
        display: -ms-flexbox !important;
        -ms-flex-direction: column !important;
        -ms-flex-pack: center !important;
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important;
      }
      .cell_1622191229736-vertical-alignment > div {
        flex-shrink: 0 !important;
      }
    }
    /* HubSpot Styles (default) */
    .sidebar-row-0-padding {
      padding-top: 0px !important;
      padding-bottom: 0px !important;
    }
    .cell_16142488649482-padding {
      padding-left: 0px !important;
      padding-right: 0px !important;
    }
    .dnd_area-row-0-padding {
      padding-top: 60px !important;
      padding-bottom: 0px !important;
    }
    .cell_16142489146702-padding {
      padding-left: 0px !important;
      padding-right: 0px !important;
    }
    .bottom_area-row-0-margin {
      margin-bottom: -1px !important;
    }
    .bottom_area-row-0-padding {
      padding-top: 0px !important;
      padding-bottom: 0px !important;
    }
    .bottom_area-row-1-margin {
      margin-top: 89px !important;
    }
    .bottom_area-row-1-padding {
      padding-top: 72px !important;
      padding-bottom: 0px !important;
    }
    /* HubSpot Styles (mobile) */
    @media (max-width: 767px) {
      .widget_1614248864336-hidden {
        display: none !important;
      }
      .bottom_area-row-1-margin {
        margin-top: 64px !important;
      }
      .bottom_area-row-1-padding {
        padding-top: 64px !important;
      }
      .widget_1614255465082-margin > #hs_cos_wrapper_widget_1614255465082 {
        margin-bottom: 48px !important;
      }
      .widget_1614255465082-padding > #hs_cos_wrapper_widget_1614255465082 {
        padding-top: 64px !important;
      }
      .widget_1614256647308-padding > #hs_cos_wrapper_widget_1614256647308 {
        padding-top: 128px !important;
      }
    }
    </style>
    <style>
        .video-wrapper_widget_1614265578054 {
          position: relative;
          margin-left: auto;
          margin-right: auto;
          width: 100%;
          max-width: 770px;
        }

        .video-wrapper_widget_1614265578054::before {
          content: '';
          display: block;
          padding-top: 56.2%;
        }

        .video-wrapper_widget_1614265578054 .video-pop-container {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          max-width: 770px;
          z-index: 5;
        }
      </style>
@section('content')
<div id="carouselExampleControls" class="carousel slide mb-5" data-ride="carousel">
    <div class="carousel-inner">
       <div class="carousel-item active">
          <img class="d-block w-100"
             src="https://www.adorama.com/alc/wp-content/uploads/2017/11/shutterstock_114802408.jpg"
             alt="First slide">
       </div>
       <div class="carousel-item">
          <img class="d-block w-100"
             src="https://www.adorama.com/alc/wp-content/uploads/2017/11/shutterstock_114802408.jpg"
             alt="Second slide">
       </div>
       <div class="carousel-item">
          <img class="d-block w-100"
             src="https://www.adorama.com/alc/wp-content/uploads/2017/11/shutterstock_114802408.jpg"
             alt="Third slide">
       </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
 </div>


    <div class="annual-report-layout">
        <div class="banner-section llc-page-banner">
            <div class="container-fluid banner-area">
                <div class="row-fluid-wrapper">
                    <div class="row-fluid">
                        <div class="span12 widget-span widget-type-cell " style="" data-widget-type="cell" data-x="0"
                            data-w="12">

                            <div
                                class="row-fluid-wrapper row-depth-1 row-number-1 dnd-section DND_banner-row-0-force-full-width-section">
                                <div class="row-fluid ">
                                    <div class="span12 widget-span widget-type-cell dnd-column" style=""
                                        data-widget-type="cell" data-x="0" data-w="12">

                                        <div class="row-fluid-wrapper row-depth-1 row-number-2 dnd-row">
                                            <div class="row-fluid ">
                                                <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                    style="" data-widget-type="custom_widget" data-x="0" data-w="12">
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
                                                            let requestPath = '/manage-your-company/dissolution';
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

                                    </div>
                                    <!--end widget-span -->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end row-wrapper -->

                            <div class="row-fluid-wrapper row-depth-1 row-number-3 dnd-section">
                                <div class="row-fluid ">
                                    <div class="span12 widget-span widget-type-cell dnd-column" style=""
                                        data-widget-type="cell" data-x="0" data-w="12">

                                        <div class="row-fluid-wrapper row-depth-1 row-number-4 dnd-row">
                                            <div class="row-fluid ">
                                                <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                    style="" data-widget-type="custom_widget" data-x="0" data-w="12">
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



                                                                                     "><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 720 720">
                                                                <defs>
                                                                    <lineargradient
                                                                        id="top-left-transparent-green3_inline_svg__a"
                                                                        x1="100%" x2="100%" y1="95.674%" y2="0%">
                                                                        <stop offset="0%" stop-color="#FFF"
                                                                            stop-opacity="0"></stop>
                                                                        <stop offset="100%" stop-color="#F2F8F3">
                                                                        </stop>
                                                                    </lineargradient>
                                                                </defs>
                                                                <path fill="url(#top-left-transparent-green3_inline_svg__a)"
                                                                    fill-rule="evenodd"
                                                                    d="M720 0v720H0C0 322.355 322.355 0 720 0z"
                                                                    transform="rotate(180 360 360)"></path>
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

                                                            <div class="row-fluid-wrapper row-depth-1 row-number-2 dnd-row">
                                                                <div class="row-fluid ">
                                                                    <div class="span12 widget-span widget-type-custom_widget widget_1614248864336-hidden dnd-module widget_1614248864336-flexbox-positioning"
                                                                        style="" data-widget-type="custom_widget" data-x="0"
                                                                        data-w="12">
                                                                        <div id="hs_cos_wrapper_widget_1614248864336"
                                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-linked_image"
                                                                            style="" data-hs-cos-general-type="widget"
                                                                            data-hs-cos-type="module">











                                                                            <span id="hs_cos_wrapper_widget_1614248864336_"
                                                                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_linked_image"
                                                                                style="" data-hs-cos-general-type="widget"
                                                                                data-hs-cos-type="linked_image"><img
                                                                                    src="{{asset('image/cut.png')}}"
                                                                                    class="hs-image-widget "
                                                                                    style="max-width: 100%; height: auto;"
                                                                                    alt="dissolation"
                                                                                    title="dissolation"></span>
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
                                        <div class="span12 widget-span widget-type-cell " style="" data-widget-type="cell"
                                            data-x="0" data-w="12">

                                            <div
                                                class="row-fluid-wrapper row-depth-1 row-number-1 dnd-section dnd_area-row-0-padding">
                                                <div class="row-fluid ">
                                                    <div class="span12 widget-span widget-type-cell cell_16142489146702-padding dnd-column"
                                                        style="" data-widget-type="cell" data-x="0" data-w="12">

                                                        <div class="row-fluid-wrapper row-depth-1 row-number-2 dnd-row">
                                                            <div class="row-fluid ">
                                                                <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                                    style="" data-widget-type="custom_widget" data-x="0"
                                                                    data-w="12">
                                                                    <div id="hs_cos_wrapper_widget_1614248914336"
                                                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text"
                                                                        style="" data-hs-cos-general-type="widget"
                                                                        data-hs-cos-type="module"><span
                                                                            id="hs_cos_wrapper_widget_1614248914336_"
                                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text"
                                                                            style="" data-hs-cos-general-type="widget"
                                                                            data-hs-cos-type="rich_text">
                                                                            <p style="margin-bottom: 32px;">A
                                                                                corporation or LLC can come to a
                                                                                place of dissolution for several
                                                                                reasons. It can simply be a decision
                                                                                you've made for your company because
                                                                                it is no longer successful, you are
                                                                                moving on to a new adventure or your
                                                                                shareholders wish to dissolve its
                                                                                assets. This will, fortunately, stop
                                                                                the necessary tax filings and other
                                                                                requirements that come with having a
                                                                                record of operation on file with the
                                                                                secretary of state. But, the
                                                                                emotional decision to dissolve your
                                                                                company can be tough at times, if
                                                                                you put your heart and sweat into
                                                                                building your own business.</p>
                                                                            <p style="margin-bottom: 72px;">Allow
                                                                                Incfile.com to ease the burden by
                                                                                doing the <a
                                                                                    href="#"
                                                                                    target="_blank"
                                                                                    rel="noopener">dissolution
                                                                                    paperwork for you</a><a
                                                                                    href="#"
                                                                                    target="_blank" rel="noopener"></a><span
                                                                                    style="color: #999999;"><a
                                                                                        href="#"
                                                                                        target="_blank" rel="noopener"
                                                                                        style="color: #999999;">.</a></span>
                                                                            </p>
                                                                            <h3>How to Close an LLC or Corporation
                                                                            </h3>
                                                                            <p style="margin-bottom: 40px;">A
                                                                                company begins with Articles of
                                                                                Incorporation when it is formed,
                                                                                therefore it makes sense that
                                                                                Articles must be filed to dissolve a
                                                                                company that has been in operation.
                                                                                Without filing the proper paperwork,
                                                                                the business owner will continue to
                                                                                be liable for taxes and other state
                                                                                requirements. Fortunately, closing a
                                                                                company is really a matter of
                                                                                paperwork.</p>
                                                                        </span></div>

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
                                                                    <div id="hs_cos_wrapper_widget_1614265378133"
                                                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                                        style="" data-hs-cos-general-type="widget"
                                                                        data-hs-cos-type="module">
                                                                        <div
                                                                            class="widget_1614265378133 boxed-content-container">

                                                                            <div class="curve__Wrapper">
                                                                                <svg width="29" height="25"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M0 1.389c0 .746.599 1.349 1.354 1.384a26.869 26.869 0 0112.317 3.66c6.754 3.954 11.098 10.402 12.544 17.451A1.4 1.4 0 0027.592 25c.89 0 1.556-.806 1.38-1.666-1.599-7.79-6.398-14.916-13.863-19.286A29.704 29.704 0 001.46.002 1.393 1.393 0 000 1.387v.002z"
                                                                                        fill="#C9A3EE" fill-rule="evenodd">
                                                                                    </path>
                                                                                </svg>
                                                                            </div>

                                                                            <div class="boxed-color-box">



                                                                                <p style="margin: 0;">In order to
                                                                                    properly close a corporation or
                                                                                    LLC that is no longer
                                                                                    transacting business, the
                                                                                    company must file Articles of
                                                                                    Dissolution with the state of
                                                                                    incorporation. Neglecting to
                                                                                    file Articles of Dissolution for
                                                                                    a company that is no longer
                                                                                    active may expose the
                                                                                    corporation or LLC to
                                                                                    unnecessary recurring fees or
                                                                                    taxes.</p>
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

                                                        <div class="row-fluid-wrapper row-depth-1 row-number-4 dnd-row">
                                                            <div class="row-fluid ">
                                                                <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                                    style="" data-widget-type="custom_widget" data-x="0"
                                                                    data-w="12">
                                                                    <div id="hs_cos_wrapper_widget_1614249300775"
                                                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text"
                                                                        style="" data-hs-cos-general-type="widget"
                                                                        data-hs-cos-type="module"><span
                                                                            id="hs_cos_wrapper_widget_1614249300775_"
                                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text"
                                                                            style="" data-hs-cos-general-type="widget"
                                                                            data-hs-cos-type="rich_text">
                                                                            <p style="margin-bottom: 72px;">Business
                                                                                dissolution is primarily an act of
                                                                                filing Articles of Dissolution with
                                                                                your secretary of state. However, if
                                                                                a business is not in a sound
                                                                                position with the state to dissolve,
                                                                                other legal matters may complicate
                                                                                the process.</p>
                                                                            <h3 style="margin-bottom: 24px;">Steps
                                                                                to Dissolving Your LLC or
                                                                                Corporation</h3>
                                                                        </span></div>

                                                                </div>
                                                                <!--end widget-span -->
                                                            </div>
                                                            <!--end row-->
                                                        </div>
                                                        <!--end row-wrapper -->

                                                        <div class="row-fluid-wrapper row-depth-1 row-number-5 dnd-row">
                                                            <div class="row-fluid ">
                                                                <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                                    style="" data-widget-type="custom_widget" data-x="0"
                                                                    data-w="12">
                                                                    <div id="hs_cos_wrapper_widget_1614265578054"
                                                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                                        style="" data-hs-cos-general-type="widget"
                                                                        data-hs-cos-type="module">
                                                                        <div class="video-wrapper_widget_1614265578054">
                                                                            <div
                                                                                class="popup-video-container widget_1614265578054 al_left">

                                                                                <div class="gatsby-image-wrapper">
                                                                                    <div class="pop-video-thumb-bg"
                                                                                        style="background:url('../hubfs/Incfile_February_2021/images/how-to-dissolved-an-llc-video-thumb-21122020.jpg') center center / cover; background-size: cover;">
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="video-button popup_video_btn_widget_1614265578054">
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
                                                                                class="video-pop-container popup_video_container_widget_1614265578054">
                                                                                <div class="video-pop-container-inner">
                                                                                    <iframe class="video-frame"
                                                                                        title="Incfile Video" src="#"
                                                                                        width="500" height="349"
                                                                                        frameborder="0"
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
                                                        <!--end row-wrapper -->

                                                        <div class="row-fluid-wrapper row-depth-1 row-number-6 dnd-row">
                                                            <div class="row-fluid ">
                                                                <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                                    style="" data-widget-type="custom_widget" data-x="0"
                                                                    data-w="12">
                                                                    <div id="hs_cos_wrapper_widget_1614265660004"
                                                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text"
                                                                        style="" data-hs-cos-general-type="widget"
                                                                        data-hs-cos-type="module"><span
                                                                            id="hs_cos_wrapper_widget_1614265660004_"
                                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text"
                                                                            style="" data-hs-cos-general-type="widget"
                                                                            data-hs-cos-type="rich_text">
                                                                            <p style="margin-bottom: 40px;">There
                                                                                are three key steps to dissolving a
                                                                                company. Incfile completes these
                                                                                steps in a timely manner on your
                                                                                behalf, making an otherwise
                                                                                cumbersome process simple and
                                                                                stress-free.</p>
                                                                        </span></div>

                                                                </div>
                                                                <!--end widget-span -->
                                                            </div>
                                                            <!--end row-->
                                                        </div>
                                                        <!--end row-wrapper -->

                                                        <div class="row-fluid-wrapper row-depth-1 row-number-7 dnd-row">
                                                            <div class="row-fluid ">
                                                                <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                                    style="" data-widget-type="custom_widget" data-x="0"
                                                                    data-w="12">
                                                                    <div id="hs_cos_wrapper_widget_1614265709783"
                                                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                                        style="" data-hs-cos-general-type="widget"
                                                                        data-hs-cos-type="module">
                                                                        <div
                                                                            class="widget_1614265709783 content-list-icon-container">

                                                                            <div
                                                                                class="content-list-icon-items it1 icon-count">

                                                                                <span class="circle__Wrapper">1</span>

                                                                                <div class="content-list-icon-content">
                                                                                    <h5
                                                                                        style="padding-top: 4px; margin-bottom: 16px;">
                                                                                        Hold a meeting with the
                                                                                        Board of Directors</h5>
                                                                                    <p style="margin: 0;">In this
                                                                                        case, you want the minutes
                                                                                        of your meeting to reflect
                                                                                        that a vote was taken and
                                                                                        appropriate majority (as
                                                                                        outlined in your
                                                                                        incorporation papers) was
                                                                                        achieved. Those companies
                                                                                        with shareholders will want
                                                                                        a written documentation of
                                                                                        this decision signed by all
                                                                                        company owners. Some
                                                                                        companies, such as
                                                                                        single-member LLCs will not
                                                                                        need to complete this step.
                                                                                    </p>

                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="content-list-icon-items it2 icon-count">

                                                                                <span class="circle__Wrapper">2</span>

                                                                                <div class="content-list-icon-content">
                                                                                    <h5>File the Articles of
                                                                                        Dissolution</h5>
                                                                                    <p style="margin: 0;">The
                                                                                        paperwork must be completed
                                                                                        and signed by
                                                                                        the<span>&nbsp;</span><a
                                                                                            href="#"
                                                                                            target="_blank"
                                                                                            rel="noopener">Registered
                                                                                            Agent</a><span>&nbsp;</span>of
                                                                                        your company. You will be
                                                                                        issued a Certificate of
                                                                                        Dissolution that formalizes
                                                                                        the termination of business
                                                                                        activity in your state. Once
                                                                                        dissolution is properly
                                                                                        documented, all branches in
                                                                                        other states will
                                                                                        automatically be dissolved
                                                                                        as well. The dissolution of
                                                                                        a company must take place in
                                                                                        the state where
                                                                                        incorporation took place.
                                                                                    </p>

                                                                                </div>
                                                                            </div>

                                                                            <div
                                                                                class="content-list-icon-items it3 icon-count">

                                                                                <span class="circle__Wrapper">3</span>

                                                                                <div class="content-list-icon-content">
                                                                                    <h5
                                                                                        style="padding-top: 4px; margin-bottom: 16px;">
                                                                                        Notify the IRS</h5>
                                                                                    <p style="margin: 0;">This step
                                                                                        is important because it will
                                                                                        provide you with a "consent
                                                                                        to dissolution" or "tax
                                                                                        clearance" that makes the
                                                                                        process a smooth one. It
                                                                                        will be necessary to pay all
                                                                                        federal and state taxes due
                                                                                        at this time to receive this
                                                                                        consent. This document(s)
                                                                                        will be required by the
                                                                                        secretary of state to
                                                                                        achieve a formal
                                                                                        dissolution. While we'll
                                                                                        help you file your Articles
                                                                                        of Dissolution, you will be
                                                                                        responsible for contacting
                                                                                        the IRS to receive any tax
                                                                                        clearances, etc.</p>

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
                                                                <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                                    style="" data-widget-type="custom_widget" data-x="0"
                                                                    data-w="12">
                                                                    <div id="hs_cos_wrapper_widget_1614250434822"
                                                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text"
                                                                        style="" data-hs-cos-general-type="widget"
                                                                        data-hs-cos-type="module"><span
                                                                            id="hs_cos_wrapper_widget_1614250434822_"
                                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text"
                                                                            style="" data-hs-cos-general-type="widget"
                                                                            data-hs-cos-type="rich_text">
                                                                            <p style="margin: 0;">An additional step
                                                                                often recommended at this point is
                                                                                the closing of all credit lines and
                                                                                accounts that pertain to your
                                                                                business. Letting your creditors
                                                                                know that you have dissolved a
                                                                                company will set you up for more
                                                                                favorable circumstances should debt
                                                                                still be present. Finally, if you
                                                                                have any fictitious names in other
                                                                                states, you'll want to cancel those
                                                                                as well.</p>
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
                        <div class="span12 widget-span widget-type-cell " style="" data-widget-type="cell" data-x="0"
                            data-w="12">

                            <div
                                class="row-fluid-wrapper row-depth-1 row-number-1 bottom_area-row-0-margin dnd-section bottom_area-row-0-force-full-width-section bottom_area-row-0-padding">
                                <div class="row-fluid ">
                                    <div class="span12 widget-span widget-type-cell dnd-column" style=""
                                        data-widget-type="cell" data-x="0" data-w="12">

                                        <div class="row-fluid-wrapper row-depth-1 row-number-2 dnd-row">
                                            <div class="row-fluid ">
                                                <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                    style="" data-widget-type="custom_widget" data-x="0" data-w="12">
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
                                                                <path fill="url(#top-left-transparent-blue3_inline_svg__a)"
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
                                                    style="" data-widget-type="custom_widget" data-x="0" data-w="12">
                                                    <div id="hs_cos_wrapper_widget_1614263638863"
                                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                        style="" data-hs-cos-general-type="widget"
                                                        data-hs-cos-type="module">


                                                        <div class="overlay-icon-module overlay_icon_widget_1614263638863   "
                                                            style="
       max-width: 570px;
       max-height: 570px;
       top: 323px;   right: 0;
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
                                                <div class="span7 widget-span widget-type-cell dnd-column cell_1622191229736-vertical-alignment"
                                                    style="" data-widget-type="cell" data-x="0" data-w="7">

                                                    <div class="row-fluid-wrapper row-depth-1 row-number-6 dnd-row">
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
                                                                                        style="margin-bottom: 56px; max-width: 460px;">
                                                                                        Save your time. We'll handle
                                                                                        the paperwork.</h2>
                                                                                    <h4 style="margin-bottom: 24px;">
                                                                                        Requirements to file
                                                                                        Articles of Dissolution:
                                                                                    </h4>
                                                                                    <p style="margin: 0;">The
                                                                                        company must be in <a
                                                                                            style="font-weight: 900;"
                                                                                            href="#">good
                                                                                            standing</a> with the
                                                                                        state of incorporation and
                                                                                        cannot be in arrears of
                                                                                        franchise taxes or annual
                                                                                        reporting requirements. In
                                                                                        the event that the entity is
                                                                                        not in good standing
                                                                                        reinstatement would be
                                                                                        required in order to proceed
                                                                                        with the dissolution.</p>
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
                                                                                right: 170px;
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
                                                <div class="span5 widget-span widget-type-cell dnd-column cell_1622191229738-vertical-alignment"
                                                    style="" data-widget-type="cell" data-x="7" data-w="5">

                                                    <div class="row-fluid-wrapper row-depth-1 row-number-7 dnd-row">
                                                        <div class="row-fluid ">
                                                            <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                                style="" data-widget-type="custom_widget" data-x="0"
                                                                data-w="12">
                                                                <div id="hs_cos_wrapper_widget_1622191229342"
                                                                    class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                                    style="" data-hs-cos-general-type="widget"
                                                                    data-hs-cos-type="module">
                                                                    <div id="misc__order_form" class="misc__order_form">
                                                                        <div class="hfma-wrapper-right-column">
                                                                            <div class="hfma-wrapper-right-column-inner">
                                                                                <div
                                                                                    class="certificate-card-holder submit-with-icon">
                                                                                    <h3 class="gJQqAX">
                                                                                        Dissolution</h3>
                                                                                    <div id="hs_form_target_form_547796101">
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
                                                                                                            value="option">demo

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
                                                                                                        <option value="">
                                                                                                            Select
                                                                                                            State
                                                                                                        </option>
                                                                                                        <option
                                                                                                            v-for="state in exactStateList"
                                                                                                            value="state">
                                                                                                          Demo
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
                                                                                                        <option value="">
                                                                                                            Select
                                                                                                            State
                                                                                                        </option>
                                                                                                        <option
                                                                                                            v-for="state in exactStateList"
                                                                                                            value="state">
                                                                                                         Demo
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
                                                                                                        $200</p>
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
                                                                                                    <input type="submit"
                                                                                                        @click.prevent="handleSubmit"
                                                                                                        value="Go"
                                                                                                        class="hs-button primary large">
                                                                                                    <div
                                                                                                        class="button-action__Arrow-sc-1lf0xj6-1 ghTmmo arrow1">
                                                                                                        <svg width="12"
                                                                                                            height="11"
                                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path
                                                                                                                d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                                fill="#0000FF"
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
                                                <div class="span12 widget-span widget-type-custom_widget widget_1614255465082-margin widget_1614255465082-padding dnd-module"
                                                    style="" data-widget-type="custom_widget" data-x="0" data-w="12">
                                                    <div id="hs_cos_wrapper_widget_1614255465082"
                                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text"
                                                        style="" data-hs-cos-general-type="widget"
                                                        data-hs-cos-type="module"><span
                                                            id="hs_cos_wrapper_widget_1614255465082_"
                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text"
                                                            style="" data-hs-cos-general-type="widget"
                                                            data-hs-cos-type="rich_text">
                                                            <blockquote>
                                                                <h2 style="max-width: 640px; margin: 0px auto 24px;">
                                                                    Common questions on filing Dissolution</h2>
                                                            </blockquote>
                                                        </span></div>

                                                </div>
                                                <!--end widget-span -->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end row-wrapper -->

                                        <div class="row-fluid-wrapper row-depth-1 row-number-9 dnd-row">
                                            <div class="row-fluid ">
                                                <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                    style="" data-widget-type="custom_widget" data-x="0" data-w="12">
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
                                        </div>
                                        <!--end row-wrapper -->

                                        <div class="row-fluid-wrapper row-depth-1 row-number-10 dnd-row">
                                            <div class="row-fluid ">
                                                <div class="span12 widget-span widget-type-custom_widget dnd-module widget_1614256647308-padding"
                                                    style="" data-widget-type="custom_widget" data-x="0" data-w="12">
                                                    <div id="hs_cos_wrapper_widget_1614256647308"
                                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text"
                                                        style="" data-hs-cos-general-type="widget"
                                                        data-hs-cos-type="module"><span
                                                            id="hs_cos_wrapper_widget_1614256647308_"
                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text"
                                                            style="" data-hs-cos-general-type="widget"
                                                            data-hs-cos-type="rich_text">
                                                            <h3 style="text-align: center; margin-bottom: 24px;">
                                                                Providing Everything You Need When You Need It</h3>
                                                            <p
                                                                style="text-align: center; margin-bottom: 48px; max-width: 770px; margin-left: auto; margin-right: auto;">
                                                                As your business grows we'll be there every step of
                                                                the way to make sure that you have the resources at
                                                                hand to service your companies ongoing needs.</p>
                                                        </span></div>

                                                </div>
                                                <!--end widget-span -->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end row-wrapper -->

                                        <div class="row-fluid-wrapper row-depth-1 row-number-11 dnd-row">
                                            <div class="row-fluid ">
                                                <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                    style="" data-widget-type="custom_widget" data-x="0" data-w="12">
                                                    <div id="hs_cos_wrapper_widget_1614256769396"
                                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                        style="" data-hs-cos-general-type="widget"
                                                        data-hs-cos-type="module">
                                                        <div class="benefits-tabber-wrapper"
                                                            style="margin-top:px; margin-bottom:px;">
                                                            <div class="benefits-tabber-nav">
                                                                <div class="benefits-tabber-nav-inner">

                                                                    <a class="active"
                                                                        href="#widget_1614256769396tab1">Company
                                                                        Changes</a>

                                                                    <a href="#widget_1614256769396tab2">Compliance</a>

                                                                    <a href="#widget_1614256769396tab3">Registered
                                                                        Agent</a>

                                                                    <a href="#widget_1614256769396tab4">IRS
                                                                        Filings</a>

                                                                </div>
                                                            </div>
                                                            <div class="benefits-tabber-tabs-container">

                                                                <div class="benefits-tabber-tab-panal show"
                                                                    id="widget_1614256769396tab1">
                                                                    <div class="benefits-tabber-feature-grid">

                                                                        <div class="benefits-tabber-feature-item">
                                                                            <div
                                                                                class="benefits-tabber-feature-item-inner">
                                                                                <div class="featute-top"
                                                                                    style="background-color: rgba(250, 242, 248,1.0);">

                                                                                    <div class="feature-icon-holder">

                                                                                        <img src="../hubfs/Incfile_February_2021/images/bc-01.png"
                                                                                            alt="Amendment" loading="lazy">
                                                                                    </div>

                                                                                </div>
                                                                                <div class="feature-content">
                                                                                    <div class="content-holder">
                                                                                        <h3>Amendment</h3>
                                                                                        <p>Filed if a company
                                                                                            requires changes to
                                                                                            membership, addresses or
                                                                                            company name.</p>
                                                                                    </div>






                                                                                    <a class="feature-button"
                                                                                        href="#">
                                                                                        <div class="arrow">
                                                                                            <svg width="12" height="11"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                    fill="#1D1D1D"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <span>Learn more</span>
                                                                                    </a>

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="benefits-tabber-feature-item">
                                                                            <div
                                                                                class="benefits-tabber-feature-item-inner">
                                                                                <div class="featute-top"
                                                                                    style="background-color: rgba(242, 246, 255,1.0);">

                                                                                    <div class="feature-icon-holder">

                                                                                        <img src="../hubfs/Incfile_February_2021/images/bc-03.png"
                                                                                            alt="Foreign Qualification"
                                                                                            loading="lazy">
                                                                                    </div>

                                                                                </div>
                                                                                <div class="feature-content">
                                                                                    <div class="content-holder">
                                                                                        <h3>Foreign Qualification
                                                                                        </h3>
                                                                                        <p>Filed when you need to
                                                                                            expand your entity to
                                                                                            new states.</p>
                                                                                    </div>






                                                                                    <a class="feature-button"
                                                                                        href="#">
                                                                                        <div class="arrow">
                                                                                            <svg width="12" height="11"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                    fill="#1D1D1D"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <span>Learn more</span>
                                                                                    </a>

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="benefits-tabber-feature-item">
                                                                            <div
                                                                                class="benefits-tabber-feature-item-inner">
                                                                                <div class="featute-top"
                                                                                    style="background-color: rgba(254, 246, 237,1.0);">

                                                                                    <div class="feature-icon-holder">

                                                                                        <img src="../hubfs/Incfile_February_2021/images/bc-19.png"
                                                                                            alt="Fictitious Business Name"
                                                                                            loading="lazy">
                                                                                    </div>

                                                                                </div>
                                                                                <div class="feature-content">
                                                                                    <div class="content-holder">
                                                                                        <h3>Fictitious Business Name
                                                                                        </h3>
                                                                                        <p>Filed if a company
                                                                                            requires assumed
                                                                                            business/fictitious
                                                                                            name.</p>
                                                                                    </div>






                                                                                    <a class="feature-button"
                                                                                        href="#">
                                                                                        <div class="arrow">
                                                                                            <svg width="12" height="11"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                    fill="#1D1D1D"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <span>Learn more</span>
                                                                                    </a>

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="benefits-tabber-tab-panal "
                                                                    id="widget_1614256769396tab2">
                                                                    <div class="benefits-tabber-feature-grid">

                                                                        <div class="benefits-tabber-feature-item">
                                                                            <div
                                                                                class="benefits-tabber-feature-item-inner">
                                                                                <div class="featute-top"
                                                                                    style="background-color: rgba(238, 249, 254,1.0);">

                                                                                    <div class="feature-icon-holder">

                                                                                        <img src="../hubfs/Incfile_February_2021/images/bc-05.png"
                                                                                            alt="File Annual Report"
                                                                                            loading="lazy">
                                                                                    </div>

                                                                                </div>
                                                                                <div class="feature-content">
                                                                                    <div class="content-holder">
                                                                                        <h3>File Annual Report</h3>
                                                                                        <p>The majority of states
                                                                                            require that companies
                                                                                            file periodic reports
                                                                                            that affirm the current
                                                                                            information of the
                                                                                            companies members,
                                                                                            directors, and business
                                                                                            address.</p>
                                                                                    </div>






                                                                                    <a class="feature-button"
                                                                                        href="#">
                                                                                        <div class="arrow">
                                                                                            <svg width="12" height="11"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                    fill="#1D1D1D"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <span>Learn more</span>
                                                                                    </a>

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="benefits-tabber-feature-item">
                                                                            <div
                                                                                class="benefits-tabber-feature-item-inner">
                                                                                <div class="featute-top"
                                                                                    style="background-color: rgba(242, 246, 255,1.0);">

                                                                                    <div class="feature-icon-holder">

                                                                                        <img src="../hubfs/Incfile_February_2021/images/bc-10.png"
                                                                                            alt="Certificate of Good Standing"
                                                                                            loading="lazy">
                                                                                    </div>

                                                                                </div>
                                                                                <div class="feature-content">
                                                                                    <div class="content-holder">
                                                                                        <h3>Certificate of Good
                                                                                            Standing</h3>
                                                                                        <p>Required by governmental
                                                                                            and private agencies to
                                                                                            validate a companies
                                                                                            status in order to
                                                                                            facilitate specified
                                                                                            transactions.</p>
                                                                                    </div>






                                                                                    <a class="feature-button"
                                                                                        href="#">
                                                                                        <div class="arrow">
                                                                                            <svg width="12" height="11"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                    fill="#1D1D1D"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <span>Learn more</span>
                                                                                    </a>

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="benefits-tabber-feature-item">
                                                                            <div
                                                                                class="benefits-tabber-feature-item-inner">
                                                                                <div class="featute-top"
                                                                                    style="background-color: rgba(254, 247, 224,1.0);">

                                                                                    <div class="feature-icon-holder">

                                                                                        <img src="../hubfs/Incfile_February_2021/images/bc-17.png"
                                                                                            alt="Business License Search"
                                                                                            loading="lazy">
                                                                                    </div>

                                                                                </div>
                                                                                <div class="feature-content">
                                                                                    <div class="content-holder">
                                                                                        <h3>Business License Search
                                                                                        </h3>
                                                                                        <p>Determine all business
                                                                                            licenses and permits
                                                                                            required at the federal,
                                                                                            state, county, and
                                                                                            municipal level.</p>
                                                                                    </div>






                                                                                    <a class="feature-button"
                                                                                        href="#">
                                                                                        <div class="arrow">
                                                                                            <svg width="12" height="11"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                    fill="#1D1D1D"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <span>Learn more</span>
                                                                                    </a>

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="benefits-tabber-feature-item">
                                                                            <div
                                                                                class="benefits-tabber-feature-item-inner">
                                                                                <div class="featute-top"
                                                                                    style="background-color: rgba(250, 242, 248,1.0);">

                                                                                    <div class="feature-icon-holder">

                                                                                        <img src="../hubfs/Incfile_February_2021/images/bc-07.png"
                                                                                            alt="Trademark Name Search"
                                                                                            loading="lazy">
                                                                                    </div>

                                                                                </div>
                                                                                <div class="feature-content">
                                                                                    <div class="content-holder">
                                                                                        <h3>Trademark Name Search
                                                                                        </h3>
                                                                                        <p>Take steps to protect
                                                                                            your brand and valuable
                                                                                            company assets such as
                                                                                            your name, logo, and
                                                                                            tagline.</p>
                                                                                    </div>








                                                                                    <a class="feature-button"
                                                                                        href="#"
                                                                                        target="_blank" rel="noopener">
                                                                                        <div class="arrow">
                                                                                            <svg width="12" height="11"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                    fill="#1D1D1D"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <span>Learn more</span>
                                                                                    </a>

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="benefits-tabber-tab-panal "
                                                                    id="widget_1614256769396tab3">
                                                                    <div class="benefits-tabber-feature-grid">

                                                                        <div class="benefits-tabber-feature-item">
                                                                            <div
                                                                                class="benefits-tabber-feature-item-inner">
                                                                                <div class="featute-top"
                                                                                    style="background-color: rgba(254, 246, 237,1.0);">

                                                                                    <div class="feature-icon-holder">

                                                                                        <img src="../hubfs/Incfile_February_2021/images/bc-11.png"
                                                                                            alt="Order Registered Agent"
                                                                                            loading="lazy">
                                                                                    </div>

                                                                                </div>
                                                                                <div class="feature-content">
                                                                                    <div class="content-holder">
                                                                                        <h3>Order Registered Agent
                                                                                        </h3>
                                                                                        <p>Order registered agent
                                                                                            service and receive your
                                                                                            new registered agent
                                                                                            information immediately.
                                                                                        </p>
                                                                                    </div>






                                                                                    <a class="feature-button"
                                                                                        href="#">
                                                                                        <div class="arrow">
                                                                                            <svg width="12" height="11"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                    fill="#1D1D1D"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <span>Learn more</span>
                                                                                    </a>

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="benefits-tabber-feature-item">
                                                                            <div
                                                                                class="benefits-tabber-feature-item-inner">
                                                                                <div class="featute-top"
                                                                                    style="background-color: rgba(242, 248, 243,1.0);">

                                                                                    <div class="feature-icon-holder">

                                                                                        <img src="../hubfs/Incfile_February_2021/images/bc-18.png"
                                                                                            alt="Renew Registered Agent"
                                                                                            loading="lazy">
                                                                                    </div>

                                                                                </div>
                                                                                <div class="feature-content">
                                                                                    <div class="content-holder">
                                                                                        <h3>Renew Registered Agent
                                                                                        </h3>
                                                                                        <p>Click here if you have
                                                                                            existing registered
                                                                                            agent service and would
                                                                                            like to renew it.</p>
                                                                                    </div>








                                                                                    <a class="feature-button"
                                                                                        href="#"
                                                                                        target="_blank" rel="noopener">
                                                                                        <div class="arrow">
                                                                                            <svg width="12" height="11"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                    fill="#1D1D1D"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <span>Learn more</span>
                                                                                    </a>

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="benefits-tabber-feature-item">
                                                                            <div
                                                                                class="benefits-tabber-feature-item-inner">
                                                                                <div class="featute-top"
                                                                                    style="background-color: rgba(242, 246, 255,1.0);">

                                                                                    <div class="feature-icon-holder">

                                                                                        <img src="../hubfs/Incfile_February_2021/images/bc-16.png"
                                                                                            alt="Change Registered Agent"
                                                                                            loading="lazy">
                                                                                    </div>

                                                                                </div>
                                                                                <div class="feature-content">
                                                                                    <div class="content-holder">
                                                                                        <h3>Change Registered Agent
                                                                                        </h3>
                                                                                        <p>Use to update the
                                                                                            registered agent on file
                                                                                            with the state of
                                                                                            formation.</p>
                                                                                    </div>






                                                                                    <a class="feature-button"
                                                                                        href="#">
                                                                                        <div class="arrow">
                                                                                            <svg width="12" height="11"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                    fill="#1D1D1D"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <span>Learn more</span>
                                                                                    </a>

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="benefits-tabber-tab-panal "
                                                                    id="widget_1614256769396tab4">
                                                                    <div class="benefits-tabber-feature-grid">

                                                                        <div class="benefits-tabber-feature-item">
                                                                            <div
                                                                                class="benefits-tabber-feature-item-inner">
                                                                                <div class="featute-top"
                                                                                    style="background-color: rgba(252, 239, 239,1.0);">

                                                                                    <div class="feature-icon-holder">

                                                                                        <img src="../hubfs/Incfile_February_2021/images/bc-12.png"
                                                                                            alt="EIN / Tax ID #"
                                                                                            loading="lazy">
                                                                                    </div>

                                                                                </div>
                                                                                <div class="feature-content">
                                                                                    <div class="content-holder">
                                                                                        <h3>EIN / Tax ID #</h3>
                                                                                        <p>An EIN is required to
                                                                                            open a bank account,
                                                                                            file taxes and submit
                                                                                            payroll taxes.</p>
                                                                                    </div>






                                                                                    <a class="feature-button"
                                                                                        href="#">
                                                                                        <div class="arrow">
                                                                                            <svg width="12" height="11"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                    fill="#1D1D1D"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <span>Learn more</span>
                                                                                    </a>

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="benefits-tabber-feature-item">
                                                                            <div
                                                                                class="benefits-tabber-feature-item-inner">
                                                                                <div class="featute-top"
                                                                                    style="background-color: rgba(242, 246, 255,1.0);">

                                                                                    <div class="feature-icon-holder">

                                                                                        <img src="../hubfs/Incfile_February_2021/images/bc-13.png"
                                                                                            alt="File Business Taxes"
                                                                                            loading="lazy">
                                                                                    </div>

                                                                                </div>
                                                                                <div class="feature-content">
                                                                                    <div class="content-holder">
                                                                                        <h3>File Business Taxes</h3>
                                                                                        <p>Work with a tax
                                                                                            professional to file
                                                                                            your federal business
                                                                                            tax return.</p>
                                                                                    </div>






                                                                                    <a class="feature-button"
                                                                                        href="#">
                                                                                        <div class="arrow">
                                                                                            <svg width="12" height="11"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                    fill="#1D1D1D"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <span>Learn more</span>
                                                                                    </a>

                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="benefits-tabber-feature-item">
                                                                            <div
                                                                                class="benefits-tabber-feature-item-inner">
                                                                                <div class="featute-top"
                                                                                    style="background-color: rgba(238, 249, 254,1.0);">

                                                                                    <div class="feature-icon-holder">

                                                                                        <img src="../hubfs/Incfile_February_2021/images/bc-15.png"
                                                                                            alt="File S Corp Tax Election"
                                                                                            loading="lazy">
                                                                                    </div>

                                                                                </div>
                                                                                <div class="feature-content">
                                                                                    <div class="content-holder">
                                                                                        <h3>File S Corp Tax Election
                                                                                        </h3>
                                                                                        <p>Reduce the Tax You Pay by
                                                                                            Having Your LLC Treated
                                                                                            as an S Corp for Tax
                                                                                            Purposes.</p>
                                                                                    </div>






                                                                                    <a class="feature-button"
                                                                                        href="#">
                                                                                        <div class="arrow">
                                                                                            <svg width="12" height="11"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                    fill="#1D1D1D"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <span>Learn more</span>
                                                                                    </a>

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

                            <div class="row-fluid-wrapper row-depth-1 row-number-12 dnd-section">
                                <div class="row-fluid ">
                                    <div class="span12 widget-span widget-type-cell dnd-column" style=""
                                        data-widget-type="cell" data-x="0" data-w="12">

                                        <div class="row-fluid-wrapper row-depth-1 row-number-13 dnd-row">
                                            <div class="row-fluid ">
                                                <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                    style="" data-widget-type="custom_widget" data-x="0" data-w="12">
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
                                                                                href="#">

                                                                                <div class="related-post-featured">
                                                                                    <img src="../hubfs/Imported_Blog_Media/jason-briscoe-Z9Rx4im9qLs-unsplash-3.jpg"
                                                                                        alt="How to Dissolve Your LLC — The Least Painful Way">
                                                                                </div>

                                                                                <div class="post-title-holder matchHeight">
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
                                                                                    <h3>How to Dissolve Your LLC —
                                                                                        The Least Painful Way</h3>
                                                                                </div>
                                                                            </a>
                                                                        </div>
                                                                    </div>

                                                                    <div class="related-post-item">
                                                                        <div class="related-post-item-inner">
                                                                            <a
                                                                                href="#">

                                                                                <div class="related-post-featured">
                                                                                    <img src="../hubfs/Imported_Blog_Media/Should-I-dissolve-my-business-3.jpg"
                                                                                        alt="I'm Closing My Business - Should I Dissolve the Entity?">
                                                                                </div>

                                                                                <div class="post-title-holder matchHeight">
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
                                                                                    <h3>I'm Closing My Business -
                                                                                        Should I Dissolve the
                                                                                        Entity?</h3>
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
@endsection

