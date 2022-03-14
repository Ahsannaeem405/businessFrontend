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
        <h4>Banner</h4>
    </div>
    <div class="card-content p-3">
        <form action="{{url('admin/update_header')}}" method="POST" enctype="multipart/form-data">
            @csrf

         <div class="row p-3">

            <div class="col-lg-12 col-12 mt-2">
                <input type="hidden" name="id" value="{{$header->id}}">
                <label for=""><b>Image1</b></label>

                <input name="file" type="file" data-default-file="{{asset('Upload/header/'.$header->image)}}" class="dropify" data-height="100" />
            </div>


              <div class="col-lg-12 col-12 mt-2">
              <label>Heading</label>

              <input name="heading" value="{{$header->heading}}" class="form-control">
            </div>
            <div class="col-lg-12 col-12 mt-2">
              <label>Sub Heading</label>
              <input name="sub_heading" value="{{$header->sub_heading}}" class="form-control">
            </div>
               <div class="col-lg-12 col-12 mt-2">
              <label>Button Name</label>

              <input name="button_name" value="{{$header->button_name}}" class="form-control">
            </div>
            <div class="col-lg-12 col-12 mt-2">
                <label>Button Link</label>

                <input name="button_link" value="{{$header->button_link}}" class="form-control">
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
