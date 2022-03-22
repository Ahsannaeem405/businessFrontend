<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<form id="btn_sub" action="{{url('admin/llcstate_tab5_save')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
	<input type="hidden" name="id" value="{{$id}}">
    @if ($data!=null)
    <input type="text" class="form-control mb-3" id="name" value="{{$data->name}}" name="name" placeholder="Tab Heading">
    @else
    <input type="text" class="form-control mb-3" id="name" value="" name="name" placeholder="Tab Heading">

    @endif

    <label for="inputAddress"><b><h1>Section1</b></h1></label>
	<div class="text1" contenteditable="true">
		@if($k==0)
	        <div class="ad_tabber_contents_item widget_1613735646530_5_1 last-item" data-id="widget_1613735646530_5" data-scrollid="widget_1613735646530_5">





             <div class="ad_tabber_contents_item_rich_text" style="margin-top: 24px; margin-bottom: 0px;">
                 <h3 style="margin-bottom: 24px;">A Note on Sole Proprietorships and Partnerships</h3>
                 <p style="margin-bottom: 32px;">Before closing, a word on sole-proprietorships and partnerships: although these may not be “formal” business entities, some people may choose to complete work as a
                     sole proprietor or partner. In these cases, there’s generally no separate business entity — the business and the proprietor (or partnership) are effectively one
                     and the same. This means all income, expenses and other financial matters would be reported on an individual’s personal tax return, and they’d pay tax accordingly.
                     It also means there’s no separation for areas like personal liability.</p>
                 <p style="margin-bottom: 0;">We always recommend setting up a formal business entity — it keeps everything neater, removes personal liability for your business, and may have several tax advantages.
                     Incorporate your business today using <a style="font-weight: 900;" href="https://orders.incfile.com/form-order-now.php" rel="noopener" target="_blank" targrt="_blank">Incfile's three easy steps to online business formation.</a></p>
             </div>




            </div>
	    @else
	    {!! $data->section1 !!}
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
