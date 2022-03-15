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
        <h4>Launch Bussiness</h4>
    </div>
    <div class="card-content p-3">
        <form action="{{url('admin/update_row3')}}" method="POST" enctype="multipart/form-data">
            @csrf

         <div class="row p-3">




              <div class="col-lg-12 col-12 mt-2">
                <input type="hidden" name="id" value="{{$header->id}}">
              <label>Title</label>

              <input name="Title" value="{{$header->Title}}" class="form-control">
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

                <label>Sub Heading3</label>

                <input name="Sub_heading3" value="{{$header->Sub_heading3}}" class="form-control">
              </div>
              <div class="col-lg-12 col-12 mt-2">

                <label>Sub Heading4</label>

                <input name="Sub_heading4" value="{{$header->Sub_heading4}}" class="form-control">
              </div>
            <div class="col-lg-6 col-12 mt-2">
              <label>Status 1</label><br>
              <input type="radio" name="status1" value="1" @if ($header->status1==1) checked @endif> &nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg><br><br>
              <input type="radio" name="status1" value="0" @if ($header->status1==0) checked @endif>&nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#F1A0A0" cx="16" cy="16" r="16"></circle><path d="M11.78 10.263L16 14.484l4.22-4.221a1 1 0 011.415 0l.102.102a1 1 0 010 1.414L17.516 16l4.221 4.22a1 1 0 010 1.415l-.102.102a1 1 0 01-1.414 0L16 17.516l-4.22 4.221a1 1 0 01-1.415 0l-.102-.102a1 1 0 010-1.414L14.484 16l-4.221-4.22a1 1 0 010-1.415l.102-.102a1 1 0 011.414 0z" fill="#FFF"></path></g></svg><br><br>

            </div>
            <div class="col-lg-6 col-12 mt-2">
                <label>Status 2</label><br>
                <input type="radio" name="status2" value="1" @if ($header->status2==1) checked @endif> &nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg><br><br>
                <input type="radio" name="status2" value="0" @if ($header->status2==0) checked @endif>&nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#F1A0A0" cx="16" cy="16" r="16"></circle><path d="M11.78 10.263L16 14.484l4.22-4.221a1 1 0 011.415 0l.102.102a1 1 0 010 1.414L17.516 16l4.221 4.22a1 1 0 010 1.415l-.102.102a1 1 0 01-1.414 0L16 17.516l-4.22 4.221a1 1 0 01-1.415 0l-.102-.102a1 1 0 010-1.414L14.484 16l-4.221-4.22a1 1 0 010-1.415l.102-.102a1 1 0 011.414 0z" fill="#FFF"></path></g></svg><br><br>

              </div>
              <div class="col-lg-6 col-12 mt-2">
                <label>Status 3</label><br>
                <input type="radio" name="status3" value="1" @if ($header->status3==1) checked @endif> &nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg><br><br>
                <input type="radio" name="status3" value="0" @if ($header->status3==0) checked @endif>&nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#F1A0A0" cx="16" cy="16" r="16"></circle><path d="M11.78 10.263L16 14.484l4.22-4.221a1 1 0 011.415 0l.102.102a1 1 0 010 1.414L17.516 16l4.221 4.22a1 1 0 010 1.415l-.102.102a1 1 0 01-1.414 0L16 17.516l-4.22 4.221a1 1 0 01-1.415 0l-.102-.102a1 1 0 010-1.414L14.484 16l-4.221-4.22a1 1 0 010-1.415l.102-.102a1 1 0 011.414 0z" fill="#FFF"></path></g></svg><br><br>

              </div>
              <div class="col-lg-6 col-12 mt-2">
                <label>Status 4</label><br>
                <input type="radio" name="status4" value="1" @if ($header->status4==1) checked @endif> &nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg><br><br>
                <input type="radio" name="status4" value="0" @if ($header->status4==0) checked @endif>&nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#F1A0A0" cx="16" cy="16" r="16"></circle><path d="M11.78 10.263L16 14.484l4.22-4.221a1 1 0 011.415 0l.102.102a1 1 0 010 1.414L17.516 16l4.221 4.22a1 1 0 010 1.415l-.102.102a1 1 0 01-1.414 0L16 17.516l-4.22 4.221a1 1 0 01-1.415 0l-.102-.102a1 1 0 010-1.414L14.484 16l-4.221-4.22a1 1 0 010-1.415l.102-.102a1 1 0 011.414 0z" fill="#FFF"></path></g></svg><br><br>

              </div>

              <div class="col-lg-6 col-12 mt-2">
                <label>Status 5</label><br>
                <input type="radio" name="status5" value="1" @if ($header->status5==1) checked @endif> &nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg><br><br>
                <input type="radio" name="status5" value="0" @if ($header->status5==0) checked @endif>&nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#F1A0A0" cx="16" cy="16" r="16"></circle><path d="M11.78 10.263L16 14.484l4.22-4.221a1 1 0 011.415 0l.102.102a1 1 0 010 1.414L17.516 16l4.221 4.22a1 1 0 010 1.415l-.102.102a1 1 0 01-1.414 0L16 17.516l-4.22 4.221a1 1 0 01-1.415 0l-.102-.102a1 1 0 010-1.414L14.484 16l-4.221-4.22a1 1 0 010-1.415l.102-.102a1 1 0 011.414 0z" fill="#FFF"></path></g></svg><br><br>

              </div>
              <div class="col-lg-6 col-12 mt-2">
                <label>Status 6</label><br>
                <input type="radio" name="status6" value="1" @if ($header->status6==1) checked @endif> &nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg><br><br>
                <input type="radio" name="status6" value="0" @if ($header->status6==0) checked @endif>&nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#F1A0A0" cx="16" cy="16" r="16"></circle><path d="M11.78 10.263L16 14.484l4.22-4.221a1 1 0 011.415 0l.102.102a1 1 0 010 1.414L17.516 16l4.221 4.22a1 1 0 010 1.415l-.102.102a1 1 0 01-1.414 0L16 17.516l-4.22 4.221a1 1 0 01-1.415 0l-.102-.102a1 1 0 010-1.414L14.484 16l-4.221-4.22a1 1 0 010-1.415l.102-.102a1 1 0 011.414 0z" fill="#FFF"></path></g></svg><br><br>

              </div>
              <div class="col-lg-6 col-12 mt-2">
                <label>Status 7</label><br>
                <input type="radio" name="status7" value="1" @if ($header->status7==1) checked @endif> &nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg><br><br>
                <input type="radio" name="status7" value="0" @if ($header->status7==0) checked @endif>&nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#F1A0A0" cx="16" cy="16" r="16"></circle><path d="M11.78 10.263L16 14.484l4.22-4.221a1 1 0 011.415 0l.102.102a1 1 0 010 1.414L17.516 16l4.221 4.22a1 1 0 010 1.415l-.102.102a1 1 0 01-1.414 0L16 17.516l-4.22 4.221a1 1 0 01-1.415 0l-.102-.102a1 1 0 010-1.414L14.484 16l-4.221-4.22a1 1 0 010-1.415l.102-.102a1 1 0 011.414 0z" fill="#FFF"></path></g></svg><br><br>

              </div>
              <div class="col-lg-6 col-12 mt-2">
                <label>Status 8</label><br>
                <input type="radio" name="status8" value="1" @if ($header->status8==1) checked @endif> &nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg><br><br>
                <input type="radio" name="status8" value="0" @if ($header->status8==0) checked @endif>&nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#F1A0A0" cx="16" cy="16" r="16"></circle><path d="M11.78 10.263L16 14.484l4.22-4.221a1 1 0 011.415 0l.102.102a1 1 0 010 1.414L17.516 16l4.221 4.22a1 1 0 010 1.415l-.102.102a1 1 0 01-1.414 0L16 17.516l-4.22 4.221a1 1 0 01-1.415 0l-.102-.102a1 1 0 010-1.414L14.484 16l-4.221-4.22a1 1 0 010-1.415l.102-.102a1 1 0 011.414 0z" fill="#FFF"></path></g></svg><br><br>

              </div>


              <div class="col-lg-6 col-12 mt-2">
                <label>Status 9</label><br>
                <input type="radio" name="status9" value="1" @if ($header->status9==1) checked @endif> &nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg><br><br>
                <input type="radio" name="status9" value="0" @if ($header->status9==0) checked @endif>&nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#F1A0A0" cx="16" cy="16" r="16"></circle><path d="M11.78 10.263L16 14.484l4.22-4.221a1 1 0 011.415 0l.102.102a1 1 0 010 1.414L17.516 16l4.221 4.22a1 1 0 010 1.415l-.102.102a1 1 0 01-1.414 0L16 17.516l-4.22 4.221a1 1 0 01-1.415 0l-.102-.102a1 1 0 010-1.414L14.484 16l-4.221-4.22a1 1 0 010-1.415l.102-.102a1 1 0 011.414 0z" fill="#FFF"></path></g></svg><br><br>

              </div>
              <div class="col-lg-6 col-12 mt-2">
                <label>Status 10</label><br>
                <input type="radio" name="status10" value="1" @if ($header->status10==1) checked @endif> &nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg><br><br>
                <input type="radio" name="status10" value="0" @if ($header->status10==0) checked @endif>&nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#F1A0A0" cx="16" cy="16" r="16"></circle><path d="M11.78 10.263L16 14.484l4.22-4.221a1 1 0 011.415 0l.102.102a1 1 0 010 1.414L17.516 16l4.221 4.22a1 1 0 010 1.415l-.102.102a1 1 0 01-1.414 0L16 17.516l-4.22 4.221a1 1 0 01-1.415 0l-.102-.102a1 1 0 010-1.414L14.484 16l-4.221-4.22a1 1 0 010-1.415l.102-.102a1 1 0 011.414 0z" fill="#FFF"></path></g></svg><br><br>

              </div>
              <div class="col-lg-6 col-12 mt-2">
                <label>Status 11</label><br>
                <input type="radio" name="status11" value="1" @if ($header->status11==1) checked @endif> &nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg><br><br>
                <input type="radio" name="status11" value="0" @if ($header->status11==0) checked @endif>&nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#F1A0A0" cx="16" cy="16" r="16"></circle><path d="M11.78 10.263L16 14.484l4.22-4.221a1 1 0 011.415 0l.102.102a1 1 0 010 1.414L17.516 16l4.221 4.22a1 1 0 010 1.415l-.102.102a1 1 0 01-1.414 0L16 17.516l-4.22 4.221a1 1 0 01-1.415 0l-.102-.102a1 1 0 010-1.414L14.484 16l-4.221-4.22a1 1 0 010-1.415l.102-.102a1 1 0 011.414 0z" fill="#FFF"></path></g></svg><br><br>

              </div>
              <div class="col-lg-6 col-12 mt-2">
                <label>Status 12</label><br>
                <input type="radio" name="status12" value="1" @if ($header->status12==1) checked @endif> &nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg><br><br>
                <input type="radio" name="status12" value="0" @if ($header->status12==0) checked @endif>&nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#F1A0A0" cx="16" cy="16" r="16"></circle><path d="M11.78 10.263L16 14.484l4.22-4.221a1 1 0 011.415 0l.102.102a1 1 0 010 1.414L17.516 16l4.221 4.22a1 1 0 010 1.415l-.102.102a1 1 0 01-1.414 0L16 17.516l-4.22 4.221a1 1 0 01-1.415 0l-.102-.102a1 1 0 010-1.414L14.484 16l-4.221-4.22a1 1 0 010-1.415l.102-.102a1 1 0 011.414 0z" fill="#FFF"></path></g></svg><br><br>

              </div>



              <div class="col-lg-6 col-12 mt-2">
                <label>Status 13</label><br>
                <input type="radio" name="status13" value="1" @if ($header->status13==1) checked @endif> &nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg><br><br>
                <input type="radio" name="status13" value="0" @if ($header->status13==0) checked @endif>&nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#F1A0A0" cx="16" cy="16" r="16"></circle><path d="M11.78 10.263L16 14.484l4.22-4.221a1 1 0 011.415 0l.102.102a1 1 0 010 1.414L17.516 16l4.221 4.22a1 1 0 010 1.415l-.102.102a1 1 0 01-1.414 0L16 17.516l-4.22 4.221a1 1 0 01-1.415 0l-.102-.102a1 1 0 010-1.414L14.484 16l-4.221-4.22a1 1 0 010-1.415l.102-.102a1 1 0 011.414 0z" fill="#FFF"></path></g></svg><br><br>

              </div>
              <div class="col-lg-6 col-12 mt-2">
                <label>Status 14</label><br>
                <input type="radio" name="status14" value="1" @if ($header->status14==1) checked @endif> &nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg><br><br>
                <input type="radio" name="status14" value="0" @if ($header->status14==0) checked @endif>&nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#F1A0A0" cx="16" cy="16" r="16"></circle><path d="M11.78 10.263L16 14.484l4.22-4.221a1 1 0 011.415 0l.102.102a1 1 0 010 1.414L17.516 16l4.221 4.22a1 1 0 010 1.415l-.102.102a1 1 0 01-1.414 0L16 17.516l-4.22 4.221a1 1 0 01-1.415 0l-.102-.102a1 1 0 010-1.414L14.484 16l-4.221-4.22a1 1 0 010-1.415l.102-.102a1 1 0 011.414 0z" fill="#FFF"></path></g></svg><br><br>

              </div>
              <div class="col-lg-6 col-12 mt-2">
                <label>Status 15</label><br>
                <input type="radio" name="status15" value="1" @if ($header->status15==1) checked @endif> &nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg><br><br>
                <input type="radio" name="status15" value="0" @if ($header->status15==0) checked @endif>&nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#F1A0A0" cx="16" cy="16" r="16"></circle><path d="M11.78 10.263L16 14.484l4.22-4.221a1 1 0 011.415 0l.102.102a1 1 0 010 1.414L17.516 16l4.221 4.22a1 1 0 010 1.415l-.102.102a1 1 0 01-1.414 0L16 17.516l-4.22 4.221a1 1 0 01-1.415 0l-.102-.102a1 1 0 010-1.414L14.484 16l-4.221-4.22a1 1 0 010-1.415l.102-.102a1 1 0 011.414 0z" fill="#FFF"></path></g></svg><br><br>

              </div>
              <div class="col-lg-6 col-12 mt-2">
                <label>Status 16</label><br>
                <input type="radio" name="status16" value="1" @if ($header->status16==1) checked @endif> &nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M10.328 15.84a.784.784 0 00-1.1 0 .763.763 0 000 1.089l3.889 3.846c.303.3.796.3 1.1 0l8.555-8.462a.763.763 0 000-1.088.784.784 0 00-1.1 0l-8.005 7.918-3.34-3.302z" id="circle-status-check_inline_svg__a"></path></defs><g fill="none" fill-rule="evenodd"><circle fill="#97E0C7" cx="16" cy="16" r="16"></circle><use stroke="#FFF" fill="#FFF" fill-rule="nonzero" xlink:href="#circle-status-check_inline_svg__a"></use></g></svg><br><br>
                <input type="radio" name="status16" value="0" @if ($header->status16==0) checked @endif>&nbsp; <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><circle fill="#F1A0A0" cx="16" cy="16" r="16"></circle><path d="M11.78 10.263L16 14.484l4.22-4.221a1 1 0 011.415 0l.102.102a1 1 0 010 1.414L17.516 16l4.221 4.22a1 1 0 010 1.415l-.102.102a1 1 0 01-1.414 0L16 17.516l-4.22 4.221a1 1 0 01-1.415 0l-.102-.102a1 1 0 010-1.414L14.484 16l-4.221-4.22a1 1 0 010-1.415l.102-.102a1 1 0 011.414 0z" fill="#FFF"></path></g></svg><br><br>

              </div>




               <div class="col-lg-12 col-12 mt-2">
              <label>Heading 1</label>

              <input name="heading1" value="{{$header->heading1}}" class="form-control">
            </div>
            <div class="col-lg-12 col-12 mt-2">
                <label>Detail1</label>
<textarea name="detail1" id="" class="form-control" rows="5">{{$header->detail1}}</textarea>
              </div>

              <div class="col-lg-12 col-12 mt-2">
                <label>Heading 2</label>

                <input name="heading2" value="{{$header->heading2}}" class="form-control">
              </div>
              <div class="col-lg-12 col-12 mt-2">
                  <label>Detail2</label>
  <textarea name="detail2" id="" class="form-control" rows="5">{{$header->detail2}}</textarea>
                </div>


                <div class="col-lg-12 col-12 mt-2">
                    <label>Heading 3</label>

                    <input name="heading3" value="{{$header->heading3}}" class="form-control">
                  </div>
                  <div class="col-lg-12 col-12 mt-2">
                      <label>Detail3</label>
      <textarea name="detail3" id="" class="form-control" rows="5">{{$header->detail3}}</textarea>
                    </div>

                    <div class="col-lg-12 col-12 mt-2">
                        <label>Heading 4</label>

                        <input name="heading4" value="{{$header->heading4}}" class="form-control">
                      </div>
                      <div class="col-lg-12 col-12 mt-2">
                          <label>Detail4</label>
          <textarea name="detail4" id="" class="form-control" rows="5">{{$header->detail4}}</textarea>
                        </div>

                        <div class="col-lg-12 col-12 mt-2">
                            <label>Heading 5</label>

                            <input name="heading5" value="{{$header->heading5}}" class="form-control">
                          </div>
                          <div class="col-lg-12 col-12 mt-2">
                              <label>Detail5</label>
              <textarea name="detail5" id="" class="form-control" rows="5">{{$header->detail5}}</textarea>
                            </div>

                            <div class="col-lg-12 col-12 mt-2">
                                <label>Heading 6</label>

                                <input name="heading6" value="{{$header->heading6}}" class="form-control">
                              </div>
                              <div class="col-lg-12 col-12 mt-2">
                                  <label>Detail6</label>
                  <textarea name="detail6" id="" class="form-control" rows="5">{{$header->detail6}}</textarea>
                                </div>

                                <div class="col-lg-12 col-12 mt-2">
                                    <label>Heading 7</label>

                                    <input name="heading7" value="{{$header->heading7}}" class="form-control">
                                  </div>
                                  <div class="col-lg-12 col-12 mt-2">
                                      <label>Detail7</label>
                      <textarea name="detail7" id="" class="form-control" rows="5">{{$header->detail7}}</textarea>
                                    </div>


                                    <div class="col-lg-12 col-12 mt-2">
                                        <label>Heading 8</label>

                                        <input name="heading8" value="{{$header->heading8}}" class="form-control">
                                      </div>
                                      <div class="col-lg-12 col-12 mt-2">
                                          <label>Detail8</label>
                          <textarea name="detail8" id="" class="form-control" rows="5">{{$header->detail8}}</textarea>
                                        </div>


                                        <div class="col-lg-12 col-12 mt-2">
                                            <label>Heading 9</label>

                                            <input name="heading9" value="{{$header->heading9}}" class="form-control">
                                          </div>
                                          <div class="col-lg-12 col-12 mt-2">
                                              <label>Detail9</label>
                              <textarea name="detail9" id="" class="form-control" rows="5">{{$header->detail9}}</textarea>
                                            </div>

                                            <div class="col-lg-12 col-12 mt-2">
                                                <label>Heading 10</label>

                                                <input name="heading10" value="{{$header->heading10}}" class="form-control">
                                              </div>
                                              <div class="col-lg-12 col-12 mt-2">
                                                  <label>Detail10</label>
                                  <textarea name="detail11" id="" class="form-control" rows="5">{{$header->detail10}}</textarea>
                                                </div>

                                                <div class="col-lg-12 col-12 mt-2">
                                                    <label>Heading 11</label>

                                                    <input name="heading11" value="{{$header->heading11}}" class="form-control">
                                                  </div>
                                                  <div class="col-lg-12 col-12 mt-2">
                                                      <label>Detail11</label>
                                      <textarea name="detail11" id="" class="form-control" rows="5">{{$header->detail11}}</textarea>
                                                    </div>


                                                    <div class="col-lg-12 col-12 mt-2">
                                                        <label>Heading 12</label>

                                                        <input name="heading12" value="{{$header->heading12}}" class="form-control">
                                                      </div>
                                                      <div class="col-lg-12 col-12 mt-2">
                                                          <label>Detail12</label>
                                          <textarea name="detail12" id="" class="form-control" rows="5">{{$header->detail12}}</textarea>
                                                        </div>




                                                        <div class="col-lg-12 col-12 mt-2">
                                                            <label>Heading 13</label>

                                                            <input name="heading13" value="{{$header->heading13}}" class="form-control">
                                                          </div>
                                                          <div class="col-lg-12 col-12 mt-2">
                                                              <label>Detail13</label>
                                              <textarea name="detail13" id="" class="form-control" rows="5">{{$header->detail13}}</textarea>
                                                            </div>

                                                            <div class="col-lg-12 col-12 mt-2">
                                                                <label>Heading 14</label>

                                                                <input name="heading14" value="{{$header->heading14}}" class="form-control">
                                                              </div>
                                                              <div class="col-lg-12 col-12 mt-2">
                                                                  <label>Detail14</label>
                                                  <textarea name="detail14" id="" class="form-control" rows="5">{{$header->detail14}}</textarea>
                                                                </div>

                                                                <div class="col-lg-12 col-12 mt-2">
                                                                    <label>Heading 15</label>

                                                                    <input name="heading15" value="{{$header->heading15}}" class="form-control">
                                                                  </div>
                                                                  <div class="col-lg-12 col-12 mt-2">
                                                                      <label>Detail15</label>
                                                      <textarea name="detail15" id="" class="form-control" rows="5">{{$header->detail15}}</textarea>
                                                                    </div>


                                                                    <div class="col-lg-12 col-12 mt-2">
                                                                        <label>Heading 16</label>

                                                                        <input name="heading16" value="{{$header->heading16}}" class="form-control">
                                                                      </div>
                                                                      <div class="col-lg-12 col-12 mt-2">
                                                                          <label>Detail16</label>
                                                          <textarea name="detail16" id="" class="form-control" rows="5">{{$header->detail16}}</textarea>
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
