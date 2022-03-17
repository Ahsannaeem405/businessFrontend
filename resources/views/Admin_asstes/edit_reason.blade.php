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
        <h4>Key Reasons</h4>
    </div>
    <div class="card-content p-3">
        <form action="{{url('admin/update_reason')}}" method="POST" enctype="multipart/form-data">
            @csrf

         <div class="row p-3">




              <div class="col-lg-12 col-12 mt-2">
                <input type="hidden" name="id" value="{{$header->id}}">

              <label> Point Heading</label>

              <input name="heading1" value="{{$header->heading1}}" class="form-control">
            </div>
            <div class="col-lg-12 col-12 mt-2">
                <label>Point1</label>
                <textarea name="point1" class="form-control" rows="5">{{$header->point1}}</textarea>
              </div>
              <div class="col-lg-12 col-12 mt-2">
                <label>Point2</label>
                <textarea name="point2" class="form-control" rows="5">{{$header->point2}}</textarea>
              </div>
              <div class="col-lg-12 col-12 mt-2">
                <label>Point3</label>
                <textarea name="point3" class="form-control" rows="5">{{$header->point3}}</textarea>
              </div>
              <div class="col-lg-12 col-12 mt-2">
                <label>Point4</label>
                <textarea name="point4" class="form-control" rows="5">{{$header->point4}}</textarea>
              </div>
              <div class="col-lg-12 col-12 mt-2">
                <label>Point5</label>
                <textarea name="point5" class="form-control" rows="5">{{$header->point5}}</textarea>
              </div>

              <div class="col-lg-12 col-12 mt-2">
                <label>Detail</label>
                <textarea name="detail1" class="form-control" rows="5">{{$header->detail1}}</textarea>
              </div>
              <div class="col-lg-12 col-12 mt-2">
                <label>Heading2</label>
                <input name="heading2" value="{{$header->heading2}}" class="form-control">
              </div>
              <div class="col-lg-12 col-12 mt-2">
                <label>Detail2</label>
                <textarea name="detail2" class="form-control" rows="5">{{$header->detail2}}</textarea>
              </div>
              <div class="col-lg-12 col-12 mt-2">
                <label>Point6</label>
                <textarea name="point6" class="form-control" rows="5">{{$header->point6}}</textarea>
              </div>
              <div class="col-lg-12 col-12 mt-2">
                <label>Point7</label>
                <textarea name="point7" class="form-control" rows="5">{{$header->point7}}</textarea>
              </div>
              <div class="col-lg-12 col-12 mt-2">
                <label>Point8</label>
                <textarea name="point8" class="form-control" rows="5">{{$header->point8}}</textarea>
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
