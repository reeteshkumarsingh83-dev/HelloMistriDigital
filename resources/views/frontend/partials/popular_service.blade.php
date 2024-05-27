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
  .best_service_plan{
    padding: 30px 18px 30px 18px;
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
                <h2 class="sf-title">{{ $services->name }} for {{ $category->name }}</h2>
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
            <form class="" method="POST" action="{{ route('web-get-service') }}">
            	<div class="sf-con-form-title text-center">
	              <h4 class="m-b30">Find plans for your device</h4>
	            </div>
            	@csrf
               <input type="hidden" name="service_id" value="{{ $services->id }}">
              <input type="hidden" name="category_id" value="{{ $category->id }}">
              <div class="row">
                <!-- COLUMNS 1 -->
                <div class="col-md-12">
                  <div class="form-group">
                  	<label class=""> Device Brand</label>
                    <select class="form-select form-control" aria-label="Default select example" name="brand">
                        <option value="0">--Select--</option>
                        @foreach($brands as $brand) 
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                      </select>
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
<!-- Content END--> @endsection