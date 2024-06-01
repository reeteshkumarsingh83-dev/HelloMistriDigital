@extends('frontend.layouts.app') @section('content')
<!-- Content -->
<div class="page-content">
  <section class="aon-why-choose2-area" style="background-image: url({{ asset('images/download.png') }}); background-repeat: no-repeat;">
    <div class="container">
      <div class="aon-why-choose2-box">
        <div class="row">
          <!-- COLUMNS LEFT -->
          <div class="col-lg-7 col-md-12">
            <div class="sf-contact-form-wrap">
	          <!--Contact Information-->
	          <div class="sf-contact-form service_card_form card">
	            <form class="" method="POST" action="{{ route('payment-address-send') }}">
	            	<div class="sf-con-form-title">
		              <h4 class="m-b30">These details are needed to generate invoice.</h4>
		            </div>
	            	@csrf
	               <input type="hidden" name="service_id" value="">
	              <input type="hidden" name="category_id" value="">
	              <div class="row">
	                <!-- COLUMNS 1 -->
                    <div class="col-md-12">
	                  <div class="form-group">
	                  	<label class=""> Enter name (As per any Govt. ID) <span class="text-danger">*</spna></label>
	                    <input type="text" name="name" placeholder="Enter Name" class="form-control">
	                  </div>
	                </div>
	                <!-- COLUMNS 2 -->
	                <div class="col-md-12">
	                  <div class="form-group">
	                  	<label class=""> Mobile Number <span class="text-danger">*</spna></label>
	                    <input type="number" name="mobile" placeholder="Mobile" class="form-control">
	                  </div>
	                </div>
	                <!-- COLUMNS 3 -->
	                <div class="col-md-12">
	                  <div class="form-group">
	                  	<label class=""> Email <span class="text-danger">*</spna></label>
	                    <input type="email" name="email" placeholder="Enter the email" class="form-control">
	                  </div>
	                </div>
	                <div class="col-md-12">
	                   <input type="checkbox" class=""> <span>By continuing, you verify that you are at least 18 years old and agree to these </span>
	                   <h6 class="pt-3">Terms & Conditions</h6>                   
	               </div>
	                <div class="col-md-12 py-4">
	                  	<button class="btn bg-warning" type="submit">Submit</button>
	                </div>
	              </div>
	            </form>
	          </div>
	        </div>
          </div>

          <!-- COLUMNS RIGHT -->
        <div class="col-lg-5 col-md-12">
             <div class="sf-contact-form-wrap">
	          <!--Contact Information-->
	          <div class="sf-contact-form service_card_form card">
	            <div class="sf-con-form-title">
	              <h3 class="m-b30">Find plans for your device</h3>
	            </div>

	            <div class="row">
	            	<div class="col-lg-8 col-8">Plan Price</div>
	            	<div class="col-lg-4 col-4">₹499</div>
	            </div>
	            <div class="row">
	            	<div class="col-lg-8 col-8"><span>inclusive of all taxes</span></div>
	            </div>
	            <div class="row">
	            	<div class="col-lg-8 col-8"><a href="javascript:;"><h6>Have a Promo Code?</h6></a></div>
	            </div>
	            <div class="row pt-2">
	            	<div class="col-lg-8 col-8"><h4>Amount to be paid</h4></div>
	            	<div class="col-lg-4 col-4">₹499</div>
	            </div>

	          </div>
	        </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- Content END--> 
@endsection