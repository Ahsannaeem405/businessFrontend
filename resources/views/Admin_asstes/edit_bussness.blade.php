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
        <h4>Annual Report</h4>
    </div>
    <div class="card-content p-3">
        <form action="{{url('admin/update_bussiness')}}" method="POST" enctype="multipart/form-data">
            @csrf

         <div class="row p-3">




              <div class="col-lg-6 col-12 mt-2">
                <input type="hidden" name="id" value="{{$header->id}}">
              <label>Heading1</label>

              <input name="heading" value="{{$header->heading1}}" class="form-control">
            </div>
            <div class="col-lg-6 col-12 mt-2">
              <label>Heading2</label>

              <input name="heading" value="{{$header->heading2}}" class="form-control">
            </div>
            <div class="col-lg-6 col-12 mt-2">
              <label>Detail</label>
              <textarea name="detail1" class="form-control" rows="5">{{$header->detail1}}</textarea>
            </div>
            <div class="col-lg-6 col-12 mt-2">
                <label>Detail</label>
                <textarea name="detail2" class="form-control" rows="5">{{$header->detail2}}</textarea>
              </div>
            <div class="col-lg-12 col-12 mt-2">

                <label for=""><b>Point1</b></label>
{{-- <input type="text" class="form-control" value="{{$header->link}}" name="link"> --}}

<textarea name="point1" class="form-control"  rows="5">{{$header->point1}}</textarea>

            </div>
            <div class="col-lg-12 col-12 mt-2">

                <label for=""><b>Point2</b></label>
{{-- <input type="text" class="form-control" value="{{$header->link}}" name="link"> --}}

<textarea name="point2" class="form-control"  rows="5">{{$header->point2}}</textarea>

            </div>
            <div class="col-lg-12 col-12 mt-2">

                <label for=""><b>Point3</b></label>
{{-- <input type="text" class="form-control" value="{{$header->link}}" name="link"> --}}

<textarea name="point3" class="form-control"  rows="5">{{$header->point3}}</textarea>

            </div>
            <div class="col-lg-12 col-12 mt-2">

                <label for=""><b>Point4</b></label>
{{-- <input type="text" class="form-control" value="{{$header->link}}" name="link"> --}}

<textarea name="point4" class="form-control"  rows="5">{{$header->point4}}</textarea>

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
