

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<form id="btn_sub" action="{{url('admin/state_information_save')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
	<input type="hidden" name="id" value="{{$id}}">
    <label for="inputAddress"><b><h1>Section1</b></h1></label>
	<div class="text1" contenteditable="true">
		@if($k==0)
        <div class="container">
            <div class="row p-2 pl-md-5 pr-md-5">
                <div class="col-12 text-center">
                    <h3>Learn more about incorporating in North Dakota</h3>
                </div>
                <div class="col-12 mt-3">
                    <h5>North Dakota Filing Time & Price</h5>
                </div>
                <div class="col-12">
                    <div class="row box">
                        <div class="col-md-4 col-6 mt-2 p-2 border-right">
                            <p class="text-dark">State Fee</p>
                        </div>
                        <div class="col-md-8 col-6 mt-2 p-2">
                            <p>$200</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-3">
                    <div class="row box">
                        <div class="col-md-4 col-6 mt-2 p-2 border-right">
                            <p class="text-dark">State Filing Time</p>
                        </div>
                        <div class="col-md-8 col-6 mt-2 p-2">
                            <p>3 Weeks</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-3">
                    <div class="row box">
                        <div class="col-md-4 col-6 mt-2 p-2 border-right">
                            <p class="text-dark">Expedited Filing Time</p>
                        </div>
                        <div class="col-md-8 col-6 mt-2 p-2">
                            <p>5 Business Days</p>
                        </div>
                    </div>
                </div>


            </div>

            <div class="row p-2 pl-md-5 pr-md-5">
                <div class="col-12 text-center">
                    <h3>North Dakota Compliance Requirements</h3>
                </div>
                <div class="col-12 mt-3">
                    <h5>Annual Report</h5>
                </div>
                <div class="col-12">
                    <div class="row box">
                        <div class="col-md-4 col-6 mt-2 p-2 border-right">
                            <p class="text-dark">Frequency: </p>
                        </div>
                        <div class="col-md-8 col-6 mt-2 p-2">
                            <p>Annually</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-3">
                    <div class="row box">
                        <div class="col-md-4 col-6 mt-2 p-2 border-right">
                            <p class="text-dark">Due Date : </p>
                        </div>
                        <div class="col-md-8 col-6 mt-2 p-2">
                            <p>August 1st</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-3">
                    <div class="row box">
                        <div class="col-md-4 col-6 mt-2 p-2 border-right">
                            <p class="text-dark">Filing Fee:</p>
                        </div>
                        <div class="col-md-8 col-6 mt-2 p-2">
                            <p>$25</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="container pl-md-5 pr-md-5">

            <div class="accordion">
                <div class="accordion-item">
                    <button id="accordion-button-1" type="button" aria-expanded="false">
                        <span class="accordion-title">Why is the moon sometimes out during the
                            day?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo
                            duis ut.
                            Ut tortor pretium viverra suspendisse potenti.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-2" type="button" aria-expanded="false">
                        <span class="accordion-title">Why is the sky blue?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo
                            duis ut.
                            Ut tortor pretium viverra suspendisse potenti.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-3" type="button" aria-expanded="false">
                        <span class="accordion-title">Will we ever discover aliens?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo
                            duis ut.
                            Ut tortor pretium viverra suspendisse potenti.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-4" type="button" aria-expanded="false">
                        <span class="accordion-title">How much does the Earth weigh?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo
                            duis ut.
                            Ut tortor pretium viverra suspendisse potenti.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-5" type="button" aria-expanded="false">
                        <span class="accordion-title">How do airplanes stay up?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor
                            incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo
                            duis ut.
                            Ut tortor pretium viverra suspendisse potenti.
                        </p>
                    </div>
                </div>
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
<script>
    const items = document.querySelectorAll('.accordion button');

    function toggleAccordion() {
        const itemToggle = this.getAttribute('aria-expanded');

        for (i = 0; i < items.length; i++) {
            items[i].setAttribute('aria-expanded', 'false');
        }

        if (itemToggle == 'false') {
            this.setAttribute('aria-expanded', 'true');
        }
    }

    items.forEach((item) => item.addEventListener('click', toggleAccordion));
</script>
