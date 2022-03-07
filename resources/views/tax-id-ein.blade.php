@extends('layout.main')

<style>
    a.cta_button{-moz-box-sizing:content-box !important;-webkit-box-sizing:content-box !important;box-sizing:content-box !important;vertical-align:middle}.hs-breadcrumb-menu{list-style-type:none;margin:0px 0px 0px 0px;padding:0px 0px 0px 0px}.hs-breadcrumb-menu-item{float:left;padding:10px 0px 10px 10px}.hs-breadcrumb-menu-divider:before{content:'›';padding-left:10px}.hs-featured-image-link{border:0}.hs-featured-image{float:right;margin:0 0 20px 20px;max-width:50%}@media (max-width: 568px){.hs-featured-image{float:none;margin:0;width:100%;max-width:100%}}.hs-screen-reader-text{clip:rect(1px, 1px, 1px, 1px);height:1px;overflow:hidden;position:absolute !important;width:1px}
    </style>

    {{-- <link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/template_assets/41141851171/1625143722352/Incfile_February_2021/css/layout.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/template_assets/51805631655/1646227967249/Incfile_February_2021/css/custom-main.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/template_assets/41143039748/1643731110424/Incfile_February_2021/css/theme-overrides.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/1646065739376/module_41143153420_Banner.css')}}"> --}}
    <style>
        .banner.DND_banner-module-1_banner .banner-button-container .button-item a,
        .banner.DND_banner-module-1_banner .banner-button-container .button-item button{
          margin-bottom:0px;
        }

        .banner.DND_banner-module-1_banner .banner-image-container .gatsby-image-wrapper {
          left: -8%;
        }


        .banner.DND_banner-module-1_banner .banner-image-container {
          display: flex;
          max-width: 280px;
          width: 100%;
          overflow: hidden;
        }
        @media (min-width: 576px){
          .banner.DND_banner-module-1_banner .banner-image-container {
            max-width: 950px;
          }
        }
        @media (min-width: 992px){
          .banner.DND_banner-module-1_banner .banner-image-container {
            position: absolute;
            top: 50%;
            right: 55%;
            width: 55%;
            transform: translate(100%, -50%);
            padding-bottom: 0px;
          }
        }
        @media (max-width: 576px){
          .banner.DND_banner-module-1_banner .banner-image-container {
            margin-bottom: 0px;
            margin-top: 64px;
            margin-bottom: 24px;
          }
        }


        @media (max-width: 767px) {
          .banner.DND_banner-module-1_banner .banner-image-container .gatsby-image-wrapper {
            left: -8%;
          }
        }

        @media (max-width: 991px) {
          .banner.DND_banner-module-1_banner .banner-image-container .gatsby-image-wrapper {
            left: 6.7%;
          }
        }

        @media (min-width: 992px){
          .banner.DND_banner-module-1_banner .banner-content-container {
            width: 50%;
          }

          .banner.DND_banner-module-1_banner .banner-image-container .gatsby-image-wrapper img {
            object-position: center center;
          }
        }
      </style>
      <link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41359297094/1620320068261/module_41359297094_Overlay_Icon.min.css')}}">
      <style>


        .overlay_icon_widget_1614262401744 svg stop:first-child {
          stop-color: rgba(255, 255, 255, 0.0);
        }
        .overlay_icon_widget_1614262401744 svg stop:last-child {
          stop-color: rgba(242, 248, 243, 1.0);
        }

    </style>
    <link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/1638370530837/module_41216488591_Popup_Video.css')}}">
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
      <link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/1628597401941/module_41218342583_Boxed_Content.css')}}">
      <style>
        .widget_1614265378133 .curve__Wrapper path{
          fill:rgba(80, 137, 253,1.0);
        }
        .widget_1614265378133 .boxed-color-box{
          background:rgba(242, 246, 255,1.0);
        }

        .widget_1614265378133.boxed-content-container {
          margin-right: 18px;
        }

        @media (max-width: 991px) {
        .widget_1614265378133.boxed-content-container {
          margin-right: 0;
        }
      }


        .widget_1614265378133.boxed-content-container .boxed-color-box{
          padding-top:40px;
          padding-bottom:40px;
          padding-left:112px;
          padding-right:40px;
          border-top-left-radius: 5px;
          border-top-right-radius: 50px;
          border-bottom-left-radius: 5px;
          border-bottom-right-radius: 50px;
        }
        .widget_1614265378133.boxed-content-container .boxed-color-box ul li:before{
          background-color: rgba(80, 137, 253,1.0);
        }

        @media (max-width:575px){
          .widget_1614265378133.boxed-content-container .boxed-color-box{
            padding-top:40px;
            padding-bottom:40px;
            padding-left:40px;
            padding-right:40px;
          }
        }

      </style>


      <style>
        .widget_1617166534777 .curve__Wrapper path{
          fill:rgba(80, 137, 253,1.0);
        }
        .widget_1617166534777 .boxed-color-box{
          background:rgba(254, 246, 237,1.0);
        }

        .widget_1617166534777.boxed-content-container {
          margin-right: 18px;
        }

        @media (max-width: 991px) {
        .widget_1617166534777.boxed-content-container {
          margin-right: 0;
        }
      }


        .widget_1617166534777.boxed-content-container .boxed-color-box{
          padding-top:48px;
          padding-bottom:48px;
          padding-left:40px;
          padding-right:48px;
          border-top-left-radius: 5px;
          border-top-right-radius: 50px;
          border-bottom-left-radius: 5px;
          border-bottom-right-radius: 50px;
        }
        .widget_1617166534777.boxed-content-container .boxed-color-box ul li:before{
          background-color: rgba(253, 133, 80,1.0);
        }

      </style>

<link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/1636114335530/module_41143153380_Button.css')}}">

<style>

    .widget_1617166737374.button-module .normal-link .button-link{
      justify-content:flex-start;
      padding: 0px 0px 0px 0px;
    }


  </style>


    <style>


        .overlay_icon_widget_1614263388130 svg stop:first-child {
          stop-color: rgba(255, 255, 255, 0.0);
        }
        .overlay_icon_widget_1614263388130 svg stop:last-child {
          stop-color: rgba(210, 224, 254, 1.0);
        }

    </style>


    <style>


        .overlay_icon_widget_1614263638863 svg stop:first-child {
          stop-color: rgba(255, 255, 255, 0.0);
        }
        .overlay_icon_widget_1614263638863 svg stop:last-child {
          stop-color: rgba(210, 224, 254, 1.0);
        }

    </style>
    <link rel="stylesheet" href="../hs-fs/hub/3787982/hub_generated/module_assets/44253403272/1620388105317/module_44253403272_EIN_Tax_ID_Number.min.css">
    <link rel="stylesheet" href="../hs-fs/hub/3787982/hub_generated/module_assets/1643216358498/module_41351299817_Accordion.css">

      <style>
        #widget_1614260364663.default_bullet .acc_item .acc_body .inner ul {
          list-style: disc;
          padding-left: 16px;
        }
        #widget_1614260364663.default_bullet .acc_item .acc_body .inner ul ul {
          list-style-type: circle;
          padding-top: 16px;
        }
        #widget_1614260364663.default_bullet .acc_item .acc_body .inner ul li {
          padding-left: 0;
        }
        #widget_1614260364663.default_bullet .acc_item .acc_body .inner ul li:before {
          content: none;
        }
        #widget_1614260364663.acc_wrapper > .inner {
          max-width: 828px;
          padding-top:25px;
          padding-bottom:25px;
          padding-left:29px;
          padding-right:29px;
        }
        #widget_1614260364663.acc_wrapper .acc_item .title{
          color: #4e4e4e;
        }

        #widget_1614260364663.acc_wrapper .acc_body{
          color: #4e4e4e;
        }

        #widget_1614260364663.acc_wrapper.ic_indexNumb .indx_icon span {
          background-color: #5089fd;
        }
        #widget_1614260364663.acc_wrapper .acc_item .acc_body .inner:not(.default_bullet) ul li:before {
          background-color: #5089fd;
        }


      </style>

    <link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41951289498/1620380498964/module_41951289498_Benefits_Tabber.min.css')}}">
    <link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/template_assets/41952706287/1619548359317/Incfile_February_2021/css/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/1646265821701/module_41952544958_Related_Articles.css')}}">
    <link rel="stylesheet" href="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41148244352/1636038378453/module_41148244352_Footer_Social_Icons.min.css')}}">
    <style id="hs_editor_style" type="text/css">
        #hs_cos_wrapper_widget_1614255465082  { display: block !important; margin-bottom: 80px !important; padding-top: 64px !important }
        #hs_cos_wrapper_widget_1614256647308  { display: block !important; padding-top: 145px !important }
        #hs_cos_wrapper_widget_1617166168639  { display: block !important; padding-top: 32px !important }
        #hs_cos_wrapper_widget_1614249300775  { display: block !important; margin-top: 72px !important }
        #hs_cos_wrapper_widget_1614250434822  { display: block !important; margin-top: 56px !important }
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
          padding-top: 0px !important;
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



@section('content')


        <div class="annual-report-layout">
            <div class="banner-section llc-page-banner">
                <div class="container-fluid banner-area" style="padding-left: 0px;padding-right:0px;">
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
                                                            <div class="container-fluid" style="padding-left:0px;padding-right: 0px; ">

                                                                <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom:20px;">
                                                                    <!-- Indicators -->
                                                                    <ol class="carousel-indicators">
                                                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                                                    </ol>

                                                                    <!-- Wrapper for slides -->
                                                                    <div class="carousel-inner">
                                                                        <div class="item active">
                                                                            <img src="https://www.adorama.com/alc/wp-content/uploads/2017/11/shutterstock_114802408.jpg"
                                                                                alt="Los Angeles">
                                                                        </div>

                                                                        <div class="item">
                                                                            <img src="https://img.freepik.com/free-photo/white-cloud-blue-sky-sea_74190-4488.jpg" alt="Chicago">
                                                                        </div>

                                                                        <div class="item">
                                                                            <img src="https://media.istockphoto.com/photos/colorful-of-sky-with-clouds-in-the-evening-picture-id483033844?k=20&m=483033844&s=170667a&w=0&h=9BPQphuAhBqydPaz59h5skpBVhIdogJg3HV6Mw99bWc="
                                                                                alt="New york">
                                                                        </div>
                                                                    </div>

                                                                    <!-- Left and right controls -->
                                                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                                                        <span class="sr-only">Previous</span>
                                                                    </a>
                                                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                                                        <span class="sr-only">Next</span>
                                                                    </a>
                                                                </div>
                                                            </div>



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
                                                                let requestPath = '/manage-your-company/tax-id-ein';
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
   top: -159px;  left: 0;
   transform: rotate(0deg);



   "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 720 720">
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
                                                                    <path
                                                                        fill="url(#top-left-transparent-green3_inline_svg__a)"
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
                                                                                        src="{{asset('hubfs/Incfile_February_2021/images/envelope-ein.png')}}"
                                                                                        class="hs-image-widget "
                                                                                        style="max-width: 100%; height: auto;"
                                                                                        alt="Envelope Ein"
                                                                                        title="Envelope Ein"></span>
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
                                                                                <p style="margin-bottom: 48px;">Lorem Ipsum is simply dummy text of the printing and
                                                                                    typesetting industry. Lorem Ipsum has been the industry's
                                                                                    standard dummy text ever since the 1500s, when an unknown
                                                                                    printer took a galley of type and scrambled it to make a
                                                                                    type specimen book. It has survived not only five centuries,
                                                                                    but also the leap into electronic typesetting,
                                                                                    remaining essentially unchanged. </p>
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
                                                                        <div id="hs_cos_wrapper_widget_1614265578054"
                                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                                            style="" data-hs-cos-general-type="widget"
                                                                            data-hs-cos-type="module">
                                                                            <div
                                                                                class="video-wrapper_widget_1614265578054">
                                                                                <div
                                                                                    class="popup-video-container widget_1614265578054 al_left">

                                                                                    <div class="gatsby-image-wrapper">
                                                                                        <div class="pop-video-thumb-bg"
                                                                                            style="background:url('{{asset('image/video banner.jpg')}}') center center / cover; background-size: cover;">
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
                                                                                    <div
                                                                                        class="video-pop-container-inner">
                                                                                        {{-- <iframe class="video-frame"
                                                                                            title="Incfile Video"
                                                                                            src="#" width="500"
                                                                                            height="349" frameborder="0"
                                                                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                                                            allowfullscreen></iframe> --}}
                                                                                            <iframe title="Incfile Video" class="video-frame" width="500" height="349" src="https://www.youtube.com/embed/yIj2lu8Rv0M" title="YouTube video player" frameborder="0"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
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

                                                            <div
                                                                class="row-fluid-wrapper row-depth-1 row-number-4 dnd-row">
                                                                <div class="row-fluid ">
                                                                    <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                                        style="" data-widget-type="custom_widget"
                                                                        data-x="0" data-w="12">
                                                                        <div id="hs_cos_wrapper_widget_1617166168639"
                                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-space"
                                                                            style="" data-hs-cos-general-type="widget"
                                                                            data-hs-cos-type="module">
                                                                            <span class="hs-horizontal-spacer"></span>
                                                                        </div>

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
                                                                                            fill="#C9A3EE"
                                                                                            fill-rule="evenodd"></path>
                                                                                    </svg>
                                                                                </div>

                                                                                <div class="boxed-color-box">

                                                                                    <div class="icon-wrapper">
                                                                                        <svg width="32" height="32"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                                d="M29.59 11.23v13.28a4 4 0 01-.44 1.84 3.35 3.35 0 01-1.47.35H4.82a3.68 3.68 0 01-3.54-3.81V9.6a4 4 0 01.43-1.81 3.28 3.28 0 011.49-.36h22.86a3.68 3.68 0 013.53 3.8z"
                                                                                                fill="#fff"></path>
                                                                                            <path clip-rule="evenodd"
                                                                                                d="M31.21 9.6v13.29a3.84 3.84 0 01-2.06 3.46 3.35 3.35 0 01-1.47.35H4.82a3.68 3.68 0 01-3.54-3.81V9.6a4 4 0 01.43-1.81 3.51 3.51 0 013.11-2h22.86a3.68 3.68 0 013.53 3.81z"
                                                                                                stroke="#1D1D1B"
                                                                                                stroke-width="1.4"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round">
                                                                                            </path>
                                                                                            <path
                                                                                                d="M18.62 16.25h8.51M18.62 20.83h8.51M7 13.36a2.73 2.73 0 012.66-2.67h.66a2.74 2.74 0 011.38 5.05c-.91.58-2.67.81-2.72 2.67v1.17M8.92 21.58v.24"
                                                                                                stroke="#1D1D1B"
                                                                                                stroke-width="1.4"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>

                                                                                    <h4>What is Lorem Ipsum?
                                                                                    </h4>
                                                                                    <p style="margin: 0;">Lorem Ipsum is simply dummy text of the printing and
                                                                                        typesetting industry. Lorem Ipsum has been the industry's
                                                                                        standard dummy text ever since the 1500s, when an unknown
                                                                                        printer took a galley of type and scrambled it to make a
                                                                                        type specimen book.</p>
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
                                                                                <h3>What is Lorem Ipsum?</h3>
                                                                                <p style="margin-bottom: 40px;">Lorem Ipsum is simply dummy text of the printing and
                                                                                    typesetting industry. Lorem Ipsum has been the industry's
                                                                                    standard dummy text ever since the 1500s, when an unknown
                                                                                    printer took a galley of type and scrambled it to make a
                                                                                    type specimen book.
                                                                                </p>
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
                                                                        <div id="hs_cos_wrapper_widget_1617166534777"
                                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                                            style="" data-hs-cos-general-type="widget"
                                                                            data-hs-cos-type="module">
                                                                            <div
                                                                                class="widget_1617166534777 boxed-content-container">

                                                                                <div class="boxed-color-box">

                                                                                    <h4>Lorem Ipsum is simply dummy text of the printing and
                                                                                        typesetting industry.</h4>
                                                                                    <ul>
                                                                                        <li>Lorem Ipsum is simply dummy text of the printing and
                                                                                            typesetting industry.</li>
                                                                                        <li>Lorem Ipsum is simply dummy text of the printing and
                                                                                            typesetting industry.
                                                                                        </li>
                                                                                        <li>Lorem Ipsum is simply dummy text of the printing and
                                                                                            typesetting industry.</li>
                                                                                        <li>Lorem Ipsum is simply dummy text of the printing and
                                                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                                                            standard dummy text ever since the 1500s, when an unknown
                                                                                            printer took a galley of type and scrambled it to make a
                                                                                            type specimen book.</li>
                                                                                        <li>Lorem Ipsum is simply dummy text of the printing and
                                                                                            typesetting industry. Lorem Ipsum has been the industry's
                                                                                            standard dummy text ever since the 1500s, when an unknown
                                                                                            printer took a galley of type and scrambled it to make a
                                                                                            type specimen book.</li>
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
                                                                                <h3>Where &amp; What is Lorem Ipsum?
                                                                                </h3>
                                                                                <p style="margin-bottom: 48px;">Lorem Ipsum is simply dummy text of the printing and
                                                                                    typesetting industry. Lorem Ipsum has been the industry's
                                                                                    standard dummy text ever since the 1500s, when an unknown
                                                                                    printer took a galley of type and scrambled it to make a
                                                                                    type specimen book.</p>
                                                                                <h3>What is Lorem Ipsum?</h3>
                                                                                <p style="margin-bottom: 40px;">Lorem Ipsum is simply dummy text of the printing and
                                                                                    typesetting industry. Lorem Ipsum has been the industry's
                                                                                    standard dummy text ever since the 1500s, when an unknown
                                                                                    printer took a galley of type and scrambled it to make a
                                                                                    type specimen book.</p>
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
                                                                        <div id="hs_cos_wrapper_widget_1617166737374"
                                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                                            style="" data-hs-cos-general-type="widget"
                                                                            data-hs-cos-type="module">
                                                                            <div
                                                                                class="widget_1617166737374 button-module ">

                                                                                <div
                                                                                    class="button-module-item itm-1 normal-link btn_widthauto">



                                                                                    <a href="https://orders.incfile.com/ein-form.php"
                                                                                        class="button-link btn_widthauto"
                                                                                        target="_blank">

                                                                                        <div
                                                                                            class="text__Arrow-z6idrg-2 iCMTqb">
                                                                                            <svg width="12" height="11"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                    fill="#1D1D1D"
                                                                                                    fill-rule="nonzero">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>

                                                                                        <span>Apply for an Lorem Ipsum?</span>

                                                                                    </a>

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
   top: 1160px;  left: 0;
   transform: rotate(0deg);


 z-index: -1;


   "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 136 136">
                                                                    <defs>
                                                                        <lineargradient
                                                                            id="top-left-transparent-blue2_inline_svg__b"
                                                                            x1="100%" x2="100%" y1="95.674%" y2="0%">
                                                                            <stop offset="0%" stop-color="#FFF"
                                                                                stop-opacity="0"></stop>
                                                                            <stop offset="100%" stop-color="#D2E0FE">
                                                                            </stop>
                                                                        </lineargradient>
                                                                    </defs>
                                                                    <path
                                                                        fill="url(#top-left-transparent-blue2_inline_svg__b)"
                                                                        fill-rule="evenodd"
                                                                        d="M136 0v136H0C0 60.89 60.89 0 136 0z"
                                                                        transform="rotate(180 68 68)"></path>
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

                                            <div class="row-fluid-wrapper row-depth-1 row-number-5 dnd-row">
                                                <div class="row-fluid ">
                                                    <div class="span12 widget-span widget-type-custom_widget dnd-module"
                                                        style="" data-widget-type="custom_widget" data-x="0"
                                                        data-w="12">
                                                        <div id="hs_cos_wrapper_widget_1617249707507"
                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                            style="" data-hs-cos-general-type="widget"
                                                            data-hs-cos-type="module">
                                                            <div class="ein-tax-wrapper fmXZHl">
                                                                <div class="buClfX">
                                                                    <div class="hGSJeC">
                                                                        <div class="kMxIFC">
                                                                            <div class="jkGwxQ">
                                                                                <svg width="29" height="25"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M0 1.389c0 .746.599 1.349 1.354 1.384a26.869 26.869 0 0112.317 3.66c6.754 3.954 11.098 10.402 12.544 17.451A1.4 1.4 0 0027.592 25c.89 0 1.556-.806 1.38-1.666-1.599-7.79-6.398-14.916-13.863-19.286A29.704 29.704 0 001.46.002 1.393 1.393 0 000 1.387v.002z"
                                                                                        fill="#C9A3EE"
                                                                                        fill-rule="evenodd"></path>
                                                                                </svg>
                                                                            </div>
                                                                            <h2>Lorem Ipsum is simply dummy text</h2>
                                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                                typesetting industry.</p>
                                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                standard dummy text ever since the 1500s, when an unknown
                                                                                printer took a galley </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="jydYwh">
                                                                        <div class="crIIZG">
                                                                            <div class="iFaKEV card">
                                                                                <h3 class="gJQqAX">TAX
                                                                                </h3>

                                                                                <div class="gatsby-image-wrapper"
                                                                                    style="position:relative;overflow:hidden">
                                                                                    <div aria-hidden="true"
                                                                                        style="width:100%;padding-bottom:100%">
                                                                                    </div>

                                                                                    <img src="{{asset('hubfs/Incfile_February_2021/images/entity-comparison-9288.png')}}"
                                                                                        alt="Entity Comparison"
                                                                                        loading="lazy">
                                                                                </div>

                                                                                <span class="price">$70
                                                                                </span>
                                                                                <span class="fee"></span>







                                                                                <a class="hs-button orange-btn btn-with-icon btn-center"
                                                                                    href="https://orders.incfile.com/ein-form.php?entityType=LLC&amp;entityState="
                                                                                    target="_blank" rel="noopener">Go
                                                                                    Now
                                                                                    <div
                                                                                        class="button-action__Arrow-sc-1lf0xj6-1 kPwGuS arrow1">
                                                                                        <svg width="12" height="11"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                                d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                fill="#1D1D1D"
                                                                                                fill-rule="nonzero">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </a>
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

                                            <div class="row-fluid-wrapper row-depth-1 row-number-6 dnd-row">
                                                <div class="row-fluid ">
                                                    <div class="span12 widget-span widget-type-custom_widget widget_1614255465082-margin widget_1614255465082-padding dnd-module"
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
                                                                        What is Lorem Ipsum?</h2>
                                                                </blockquote>
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
                                                        <div id="hs_cos_wrapper_widget_1614260364663"
                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                                                            style="" data-hs-cos-general-type="widget"
                                                            data-hs-cos-type="module">
                                                            <div id="widget_1614260364663"
                                                                class=" acc_wrapper acc_mod_wrapper ic_widOutIcon  acc_allToggle">
                                                                <div class="inner">




                                                                    <div class="acc_item acc1">

                                                                        <div class="acc_header trigger"
                                                                            data-id="widget_1614260364663-willineedaneininordertoobtainabusinessaccountwithabank1">
                                                                            <div class="inner">

                                                                                <div class="arr_icon first_pos">
                                                                                    <svg width="32" height="32"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <g fill="none"
                                                                                            fill-rule="evenodd">
                                                                                            <circle fill="#FEF6ED"
                                                                                                cx="16" cy="16" r="16">
                                                                                            </circle>
                                                                                            <path
                                                                                                d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z"
                                                                                                fill="#FD8550"></path>
                                                                                        </g>
                                                                                    </svg>
                                                                                </div>



                                                                                <div class="title">
                                                                                    <span>What is Lorem Ipsum?</span>
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="acc_body"
                                                                            data-id="widget_1614260364663-willineedaneininordertoobtainabusinessaccountwithabank1">
                                                                            <div class="inner">
                                                                                <p><span>Lorem Ipsum is simply dummy text of the printing and
                                                                                    typesetting industry. Lorem Ipsum has been the industry's
                                                                                    standard dummy text ever since the 1500s, when an unknown
                                                                                    printer took a galley of type and scrambled it to make a
                                                                                    type specimen book.</span></p>


                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="acc_item acc2">

                                                                        <div class="acc_header trigger"
                                                                            data-id="widget_1614260364663-whatcircumstancesrequiremetochangemyein2">
                                                                            <div class="inner">

                                                                                <div class="arr_icon first_pos">
                                                                                    <svg width="32" height="32"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <g fill="none"
                                                                                            fill-rule="evenodd">
                                                                                            <circle fill="#FEF6ED"
                                                                                                cx="16" cy="16" r="16">
                                                                                            </circle>
                                                                                            <path
                                                                                                d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z"
                                                                                                fill="#FD8550"></path>
                                                                                        </g>
                                                                                    </svg>
                                                                                </div>



                                                                                <div class="title">
                                                                                    <span>What is Lorem Ipsum?</span>
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="acc_body"
                                                                            data-id="widget_1614260364663-whatcircumstancesrequiremetochangemyein2">
                                                                            <div class="inner">
                                                                                <p>Lorem Ipsum is simply dummy text of the printing and
                                                                                    typesetting industry. Lorem Ipsum has been the industry's
                                                                                    standard dummy text ever since the 1500s, when an unknown
                                                                                    printer took a galley of type and scrambled it to make a
                                                                                    type specimen book.
                                                                                </p>
                                                                                <ul>
                                                                                    <li>Lorem Ipsum is simply dummy text of the printing and
                                                                                        typesetting industry. Lorem Ipsum has been the industry's
                                                                                        standard dummy text ever since the 1500s, when an unknown
                                                                                        printer took a galley of type and scrambled it to make a
                                                                                        type specimen book.</li>


                                                                                </ul>


                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="acc_item acc3">

                                                                        <div class="acc_header trigger"
                                                                            data-id="widget_1614260364663-whenwillireceivemyfederalemployeridentificationnumber3">
                                                                            <div class="inner">

                                                                                <div class="arr_icon first_pos">
                                                                                    <svg width="32" height="32"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <g fill="none"
                                                                                            fill-rule="evenodd">
                                                                                            <circle fill="#FEF6ED"
                                                                                                cx="16" cy="16" r="16">
                                                                                            </circle>
                                                                                            <path
                                                                                                d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z"
                                                                                                fill="#FD8550"></path>
                                                                                        </g>
                                                                                    </svg>
                                                                                </div>



                                                                                <div class="title">
                                                                                    <span>What is Lorem Ipsum?</span>
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="acc_body"
                                                                            data-id="widget_1614260364663-whenwillireceivemyfederalemployeridentificationnumber3">
                                                                            <div class="inner">
                                                                                <p><span>Lorem Ipsum is simply dummy text of the printing and
                                                                                    typesetting industry. Lorem Ipsum has been the industry's
                                                                                    standard dummy text ever since the 1500s, when an unknown
                                                                                    printer took a galley of type and scrambled it to make a
                                                                                    type specimen book.</span></p>


                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="acc_item acc4">

                                                                        <div class="acc_header trigger"
                                                                            data-id="widget_1614260364663-whatisthesseintaxidnumber4">
                                                                            <div class="inner">

                                                                                <div class="arr_icon first_pos">
                                                                                    <svg width="32" height="32"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <g fill="none"
                                                                                            fill-rule="evenodd">
                                                                                            <circle fill="#FEF6ED"
                                                                                                cx="16" cy="16" r="16">
                                                                                            </circle>
                                                                                            <path
                                                                                                d="M20.297 16.195l-.004.004a1 1 0 01-1.416.003l-2.379-2.379v7.179a.998.998 0 01-1.996 0v-7.179l-2.379 2.379a1 1 0 01-1.416-.003l-.004-.004a1 1 0 01.003-1.412l4.088-4.078a1 1 0 011.412 0l4.088 4.078a1 1 0 01.003 1.412z"
                                                                                                fill="#FD8550"></path>
                                                                                        </g>
                                                                                    </svg>
                                                                                </div>



                                                                                <div class="title">
                                                                                    <span>What is Lorem Ipsum?</span>
                                                                                </div>

                                                                            </div>
                                                                        </div>

                                                                        <div class="acc_body"
                                                                            data-id="widget_1614260364663-whatisthesseintaxidnumber4">
                                                                            <div class="inner">
                                                                                <p><span>Lorem Ipsum is simply dummy text of the printing and
                                                                                    typesetting industry. Lorem Ipsum has been the industry's
                                                                                    standard dummy text ever since the 1500s, when an unknown
                                                                                    printer took a galley of type and scrambled it to make a
                                                                                    type specimen book.</span></p>


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

                                            <div class="row-fluid-wrapper row-depth-1 row-number-8 dnd-row">
                                                <div class="row-fluid ">
                                                    <div class="span12 widget-span widget-type-custom_widget dnd-module widget_1614256647308-padding"
                                                        style="" data-widget-type="custom_widget" data-x="0"
                                                        data-w="12">
                                                        <div id="hs_cos_wrapper_widget_1614256647308"
                                                            class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text"
                                                            style="" data-hs-cos-general-type="widget"
                                                            data-hs-cos-type="module"><span
                                                                id="hs_cos_wrapper_widget_1614256647308_"
                                                                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text"
                                                                style="" data-hs-cos-general-type="widget"
                                                                data-hs-cos-type="rich_text">
                                                                <h3 style="text-align: center; margin-bottom: 24px;">
                                                                    Lorem Ipsum is simply dummy text of the printing and
                                                                    typesetting industry.</h3>
                                                                <p
                                                                    style="text-align: center; margin-bottom: 48px; max-width: 770px; margin-left: auto; margin-right: auto;">
                                                                    Lorem Ipsum is simply dummy text of the printing and
typesetting industry. Lorem Ipsum has been the industry's
standard dummy text ever since the 1500s, when an unknown
printer took a galley of type and scrambled it to make a
type specimen book.</p>
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
                                                        style="" data-widget-type="custom_widget" data-x="0"
                                                        data-w="12">
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
                                                                            </a>

                                                                        <a
                                                                            href="#widget_1614256769396tab2">Company</a>

                                                                        <a href="#widget_1614256769396tab3">Registered
                                                                            </a>

                                                                        <a href="#widget_1614256769396tab4">
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

                                                                                        <div
                                                                                            class="feature-icon-holder">

                                                                                            <img src="{{asset('hubfs/Incfile_February_2021/images/bc-01.png')}}"
                                                                                                alt="Amendment"
                                                                                                loading="lazy">
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="feature-content">
                                                                                        <div class="content-holder">
                                                                                            <h3>Lorem Ipsum</h3>
                                                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                                standard dummy text </p>
                                                                                        </div>






                                                                                        <a class="feature-button"
                                                                                            href="amendment/index.html">
                                                                                            <div
                                                                                                class="arrow">
                                                                                                <svg width="12"
                                                                                                    height="11"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                        fill="#1D1D1D"
                                                                                                        fill-rule="nonzero">
                                                                                                    </path>
                                                                                                </svg></div>
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

                                                                                        <div
                                                                                            class="feature-icon-holder">

                                                                                            <img src="{{asset('hubfs/Incfile_February_2021/images/bc-20.png')}}"
                                                                                                alt="Dissolution"
                                                                                                loading="lazy">
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="feature-content">
                                                                                        <div class="content-holder">
                                                                                            <h3>Lorem Ipsum</h3>
                                                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                                standard dummy text </p>
                                                                                        </div>






                                                                                        <a class="feature-button"
                                                                                            href="dissolution.html">
                                                                                            <div
                                                                                                class="arrow">
                                                                                                <svg width="12"
                                                                                                    height="11"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                        fill="#1D1D1D"
                                                                                                        fill-rule="nonzero">
                                                                                                    </path>
                                                                                                </svg></div>
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

                                                                                        <div
                                                                                            class="feature-icon-holder">

                                                                                            <img src="{{asset('hubfs/Incfile_February_2021/images/bc-03.png')}}"
                                                                                                alt="Foreign Qualification"
                                                                                                loading="lazy">
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="feature-content">
                                                                                        <div class="content-holder">
                                                                                            <h3>Lorem Ipsum</h3>
                                                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                                standard dummy text </p>
                                                                                        </div>






                                                                                        <a class="feature-button"
                                                                                            href="foreign-qualification.html">
                                                                                            <div
                                                                                                class="arrow">
                                                                                                <svg width="12"
                                                                                                    height="11"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                        fill="#1D1D1D"
                                                                                                        fill-rule="nonzero">
                                                                                                    </path>
                                                                                                </svg></div>
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

                                                                                        <div
                                                                                            class="feature-icon-holder">

                                                                                            <img src="{{asset('hubfs/Incfile_February_2021/images/bc-19.png')}}"
                                                                                                alt="Fictitious Business Name"
                                                                                                loading="lazy">
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="feature-content">
                                                                                        <div class="content-holder">
                                                                                            <h3>Lorem Ipsum</h3>
                                                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                                standard dummy text </p>
                                                                                        </div>






                                                                                        <a class="feature-button"
                                                                                            href="../fictitious-business-or-trade-name.html">
                                                                                            <div
                                                                                                class="arrow">
                                                                                                <svg width="12"
                                                                                                    height="11"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                        fill="#1D1D1D"
                                                                                                        fill-rule="nonzero">
                                                                                                    </path>
                                                                                                </svg></div>
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

                                                                                        <div
                                                                                            class="feature-icon-holder">

                                                                                            <img src="{{asset('hubfs/Incfile_February_2021/images/bc-05.png')}}"
                                                                                                alt="File Annual Report"
                                                                                                loading="lazy">
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="feature-content">
                                                                                        <div class="content-holder">
                                                                                            <h3>Lorem Ipsum</h3>
                                                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                                standard dummy text </p>
                                                                                        </div>






                                                                                        <a class="feature-button"
                                                                                            href="annual-report.html">
                                                                                            <div
                                                                                                class="arrow">
                                                                                                <svg width="12"
                                                                                                    height="11"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                        fill="#1D1D1D"
                                                                                                        fill-rule="nonzero">
                                                                                                    </path>
                                                                                                </svg></div>
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

                                                                                        <div
                                                                                            class="feature-icon-holder">

                                                                                            <img src="{{asset('hubfs/Incfile_February_2021/images/bc-10.png')}}"
                                                                                                alt="Certificate of Good Standing"
                                                                                                loading="lazy">
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="feature-content">
                                                                                        <div class="content-holder">
                                                                                            <h3>Lorem Ipsum</h3>
                                                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                                standard dummy text </p>
                                                                                        </div>






                                                                                        <a class="feature-button"
                                                                                            href="certificate-of-good-standing.html">
                                                                                            <div
                                                                                                class="arrow">
                                                                                                <svg width="12"
                                                                                                    height="11"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                        fill="#1D1D1D"
                                                                                                        fill-rule="nonzero">
                                                                                                    </path>
                                                                                                </svg></div>
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

                                                                                        <div
                                                                                            class="feature-icon-holder">

                                                                                            <img src="{{asset('hubfs/Incfile_February_2021/images/bc-17.png')}}"
                                                                                                alt="Business License Search"
                                                                                                loading="lazy">
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="feature-content">
                                                                                        <div class="content-holder">
                                                                                            <h3>Lorem Ipsum</h3>
                                                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                                standard dummy text </p>
                                                                                        </div>






                                                                                        <a class="feature-button"
                                                                                            href="../business-license-research-package.html">
                                                                                            <div
                                                                                                class="arrow">
                                                                                                <svg width="12"
                                                                                                    height="11"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                        fill="#1D1D1D"
                                                                                                        fill-rule="nonzero">
                                                                                                    </path>
                                                                                                </svg></div>
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

                                                                                        <div
                                                                                            class="feature-icon-holder">

                                                                                            <img src="{{asset('hubfs/Incfile_February_2021/images/bc-07.png')}}"
                                                                                                alt="Trademark Name Search"
                                                                                                loading="lazy">
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="feature-content">
                                                                                        <div class="content-holder">
                                                                                            <h3>Lorem Ipsum</h3>
                                                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                                standard dummy text </p>
                                                                                        </div>






                                                                                        <a class="feature-button"
                                                                                            href="../trademark-name-search.html">
                                                                                            <div
                                                                                                class="arrow">
                                                                                                <svg width="12"
                                                                                                    height="11"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                        fill="#1D1D1D"
                                                                                                        fill-rule="nonzero">
                                                                                                    </path>
                                                                                                </svg></div>
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

                                                                                        <div
                                                                                            class="feature-icon-holder">

                                                                                            <img src="{{asset('hubfs/Incfile_February_2021/images/bc-11.png')}}"
                                                                                                alt="Order Registered Agent"
                                                                                                loading="lazy">
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="feature-content">
                                                                                        <div class="content-holder">
                                                                                            <h3>Lorem Ipsum</h3>
                                                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                                standard dummy text </p>
                                                                                        </div>






                                                                                        <a class="feature-button"
                                                                                            href="registered-agent.html">
                                                                                            <div
                                                                                                class="arrow">
                                                                                                <svg width="12"
                                                                                                    height="11"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                        fill="#1D1D1D"
                                                                                                        fill-rule="nonzero">
                                                                                                    </path>
                                                                                                </svg></div>
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

                                                                                        <div
                                                                                            class="feature-icon-holder">

                                                                                            <img src="{{asset('hubfs/Incfile_February_2021/images/bc-18.png')}}"
                                                                                                alt="Renew Registered Agent"
                                                                                                loading="lazy">
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="feature-content">
                                                                                        <div class="content-holder">
                                                                                            <h3>Lorem Ipsum</h3>
                                                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                                standard dummy text </p>
                                                                                        </div>








                                                                                        <a class="feature-button"
                                                                                            href="https://orders.incfile.com/dashboard/"
                                                                                            target="_blank"
                                                                                            rel="noopener">
                                                                                            <div
                                                                                                class="arrow">
                                                                                                <svg width="12"
                                                                                                    height="11"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                        fill="#1D1D1D"
                                                                                                        fill-rule="nonzero">
                                                                                                    </path>
                                                                                                </svg></div>
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

                                                                                        <div
                                                                                            class="feature-icon-holder">

                                                                                            <img src="{{asset('hubfs/Incfile_February_2021/images/bc-16.png')}}"
                                                                                                alt="Change Registered Agent"
                                                                                                loading="lazy">
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="feature-content">
                                                                                        <div class="content-holder">
                                                                                            <h3>Lorem Ipsum</h3>
                                                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                                standard dummy text </p>
                                                                                        </div>






                                                                                        <a class="feature-button"
                                                                                            href="change-of-registered-agent/index.html">
                                                                                            <div
                                                                                                class="arrow">
                                                                                                <svg width="12"
                                                                                                    height="11"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                        fill="#1D1D1D"
                                                                                                        fill-rule="nonzero">
                                                                                                    </path>
                                                                                                </svg></div>
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
                                                                                        style="background-color: rgba(242, 246, 255,1.0);">

                                                                                        <div
                                                                                            class="feature-icon-holder">

                                                                                            <img src="{{asset('hubfs/Incfile_February_2021/images/bc-13.png')}}"
                                                                                                alt="File Business Taxes"
                                                                                                loading="lazy">
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="feature-content">
                                                                                        <div class="content-holder">
                                                                                            <h3>Lorem Ipsum</h3>
                                                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                                standard dummy text </p>
                                                                                        </div>






                                                                                        <a class="feature-button"
                                                                                            href="../business-accounting.html">
                                                                                            <div
                                                                                                class="arrow">
                                                                                                <svg width="12"
                                                                                                    height="11"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                        fill="#1D1D1D"
                                                                                                        fill-rule="nonzero">
                                                                                                    </path>
                                                                                                </svg></div>
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

                                                                                        <div
                                                                                            class="feature-icon-holder">

                                                                                            <img src="{{asset('hubfs/Incfile_February_2021/images/bc-15.png')}}"
                                                                                                alt="File S Corp Tax Election"
                                                                                                loading="lazy">
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="feature-content">
                                                                                        <div class="content-holder">
                                                                                                <h3>Lorem Ipsum</h3>
                                                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                                standard dummy text </p>
                                                                                        </div>






                                                                                        <a class="feature-button"
                                                                                            href="../llc-s-corp-election.html">
                                                                                            <div
                                                                                                class="arrow">
                                                                                                <svg width="12"
                                                                                                    height="11"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M5.805.703L5.8.707a1 1 0 00-.003 1.416l2.379 2.379H.998a.998.998 0 000 1.996h7.179L5.798 8.877a1 1 0 00.003 1.416l.004.004a1 1 0 001.412-.003l4.078-4.088a1 1 0 000-1.412L7.217.706A1 1 0 005.805.703z"
                                                                                                        fill="#1D1D1D"
                                                                                                        fill-rule="nonzero">
                                                                                                    </path>
                                                                                                </svg></div>
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

                                <!--end row-wrapper -->

                            </div>
                            <!--end widget-span -->
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="owl-carousel owl-theme">
                        <div class="item" style="padding: 10px;">
                            <div style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;border-radius:10px;padding:10px">
                                <img src="https://images.unsplash.com/photo-1640622842008-1897f26aafe3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHw2fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" style="border-radius:10px"/>
                                <div style="padding-top: 20px">

                                     <a href="#"><i class="fas fa-arrow-right"></i> If You're Not a U.S. Citizen, Can You Get an EIN for Your Business?</a>

                                </div>
                            </div>

                        </div>
                        <div class="item" style="padding: 10px;">
                            <div style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;border-radius:10px;padding:10px">
                                <img src="https://images.unsplash.com/photo-1640622842008-1897f26aafe3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHw2fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" style="border-radius:10px"/>
                                <div style="padding-top: 20px">

                                     <a href="#"><i class="fas fa-arrow-right"></i> If You're Not a U.S. Citizen, Can You Get an EIN for Your Business?</a>

                                </div>
                            </div>

                        </div>
                        <div class="item" style="padding: 10px;">
                            <div style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;border-radius:10px;padding:10px">
                                <img src="https://images.unsplash.com/photo-1640622842008-1897f26aafe3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHw2fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" style="border-radius:10px"/>
                                <div style="padding-top: 20px">

                                     <a href="#"><i class="fas fa-arrow-right"></i> If You're Not a U.S. Citizen, Can You Get an EIN for Your Business?</a>

                                </div>
                            </div>

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
    {{-- <script
        src="{{asset('hs-fs/hub/3787982/hub_generated/template_assets/41952712112/1623111341483/Incfile_February_2021/js/slick.min.js')}}">
    </script>
    <script
        src="{{asset('hs-fs/hub/3787982/hub_generated/module_assets/41952544958/1646265821659/module_41952544958_Related_Articles.min.js')}}">
    </script> --}}





@endsection
