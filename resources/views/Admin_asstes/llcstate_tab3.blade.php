@extends('Admin_asstes.layouts.main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
            // alert(id);


   	        $.ajax({

                type: 'get',
                url: '{{ URL::to('/admin/get_llcstep_3') }}',
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
