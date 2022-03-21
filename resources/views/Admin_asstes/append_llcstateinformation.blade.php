

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<form id="btn_sub" action="{{url('admin/llcstate_information_save')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
	<input type="hidden" name="id" value="{{$id}}">
    <label for="inputAddress"><b><h1>Section1</b></h1></label>
	<div class="text1" contenteditable="true">
		@if($k==0)

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
