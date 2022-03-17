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
        <h4>Business Entity</h4>
    </div>
    <div class="card-content p-3">
        <form action="{{url('admin/update_taxcard')}}" method="POST" enctype="multipart/form-data">
            @csrf

         <div class="row p-3">

            <div class="col-lg-12 col-12 mt-2">
                <label>Main Heading</label>
                <input type="hidden" name="id" value="{{$header->id}}">


                <input name="heading" value="{{$header->heading}}" class="form-control">
              </div>
            <div class="col-lg-12 col-12 mt-2">
                <label for=""><b>Image1</b></label>

                <input name="image1" type="file" data-default-file="{{asset('Upload/taxcard/'.$header->image1)}}" class="dropify" data-height="100" />
            </div>


            <div class="col-lg-6 col-12 mt-2">
              <label>Title1</label>
              <input name="title1" value="{{$header->title1}}" class="form-control">
            </div>
            <div class="col-lg-6 col-12 mt-2">
                <label>link1</label>
                <input name="link1" value="{{$header->link1}}" class="form-control">
              </div>

              <div class="col-lg-12 col-12 mt-2">
                <label for=""><b>Image2</b></label>

                <input name="image2" type="file" data-default-file="{{asset('Upload/taxcard/'.$header->image2)}}" class="dropify" data-height="100" />
            </div>


            <div class="col-lg-6 col-12 mt-2">
              <label>Title2</label>
              <input name="title2" value="{{$header->title2}}" class="form-control">
            </div>
            <div class="col-lg-6 col-12 mt-2">
                <label>link2</label>
                <input name="link2" value="{{$header->link2}}" class="form-control">
              </div>


              <div class="col-lg-12 col-12 mt-2">
                <label for=""><b>Image3</b></label>

                <input name="image3" type="file" data-default-file="{{asset('Upload/taxcard/'.$header->image3)}}" class="dropify" data-height="100" />
            </div>


            <div class="col-lg-6 col-12 mt-2">
              <label>Title3</label>
              <input name="title3" value="{{$header->title3}}" class="form-control">
            </div>
            <div class="col-lg-6 col-12 mt-2">
                <label>link3</label>
                <input name="link3" value="{{$header->link3}}" class="form-control">
              </div>


              <div class="col-lg-12 col-12 mt-2">
                <label for=""><b>Image4</b></label>

                <input name="image4" type="file" data-default-file="{{asset('Upload/taxcard/'.$header->image4)}}" class="dropify" data-height="100" />
            </div>


            <div class="col-lg-6 col-12 mt-2">
              <label>Title4</label>
              <input name="title4" value="{{$header->title4}}" class="form-control">
            </div>
            <div class="col-lg-6 col-12 mt-2">
                <label>link4</label>
                <input name="link4" value="{{$header->link4}}" class="form-control">
              </div>
               <div class="col-lg-6 col-12 mt-2">
              <label>Button Name</label>

              <input name="Button_name" value="{{$header->Button_name}}" class="form-control">
            </div>
            <div class="col-lg-6 col-12 mt-2">
                <label>Button Link</label>

                <input name="Button_link" value="{{$header->Button_link}}" class="form-control">
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
