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
        <h4>FAQ</h4>
    </div>
    <div class="card-content p-3">
        <form action="{{url('admin/update_FAQ_dissolution')}}" method="POST" enctype="multipart/form-data">
            @csrf

         <div class="row p-3">


            <div class="col-lg-12 col-12 mt-2">
                <input type="hidden" name="id" value="{{$header->id}}">

              <label>Heading</label>
<input type="text" name="heading" class="form-control" value="{{$header->heading}}">
            </div>

              <div class="col-lg-6 col-12 mt-2">

              <label>Question1</label>

              <textarea name="q1" class="form-control" rows="5">{{$header->q1}}</textarea>
            </div>
            <div class="col-lg-6 col-12 mt-2">
                <label>Answer1</label>

                <textarea name="a1" class="form-control" rows="5">{{$header->a1}}</textarea>
            </div>

            <div class="col-lg-6 col-12 mt-2">
                <label>Question2</label>

              <textarea name="q2" class="form-control" rows="5">{{$header->q2}}</textarea>
              </div>

              <div class="col-lg-6 col-12 mt-2">
                <label>Answer2</label>

                <textarea name="a2" class="form-control" rows="5">{{$header->a2}}</textarea>
              </div>
              <div class="col-lg-6 col-12 mt-2">
                <label>Question3</label>

              <textarea name="q3" class="form-control" rows="5">{{$header->q3}}</textarea>
              </div>

              <div class="col-lg-6 col-12 mt-2">
                <label>Answer3</label>

                <textarea name="a3" class="form-control" rows="5">{{$header->a3}}</textarea>
              </div>

              <div class="col-lg-6 col-12 mt-2">
                <label>Question4</label>

              <textarea name="q4" class="form-control" rows="5">{{$header->q4}}</textarea>
              </div>

              <div class="col-lg-6 col-12 mt-2">
                <label>Answer4</label>

                <textarea name="a4" class="form-control" rows="5">{{$header->a4}}</textarea>
              </div>

              <div class="col-lg-6 col-12 mt-2">
                <label>Question5</label>

              <textarea name="q5" class="form-control" rows="5">{{$header->q5}}</textarea>
              </div>

              <div class="col-lg-6 col-12 mt-2">
                <label>Answer5</label>

                <textarea name="a5" class="form-control" rows="5">{{$header->a5}}</textarea>
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
