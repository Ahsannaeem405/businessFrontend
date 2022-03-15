@extends('Admin_asstes.layouts.main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">


@section('content')

        {{-- <div class="row">
            <div class="col-lg-12">
                <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModal">
                    Add Comparison Chart
                  </button>
            </div>
        </div> --}}
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
                <h4>Chart headings</h4>
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
                                <th>Main Heading</th>
                                <th>Heading1</th>
                                <th>Heading2</th>
                                <th>Heading3</th>
                                <th>Heading4</th>
                                <th>Heading5</th>







                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $x=0;
                            @endphp
                            @foreach ($headers as $header)
                            @php
                                $x++;
                            @endphp
                            <tr>
                                <td>1</td>

                                <td>{{$header->Heading}}</td>
                                <td>{{$header->Heading1}}</td>
                                <td>{{$header->Heading2}}</td>
                                <td>{{$header->Heading3}}</td>
                                <td>{{$header->Heading4}}</td>
                                <td>{{$header->Heading5}}</td>

                                <td>


                                    <a href="{{url('admin/edit_tableheading/'.$header->id)}}"  class="btn btn-primary ml-lg-1 ml-md-1 mt-1">Edit</a>




                                </td>
                            </tr>

                            @endforeach



















                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Main Heading</th>
                                <th>Heading1</th>
                                <th>Heading2</th>
                                <th>Heading3</th>
                                <th>Heading4</th>
                                <th>Heading5</th>


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
          <h5 class="modal-title" id="exampleModalLabel">Add Comparison Chart</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{url('#')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row p-3">


                    <div class="col-lg-12 col-12 mt-2">
                       <label><b>Heading1</b></label><br>
                        <input type="text" class="form-control mt-1" name="heading"  required>
                    </div>
                    <div class="col-lg-12 col-12 mt-2">
                        <label><b>Detail1</b></label><br>
                         <textarea name="detail"  rows="2" class="form-control"></textarea>
                     </div>
                    <div class="col-lg-12 col-12 mt-2">
                        <label><b>Heading2</b></label><br>
                         <input type="text" class="form-control mt-1" name="heading"  required>
                     </div>
                     <div class="col-lg-12 col-12 mt-2">
                        <label><b>Detail2</b></label><br>
                         <textarea name="detail"  rows="2" class="form-control"></textarea>
                     </div>
                     <div class="col-lg-12 col-12 mt-2">
                        <label><b>Heading3</b></label><br>
                         <input type="text" class="form-control mt-1" name="heading"  required>
                     </div>
                     <div class="col-lg-12 col-12 mt-2">
                        <label><b>Detail3</b></label><br>
                         <textarea name="detail"  rows="2" class="form-control"></textarea>
                     </div>
                     <div class="col-lg-12 col-12 mt-2">
                        <label><b>Heading4</b></label><br>
                         <input type="text" class="form-control mt-1" name="heading"  required>
                     </div>
                     <div class="col-lg-12 col-12 mt-2">
                        <label><b>Detail4</b></label><br>
                         <textarea name="detail"  rows="2" class="form-control"></textarea>
                     </div>









                </div>


        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
          <button type="submit" class="btn btn-primary">Add Comparison Chart</button>

        </div>
    </form>
      </div>

    </div>
  </div>




<script>
    $('.dropify').dropify();
</script>
@endsection
