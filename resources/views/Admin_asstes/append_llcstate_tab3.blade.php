<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<form id="btn_sub" action="{{url('admin/llcstate_tab3_save')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
	<input type="hidden" name="id" value="{{$id}}">
    <input type="text" class="form-control mb-3" id="name" value="{{$data->name}}" name="name" placeholder="Tab Heading">

    <label for="inputAddress"><b><h1>Section1</b></h1></label>
	<div class="text1" contenteditable="true">
		@if($k==0)
        <div class="ad_tabber_contents_item widget_1613735646530_3_1" data-id="widget_1613735646530_3" data-scrollid="widget_1613735646530_3">





            <div class="ad_tabber_contents_item_rich_text" style="margin-top: 24px; margin-bottom: 0px;">
                <h3 style="margin-bottom: 24px;">The C Corporation</h3>
                <p style="margin-bottom: 40px;">A <a style="font-weight: 900;" href="what-is-c-corporation/index.html">C Corp, also known as a C Corporation</a>, is a type of business entity that is formed and regulated
                    on a state level. It is created by filing “Articles of Incorporation” with the secretary of state within the state of incorporation. It is the most formal type
                    of company and a corporate structure. The policies and cost of creating a C Corp vary from state to state. Factors affecting whether you would want to create a
                    C Corp include:</p>
            </div>




        </div>





        <div class="ad_tabber_contents_item widget_1613735646530_3_2" data-id="widget_1613735646530_3">




            <div class="ad_tabber_contents_item_boxed_content">
                <div class="boxed-content-container">

                    <div class="boxed-color-box">

                        <ul>
                            <li style="margin-bottom: 16px;">A C Corp has limited liability, so the investors and owners of a C Corp are not generally liable for business debts and other liabilities.</li>
                            <li style="margin-bottom: 16px;">Ownership of a C Corp is determined by who owns stock in the company.</li>
                            <li style="margin-bottom: 16px;">A C Corporation must issue stock.</li>
                            <li style="margin-bottom: 16px;">A C Corporation must hold an Annual General Meeting.</li>
                            <li style="margin-bottom: 16px;">The ownership of a C Corp can be fluid and transferred, depending on who holds stock at a particular moment in time.</li>
                            <li style="margin-bottom: 16px;">Stocks in a C Corp can be bought and sold on a public stock market if the C Corp holds an “Initial Public Offering (IPO)” where it makes it stocks available
                                to the public.</li>
                            <li style="margin-bottom: 16px;">A C Corp is required to have a board of directors.</li>
                            <li style="margin-bottom: 16px;">A C Corp can raise more finances by issuing stock.</li>
                            <li style="margin-bottom: 16px;">A C Corp is required to meet numerous rules and regulations.</li>
                            <li>Money earned by a C Corp may be subject to “double taxation.”</li>
                        </ul>

                    </div>
                </div>

            </div>



        </div>





        <div class="ad_tabber_contents_item widget_1613735646530_3_3 last-item" data-id="widget_1613735646530_3">





            <div class="ad_tabber_contents_item_rich_text" style="margin-top: 0px; margin-bottom: 0px;">
                <h3 style="margin-bottom: 24px;">How Taxes Work In A C Corp</h3>
                <p style="margin-bottom: 48px;">Unlike the the Limited Liability Company and the S Corporation, a corporation is required to file a corporate tax return and pay corporation taxes on any profits.
                    When those taxes are paid to shareholders as dividends, they will also be subjected to taxation on that individual’s tax return. This is known as “double taxation.”</p>
                <h3 style="margin-bottom: 24px;">C-Corporation Tax Rates</h3>
                <p style="margin-bottom: 24px;">C-Corporation tax rates are as follows:</p>
                <table class="taxes-c-corp-table" style="width: 100%;" data-table="two-col">
                    <tbody>
                        <tr>
                            <td>
                                <p style="margin: 0;">Profit up to $50,000</p>
                            </td>
                            <td>
                                <p style="margin: 0;"><mark>15%</mark></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="margin: 0;">$50,000 - $75,000</p>
                            </td>
                            <td>
                                <p style="margin: 0;"><mark>25%</mark></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="margin: 0;">$75,000 - $100,000</p>
                            </td>
                            <td>
                                <p style="margin: 0;"><mark>34%</mark></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="margin: 0;">$100,000 - $335,000</p>
                            </td>
                            <td>
                                <p style="margin: 0;"><mark>39%</mark></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="margin: 0;">$335,000 - $10,000,000</p>
                            </td>
                            <td>
                                <p style="margin: 0;"><mark>34%</mark></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="margin: 0;">$10,000,000 - $15,000,000</p>
                            </td>
                            <td>
                                <p style="margin: 0;"><mark>35%</mark></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="margin: 0;">$15,000,000 - $18,333,333</p>
                            </td>
                            <td>
                                <p style="margin: 0;"><mark>38%</mark></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="margin: 0;">More than $18,333,333 — 35%</p>
                            </td>
                            <td>
                                <p style="margin: 0;"><mark>35%</mark></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
