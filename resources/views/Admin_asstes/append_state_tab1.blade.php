<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<form id="btn_sub" action="{{url('admin/state_tab1_save')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
	<input type="hidden" name="id" value="{{$id}}">
    <input type="text" class="form-control mb-3" id="name" value="{{$data->name}}" name="name" placeholder="Tab Heading">
    <label for="inputAddress"><b><h1>Section1</b></h1></label>
	<div class="text1" contenteditable="true">

		@if($k==0)
	        <div class="ad_tabber_contents_item widget_1613735646530_1_1 active" data-id="widget_1613735646530_1" data-scrollid="widget_1613735646530_1">





	            <div class="ad_tabber_contents_item_rich_text" style="margin-top: 24px; margin-bottom: 32px;">
	                <h3 style="margin-bottom: 24px;">Different Types of Corporate Structures</h3>
	                <p style="margin-bottom: 48px;">You’ll learn about the four main types of business entity below — LLCs, S Corporations, C Corporations and nonprofits, so you can decide which will best meet your
	                    needs.
	                </p>
	                <h3 style="margin-bottom: 24px;">Limited Liability Company (LLC)</h3>
	                <p style="margin-bottom: 40px;">The LLC is one of the most popular types of business entities. It’s ideally suited for smaller organizations and startups, for several reasons:</p>
	            </div>




	        </div>






	        <div class="ad_tabber_contents_item widget_1613735646530_1_2 active" data-id="widget_1613735646530_1">




	            <div class="ad_tabber_contents_item_boxed_content">
	                <div class="boxed-content-container">

	                    <div class="boxed-color-box">

	                        <ul>
	                            <li style="margin-bottom: 16px;">LLCs are fast and easy to setup.</li>
	                            <li style="margin-bottom: 16px;">LLCs have a simple business structure.</li>
	                            <li style="margin-bottom: 16px;">Forming an LLC is generally inexpensive.</li>
	                            <li style="margin-bottom: 16px;">Running an LLC is easier than running a C Corp or S Corp.</li>
	                            <li style="margin-bottom: 16px;">There are fewer rules, regulations and legal compliance issues for LLCs.</li>
	                            <li>LLCs are formed and regulated on a state level.</li>
	                        </ul>

	                    </div>
	                </div>

	            </div>



	        </div>





	        <div class="ad_tabber_contents_item widget_1613735646530_1_3 active" data-id="widget_1613735646530_1">





	            <div class="ad_tabber_contents_item_rich_text" style="margin-top: 0px; margin-bottom: 0px;">
	                <p style="margin-bottom: 48px;">The cost and policies governing an LLC do vary from state to state. Check out our <a style="font-weight: 900;" href="llc-state-information.html" rel="noopener">LLC State Information</a>                                                                                            resource for additional info on your state.</p>
	                <h3 style="margin-bottom: 24px;">LLC Limited Liability Protection</h3>
	            </div>




	        </div>
	    @else
	    {!! $data->section1 !!}
	    @endif


	</div>
	<textarea class="section1  d-none" name="section1"></textarea>
</div>
<div class="form-group">
    <label for="inputAddress"><b><h1>Video</h1></b></label>
    <input type="text" class="form-control" name="video" id="inputAddress" placeholder="1234 Main St">
</div>
<div class="form-group">
    <label for="inputAddress"><b><h1>Section2</h1></b></label>
	<div class="text2" contenteditable="true">
		@if($k==0)
		    <div class="ad_tabber_contents_item widget_1613735646530_1_5 active" data-id="widget_1613735646530_1">





		        <div class="ad_tabber_contents_item_rich_text" style="margin-top: 42px; margin-bottom: 0px;">
		            <p style="margin-bottom: 48px;">Like C Corps and S Corps, LLCs provide their owners with limited liability protection. This means the business assets are owned separately by the LLC, not by the owners.
		                Any liability the business has (e.g. monies owed, equipment, depreciation, lawsuits, etc.) are purely the liability of the business, and do not (generally) have
		                any impact on the individual owner’s personal assets.</p>
		            <h3 style="margin-bottom: 24px;">LLC Taxes and Tax Returns</h3>
		            <p style="margin-bottom: 72px;">An LLC does not pay federal income tax itself. Instead, any net profit or loss is “passed through” to the personal tax returns of the owners or members. It is then
		                taxed as personal income by the IRS. In this sense, taxation of an LLC is very similar to taxation of a sole-proprietorship or partnership.</p>
		            <h3 style="margin-bottom: 24px;">Types of Tax an LLC is Liable For</h3>
		            <p style="margin-bottom: 40px;">It’s important to note that an LLC will be liable for certain types of tax, for example:</p>
		        </div>




		    </div>





		    <div class="ad_tabber_contents_item widget_1613735646530_1_6 active last-item" data-id="widget_1613735646530_1">




		        <div class="ad_tabber_contents_item_boxed_content">
		            <div class="boxed-content-container">

		                <div class="boxed-color-box">

		                    <ul>
		                        <li style="margin-bottom: 16px;">Payroll tax on salaries paid to employees (but not to members or owners — they will pay self-employment tax on their personal tax returns).</li>
		                        <li style="margin-bottom: 16px;">Sales tax on goods purchased by and for the business.</li>
		                        <li style="margin-bottom: 16px;">Property taxes on owned business property.</li>
		                        <li style="margin-bottom: 16px;">In certain cases, other types of tax or tariffs may need to be paid by an LLC.</li>
		                        <li>Generally, these taxes can be subtracted as business expenses and do not flow through to individual owner’s tax returns.</li>
		                    </ul>

		                </div>
		            </div>

		        </div>



		    </div>
	    @else
	    {!! $data->section2 !!}
	    @endif
	</div>
	<textarea class="section2  d-none" name="section2"></textarea>
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
