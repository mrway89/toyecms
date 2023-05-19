@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

<section class="wrap_section banner">
    <div id="carouseltoya" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/banner-01-min.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption desc_banner">
                    <h6>Welcome Green Consumer</h6>
                    <h1>Making <br><span>sustainable choices</span><br> should be easy</h1>
                    <div class="wrap_button">
                        <button class="btn-primary t-white">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouseltoya" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouseltoya" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</section>

<section class="wrap_section">
    <div class="bg_color01">
        <div class="row">
            <div class="col-12 col-md-7 left_section">
                 <div class="bg_section_01"></div>
            </div>
             <div class="col-12 col-md-5 right_section">
                 <h6>Why We Do What we Do</h6>
                 <h1>The future <br> of packaging<br>is here</h1>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                 <div class="sign">
                     <h2>Alisjahbana Haliman</h2>
                     <h5>Founder</h5>
                 </div>
                 <div class="wrap_button">
                     <a class="btn-primary t-black border-black">Get to know Us</a>
                 </div>
             </div>
         </div>
    </div>
    
</section>

<section class="wrap_section">
    <div class="bg_section_02">
        <div class="container">
            <div class="row text-center">
                <div class="mt-5">
                    <h6 class="t-yellow">Our Services</h6>
                    <h1 class="t-yellow">Your brand <br>on display.</h1>
                    <div class="wrap_button mt-4">
                        <a class="btn-primary t-yellow border-yellow" href="#">Take the journey</a>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
</section>

@endsection