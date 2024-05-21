@extends('frontend.layouts.app') @section('content')
<!-- Content -->
<style>
  .aon-why-choose2-box {
    background: none;
    padding: 0px 10px 5px 10px;
  }

  .sf-contact-form .form-control {
    background-color: transparent;
    border-radius: 5px;
    border: 2px solid #c2c8d7;
    height: 50px;
  }
</style>
<div class="page-content">
  <section class="aon-why-choose2-area" style="background-image: url({{ asset('images/download.png') }}); background-repeat: no-repeat;">
    <div class="container">
      <div class="aon-why-choose2-box">
        <h2 class="pb-3 text-center">We recommend the following plans</h2>
        <div class="row">
          <!-- COLUMNS LEFT -->
          <div class="col-lg-4 col-md-12">
              <div class="sf-contact-form service_card_form card">
                <form class="" method="POST" action="{{ route('service-post') }}">
                  <div class="sf-con-form-title text-center">
                    <h4 class="m-b30">ONEASSIST EXTENDED WARRANTY SERVICE FOR LAPTOP</h4>
                  </div> @csrf 
                  <div class="row">
                    <div class="col-md-12 subscriptions">
                      <span>Extend</span>
                    </div>
                  </div>
                  <ul class="aon-why-choose-steps list-unstyled subscriptions_ul">
	                <!-- COLUMNS 1 -->
	                <li class="d-flex">
	                    <span><i class="fa-solid fa-check"></i> Pickup and Drop services for claim processing</span>
	                </li>
	                <!-- COLUMNS 2 -->
	                <li class="d-flex">
	                    <span><i class="fa-solid fa-check"></i> Extended warranty plans start at only ₹ 3/day*</span>
	                </li>
	                <!-- COLUMNS 3 -->
	                <li class="d-flex">
	                    <span><i class="fa-solid fa-check"></i> 100% best-in-class service. 0% hassle</span>
	                </li>
	              </ul>
                  <div class="sf-contact-submit-btn">
                    <button class="site-button" type="submit">Read More</button>
                  </div>
                </form>
              </div>
          </div>
           <div class="col-lg-4 col-md-12">
              <div class="sf-contact-form service_card_form card">
                <form class="" method="POST" action="{{ route('service-post') }}">
                  <div class="sf-con-form-title text-center">
                    <h4 class="m-b30">ONEASSIST 1YR EXTENDED WARRANTY SERVICE FOR LAPTOP</h4>
                  </div>
                   @csrf 
                   <div class="row">
                    <div class="col-md-12 subscriptions">
                      <span>₹ 1499</span>only/year
                    </div>
                  </div>
                   <ul class="aon-why-choose-steps list-unstyled subscriptions_ul">
	                <!-- COLUMNS 1 -->
	                <li class="d-flex">
	                    <span><i class="fa-solid fa-check"></i> Pickup and Drop services for claim processing</span>
	                </li>
	                <!-- COLUMNS 2 -->
	                <li class="d-flex">
	                    <span><i class="fa-solid fa-check"></i> Extended warranty plans start at only ₹ 3/day*</span>
	                </li>
	                <!-- COLUMNS 3 -->
	                <li class="d-flex">
	                    <span><i class="fa-solid fa-check"></i> 100% best-in-class service. 0% hassle</span>
	                </li>
	              </ul>
                  <div class="sf-contact-submit-btn">
                    <button class="site-button" type="submit">Buy Now</button>
                  </div>
                </form>
              </div>
          </div>
          <!-- COLUMNS RIGHT -->
          <div class="col-lg-4 col-md-12">
              <div class="sf-contact-form service_card_form card">
                <form class="" method="POST" action="{{ route('service-post') }}">
                  <div class="sf-con-form-title text-center">
                    <h4 class="m-b30">ONEASSIST 2YR EXTENDED WARRANTY SERVICE FOR LAPTOP</h4>
                  </div> 
                  @csrf 
                  <div class="row">
                    <div class="col-md-12 subscriptions">
                      <span>₹ 2299</span>only/year
                    </div>
                  </div>
                   <ul class="aon-why-choose-steps list-unstyled subscriptions_ul">
	                <!-- COLUMNS 1 -->
	                <li class="d-flex">
	                    <span><i class="fa-solid fa-check"></i> Pickup and Drop services for claim processing</span>
	                </li>
	                <!-- COLUMNS 2 -->
	                <li class="d-flex">
	                    <span><i class="fa-solid fa-check"></i> Extended warranty plans start at only ₹ 3/day*</span>
	                </li>
	                <!-- COLUMNS 3 -->
	                <li class="d-flex">
	                    <span><i class="fa-solid fa-check"></i> 100% best-in-class service. 0% hassle</span>
	                </li>
	              </ul>
                  <div class="sf-contact-submit-btn">
                    <button class="site-button" type="submit">Buy Now</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Content END--> @endsection