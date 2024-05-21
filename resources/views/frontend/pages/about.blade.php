@extends('frontend.layouts.app') @section('content')
<!-- Content -->
<div class="page-content">
  <!-- Banner Area -->
  <div class="aon-page-benner-area">
    <div class="aon-page-banner-row" style="background-image: url({{ get_upload_image('pages/'.page('about-us')->banner) ?? ''}}); background-size: cover;">
      <div class="sf-overlay-main" style="opacity:0.8; background-color:#15939a;"></div>
      <div class="sf-banner-heading-wrap">
        <div class="sf-banner-heading-area">
          <div class="sf-banner-heading-large">{{ page('about-us')->title }}</div>
          <div class="sf-banner-breadcrumbs-nav">
            <ul class="list-inline">
              <li>
                <a href="{{ route('home') }}"> Home </a>
              </li>
              <li>{{ page('about-us')->title }}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner Area End -->
  <!-- Why Choose us -->
  <section class="aon-why-choose2-area">
    <div class="container">
      <div class="aon-why-choose2-box">
        <div class="row">
          <!-- COLUMNS LEFT -->
          <div class="col-lg-6 col-md-12">
            <div class="aon-why-choose-info">
              <!--Title Section Start-->
              <div class="section-head">
                <span class="aon-sub-title">Choose</span>
                <h2 class="aon-title">Why Choose us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
                    <h4 class="aon-title">Meet new customers</h4>
                    <p>Suspendisse tincidunt rutrum ante. Vestibulum elementum ipsum sit amet turpis elementum lobortis.</p>
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
                    <h4 class="aon-title">Grow your revenue</h4>
                    <p>Suspendisse tincidunt rutrum ante. Vestibulum elementum ipsum sit amet turpis elementum lobortis.</p>
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
                    <h4 class="aon-title">Build your online reputation</h4>
                    <p>Suspendisse tincidunt rutrum ante. Vestibulum elementum ipsum sit amet turpis elementum lobortis.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- COLUMNS RIGHT -->
          <div class="col-lg-6 col-md-12">
            <div class="aon-why-choose2-line">
              <div class="aon-why-choose2-pic"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Why Choose us END -->
  <!-- About Area -->
  <div class="aon-about-area">
    <div class="container">
      <div class="section-content">
        <div class="row d-flex flex-wrap align-items-center a-b-none">
          <div class="col-lg-6 col-md-12">
            <div class="aon-about-pic">
              <img src="{{ asset('images/about-pic.jpg') }}" alt="" />
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <!--Title Section Start-->
            <div class="section-head">
              <span class="aon-sub-title">About</span>
              <h2 class="sf-title">Upgrade Your Skills With Service Finder</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravidem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravidal abore et dolore magna aliqua. </p>
            </div>
            <!--Title Section End-->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About Area END -->
  <!-- How it Work -->
  <section class="bg-white aon-how-service-area">
    <div class="container">
      <div class="section-content">
        <div class="row">
          <!--Title Section Start-->
          <div class="col-lg-4 col-md-12">
            <span class="aon-sub-title">Steps</span>
            <h2 class="sf-title">How Service Finder Works</h2>
          </div>
          <!--Title Section End-->
          <div class="col-lg-8 col-md-12">
            <!-- Steps Block Start-->
            <div class="aon-step-blocks">
              <div class="row">
                <!-- COLUMNS 1 -->
                <div class="col-md-4 col-sm-4 m-b30">
                  <div class="aon-step-section step-position-1 aon-icon-effect">
                    <div class="aon-step-icon aon-icon-box">
                      <span>
                        <i class="aon-icon">
                          <img src="{{ asset('images/step-icon/1.png') }}" alt="">
                        </i>
                      </span>
                    </div>
                    <div class="aon-step-info">
                      <h4 class="aon-title">Describe Your Task</h4>
                      <p>This helps us determine which Taskers are abest job.</p>
                    </div>
                  </div>
                </div>
                <!-- COLUMNS 2 -->
                <div class="col-md-4 col-sm-4 m-b30">
                  <div class="aon-step-section step-position-2 aon-icon-effect">
                    <div class="aon-step-icon">
                      <span>
                        <i class="aon-icon">
                          <img src="{{ asset('images/step-icon/2.png') }}" alt="">
                        </i>
                      </span>
                    </div>
                    <div class="aon-step-info">
                      <h4 class="aon-title">Choose a Tasker</h4>
                      <p>This helps us determine which Taskers are abest job.</p>
                    </div>
                  </div>
                </div>
                <!-- COLUMNS 3 -->
                <div class="col-md-4 col-sm-4 m-b30">
                  <div class="aon-step-section  step-position-3  aon-icon-effect">
                    <div class="aon-step-icon">
                      <span>
                        <i class="aon-icon">
                          <img src="{{ asset('images/step-icon/3.png') }}" alt="">
                        </i>
                      </span>
                    </div>
                    <div class="aon-step-info">
                      <h4 class="aon-title">Live Smarter</h4>
                      <p>This helps us determine which Taskers are abest job.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Steps Block End-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- How it Work END -->
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