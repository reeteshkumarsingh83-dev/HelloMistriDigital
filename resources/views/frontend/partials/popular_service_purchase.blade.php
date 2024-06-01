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
  .aon-why-choose-steps li{
    margin-bottom: 0px;
  }
  ul, ol {
      margin-bottom: 0px;
  }
</style>
<div class="page-content">
  <section class="aon-why-choose2-area" style="background-image: url({{ asset('images/download.png') }}); background-repeat: no-repeat;">
    <div class="container">
      <div class="aon-why-choose2-box">
        <h2 class="pb-3 text-center">We recommend the following plans for </h2>
        <div class="row">
          <!-- COLUMNS LEFT -->
          
          @foreach($plans as $plan)
           <!-- @php 
             $brand  =  \App\Models\Brand::where('id',$plan->brand_id)->first();
           @endphp -->
          <div class="col-lg-4 col-md-12">
              <div class="sf-contact-form service_card_form card">
                <form class="" method="POST" action="{{ route('payment-address') }}">
                  <div class="sf-con-form-title text-center">
                    <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                    <h4 class="m-b30">{{ $plan->title }}</h4>
                  </div> 
                  @csrf 
                  <div class="row">
                    <div class="col-md-12 subscriptions">
                      <span>₹ {{ $plan->price }} </span> only/year
                    </div>
                  </div>
                   <ul class="aon-why-choose-steps list-unstyled subscriptions_ul">
                        @foreach((array)json_decode($plan['benefits']) as $m)
                            <li class="d-flex">
                                <span><i class="fa-solid fa-check"></i> {{str_replace('_',' ',$m)}}</span>
                            </li>
                        <br> 
                        @endforeach
  	              </ul>
                  <div class="sf-contact-submit-btn">
                    <button class="site-button" type="submit">Buy Now</button>
                  </div>
                </form>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- Content END--> 
  @endsection