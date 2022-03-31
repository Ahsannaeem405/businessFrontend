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
            <h3>What is a Disclaimer Statement?</h3>
         <p class="mt-3">A disclaimer is a statement that specifies or places limits on a business or individual’s legal liability. For example, a company’s disclaimer statement may state that they cannot be held responsible if their products or services are used without following instructions in the owner’s manual. They can also be used to limit an individual’s liability when sharing tips or opinions. Some disclaimers are required by law, while others are just a good idea to prevent lawsuits or disputes. You can also create a funny email disclaimer if you don’t want to take yourself seriously.</p>
            <br>
            <h3>Types of Disclaimer</h3>
            <p class="mt-3">There are several types of disclaimers that are applicable to various individuals and businesses. When crafting your own, it helps to be specific in your searches. For example, search “trigger warning disclaimer examples,” “email disclaimer examples,” “product disclaimer examples,” or “views expressed disclaimer examples” instead of browsing through tons of generic templates.

                Here are some of the most common types of disclaimers:</p>
                <ul>
                    <li>
                        Responsibility disclaimer
                    </li>
                    <li>
                        Fair use disclaimer
                    </li>
                    <li>
                        Past performance disclaimer
                    </li>
                    <li>
                        Copyright disclaimer
                    </li>
                    <li>
                        Warranty disclaimer
                    </li>
                    <li>
                        Risk disclaimer
                    </li>
                </ul>
                <br>

                <h3>What is a Disclaimer Statement?</h3>
                <p class="mt-3">A disclaimer is a statement that specifies or places limits on a business or individual’s legal liability. For example, a company’s disclaimer statement may state that they cannot be held responsible if their products or services are used without following instructions in the owner’s manual. They can also be used to limit an individual’s liability when sharing tips or opinions. Some disclaimers are required by law, while others are just a good idea to prevent lawsuits or disputes. You can also create a funny email disclaimer if you don’t want to take yourself seriously.</p>

        </div>
    @endif

       @endsection
