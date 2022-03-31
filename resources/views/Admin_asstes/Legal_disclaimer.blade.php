@extends('Admin_asstes.layouts.main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">


@section('content')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<form id="btn_sub" action="{{url('admin/Legal_Disclaimer_save')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label for="inputAddress"><b><h1>Section1</b></h1></label>
	<div class="text1" contenteditable="true">
		@if(isset($data->section1))
        <input type="hidden" name="id" value="{{$data->id}}">
        {!! $data->section1 !!}

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
