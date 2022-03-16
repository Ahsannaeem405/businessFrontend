@extends('Admin_asstes.layouts.main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">


@section('content')


<div class="card mt-2">
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{session()->get('success')}}
    </div>
    @endif
    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{session()->get('error')}}
    </div>
    @endif

    <div class="card-header">
        <h4>Employee Identification</h4>
    </div>
    <div class="card-content p-3">
        <form action="{{url('admin/update_employee')}}" method="POST" enctype="multipart/form-data">
            @csrf

         <div class="row p-3">





              <div class="col-lg-12 col-12 mt-2">
              <label>Question</label>
                <input type="hidden" name="id" value="{{$header->id}}">

              <textarea name="question" id="" class="form-control" rows="5">{{$header->question}}</textarea>

            </div>
            <div class="col-lg-12 col-12 mt-2">
                <label>Answer</label>



                <textarea name="answer" id="" class="form-control" rows="5">{{$header->answer}}</textarea>
              </div>







            <div class="col-lg-12 col-12 mt-2">
               <button class="btn btn-primary" type="submit">Update</button>
           </div>

         </div>
        </form>




    </div>
</div>




<script>
    $('.dropify').dropify();
</script>
@endsection
