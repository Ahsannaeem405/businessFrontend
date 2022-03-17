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
        <h4>Corporation</h4>
    </div>
    <div class="card-content p-3">
        <form action="{{url('admin/update_corp')}}" method="POST" enctype="multipart/form-data">
            @csrf

         <div class="row p-3">



              <div class="col-lg-12 col-12 mt-2">
              <label>Heading</label>
              <input name="id" type="hidden" value="{{$header->id}}" class="form-control">
              <input name="heading" value="{{$header->heading}}" class="form-control">
            </div>
            <div class="col-lg-12 col-12 mt-2">
              <label>Description</label>
              <textarea name="text" id="" class="form-control" rows="5">{{$header->text}}</textarea>
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