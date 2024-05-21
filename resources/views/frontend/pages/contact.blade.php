@extends('frontend.layouts.app') @section('content')
<!-- Content -->
<div class="page-content">
  <!--Banner-->
  <div class="aon-page-benner-area">
    <div class="aon-page-banner-row" style="background-image: url({{ get_upload_image('pages/'.page('contact-us')->banner) ?? ''}}); background-size: cover;">
      <div class="sf-overlay-main" style="opacity:0.8; background-color:#15939a;"></div>
      <div class="sf-banner-heading-wrap">
        <div class="sf-banner-heading-area">
          <div class="sf-banner-heading-large">{{ page('contact-us')->title }}</div>
          <div class="sf-banner-breadcrumbs-nav">
            <ul class="list-inline">
              <li>
                <a href="{{ route('home') }}"> Home </a>
              </li>
              <li>{{ page('contact-us')->title }}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Banner-->
  <!-- Contact Us-->
  <div class="aon-contact-area">
    <div class="container">
      <!--Title Section Start-->
      <div class="section-head text-center">
        @include('alert_message.notify_message')
        <h2 class="sf-title">Contact Information</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do usmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <!--Title Section End-->
      <div class="section-content">
        <div class="sf-contact-info-wrap">
          <div class="row">
            <!-- COLUMNS 1 -->
            <div class="col-lg-4 col-md-6">
              <div class="sf-contact-info-box">
                <div class="sf-contact-icon">
                  <span>
                    <img src="images/contact-us/1.png" alt="">
                  </span>
                </div>
                <div class="sf-contact-info">
                  <h4 class="sf-title">Mailing Address</h4>
                  <p>Block A, 5th floor, Maurya lok complex, Budh Vihar, Fraser Road Area, Patna, Bihar 800001 </p>
                </div>
              </div>
            </div>
            <!-- COLUMNS 2 -->
            <div class="col-lg-4 col-md-6">
              <div class="sf-contact-info-box">
                <div class="sf-contact-icon">
                  <span>
                    <img src="images/contact-us/2.png" alt="">
                  </span>
                </div>
                <div class="sf-contact-info">
                  <h4 class="sf-title">Email Info</h4>
                  <p>info@hellomistry.com</p>
                  <p>hellomistrygroup@gmail.com</p>
                </div>
              </div>
            </div>
            <!-- COLUMNS 3 -->
            <div class="col-lg-4 col-md-6">
              <div class="sf-contact-info-box">
                <div class="sf-contact-icon">
                  <span>
                    <img src="images/contact-us/3.png" alt="">
                  </span>
                </div>
                <div class="sf-contact-info">
                  <h4 class="sf-title">Phone Number</h4>
                  <p>9470257215 (24/7 Support Line)</p>
                  <p>9470257215</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sf-contact-form-wrap">
          <!--Contact Information-->
          <div class="sf-contact-form">
            <div class="sf-con-form-title text-center">
              <h2 class="m-b30">Contact Information</h2>
            </div>
            <form class="" method="POST" action="{{ route('contact-save') }}">
            	@csrf
              <div class="row">
                <!-- COLUMNS 1 -->
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="fullname" placeholder="Name" class="form-control">
                    @error('fullname')
                         <small class="form-text text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                </div>
                <!-- COLUMNS 2 -->
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="email" placeholder="Email" class="form-control">@error('email')
                         <small class="form-text text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                </div>
                <!-- COLUMNS 3 -->
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="phone" placeholder="Phone" class="form-control">
                    @error('phone')
                         <small class="form-text text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                </div>
                <!-- COLUMNS 4 -->
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="subject" placeholder="Subject" class="form-control">
                    @error('subject')
                         <small class="form-text text-danger">{{ $message }}</small>
                     @enderror
                  </div>
                </div>
                <!-- COLUMNS 5 -->
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea name="message" placeholder="Message" class="form-control"></textarea>
                     @error('message')
                         <small class="form-text text-danger">{{ $message }}</small>
                     @enderror
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
  <!-- Contact Us-->
  <div class="section-full sf-contact-map-area">
    <div class="container">
      <div class="sf-map-social-block text-center">
        <h2>Trusted by thousands of people all over the world</h2>
        <ul class="sf-con-social">
          <li>
            <a href="#" class="sf-fb">
              <img src="images/contact-us/facebook.png" alt="">Facebook </a>
          </li>
          <li>
            <a href="#" class="sf-twitter">
              <img src="images/contact-us/twitter.png" alt="">Twitter </a>
          </li>
          <li>
            <a href="#" class="sf-pinterest">
              <img src="images/contact-us/pinterest.png" alt="">Pinterest </a>
          </li>
        </ul>
        <div class="sf-con-social-pic">
          <span class="img-pos-1">
            <img src="images/contact-us/img1.png" alt="">
          </span>
          <span class="img-pos-2">
            <img src="images/contact-us/img2.png" alt="">
          </span>
          <span class="img-pos-3">
            <img src="images/contact-us/img3.png" alt="">
          </span>
          <span class="img-pos-4">
            <img src="images/contact-us/r-img1.png" alt="">
          </span>
          <span class="img-pos-5">
            <img src="images/contact-us/r-img2.png" alt="">
          </span>
          <span class="img-pos-6">
            <img src="images/contact-us/r-img3.png" alt="">
          </span>
        </div>
      </div>
    </div>
    <div class="sf-map-wrap">
      <div class="gmap-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230266.62403275777!2d84.83151327103809!3d25.607707354098583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f29937c52d4f05%3A0x831a0e05f607b270!2sPatna%2C%20Bihar!5e0!3m2!1sen!2sin!4v1715413448824!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</div>
<!-- Content END--> 
@endsection