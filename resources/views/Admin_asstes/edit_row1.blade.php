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
        <form action="{{url('admin/update_row1')}}" method="POST" enctype="multipart/form-data">
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
