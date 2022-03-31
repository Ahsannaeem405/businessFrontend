@extends('layout.main')
{{-- navtab link css --}}
<link rel="stylesheet"
    href="{{ asset('hs-fs/hub/3787982/hub_generated/module_assets/41951289498/1620380498964/module_41951289498_Benefits_Tabber.min.css') }}">
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">

@section('content')

    @include('slider')
    @if (isset($privacy->section1))
        {!! $privacy->section1 !!}
        @else
        <div class="container">
            <h3>INFORMATION WE COLLECT ABOUT YOU</h3>
            <p class="mt-3">When you use the Website or interact with us offline we collect and use information about you in the course of providing you services with customer support. We may collect some or all of the information listed below to help us with this:</p>
            <ul >
                <li>information that you submit online via the Website or by phone, including your name, contact details, date of birth, age. We collect this when you register for an account with us and/or offline;</li>
                <li>information that you submit online via the Website or by phone, including your name, contact details, date of birth, age. We collect this when you register for an account with us and/or offline;</li>
                <li>information that you submit online via the Website or by phone, including your name, contact details, date of birth, age. We collect this when you register for an account with us and/or offline;</li>
                <li>information that you submit online via the Website or by phone, including your name, contact details, date of birth, age. We collect this when you register for an account with us and/or offline;</li>
            </ul>
            <p>We also automatically collect information about how visitors use our Website by using cookies and similar technologies. It is possible to switch off cookies by setting your browser preferences. To learn more about how we use cookies and how to switch them off please see our Cookie Policy.
            </p>
    <br>

            <h3>HOW WE USE YOUR INFORMATION</h3>
            <p class="mt-3">We use your information in the following ways:</p>
            <ul >
                <li>to ensure that the Website’s content is presented as effectively as possible for you;</li>
                <li>information that you sul purposes, such as quality control, Website performance, system administration and to evaluate use of the Website, so that we can provide you with enhanced services;</li>
                <li>to provide you with information about products or services that you request from us, or which we feel may interest you (where necessary, after obtaining your consent) – see details below;</li>
                <li>information that you submit online via the Website or by phone, including your name, contact details, date of birth, age. We collect this when you register for an account with us and/or offline;</li>
            </ul>
            <p>We also automatically collect information about how visitors use our Website by using cookies and similar technologies. It is possible to switch off cookies by setting your browser preferences. To learn more about how we use cookies and how to switch them off please see our Cookie Policy.
            </p>
        </div>
    @endif

       @endsection
