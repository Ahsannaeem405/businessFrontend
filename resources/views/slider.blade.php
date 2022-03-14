<div id="carouselExampleControls" class="carousel slide mb-5" data-ride="carousel">
    <div class="carousel-inner">
       {{-- <div class="carousel-item active">
          <img class="d-block w-100"
             src="{{asset('image/coin-wooden-table-blurred-nature.jpg')}}"
             alt="First slide">
             <div class="header-text">
                 <div class="col-md-12 text-center">
                     <h2>
                         <span>Welcome to <strong>LOREM IPSUM</strong></span>
                     </h2>

                     <h5>
                         <span>"Risk-taking is the cornerstone of empires."</span>
                     </h5>

                     <div class="">
                         <a class="hs-button" href="#" target="_blank" rel="noopener">
                             <span>Get started</span>

                         </a></div>
                 </div>
             </div><!-- /header-text -->
       </div> --}}
@php
    $x=1;
@endphp
       @foreach ($banners as $banner)
       <div @if ($x==1)
       class="carousel-item active"
       @else
       class="carousel-item"
       @endif >
       @php
           $x++;
       @endphp
        <img class="d-block w-100"
           src="{{asset('Upload/header/'.$banner->image)}}"
           alt="Second slide">
           <div class="header-text">
               <div class="col-md-12 text-center">
                   <h2>
                       <span>{{$banner->heading}}</span>
                   </h2>

                   <h5>
                       <span>"{{$banner->sub_heading}}"</span>
                   </h5>

                   <div class="">
                       <a class="hs-button" href="{{$banner->button_link}}" target="_blank" rel="noopener">
                           <span>{{$banner->button_name}}</span>

                       </a></div>
               </div>
           </div><!-- /header-text -->
     </div>
       @endforeach

       {{-- <div class="carousel-item">
          <img class="d-block w-100"
             src="{{asset('image/digital-increasing-bar-graph-with-businessman-hand-overlay.jpg')}}"
             alt="Third slide">
             <div class="header-text">
                 <div class="col-md-12 text-center">
                     <h2>
                         <span>Welcome to <strong>LOREM IPSUM</strong></span>
                     </h2>

                     <h5>
                         <span>"Risk-taking is the cornerstone of empires."</span>
                     </h5>

                     <div class="">
                         <a class="hs-button" href="#" target="_blank" rel="noopener">
                             <span>Get started</span>

                         </a></div>
                 </div>
             </div><!-- /header-text -->
       </div>
       <div class="carousel-item">
        <img class="d-block w-100"
           src="{{asset('image/house-investments-elements-assortment.jpg')}}"
           alt="Third slide">
           <div class="header-text">
               <div class="col-md-12 text-center">
                   <h2>
                       <span>Welcome to <strong>LOREM IPSUM</strong></span>
                   </h2>

                   <h5>
                       <span>"Risk-taking is the cornerstone of empires."</span>
                   </h5>

                   <div class="">
                       <a class="hs-button" href="#" target="_blank" rel="noopener">
                           <span>Get started</span>

                       </a></div>
               </div>
           </div><!-- /header-text -->
     </div> --}}
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
 </div>
