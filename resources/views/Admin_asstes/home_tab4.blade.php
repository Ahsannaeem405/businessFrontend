@extends('Admin_asstes.layouts.main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">


@section('content')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<form id="btn_sub" action="{{url('admin/home_tab4_save')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
    @if (isset($data))
	<input type="hidden" name="id" value="{{$data->id}}">
    <input type="text" class="form-control mb-3" id="name" value="{{$data->name}}" name="name" placeholder="Tab Heading">
    @else
    <input type="text" class="form-control mb-3" id="name"  name="name" placeholder="Tab Heading">

    @endif


    <label for="inputAddress"><b><h1>Section1</b></h1></label>
	<div class="text1" contenteditable="true">
		@if(isset($data->section1))
        {!! $data->section1 !!}

	    @else
        <div class="ad_tabber_contents_item widget_1613735646530_4_1 last-item" data-id="widget_1613735646530_4" data-scrollid="widget_1613735646530_4">





            <div class="ad_tabber_contents_item_rich_text" style="margin-top: 24px; margin-bottom: 0px;">
                <h3 style="margin-bottom: 24px;">The Nonprofit Corporation</h3>
                <p style="margin-bottom: 32px;">A <a href="what-is-non-profit-corporation/index.html">Nonprofit Corporation</a> is a type of corporation that donates any revenues generated to achieve a specific
                    goal that is of public benefit. Nonprofit corporations are allowed to create profits, however those profits must be used to preserve the existence and expansion
                    of the corporation.</p>
                <p style="margin-bottom: 48px;">In the United States, a nonprofit corporation is formed by filing articles of incorporation in the state in which it will operate. Incorporating the nonprofit creates
                    a legal entity and enables the organization to be treated as a corporation by law, granting it the same rights and privileges afforded to for-profit corporations.</p>
                <h3 style="margin-bottom: 24px;">How Taxes Work In A Nonprofit</h3>
                <p style="margin-bottom: 24px;">Unlike the the Limited Liability Company and the S Corporation, a corporation is required to file a corporate tax return and pay corporation taxes on any profits.
                    When those taxes are paid to shareholders as dividends, they will also be subjected to taxation on that individual’s tax return. This is known as “double taxation.”</p>
                <table class="taxes-nonprofit-table" style="width: 100%;" data-table="three-col">
                    <tbody>
                        <tr>
                            <td>
                                <p style="margin: 0;">Fedaral tax</p>
                            </td>
                            <td>
                                <hr>
                            </td>
                            <td><img alt="Cross Icon" src="hubfs/Incfile_February_2021/images/close_x.svg"></td>
                        </tr>
                        <tr>
                            <td>
                                <p style="margin: 0;">Sales tax</p>
                            </td>
                            <td>
                                <hr>
                            </td>
                            <td><img alt="Cross Icon" src="hubfs/Incfile_February_2021/images/close_x.svg"></td>
                        </tr>
                        <tr>
                            <td>
                                <p style="margin: 0;">Property tax</p>
                            </td>
                            <td>
                                <hr>
                            </td>
                            <td><img alt="Cross Icon" src="hubfs/Incfile_February_2021/images/close_x.svg"></td>
                        </tr>
                        <tr>
                            <td>
                                <p style="margin: 0;">Payroll tax</p>
                            </td>
                            <td><img alt="Check" src="hubfs/Incfile_February_2021/images/fill_checklist.svg"></td>
                            <td>
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="margin: 0;">Taxes on income unrelated to the main purpose</p>
                            </td>
                            <td><img alt="Check" src="hubfs/Incfile_February_2021/images/fill_checklist.svg"></td>
                            <td>
                                <hr>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>




        </div>

	    @endif


	</div>
	<textarea class="section1  d-none" name="section1"></textarea>
</div>


<button type="button" class="btn btn-primary">Update</button>
<button type="submit" class="btn btn-primary  d-none">Add Banner</button>
</form>

<script>
   $(document).ready(function(){

	    $(".btn").click(function(){
	      var txt1=$(".text1").html();
	      var txt2=$(".text2").html();
	      $(".section2").val(txt2);
	      $(".section1").val(txt1);
	      $("#btn_sub").submit();


	   });
});
</script>
@endsection
