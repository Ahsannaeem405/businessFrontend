@extends('Admin_asstes.layouts.main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">


@section('content')
<form action="{{url('admin/update_filling_sec1')}}" method="post" enctype="multipart/form-data">
    @csrf
@if (isset($data))

<div class="row">
    <div class="col-12">
        <label for=""><b>Youtube Embeded Link</b></label>
        <input type="hidden" name="id" value="{{$data->id}}">
        <textarea name="video" id="" class="form-control" rows="5">{{$data->video}}</textarea>
    </div>
    <div class="col-12 pt-4">
        <label for=""><b>Detail</b></label>
        <textarea name="text" id="" class="form-control" rows="5">{{$data->text}}</textarea>
    </div>
    <div class="col-12 pt-2">
       <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
@else
<div class="row">
    <div class="col-12">
        <label for=""><b>Youtube Embeded Link</b></label>

        <textarea name="video" id="" class="form-control" rows="5"></textarea>
    </div>
    <div class="col-12 pt-4">
        <label for=""><b>Detail</b></label>
        <textarea name="text" id="" class="form-control" rows="5"></textarea>
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
