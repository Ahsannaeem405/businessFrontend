@extends('Admin_asstes.layouts.main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">


@section('content')
<form action="{{url('admin/update_filling_sec3')}}" method="post" enctype="multipart/form-data">
    @csrf
@if (isset($data))

<div class="row">
    <div class="col-lg-12 col-12 mt-2">
        <input type="hidden" name="id" value="{{$data->id}}">
        <label for=""><b>Image1</b></label>

        <input name="image" type="file" data-default-file="{{asset('Upload/filling/'.$data->image)}}" class="dropify form-control" data-height="100" />
    </div>
    <div class="col-12 pt-4">
        <label for=""><b>Heading</b></label>
        <input type="text" name="heading" class="form-control" value="{{$data->heading}}">
    </div>
    <div class="col-12 pt-4">
        <label for=""><b>Detail</b></label>
        <textarea name="detail" id="" class="form-control" rows="5">{{$data->detail}}</textarea>
    </div>
    <div class="col-12 pt-4">
        <label for=""><b>Button Name</b></label>
        <input type="text" name="button_name" value="{{$data->button_name}}" class="form-control">
    </div>
    <div class="col-12 pt-4">
        <label for=""><b>Button Link</b></label>
        <input type="text" name="button_link" value="{{$data->button_link}}" class="form-control">
    </div>
    <div class="col-12 pt-2">
       <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
@else
<div class="row">
    <div class="col-lg-12 col-12 mt-2">
        <label for=""><b>Image</b></label>

        <input name="image1" type="file"  class="dropify form-control" data-height="100" />
    </div>
    <div class="col-12 pt-4">
        <label for=""><b>Heading</b></label>
        <input type="text" name="heading" class="form-control">
    </div>
    <div class="col-12 pt-4">
        <label for=""><b>Detail</b></label>
        <textarea name="detail" id="" class="form-control" rows="5"></textarea>
    </div>
    <div class="col-12 pt-4">
        <label for=""><b>Button Name</b></label>
        <input type="text" name="button_name" class="form-control">
    </div>
    <div class="col-12 pt-4">
        <label for=""><b>Button Link</b></label>
        <input type="text" name="button_link" class="form-control">
    </div>
    <div class="col-12 pt-2">
       <button type="submit" class="btn btn-primary float-right">Submit</button>
    </div>
</div>
@endif
</form>


<script>
    $('.dropify').dropify();
</script>
@endsection
