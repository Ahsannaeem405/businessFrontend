@extends('Admin_asstes.layouts.main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">


@section('content')

        <div class="row">
            <div class="col-lg-12">
                <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModal">
                    Add  Annual Report Detail
                  </button>
            </div>
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
                <h4>Annual Report Detail</h4>
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
                                <th>Link</th>



                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            {{-- @php
                                $x=0;
                            @endphp
                            @foreach ($abouts as $header)
                            @php
                                $x++;
                            @endphp --}}
                            <tr>
                                <td>1</td>
                                <td>Demo</td>
                                <td>


                                    <a href="{{url('#')}}"  class="btn btn-primary ml-lg-1 ml-md-1 mt-1">Edit</a>

                                    <a href="{{url('#')}}" class="btn btn-danger ml-lg-1 ml-md-1 mt-1">Delete</a>


                                </td>
                            </tr>
{{--
                            @endforeach --}}



















                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Link</th>


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
          <h5 class="modal-title" id="exampleModalLabel">Add  Annual Report Detail</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{url('#')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row p-3">


                    <div class="col-lg-12 col-12 mt-2">
                       <label><b>Video Link</b></label><br>
                        <input type="text" class="form-control mt-1" name="link"  required>
                    </div>
                    <div class="col-lg-12 col-12 mt-2">
                        <label><b>Question</b></label><br>
                        <input type="text" name="question" class="form-control">
                     </div>

                     <div class="col-lg-12 col-12 mt-2">
                         <label><b>Detail</b></label><br>
                          <textarea name="detail" id=""  rows="5" class="form-control" required></textarea>
                      </div>





                </div>


        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
          <button type="submit" class="btn btn-primary">Add Annual Report Detail</button>

        </div>
    </form>
      </div>

    </div>
  </div>




<script>
    $('.dropify').dropify();
</script>
@endsection
