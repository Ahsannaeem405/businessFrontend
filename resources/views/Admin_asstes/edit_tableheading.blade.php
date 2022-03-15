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
        <h4>Chart Headings</h4>
    </div>
    <div class="card-content p-3">
        <form action="{{url('admin/update_tableheading')}}" method="POST" enctype="multipart/form-data">
            @csrf

         <div class="row p-3">




              <div class="col-lg-12 col-12 mt-2">
              <label>Main_Heading</label>
              <input name="id" type="hidden" value="{{$header->id}}" class="form-control">
              <input name="Heading" value="{{$header->Heading}}" class="form-control">
            </div>
            <div class="col-lg-12 col-12 mt-2">
                <label>Heading1</label>

                <input name="Heading1" value="{{$header->Heading1}}" class="form-control">
              </div>
              <div class="col-lg-12 col-12 mt-2">
                <label>Heading2</label>

                <input name="Heading2" value="{{$header->Heading2}}" class="form-control">
              </div>

              <div class="col-lg-12 col-12 mt-2">
                <label>Heading3</label>

                <input name="Heading3" value="{{$header->Heading3}}" class="form-control">
              </div>

              <div class="col-lg-12 col-12 mt-2">
                <label>Heading4</label>

                <input name="Heading4" value="{{$header->Heading4}}" class="form-control">
              </div>

              <div class="col-lg-12 col-12 mt-2">
                <label>Heading5</label>

                <input name="Heading5" value="{{$header->Heading5}}" class="form-control">
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
