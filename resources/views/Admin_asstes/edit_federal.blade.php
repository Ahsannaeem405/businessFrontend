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
        <h4>Federal EIN</h4>
    </div>
    <div class="card-content p-3">
        <form action="{{url('admin/update_federal')}}" method="POST" enctype="multipart/form-data">
            @csrf

         <div class="row p-3">


            <div class="col-lg-12 col-12 mt-2">
                <input type="hidden" name="id" value="{{$header->id}}">

              <label>Heading</label>
<input type="text" name="heading" class="form-control" value="{{$header->heading}}">
            </div>

              <div class="col-lg-12 col-12 mt-2">

              <label>Detail</label>

              <textarea name="detail" class="form-control" rows="5">{{$header->detail}}</textarea>
            </div>
            <div class="col-lg-12 col-12 mt-2">
                <label>Point Heading</label>

              <input type="text" class="form-control" name="point_heading" value="{{$header->point_heading}}">
            </div>

            <div class="col-lg-6 col-12 mt-2">
                <label>Point1</label>

              <textarea name="p1" class="form-control" rows="5">{{$header->p1}}</textarea>
              </div>

              <div class="col-lg-6 col-12 mt-2">
                <label>Point2</label>

              <textarea name="p2" class="form-control" rows="5">{{$header->p2}}</textarea>
              </div>
              <div class="col-lg-6 col-12 mt-2">
                <label>Point3</label>

              <textarea name="p3" class="form-control" rows="5">{{$header->p3}}</textarea>
              </div>

              <div class="col-lg-6 col-12 mt-2">
                <label>Point4</label>

              <textarea name="p4" class="form-control" rows="5">{{$header->p4}}</textarea>
              </div>

              <div class="col-lg-12 col-12 mt-2">
                <label>Point5</label>

              <textarea name="p5" class="form-control" rows="5">{{$header->p5}}</textarea>
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
