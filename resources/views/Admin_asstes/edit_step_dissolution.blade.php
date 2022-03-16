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
        <h4>Steps of Dissolution</h4>
    </div>
    <div class="card-content p-3">
        <form action="{{url('admin/update_steps_diss')}}" method="POST" enctype="multipart/form-data">
            @csrf

         <div class="row p-3">




              <div class="col-lg-12 col-12 mt-2">
                <input type="hidden" name="id" value="{{$header->id}}">

              <label>Heading1</label>

              <input name="heading1" value="{{$header->heading1}}" class="form-control">
            </div>
            <div class="col-lg-12 col-12 mt-2">
              <label>Detail1</label>
              <textarea name="detail1" id="" class="form-control" rows="5">{{$header->detail1}}</textarea>
            </div>
            <div class="col-lg-12 col-12 mt-2">

              <label>Heading2</label>

              <input name="heading2" value="{{$header->heading2}}" class="form-control">
            </div>
            <div class="col-lg-12 col-12 mt-2">
              <label>Detail2</label>
              <textarea name="detail2" id="" class="form-control" rows="5">{{$header->detail2}}</textarea>
            </div>

            <div class="col-lg-12 col-12 mt-2">

                <label>Heading3</label>

                <input name="heading3" value="{{$header->heading3}}" class="form-control">
              </div>
              <div class="col-lg-12 col-12 mt-2">
                <label>Detail3</label>
                <textarea name="detail3" id="" class="form-control" rows="5">{{$header->detail3}}</textarea>
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
