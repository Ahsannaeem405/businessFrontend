@extends('Admin_asstes.layouts.main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

    .accordion button[aria-expanded='true']+.accordion-content {
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
@section('content')
  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Preference</label>
      <select class="custom-select mr-sm-2 select_state" id="">
        <option selected>Select State...</option>
        @foreach($data as $row_data)
        <option value="{{$row_data->id}}">{{$row_data->name}}</option>
        @endforeach


      </select>
    </div>
    <div class="data"></div>




<script>
   $(document).ready(function(){
        $(".select_state").change(function(){
        	var id=$(this).val();


   	        $.ajax({

                type: 'get',
                url: '{{ URL::to('/admin/get_stateinfo') }}',
                data: {
                    'id': id
                },

                success: function(data) {
                	$(".data").empty();

                	$(".data").append(data);


                },
            })
        });

	    $(".btn").click(function(){
	       alert($(".text1").html());
           alert($(".text2").html());
	   });
});
</script>

@endsection
