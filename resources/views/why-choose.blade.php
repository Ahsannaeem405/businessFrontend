@extends('layout.main')
<style>
        .carousel-inner{
        max-height: 500px;
    }
    a.cta_button{-moz-box-sizing:content-box !important;-webkit-box-sizing:content-box !important;box-sizing:content-box !important;vertical-align:middle}.hs-breadcrumb-menu{list-style-type:none;margin:0px 0px 0px 0px;padding:0px 0px 0px 0px}.hs-breadcrumb-menu-item{float:left;padding:10px 0px 10px 10px}.hs-breadcrumb-menu-divider:before{content:'›';padding-left:10px}.hs-featured-image-link{border:0}.hs-featured-image{float:right;margin:0 0 20px 20px;max-width:50%}@media (max-width: 568px){.hs-featured-image{float:none;margin:0;width:100%;max-width:100%}}.hs-screen-reader-text{clip:rect(1px, 1px, 1px, 1px);height:1px;overflow:hidden;position:absolute !important;width:1px}
    </style>

    <link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/template_assets/41141851171/1625143722352/Incfile_February_2021/css/layout.min.css')}}">
    <link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/template_assets/51805631655/1646227967249/Incfile_February_2021/css/custom-main.min.css')}}">
    <link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/template_assets/41143039748/1643731110424/Incfile_February_2021/css/theme-overrides.min.css')}}">
    <link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/1646065739376/module_41143153420_Banner.css')}}">

    <style>
      .banner.widget_1613019964333_banner .banner-button-container .button-item a,
      .banner.widget_1613019964333_banner .banner-button-container .button-item button{
        margin-bottom:32px;
      }

      .banner.widget_1613019964333_banner .banner-image-container .gatsby-image-wrapper {
        left: -8%;
      }


      .banner.widget_1613019964333_banner .banner-image-container {
        display: flex;
        max-width: 280px;
        width: 100%;
        overflow: hidden;
      }
      @media (min-width: 576px){
        .banner.widget_1613019964333_banner .banner-image-container {
          max-width: 950px;
        }
      }
      @media (min-width: 992px){
        .banner.widget_1613019964333_banner .banner-image-container {
          position: absolute;
          top: 50%;
          right: 55%;
          width: 55%;
          transform: translate(100%, -50%);
          padding-bottom: 0px;
        }
      }
      @media (max-width: 576px){
        .banner.widget_1613019964333_banner .banner-image-container {
          margin-bottom: 0px;
          margin-top: 64px;
          margin-bottom: 24px;
        }
      }


      @media (max-width: 767px) {
        .banner.widget_1613019964333_banner .banner-image-container .gatsby-image-wrapper {
          left: -8%;
        }
      }

      @media (max-width: 991px) {
        .banner.widget_1613019964333_banner .banner-image-container .gatsby-image-wrapper {
          left: 6.7%;
        }
      }

      @media (min-width: 992px){
        .banner.widget_1613019964333_banner .banner-content-container {
          width: 50%;
        }

        .banner.widget_1613019964333_banner .banner-image-container .gatsby-image-wrapper img {
          object-position: center center;
        }
      }
    </style>

    <link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/42724374272/1615356804892/module_42724374272_Why_Choose_Incfile.min.css')}}">
    <link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41359297094/1620320068261/module_41359297094_Overlay_Icon.min.css')}}">
    <style>


        .overlay_icon_widget_1615265145090 svg stop:first-child {
          stop-color: rgba(255, 255, 255, 0.0);
        }
        .overlay_icon_widget_1615265145090 svg stop:last-child {
          stop-color: rgba(210, 224, 254, 1.0);
        }

    </style>

  <link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/1643216358498/module_41351299817_Accordion.css')}}">


  <style>
    #widget_1615264138342.default_bullet .acc_item .acc_body .inner ul {
      list-style: disc;
      padding-left: 16px;
    }
    #widget_1615264138342.default_bullet .acc_item .acc_body .inner ul ul {
      list-style-type: circle;
      padding-top: 16px;
    }
    #widget_1615264138342.default_bullet .acc_item .acc_body .inner ul li {
      padding-left: 0;
    }
    #widget_1615264138342.default_bullet .acc_item .acc_body .inner ul li:before {
      content: none;
    }
    #widget_1615264138342.acc_wrapper > .inner {
      max-width: 828px;
      padding-top:25px;
      padding-bottom:25px;
      padding-left:29px;
      padding-right:29px;
    }
    #widget_1615264138342.acc_wrapper .acc_item .title{
      color: #4e4e4e;
    }

    #widget_1615264138342.acc_wrapper .acc_body{
      color: #4e4e4e;
    }

    #widget_1615264138342.acc_wrapper.ic_indexNumb .indx_icon span {
      background-color: #5089fd;
    }
    #widget_1615264138342.acc_wrapper .acc_item .acc_body .inner:not(.default_bullet) ul li:before {
      background-color: #5089fd;
    }


    @media(max-width:767px){
      #widget_1615264138342.acc_wrapper > .inner {
        padding-top:25px;
        padding-bottom:25px;
        padding-left:0px;
        padding-right:0px;
      }
    }

  </style>


  <style>


      .overlay_icon_widget_1615266012067 svg stop:first-child {
        stop-color: rgba(255, 255, 255, 0.0);
      }
      .overlay_icon_widget_1615266012067 svg stop:last-child {
        stop-color: rgba(210, 224, 254, 1.0);
      }

  </style>

<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/1631534448375/module_41246686164_Get_Started_Banner.css')}}">
<style>
    @media(min-width: 768px) {
      .get-started-banner.widget_1612523550855_banner .rocket__Content {
        max-width: 460px;
      }
    }

    @media(min-width: 992px) {
      .get-started-banner.widget_1612523550855_banner .rocket__Content {
        max-width: 535px;
      }
    }
  </style>

  <link rel="stylesheet" href="hs-fs/hub/3787982/hub_generated/module_assets/41148244352/1636038378453/module_41148244352_Footer_Social_Icons.min.css">
  <!-- Editor Styles -->
  <style id="hs_editor_style" type="text/css">
  .DND_banner-row-0-force-full-width-section > .row-fluid {
    max-width: none !important;
  }
  .dnd_area-row-0-force-full-width-section > .row-fluid {
    max-width: none !important;
  }
  .dnd_area-row-1-force-full-width-section > .row-fluid {
    max-width: none !important;
  }
  .dnd_area-row-3-force-full-width-section > .row-fluid {
    max-width: none !important;
  }
  .dnd_area-row-4-force-full-width-section > .row-fluid {
    max-width: none !important;
  }
  /* HubSpot Styles (default) */
  .dnd_area-row-0-padding {
    padding-top: 0px !important;
    padding-bottom: 0px !important;
  }
  .dnd_area-row-1-padding {
    padding-top: 0px !important;
    padding-bottom: 0px !important;
  }
  .dnd_area-row-2-padding {
    padding-top: 100px !important;
    padding-bottom: 50px !important;
  }
  .dnd_area-row-3-padding {
    padding-top: 0px !important;
    padding-bottom: 0px !important;
  }
  .dnd_area-row-4-padding {
    padding-top: 0px !important;
    padding-bottom: 0px !important;
  }
  .cell_16125235512742-padding {
    padding-left: 0px !important;
    padding-right: 0px !important;
  }
  </style>
@section('content')
@include('slider')
        <div class="banner-section corporation-filing-banner">
            <div class="container-fluid banner-area" style="padding-left:0px; padding-right:0px">
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
                                                    <div id="hs_cos_wrapper_widget_1613019964333"
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
                                                            let requestPath = '/why-choose-incfile';
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
                        <div class="span12 widget-span widget-type-cell " style="" data-widget-type="cell" data-x="0"
                            data-w="12">

                            <div
                                class="row-fluid-wrapper row-depth-1 row-number-1 dnd_area-row-0-force-full-width-section dnd-section dnd_area-row-0-padding">
                                <div class="row-fluid ">
                                    <div class="span12 widget-span widget-type-cell dnd-column" style=""
                                        data-widget-type="cell" data-x="0" data-w="12">

                                        <div class="row-fluid-wrapper row-depth-1 row-number-2 dnd-row">
                                            <div class="row-fluid ">
                                                <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                    style="" data-widget-type="custom_widget" data-x="0" data-w="12">
                                                    <div id="hs_cos_wrapper_widget_1615264089546"
                                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                        style="" data-hs-cos-general-type="widget"
                                                        data-hs-cos-type="module">
                                                        <div class="container pl-md-5 pr-md-5 pt-3 "
                                                            style="background-color:rgba(254, 246, 237,1.0);">
                                                            <div class="page-center">

                                                                <div class="heading-center">
                                                                    <div class="container-wrapper">
                                                                        <div class="content-center">
                                                                            <div class="content-center text-center">
                                                                                <h3 class="heading-headingwrapper">
                                                                                {{$formation->heading}}</h3>
                                                                                <p>{{$formation->detail}}</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="deciding-imgageBottom text-center">
                                                                    <div class=" gatsby-image-wrapper">
                                                                        <div class="image-wrapper"></div>
                                                                        <img src="{{asset('Upload/whychoose/'.$formation->image)}}"
                                                                           width="50%" alt="mr-bulb-compass-3979">
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

                            <div
                                class="row-fluid-wrapper row-depth-1 row-number-3 dnd_area-row-1-padding dnd-section dnd_area-row-1-force-full-width-section">
                                <div class="row-fluid ">
                                    <div class="span12 widget-span widget-type-cell dnd-column" style=""
                                        data-widget-type="cell" data-x="0" data-w="12">

                                        <div class="row-fluid-wrapper row-depth-1 row-number-4 dnd-row">
                                            <div class="row-fluid ">
                                                <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                    style="" data-widget-type="custom_widget" data-x="0" data-w="12">
                                                    <div id="hs_cos_wrapper_widget_1615265145090"
                                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                        style="" data-hs-cos-general-type="widget"
                                                        data-hs-cos-type="module">


                                                        <div class="overlay-icon-module overlay_icon_widget_1615265145090   "
                                                            style="
   max-width: 420px;
   max-height: 420px;
   top: -145px;   right: 0;
   transform: rotate(0deg);
    transform: scale(-1, 1) rotate(0deg);


   "><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 570 570">
                                                                <defs>
                                                                    <lineargradient
                                                                        id="top-left-transparent-blue3_inline_svg__a"
                                                                        x1="100%" x2="100%" y1="95.674%" y2="0%">
                                                                        <stop offset="0%" stop-color="#FFF"
                                                                            stop-opacity="0"></stop>
                                                                        <stop offset="100%" stop-color="#D2E0FE"></stop>
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

                                    </div>
                                    <!--end widget-span -->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end row-wrapper -->

                            <div class="row-fluid-wrapper row-depth-1 row-number-5 dnd_area-row-2-padding dnd-section">
                                <div class="row-fluid ">
                                    <div class="span12 widget-span widget-type-cell dnd-column" style=""
                                        data-widget-type="cell" data-x="0" data-w="12">

                                        <div class="row-fluid-wrapper row-depth-1 row-number-6 dnd-row">
                                            <div class="row-fluid ">
                                                <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                    style="" data-widget-type="custom_widget" data-x="0" data-w="12">
                                                    <div id="hs_cos_wrapper_widget_1615264186116"
                                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text"
                                                        style="" data-hs-cos-general-type="widget"
                                                        data-hs-cos-type="module"><span
                                                            id="hs_cos_wrapper_widget_1615264186116_"
                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text"
                                                            style="" data-hs-cos-general-type="widget"
                                                            data-hs-cos-type="rich_text">
                                                            <p
                                                                style="margin: 50px auto 55px; max-width: 670px; color: #1d1d1d; font-size: 24px; line-height: 32px; font-weight: bold;">
                                                                {{$faq->heading}}
                                                            </p>
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
                                                    style="" data-widget-type="custom_widget" data-x="0" data-w="12">
                                                    <div id="hs_cos_wrapper_widget_1615264138342"
                                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                        style="" data-hs-cos-general-type="widget"
                                                        data-hs-cos-type="module">
                                                        <div id="widget_1615264138342"
                                                            class=" acc_wrapper acc_mod_wrapper ic_indexNumb  acc_allToggle">
                                                            <div class="inner">


                                                                <div class="acc_curve_svg">
                                                                    <div class="acc_curve_svg_holder">
                                                                        <svg width="29" height="25"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M0 1.389c0 .746.599 1.349 1.354 1.384a26.869 26.869 0 0112.317 3.66c6.754 3.954 11.098 10.402 12.544 17.451A1.4 1.4 0 0027.592 25c.89 0 1.556-.806 1.38-1.666-1.599-7.79-6.398-14.916-13.863-19.286A29.704 29.704 0 001.46.002 1.393 1.393 0 000 1.387v.002z"
                                                                                fill="#C9A3EE" fill-rule="evenodd">
                                                                            </path>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <style>
                                                                    #widget_1615264138342.acc_wrapper .acc_curve_svg_holder path {
                                                                        fill: rgba(151, 224, 199, 1.0);
                                                                    }

                                                                    #widget_1615264138342.acc_wrapper .acc_curve_svg {
                                                                        transform: rotate(-90deg);
                                                                        top: 2px;
                                                                        right: ;
                                                                        bottom: ;
                                                                        left: 5px;
                                                                    }

                                                                </style>



                                                                <div class="acc_item acc1 active">

                                                                    <div class="acc_header trigger"
                                                                        data-id="widget_1615264138342-valuenobodygivesyoumoreforless1">
                                                                        <div class="inner">


                                                                            <div class="indx_icon">
                                                                                <span>1</span>
                                                                            </div>


                                                                            <div class="title">
                                                                                <span>{{$faq->q1}}</span>
                                                                            </div>

                                                                            <div class="arr_icon last_pos">
                                                                                <svg width="32" height="32"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <g fill="none" fill-rule="evenodd">
                                                                                        <circle fill="#FEF6ED" cx="16"
                                                                                            cy="16" r="16"></circle>
                                                                                        <path
                                                                                            d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z"
                                                                                            fill="#0000FF"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="acc_body" style="display: block;"
                                                                        data-id="widget_1615264138342-valuenobodygivesyoumoreforless1">
                                                                        <div class="inner">
                                                                            <p style="margin-bottom: 32px;">{{$faq->q1}}</p>
                                                                            <p style="margin-bottom: 32px;">{{$faq->a1}}</p>


                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="acc_item acc2">

                                                                    <div class="acc_header trigger"
                                                                        data-id="widget_1615264138342-registeredagentservicestyearfree2">
                                                                        <div class="inner">


                                                                            <div class="indx_icon">
                                                                                <span>2</span>
                                                                            </div>


                                                                            <div class="title">
                                                                                <span>{{$faq->q2}}</span>
                                                                            </div>

                                                                            <div class="arr_icon last_pos">
                                                                                <svg width="32" height="32"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <g fill="none" fill-rule="evenodd">
                                                                                        <circle fill="#FEF6ED" cx="16"
                                                                                            cy="16" r="16"></circle>
                                                                                        <path
                                                                                            d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z"
                                                                                            fill="#0000FF"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="acc_body"
                                                                        data-id="widget_1615264138342-registeredagentservicestyearfree2">
                                                                        <div class="inner">
                                                                            <p style="margin-bottom: 32px;">{{$faq->a2}}</p>



                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="acc_item acc3">

                                                                    <div class="acc_header trigger"
                                                                        data-id="widget_1615264138342-transparency3">
                                                                        <div class="inner">


                                                                            <div class="indx_icon">
                                                                                <span>3</span>
                                                                            </div>


                                                                            <div class="title">
                                                                                <span>{{$faq->q3}}</span>
                                                                            </div>

                                                                            <div class="arr_icon last_pos">
                                                                                <svg width="32" height="32"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <g fill="none" fill-rule="evenodd">
                                                                                        <circle fill="#FEF6ED" cx="16"
                                                                                            cy="16" r="16"></circle>
                                                                                        <path
                                                                                            d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z"
                                                                                            fill="#0000FF"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="acc_body"
                                                                        data-id="widget_1615264138342-transparency3">
                                                                        <div class="inner">
                                                                            <p style="margin-bottom: 32px;">{{$faq->a3}}</p>




                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="acc_item acc4">

                                                                    <div class="acc_header trigger"
                                                                        data-id="widget_1615264138342-notifications4">
                                                                        <div class="inner">


                                                                            <div class="indx_icon">
                                                                                <span>4</span>
                                                                            </div>


                                                                            <div class="title">
                                                                                <span>{{$faq->q4}}</span>
                                                                            </div>

                                                                            <div class="arr_icon last_pos">
                                                                                <svg width="32" height="32"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <g fill="none" fill-rule="evenodd">
                                                                                        <circle fill="#FEF6ED" cx="16"
                                                                                            cy="16" r="16"></circle>
                                                                                        <path
                                                                                            d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z"
                                                                                            fill="#0000FF"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="acc_body"
                                                                        data-id="widget_1615264138342-notifications4">
                                                                        <div class="inner">
                                                                            <p style="margin-bottom: 32px;">{{$faq->a4}}</p>


                                                                        </div>
                                                                    </div>
                                                                </div>
{{--
                                                                <div class="acc_item acc5">

                                                                    <div class="acc_header trigger"
                                                                        data-id="widget_1615264138342-internaldocuments5">
                                                                        <div class="inner">


                                                                            <div class="indx_icon">
                                                                                <span>5</span>
                                                                            </div>


                                                                            <div class="title">
                                                                                <span>Internal Documents</span>
                                                                            </div>

                                                                            <div class="arr_icon last_pos">
                                                                                <svg width="32" height="32"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <g fill="none" fill-rule="evenodd">
                                                                                        <circle fill="#FEF6ED" cx="16"
                                                                                            cy="16" r="16"></circle>
                                                                                        <path
                                                                                            d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z"
                                                                                            fill="#0000FF"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="acc_body"
                                                                        data-id="widget_1615264138342-internaldocuments5">
                                                                        <div class="inner">
                                                                            <p style="margin-bottom: 32px;">It is very
                                                                                important that clients understand that
                                                                                the company formation process is more
                                                                                than just filing the articles of
                                                                                organization / incorporation with the
                                                                                state. Depending on the state in which
                                                                                the company is filed some states may not
                                                                                list the members of an LLC or the
                                                                                Directors and Shareholders of a
                                                                                corporation.</p>
                                                                            <p style="margin-bottom: 32px;">We create
                                                                                custom Operating Agreements for the LLC
                                                                                which will list the name and percentage
                                                                                of ownership for each member. In
                                                                                addition we also create custom bylaws
                                                                                and organizational meeting minutes for
                                                                                corporations which list the names of the
                                                                                Directors and Shareholders as well as
                                                                                the number of shares that each
                                                                                shareholder owns.</p>
                                                                            <p style="margin-bottom: 32px;">The internal
                                                                                documents stated above are in addition
                                                                                to other custom documents as well such
                                                                                as the Statement of the Organizer /
                                                                                Incorporator and banking resolutions. If
                                                                                changes need to be made to any of these
                                                                                documents we can also provide them to
                                                                                our clients in digital format so that
                                                                                they can be customized as needed.</p>


                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="acc_item acc6">

                                                                    <div class="acc_header trigger"
                                                                        data-id="widget_1615264138342-electroniccopies6">
                                                                        <div class="inner">


                                                                            <div class="indx_icon">
                                                                                <span>6</span>
                                                                            </div>


                                                                            <div class="title">
                                                                                <span>Electronic Copies</span>
                                                                            </div>

                                                                            <div class="arr_icon last_pos">
                                                                                <svg width="32" height="32"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <g fill="none" fill-rule="evenodd">
                                                                                        <circle fill="#FEF6ED" cx="16"
                                                                                            cy="16" r="16"></circle>
                                                                                        <path
                                                                                            d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z"
                                                                                            fill="#0000FF"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="acc_body"
                                                                        data-id="widget_1615264138342-electroniccopies6">
                                                                        <div class="inner">
                                                                            <p style="margin-bottom: 32px;">We know that
                                                                                sometimes even the best organized person
                                                                                can misplace or lose important documents
                                                                                therefore we make sure to keep copies of
                                                                                every filing in digital format should
                                                                                you need it in the future.</p>


                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="acc_item acc7">

                                                                    <div class="acc_header trigger"
                                                                        data-id="widget_1615264138342-privacy7">
                                                                        <div class="inner">


                                                                            <div class="indx_icon">
                                                                                <span>7</span>
                                                                            </div>


                                                                            <div class="title">
                                                                                <span>Privacy</span>
                                                                            </div>

                                                                            <div class="arr_icon last_pos">
                                                                                <svg width="32" height="32"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <g fill="none" fill-rule="evenodd">
                                                                                        <circle fill="#FEF6ED" cx="16"
                                                                                            cy="16" r="16"></circle>
                                                                                        <path
                                                                                            d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z"
                                                                                            fill="#0000FF"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="acc_body"
                                                                        data-id="widget_1615264138342-privacy7">
                                                                        <div class="inner">
                                                                            <p style="margin-bottom: 32px;">You can
                                                                                always rest assured that your personal
                                                                                information will remain such. We do not
                                                                                sell or solicit your information to any
                                                                                person or outside business the only we
                                                                                will share any of your personal
                                                                                information with any outside agency is
                                                                                through the receipt of a subpoena.</p>
                                                                            <p style="margin-bottom: 32px;">Although we
                                                                                do have partners that we encourage our
                                                                                clients to use they will only be
                                                                                provided your contact information if you
                                                                                personally opt in. We also do not store
                                                                                any payment card information in our
                                                                                database and scrape any other sensitive
                                                                                information from our site i.e. Social
                                                                                Security Numbers from the database as
                                                                                soon as the order is completed</p>


                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="acc_item acc8">

                                                                    <div class="acc_header trigger"
                                                                        data-id="widget_1615264138342-salespractices8">
                                                                        <div class="inner">


                                                                            <div class="indx_icon">
                                                                                <span>8</span>
                                                                            </div>


                                                                            <div class="title">
                                                                                <span>Sales Practices</span>
                                                                            </div>

                                                                            <div class="arr_icon last_pos">
                                                                                <svg width="32" height="32"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <g fill="none" fill-rule="evenodd">
                                                                                        <circle fill="#FEF6ED" cx="16"
                                                                                            cy="16" r="16"></circle>
                                                                                        <path
                                                                                            d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z"
                                                                                            fill="#0000FF"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="acc_body"
                                                                        data-id="widget_1615264138342-salespractices8">
                                                                        <div class="inner">
                                                                            <p style="margin-bottom: 32px;">We do not
                                                                                employ sales people any person that you
                                                                                speak to on the telephone regarding
                                                                                information about a new formation will
                                                                                always be knowledgable long time
                                                                                employee or on of the owners of the
                                                                                company.</p>
                                                                            <p style="margin-bottom: 32px;">We only
                                                                                provide you with clear concise
                                                                                information that will allow you to make
                                                                                the best decision for your needs. Even
                                                                                though it is much more profitable for
                                                                                us, we never have or will encourage our
                                                                                clients to form entities in states
                                                                                outside of the location where the
                                                                                business is physically located as this
                                                                                practice adds further complexity to the
                                                                                process if additional steps are not
                                                                                taken and can leave the client exposed
                                                                                in the event of litigation or the
                                                                                pursuance of additional licensing in the
                                                                                state of location.</p>
                                                                            <p style="margin-bottom: 32px;">We would
                                                                                strongly urge you to be wary of
                                                                                companies that compel you to form a
                                                                                business entity in this state or that
                                                                                state as this can have detrimental
                                                                                consequences if the additional steps are
                                                                                not taken. Follow the link for more
                                                                                information regarding this</p>


                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="acc_item acc9">

                                                                    <div class="acc_header trigger"
                                                                        data-id="widget_1615264138342-experience9">
                                                                        <div class="inner">


                                                                            <div class="indx_icon">
                                                                                <span>9</span>
                                                                            </div>


                                                                            <div class="title">
                                                                                <span>Experience</span>
                                                                            </div>

                                                                            <div class="arr_icon last_pos">
                                                                                <svg width="32" height="32"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <g fill="none" fill-rule="evenodd">
                                                                                        <circle fill="#FEF6ED" cx="16"
                                                                                            cy="16" r="16"></circle>
                                                                                        <path
                                                                                            d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z"
                                                                                            fill="#0000FF"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="acc_body"
                                                                        data-id="widget_1615264138342-experience9">
                                                                        <div class="inner">
                                                                            <p style="margin-bottom: 32px;">When we
                                                                                entered this industry in 2003, the
                                                                                landscape of competitors was completely
                                                                                different from the companies we see
                                                                                today. Through hard work and
                                                                                determination we weathered the
                                                                                incremental business cycles that all
                                                                                business are subject to and are still
                                                                                here today.</p>
                                                                            <p style="margin-bottom: 32px;">We have
                                                                                formed well over 500,000 companies and
                                                                                the majority of our staff has been with
                                                                                us since the beginning of the companies
                                                                                existence. What that means for you is
                                                                                that you can rest assured that your
                                                                                documents will be handled by individuals
                                                                                who have vast knowledge and experience
                                                                                in filing business entities and are
                                                                                familiar with the nuances of each of the
                                                                                50 states.</p>


                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="acc_item acc10">

                                                                    <div class="acc_header trigger"
                                                                        data-id="widget_1615264138342-humility10">
                                                                        <div class="inner">


                                                                            <div class="indx_icon">
                                                                                <span>10</span>
                                                                            </div>


                                                                            <div class="title">
                                                                                <span>Humility</span>
                                                                            </div>

                                                                            <div class="arr_icon last_pos">
                                                                                <svg width="32" height="32"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <g fill="none" fill-rule="evenodd">
                                                                                        <circle fill="#FEF6ED" cx="16"
                                                                                            cy="16" r="16"></circle>
                                                                                        <path
                                                                                            d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z"
                                                                                            fill="#0000FF"></path>
                                                                                    </g>
                                                                                </svg>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="acc_body"
                                                                        data-id="widget_1615264138342-humility10">
                                                                        <div class="inner">
                                                                            <p style="margin-bottom: 32px;">At the end
                                                                                of the day we know that we are not
                                                                                perfect, we make mistakes sometimes its
                                                                                difficult to reach us on the phones and
                                                                                speak to a live person. However if we do
                                                                                make a an error or fall short of
                                                                                expectations you can rest assured that
                                                                                we will do everything within in reason
                                                                                to ensure that you leave a satisfied
                                                                                customer and have a positive experience.
                                                                            </p>
                                                                            <p style="margin-bottom: 32px;">Our goal is
                                                                                to provide to provide the most value at
                                                                                the lowest cost and the cost for that is
                                                                                that we cannot staff a pleather of call
                                                                                takers to man the phones. If you do need
                                                                                to reach us immediately the best way to
                                                                                contact us for a prompt response is to
                                                                                use the messaging tool found at the
                                                                                bottom right of each page of our site.
                                                                            </p>


                                                                        </div>
                                                                    </div>
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

                            <div
                                class="row-fluid-wrapper row-depth-1 row-number-8 dnd-section dnd_area-row-3-padding dnd_area-row-3-force-full-width-section">
                                <div class="row-fluid ">
                                    <div class="span12 widget-span widget-type-cell dnd-column" style=""
                                        data-widget-type="cell" data-x="0" data-w="12">

                                        <div class="row-fluid-wrapper row-depth-1 row-number-9 dnd-row">
                                            <div class="row-fluid ">
                                                <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                    style="" data-widget-type="custom_widget" data-x="0" data-w="12">
                                                    <div id="hs_cos_wrapper_widget_1615266012067"
                                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                        style="" data-hs-cos-general-type="widget"
                                                        data-hs-cos-type="module">


                                                        <div class="overlay-icon-module overlay_icon_widget_1615266012067   "
                                                            style="
   max-width: 720px;
   max-height: 720px;
    bottom: 100px; left: 0;
   transform: rotate(0deg);



   "><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 570 570">
                                                                <defs>
                                                                    <lineargradient
                                                                        id="top-left-transparent-blue3_inline_svg__a"
                                                                        x1="100%" x2="100%" y1="95.674%" y2="0%">
                                                                        <stop offset="0%" stop-color="#FFF"
                                                                            stop-opacity="0"></stop>
                                                                        <stop offset="100%" stop-color="#D2E0FE"></stop>
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

                                    </div>
                                    <!--end widget-span -->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end row-wrapper -->

                            <div
                                class="row-fluid-wrapper row-depth-1 row-number-10 dnd-section dnd_area-row-4-force-full-width-section dnd_area-row-4-padding">
                                <div class="row-fluid ">
                                    <div class="span12 widget-span widget-type-cell cell_16125235512742-padding dnd-column"
                                        style="" data-widget-type="cell" data-x="0" data-w="12">

                                        <div class="row-fluid-wrapper row-depth-1 row-number-11 dnd-row">
                                            <div class="row-fluid ">
                                                <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                    style="overflow:hidden" data-widget-type="custom_widget" data-x="0" data-w="12">
                                                    <div id="hs_cos_wrapper_widget_1612523550855"
                                                        class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                        style="" data-hs-cos-general-type="widget"
                                                        data-hs-cos-type="module">
                                                        <div class="get-started-banner widget_1612523550855_banner">
                                                            <div class="rocket__Oval">
                                                                <svg viewbox="0 0 370 460"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <defs>
                                                                        <radialgradient cx="16.614%" cy="100%"
                                                                            fx="16.614%" fy="100%" r="96.459%"
                                                                            id="oval-yellow-3_inline_svg__a">
                                                                            <stop stop-color="#FFF7EA" offset="0%">
                                                                            </stop>
                                                                            <stop stop-color="#FFBA8C" offset="100%">
                                                                            </stop>
                                                                        </radialgradient>
                                                                    </defs>
                                                                    <path d="M470 0v470H0C0 210.426 210.426 0 470 0z"
                                                                        transform="translate(0 -10)"
                                                                        fill="url(#oval-yellow-3_inline_svg__a)"
                                                                        fill-rule="evenodd" opacity="0.1"></path>
                                                                </svg>
                                                            </div>
                                                            <div class="rocket__Curve">
                                                                <img src="{{asset('image/head3.png')}}" alt="">
                                                            </div>

                                                            {{-- <div class="rocket__Moon">
                                                                <div class="gatsby-image-wrapper"
                                                                    style="position:relative;overflow:hidden">
                                                                    <div class="moon-image"
                                                                        data-background="../f.hubspotusercontent30.net/hubfs/3787982/Incfile_February_2021/images/moon.png">
                                                                    </div>
                                                                </div>
                                                            </div> --}}

                                                            <div class="page-center">

                                                                <div class="rocket__RocketWrapper">
                                                                    <div class=" gatsby-image-wrapper">
                                                                        <div class="get-image-bg"
        $faq=Faq_whychoose::first();
                                                                            data-background="{{asset('Upload/whychoose/'.$bussiness->image)}}">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="rocket__Content">
                                                                    <div>
                                                                        <h2>{{$bussiness->heading}}</h2>
                                                                        <p>{{$bussiness->detail}}</p>








                                                                        <a href="{{$bussiness->button_link}}"
                                                                            target="_blank" rel="noopener"
                                                                            class="hs-button btn-with-icon">
                                                                            {{$bussiness->button_name}}
                                                                            <div class="external-link__Arrow">
                                                                                <svg width="12" height="11"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                        fill="#1D1D1D"
                                                                                        fill-rule="nonzero"></path>
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

                        </div>
                        <!--end widget-span -->
                    </div>
                </div>
            </div>
        </main>


        {{-- <script src="{{asset('hs-fs/hub/3787982/hub_generated/template_assets/41143158573/1645460454373/Incfile_February_2021/js/main.min.js')}}"></script>
        <script>
        var hsVars = hsVars || {}; hsVars['language'] = 'en';
        </script>

        <script src="{{asset('hs/hsstatic/cos-i18n/static-1.53/bundles/project.js')}}"></script>
        <script src="{{asset('hs/hsstatic/keyboard-accessible-menu-flyouts/static-1.17/bundles/project.js')}}"></script>
        <script src="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41143153420/1646065739339/module_41143153420_Banner.min.js')}}"></script>
        <script src="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41359297094/1620320068180/module_41359297094_Overlay_Icon.min.js')}}"></script> --}}
        <script src="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41351299817/1643216358461/module_41351299817_Accordion.min.js')}}"></script>
        {{-- <script src="{{asset('hs-fs/hub/3787982/hub_generated/template_assets/47283076116/1623140052829/Incfile_February_2021/js/lazyload.min.js')}}"></script> --}}
        {{-- <script src="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41246686164/1631534448335/module_41246686164_Get_Started_Banner.min.js')}}"></script> --}}


@endsection
