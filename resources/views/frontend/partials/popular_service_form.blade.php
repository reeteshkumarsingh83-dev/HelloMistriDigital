@extends('frontend.layouts.app') @section('content')
<!-- Content -->
<style>
	.aon-why-choose2-box{
       background: none;
       padding: 0px 52px 27px 52px;
	}
	.sf-contact-form .form-control{
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
        <div class="row">
          <!-- COLUMNS LEFT -->
          <div class="col-lg-7 col-md-12">
            <div class="aon-why-choose-info">
              <!--Title Section Start-->
              <div class="section-head">
                <h2 class="sf-title">Best extended warranty plans for your Category Service Name</h2>
              </div>
              <!--Title Section Start End-->
              <ul class="aon-why-choose-steps list-unstyled">
                <!-- COLUMNS 1 -->
                <li class="d-flex">
                  <div class="aon-w-choose-right">
                    <h4 class="aon-title"><i class="fa-solid fa-circle-check"></i> Protection from malfunctions and defects</h4>
                  </div>
                </li>
                <!-- COLUMNS 2 -->
                <li class="d-flex">
                  <div class="aon-w-choose-right">
                    <h4 class="aon-title"><i class="fa-solid fa-circle-check"></i> Extended warranty plans start at only ₹ 3/day*</h4>
                  </div>
                </li>
                <!-- COLUMNS 3 -->
                <li class="d-flex">
                  <div class="aon-w-choose-right">
                    <h4 class="aon-title"><i class="fa-solid fa-circle-check"></i> 100% best-in-class service. 0% hassle</h4>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- COLUMNS RIGHT -->
          <div class="col-lg-5 col-md-12">
             <div class="sf-contact-form-wrap">
          <!--Contact Information-->
          <div class="sf-contact-form service_card_form card">
            <form class="" method="POST" action="{{ route('service-post') }}">
            	<div class="sf-con-form-title text-center">
	              <h4 class="m-b30">Find plans for your device</h4>
	            </div>
            	@csrf
              <div class="row">
                <!-- COLUMNS 1 -->
                <div class="col-md-12">
                  <div class="form-group">
                  	<label class=""> Device Brand</label>
                    <input type="text" name="brand" placeholder="Select Brand" class="form-control">
                  </div>
                </div>
                <!-- COLUMNS 2 -->
                <div class="col-md-12">
                  <div class="form-group">
                  	<label class=""> Purchase date (DD/MM/YYYY)</label>
                    <input type="date" name="purchase_date" placeholder="Select the date of purchase" class="form-control">
                  </div>
                </div>
                <!-- COLUMNS 3 -->
                <div class="col-md-12">
                  <div class="form-group">
                  	<label class=""> How much did you purchase it for?</label>
                    <input type="number" name="purchase_amount" placeholder="Enter the amount" class="form-control">
                  </div>
                </div>
              </div>
              <div class="sf-contact-submit-btn">
                <button class="site-button" type="submit">Submit</button>
              </div>
            </form>
          </div>
          <!--Contact Information End-->
        </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="aon-why-choose2-area">
    <div class="container">
      <div class="aon-why-choose2-box">
        <div class="row">
          <!-- COLUMNS LEFT -->
          <div class="col-lg-6 col-md-12">
            <div class="aon-why-choose-info">
              <!--Title Section Start-->
              <div class="section-head">
                <h2 class="sf-title">OneAssist Service Promise</h2>
              </div>
              <!--Title Section Start End-->
              <ul class="aon-why-choose-steps list-unstyled">
                <!-- COLUMNS 1 -->
                <li class="d-flex">
                  <div class="aon-w-choose-left aon-icon-effect">
                    <div class="aon-w-choose-icon">
                      <i class="aon-icon">
                        <img src="{{ asset('images/whychoose/1.png')}}" alt="">
                      </i>
                    </div>
                  </div>
                  <div class="aon-w-choose-right">
                    <h4 class="aon-title pt-4">100% Authorized service centres</h4>
                  </div>
                </li>
                <!-- COLUMNS 2 -->
                <li class="d-flex">
                  <div class="aon-w-choose-left aon-icon-effect">
                    <div class="aon-w-choose-icon">
                      <i class="aon-icon">
                        <img src="{{ asset('images/whychoose/2.png') }}" alt="">
                      </i>
                    </div>
                  </div>
                  <div class="aon-w-choose-right">
                    <h4 class="aon-title pt-4">Genuine spare parts only</h4>
                  </div>
                </li>
                <!-- COLUMNS 3 -->
                <li class="d-flex">
                  <div class="aon-w-choose-left aon-icon-effect">
                    <div class="aon-w-choose-icon">
                      <i class="aon-icon">
                        <img src="{{ asset('images/whychoose/3.png') }}" alt="">
                      </i>
                    </div>
                  </div>
                  <div class="aon-w-choose-right">
                    <h4 class="aon-title pt-4">Build your online reputation</h4>
                  </div>
                </li>
                <li class="d-flex">
                  <div class="aon-w-choose-left aon-icon-effect">
                    <div class="aon-w-choose-icon">
                      <i class="aon-icon">
                        <img src="{{ asset('images/whychoose/3.png') }}" alt="">
                      </i>
                    </div>
                  </div>
                  <div class="aon-w-choose-right">
                    <h4 class="aon-title pt-4">24*7 customer care</h4>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- COLUMNS RIGHT -->
          <div class="col-lg-6 col-md-12">
            <img src="{{ asset('images/banner2/_laptop-image.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Statics -->
  <div class="site-bg-primary aon-statics-area">
    <div class="container">
      <div class="section-content">
        <div class="row d-flex flex-wrap align-items-center a-b-none">
          <div class="col-lg-6 col-md-12">
            <!--Title Section Start-->
            <div class="section-head">
              <span class="aon-sub-title">Statics</span>
              <h2 class="sf-title">Trusted by thousands of people all over the world</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
            </div>
            <!--Title Section End-->
          </div>
          <div class="col-lg-6 col-md-12">
            <!--Statics-blocks Section Start-->
            <div class="aon-statics-blocks">
              <div class="row">
                <!--Block 1-->
                <div class="col-lg-6 m-b30 aon-static-position-1">
                  <div class="media-bg-animate media-statics aon-icon-effect">
                    <div class="aon-static-section aon-t-blue">
                      <div class="aon-company-static-num counter aon-icon">36</div>
                      <div class="aon-company-static-name">Providers</div>
                    </div>
                  </div>
                  <div class="media-bg-animate media-statics aon-icon-effect">
                    <div class="aon-static-section aon-t-yellow">
                      <div class="aon-company-static-num counter aon-icon">108</div>
                      <div class="aon-company-static-name">Jobs</div>
                    </div>
                  </div>
                </div>
                <!--Block 2-->
                <div class="col-lg-6 m-b30 aon-static-position-2">
                  <div class="media-bg-animate media-statics aon-icon-effect">
                    <div class="aon-static-section aon-t-green">
                      <div class="aon-company-static-num counter aon-icon">89</div>
                      <div class="aon-company-static-name">Customer</div>
                    </div>
                  </div>
                  <div class="media-bg-animate media-statics aon-icon-effect">
                    <div class="aon-static-section aon-t-skyblue">
                      <div class="aon-company-static-num counter aon-icon">59</div>
                      <div class="aon-company-static-name">Categories</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Statics-blocks Section End-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Provider END -->
</div>
<!-- Content END--> @endsection