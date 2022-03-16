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
        <h4>Obtain EIN</h4>
    </div>
    <div class="card-content p-3">
        <form action="{{url('admin/update_obtain')}}" method="POST" enctype="multipart/form-data">
            @csrf

         <div class="row p-3">

            <div class="col-lg-12 col-12 mt-2">
                <input type="hidden" name="id" value="{{$header->id}}">
                <label for=""><b>Image</b></label>

                <input name="image" type="file" data-default-file="{{asset('Upload/obtain/'.$header->image)}}" class="dropify" data-height="100" />
            </div>


              <div class="col-lg-12 col-12 mt-2">
              <label>Heading</label>

              <input name="heading" value="{{$header->heading}}" class="form-control">
            </div>
            <div class="col-lg-12 col-12 mt-2">
              <label>Sub Heading</label>
              <input name="Sub_heading" value="{{$header->Sub_heading}}" class="form-control">
            </div>
            <div class="col-lg-12 col-12 mt-2">
                <label>Sub Heading2</label>
                <input name="Sub_heading2" value="{{$header->Sub_heading2}}" class="form-control">
              </div>
              <div class="col-lg-12 col-12 mt-2">
                <label>Detail</label>
                <textarea name="detail" class="form-control" rows="5">{{$header->detail}}</textarea>
              </div>
              <div class="col-lg-12 col-12 mt-2">
                <label>Price</label>
                <input name="price" value="{{$header->price}}" class="form-control">
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
