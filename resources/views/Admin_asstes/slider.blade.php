@extends('Admin_asstes.layouts.main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">


@section('content')

        <div class="row">
            {{-- <div class="col-lg-12">
                <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModal">
                    Add Banner
                  </button>
            </div> --}}
        </div>
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
                <h4>Banner</h4>
            </div>
            <div class="card-content p-3">
                {{-- <form action="#">

                 <div class="row p-3">

                    <div class="col-lg-12 col-12 mt-2">
                        <input name="file1" type="file" class="dropify" data-height="100" />
                    </div>
                     <div class="col-lg-10 col-12 mt-2">
                        <label><b>Header Text:</b></label><br>
                         <input type="text" class="form-control mt-1" name="text" placeholder="Header Text">
                     </div>
                     <div class="col-lg-2 col-12 mt-2">
                         <label><b> Select Color : </b></label><br>
                        <input type="color" class="mt-1"  id="favcolor" name="color" value="#ff0000">
                    </div>

                 </div>
                </form> --}}

                <div class="table-responsive">
                    <table class="table zero-configuration">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Heading</th>


                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $x=0;
                            @endphp
                            @foreach ($banners as $header)
                            @php
                                $x++;
                            @endphp
                            <tr>
                                <td>{{$x}}</td>
                                <td><img src="{{asset('Upload/header/'.$header->image)}}" style="max-height:100px;" alt=""></td>
                                <td>{{$header->heading}}</td>
                                <td>


                                    <a href="{{url('admin/editheader/'.$header->id)}}"  class="btn btn-primary ml-lg-1 ml-md-1 mt-1">Edit</a>

                                    {{-- <a href="{{url('#')}}" class="btn btn-danger ml-lg-1 ml-md-1 mt-1">Delete</a> --}}


                                </td>
                            </tr>

                             @endforeach



















                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Heading</th>


                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>


            </div>
        </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Banner</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{url('#')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row p-3">

                   <div class="col-lg-12 col-12 mt-2">
                       <label for=""><b>Banner Image</b></label>
                       <input name="file1" type="file" class="dropify" data-height="100" required/>
                   </div>
                    <div class="col-lg-12 col-12 mt-2">
                       <label><b>Heading</b></label><br>
                        <input type="text" class="form-control mt-1" name="heading1"  required>
                    </div>
                    <div class="col-lg-12 col-12 mt-2">
                        <label><b>Sub Heading</b></label><br>
                         <textarea name="text1" id="" cols="5" class="form-control" required></textarea>
                     </div>

                     <div class="col-lg-12 col-12 mt-2">
                        <label><b>Button text</b></label><br>
                         <input type="text" class="form-control mt-1" name="heading2" required>
                     </div>
                     <div class="col-lg-12 col-12 mt-2">
                         <label><b>Button Link</b></label><br>
                          <textarea name="text2" id="" cols="5" class="form-control" required></textarea>
                      </div>




                </div>


        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
          <button type="submit" class="btn btn-primary">Add Banner</button>

        </div>
    </form>
      </div>

    </div>
  </div>




<script>
    $('.dropify').dropify();
</script>
@endsection
