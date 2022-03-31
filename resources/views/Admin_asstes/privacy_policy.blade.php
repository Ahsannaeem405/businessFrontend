@extends('Admin_asstes.layouts.main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">


@section('content')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<form id="btn_sub" action="{{url('admin/Privacy_policy_save')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label for="inputAddress"><b><h1>Section1</b></h1></label>
	<div class="text1" contenteditable="true">
		@if(isset($data->section1))
        <input type="hidden" name="id" value="{{$data->id}}">
        {!! $data->section1 !!}

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


	</div>
	<textarea class="section1  d-none" name="section1"></textarea>
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
