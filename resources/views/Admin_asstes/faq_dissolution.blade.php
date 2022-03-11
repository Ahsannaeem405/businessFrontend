@extends('Admin_asstes.layouts.main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">


@section('content')

        <div class="row">
            <div class="col-lg-12">
                <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModal">
                  Add FAQ
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
                <h4>FAQ</h4>
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
                                <th>Heading</th>
                            <th>Question</th>




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
                                <td>Lorem Ipsum</td>
                                <td>What is Lorem Ipsum?</td>

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
                                <th>Heading</th>
                                <th>Question</th>



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
          <h5 class="modal-title" id="exampleModalLabel">FAQ</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{url('#')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row p-3">



                    <div class="col-lg-12 col-12 mt-2">
                        <label><b>Heading</b></label><br>
                        <input type="text" name="heading" class="form-control">
                     </div>
                     <div class="col-lg-6 col-12 mt-2">
                         <label><b>Question 1</b></label><br>
                          <textarea name="q1" id=""  rows="5" class="form-control" required></textarea>
                      </div>
                      <div class="col-lg-6 col-12 mt-2">
                        <label><b>Answer 1</b></label><br>
                         <textarea name="a1" id=""  rows="5" class="form-control" required></textarea>
                     </div>
                     <div class="col-lg-6 col-12 mt-2">
                        <label><b>Question 2</b></label><br>
                         <textarea name="q2" id=""  rows="5" class="form-control" required></textarea>
                     </div>
                     <div class="col-lg-6 col-12 mt-2">
                        <label><b>Answer 2</b></label><br>
                         <textarea name="a2" id=""  rows="5" class="form-control" required></textarea>
                     </div>
                     <div class="col-lg-6 col-12 mt-2">
                        <label><b>Question 3</b></label><br>
                         <textarea name="q3" id=""  rows="5" class="form-control" required></textarea>
                     </div>
                     <div class="col-lg-6 col-12 mt-2">
                        <label><b>Answer 3</b></label><br>
                         <textarea name="a3" id=""  rows="5" class="form-control" required></textarea>
                     </div>
                     <div class="col-lg-6 col-12 mt-2">
                        <label><b>Question 4</b></label><br>
                         <textarea name="q4" id=""  rows="5" class="form-control" required></textarea>
                     </div>
                     <div class="col-lg-6 col-12 mt-2">
                        <label><b>Answer 4</b></label><br>
                         <textarea name="a4" id=""  rows="5" class="form-control" required></textarea>
                     </div>
                     <div class="col-lg-6 col-12 mt-2">
                        <label><b>Question 5</b></label><br>
                         <textarea name="q5" id=""  rows="5" class="form-control" required></textarea>
                     </div>
                     <div class="col-lg-6 col-12 mt-2">
                        <label><b>Answer 5</b></label><br>
                         <textarea name="a5" id=""  rows="5" class="form-control" required></textarea>
                     </div>





                </div>


        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
          <button type="submit" class="btn btn-primary">Add FAQ</button>

        </div>
    </form>
      </div>

    </div>
  </div>




<script>
    $('.dropify').dropify();
</script>
@endsection