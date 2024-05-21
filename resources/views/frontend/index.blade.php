@extends('frontend.layouts.app') @section('content') 
  <section class="aon-banner-area2">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner top_slider">
        @foreach($banners as $banner)
        <div class="carousel-item @if ($loop->first) active @endif">
          <img class="d-block w-100" src="{{ get_upload_image('banners/'.$banner->banner) }}" alt="First slide">
        </div>
        @endforeach 
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
  </section>
<!-- CONTENT START -->
<div class="page-content">
  <form method="POST" action="" id="searchResult"> @csrf <input type="hidden" name="service" id="service_srch" />
  </form>
  <!-- BANNER SECTION START -->
  <section class="aon-banner-area2">
    <!--banner 2-->
    <div class="container">
      <div class="aone-banner-area2-inner">
        <div class="row d-flex align-items-center">
          <!--Banner Left-->
          <div class="col-lg-5 col-md-12">
            <div class="aon-bnr2-content-wrap">
              <!--Banner Text-->
              <div class="aon-bnr-write">
                <h2 class="text-top-line">Engage <span class="text-secondry">Experts</span> &amp; </h2>
                <h2 class="text-bot-line">Achieve Your Goals</h2>
              </div>
              <!--Banner Text End-->
              <!--Seach Bar-->
              <div class="aon-bnr2-search-bar">
                <form method="post" action="" id="searchForm"> @csrf <div class="aon-bnr2-search-box">
                    <!-- COLUMNS 1 -->
                    <div class="aon-search-input keywords-input">
                      <input id="search-input" type="text" placeholder="Search Keywords" name="search" class="form-control">
                      <div class="search-preview" id="search-preview">
                        <ul id="search-results"></ul>
                      </div>
                    </div>
                    <!-- COLUMNS 3 -->
                    <div class="aon-search-btn-wrap">
                      <button class="aon-search-btn" type="submit">Search</button>
                    </div>
                  </div>
                </form>
              </div>
              <!--Seach Bar End-->
              <div class="d-flex justify-content-around mt-2 flex-wrap"></div>
            </div>
          </div>
          <!--Banner Right-->
          <div class="col-lg-7 col-md-12">
            <div class="aon-bnr2-media-wrap">
              <!-- COLUMNS 1 -->
              <div class="aon-bnr2-media">
                <img src="{{ asset('images/banner2/303.png') }}" alt="">
              </div>
              <!-- COLUMNS 2 -->
              <div class="aon-bnr2-lines-left">
                <div class="aon-bnr2-line-left-content">
                  <img src="{{ asset('images/banner2/line-left.png') }}" alt="">
                  <span class="circle-l-1 slide-fwd-center"></span>
                  <span class="circle-l-2 slide-fwd-center2"></span>
                  <span class="circle-l-3 slide-fwd-center3"></span>
                </div>
              </div>
              <!-- COLUMNS 3 -->
              <div class="aon-bnr2-lines-right">
                <img src="{{ asset('images/banner2/line-right.png') }}" alt="">
                <span class="circle-r-1 slide-fwd-center3"></span>
                <span class="circle-r-2 slide-fwd-center2"></span>
                <span class="circle-r-3 slide-fwd-center"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--banner 2-->
  </section>
  <!-- BANNER SECTION END -->
  <!-- Services Finder categories -->
  <section class="bg-white aon-categories-area2">
    <div class="container">
      <!--Title Section Start-->
      <div class="section-head">
        <div class="row">
          <!-- COLUMNS LEFT -->
          <div class="col-lg-12 col-md-12">
            <span class="aon-sub-title">Services</span>
            <h2 class="sf-title">Most Popular Services</h2>
          </div>
          <!-- COLUMNS RIGHT -->
          <div class="col-lg-6 col-md-12"></div>
        </div>
      </div>
      <!--Title Section End-->
      <div class="section-content">
        <div class="aon-categories-area2-section">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6" >
              <div class="media-bg-animate mba-bdr-15">
                <div class="aon-categories-area2-iconbox aon-icon-effect">
                  <div class="aon-cate-area2-icon">
                    <span>
                      <i class="aon-icon">
                        <img src="{{ asset('images/categories/catg3.png') }}" alt="">
                      </i>
                    </span>
                  </div>
                  <div class="aon-cate-area2-content px-2">
                    <h5 class="aon-tilte">
                      <a href="{{ route('service') }}">AC Repair & Service</a>
                    </h5>
                    <p>
                      <small>
                        <span class="rating fa fa-star"></span> &nbsp; reviews) </small>
                    </p>
                    <p>
                      <small>from <b>858 </b>
                      </small>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" >
              <div class="media-bg-animate mba-bdr-15">
                <div class="aon-categories-area2-iconbox aon-icon-effect">
                  <div class="aon-cate-area2-icon">
                    <span>
                      <i class="aon-icon">
                        <img src="{{ asset('images/categories/teli.png') }}" alt="">
                      </i>
                    </span>
                  </div>
                  <div class="aon-cate-area2-content px-2">
                    <h5 class="aon-tilte">
                      <a href="{{ route('service') }}">Television Extended Warranty</a>
                    </h5>
                    <p>
                      <small>
                        <span class="rating fa fa-star"></span> &nbsp; (reviews) </small>
                    </p>
                    <p>
                      <small>from <b>958 </b>
                      </small>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="media-bg-animate mba-bdr-15">
                <div class="aon-categories-area2-iconbox aon-icon-effect">
                  <div class="aon-cate-area2-icon">
                    <span>
                      <i class="aon-icon">
                        <img src="{{ asset('images/categories/Refrigerator.png') }}" alt="">
                      </i>
                    </span>
                  </div>
                  <div class="aon-cate-area2-content px-2">
                    <h5 class="aon-tilte">
                      <a href="{{ route('service') }}">Refrigerator Extended Warranty</a>
                    </h5>
                    <p>
                      <small>
                        <span class="rating fa fa-star"></span> &nbsp; (reviews) </small>
                    </p>
                    <p>
                      <small>from <b>558 </b>
                      </small>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" >
              <div class="media-bg-animate mba-bdr-15">
                <div class="aon-categories-area2-iconbox aon-icon-effect">
                  <div class="aon-cate-area2-icon">
                    <span>
                      <i class="aon-icon">
                        <img src="{{ asset('images/categories/Purifier.png') }}" alt="">
                      </i>
                    </span>
                  </div>
                  <div class="aon-cate-area2-content px-2">
                    <h5 class="aon-tilte">
                      <a href="{{ route('service') }}">Water Purifier Repair & Service</a>
                    </h5>
                    <p>
                      <small>
                        <span class="rating fa fa-star"></span> &nbsp; (reviews) </small>
                    </p>
                    <p>
                      <small>from <b>958 </b>
                      </small>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" >
              <div class="media-bg-animate mba-bdr-15">
                <div class="aon-categories-area2-iconbox aon-icon-effect">
                  <div class="aon-cate-area2-icon">
                    <span>
                      <i class="aon-icon">
                        <img src="{{ asset('images/categories/cooling_cooler.png') }}" alt="">
                      </i>
                    </span>
                  </div>
                  <div class="aon-cate-area2-content px-2">
                    <h5 class="aon-tilte">
                      <a href="{{ route('service') }}"> Room Cooler Extended Warranty</a>
                    </h5>
                    <p>
                      <small>
                        <span class="rating fa fa-star"></span> &nbsp; (reviews) </small>
                    </p>
                    <p>
                      <small>from <b>558 </b>
                      </small>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" >
              <div class="media-bg-animate mba-bdr-15">
                <div class="aon-categories-area2-iconbox aon-icon-effect">
                  <div class="aon-cate-area2-icon">
                    <span>
                      <i class="aon-icon">
                        <img src="{{ asset('images/categories/washing_machine.png') }}" alt="">
                      </i>
                    </span>
                  </div>
                  <div class="aon-cate-area2-content px-2">
                    <h5 class="aon-tilte">
                     <a href="{{ route('service') }}">Washing Machine Extended Warranty</a>
                    </h5>
                    <p>
                      <small>
                        <span class="rating fa fa-star"></span> &nbsp; (reviews) </small>
                    </p>
                    <p>
                      <small>from <b>458 </b>
                      </small>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" >
              <div class="media-bg-animate mba-bdr-15">
                <div class="aon-categories-area2-iconbox aon-icon-effect">
                  <div class="aon-cate-area2-icon">
                    <span>
                      <i class="aon-icon">
                        <img src="{{ asset('images/categories/mobile.png') }}" alt="">
                      </i>
                    </span>
                  </div>
                  <div class="aon-cate-area2-content px-2">
                    <h5 class="aon-tilte">
                      <a></a> Mobile Extended Warranty
                    </h5>
                    <p>
                      <small>
                        <span class="rating fa fa-star"></span> &nbsp; (reviews) </small>
                    </p>
                    <p>
                      <small>from <b>458 </b>
                      </small>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="media-bg-animate mba-bdr-15">
                <div class="aon-categories-area2-iconbox aon-icon-effect">
                  <div class="aon-cate-area2-icon">
                    <span>
                      <i class="aon-icon">
                        <img src="{{ asset('images/categories/laptop.png') }}" alt="">
                      </i>
                    </span>
                  </div>
                  <div class="aon-cate-area2-content px-2">
                    <h5 class="aon-tilte">
                      <a></a> Laptop Complete Care
                    </h5>
                    <p>
                      <small>
                        <span class="rating fa fa-star"></span> &nbsp; (reviews) </small>
                    </p>
                    <p>
                      <small>from <b>458 </b>
                      </small>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6" >
              <div class="media-bg-animate mba-bdr-15">
                <div class="aon-categories-area2-iconbox aon-icon-effect">
                  <div class="aon-cate-area2-icon">
                    <span>
                      <i class="aon-icon">
                        <img src="{{ asset('images/categories/microwave.png') }}" alt="">
                      </i>
                    </span>
                  </div>
                  <div class="aon-cate-area2-content px-2">
                    <h5 class="aon-tilte">
                      <a></a> Microwave Extended Warranty
                    </h5>
                    <p>
                      <small>
                        <span class="rating fa fa-star"></span> &nbsp; (reviews) </small>
                    </p>
                    <p>
                      <small>from <b>458 </b>
                      </small>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="aon-btn-pos-center">
            <a class="site-button" href="">View All</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Services Finder categories END -->
  <!-- Featued Vender -->
  <section class="section-full aon-feature-vender-area2">
    <div class="container">
      <!--Title Section Start-->
      <div class="section-head">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <h2 class="sf-title">Device Extended Warranty Starts at <sapn style="color: #ffb600;">₹ 199 </spna>
            </h2>
          </div>
        </div>
      </div>
      <!--Title Section Start-->
      <div class="section-content">
        <div class="owl-carousel aon-vendor-provider-two-carousel aon-owl-arrow">
          <!-- COLUMNS 1 -->
          <div class="item">
            <div class="aon-ow-provider-wrap2">
              <div class="aon-ow-provider2 shine-hover">
                <div class="aon-ow-top">
                  <div class="aon-pro-check">
                    <span>
                      <i class="fa fa-check"></i>
                    </span>
                  </div>
                  <!-- <div class="aon-pro-favorite"><a href="#"><i class="fa fa-heart-o"></i></a></div> -->
                </div>
                <div class="aon-ow-mid">
                  <div class="aon-ow-media media-bg-animate">
                    <a class="shine-box" href="{{ route('service') }}">
                      <img src="{{ asset('images/jobs/water_filter.jpg') }}" alt="" style=" min-height:180px; max-height: 180px; ">
                    </a>
                  </div>
                  <p>Water Purifier</p>
                  <div class="aon-ow-bottom">
                    <a href="{{ route('service') }}" class="site-button">View Services</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="aon-ow-provider-wrap2">
              <div class="aon-ow-provider2 shine-hover">
                <div class="aon-ow-top">
                  <div class="aon-pro-check">
                    <span>
                      <i class="fa fa-check"></i>
                    </span>
                  </div>
                </div>
                <div class="aon-ow-mid">
                  <div class="aon-ow-media media-bg-animate">
                    <a class="shine-box" href="{{ route('service') }}">
                      <img src="{{ asset('images/jobs/printer.jpg') }}" alt="" style=" min-height:180px; max-height: 180px; ">
                    </a>
                  </div>
                  <p>Printer</p>
                  <div class="aon-ow-bottom">
                    <a href="{{ route('service') }}" class="site-button">View Services</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="aon-ow-provider-wrap2">
              <div class="aon-ow-provider2 shine-hover">
                <div class="aon-ow-top">
                  <div class="aon-pro-check">
                    <span>
                      <i class="fa fa-check"></i>
                    </span>
                  </div>
                </div>
                <div class="aon-ow-mid">
                  <div class="aon-ow-media media-bg-animate">
                    <a class="shine-box" href="{{ route('service') }}">
                      <img src="{{ asset('images/jobs/refrigerator.jpg') }}" alt="" style=" min-height:180px; max-height: 180px; ">
                    </a>
                  </div>
                  <p>Refrigerator</p>
                  <div class="aon-ow-bottom">
                    <a href="{{ route('service') }}" class="site-button">View Services</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="aon-ow-provider-wrap2">
              <div class="aon-ow-provider2 shine-hover">
                <div class="aon-ow-top">
                  <div class="aon-pro-check">
                    <span>
                      <i class="fa fa-check"></i>
                    </span>
                  </div>
                </div>
                <div class="aon-ow-mid">
                  <div class="aon-ow-media media-bg-animate">
                    <a class="shine-box" href="{{ route('service') }}">
                      <img src="{{ asset('images/jobs/ac_repair1.jpg') }}" alt="" style=" min-height:180px; max-height: 180px; ">
                    </a>
                  </div>
                  <p>Air Conditioner</p>
                  <div class="aon-ow-bottom">
                    <a href="{{ route('service') }}" class="site-button">View Services</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="aon-ow-provider-wrap2">
              <div class="aon-ow-provider2 shine-hover">
                <div class="aon-ow-top">
                  <div class="aon-pro-check">
                    <span>
                      <i class="fa fa-check"></i>
                    </span>
                  </div>
                </div>
                <div class="aon-ow-mid">
                  <div class="aon-ow-media media-bg-animate">
                    <a class="shine-box" href="{{ route('service') }}">
                      <img src="{{ asset('images/jobs/mobile.jpg') }}" alt="" style=" min-height:180px; max-height: 180px; ">
                    </a>
                  </div>
                  <p>Mobile</p>
                  <div class="aon-ow-bottom">
                    <a href="{{ route('service') }}" class="site-button">View Services</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="aon-ow-provider-wrap2">
              <div class="aon-ow-provider2 shine-hover">
                <div class="aon-ow-top">
                  <div class="aon-pro-check">
                    <span>
                      <i class="fa fa-check"></i>
                    </span>
                  </div>
                </div>
                <div class="aon-ow-mid">
                  <div class="aon-ow-media media-bg-animate">
                    <a class="shine-box" href="{{ route('service') }}">
                      <img src="{{ asset('images/jobs/washing_machine.jpg') }}" alt="" style=" min-height:180px; max-height: 180px; ">
                    </a>
                  </div>
                  <p>Washing Machine</p>
                  <div class="aon-ow-bottom">
                    <a href="{{ route('service') }}" class="site-button">View Services</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="aon-ow-provider-wrap2">
              <div class="aon-ow-provider2 shine-hover">
                <div class="aon-ow-top">
                  <div class="aon-pro-check">
                    <span>
                      <i class="fa fa-check"></i>
                    </span>
                  </div>
                </div>
                <div class="aon-ow-mid">
                  <div class="aon-ow-media media-bg-animate">
                    <a class="shine-box" href="{{ route('service') }}">
                      <img src="{{ asset('images/jobs/microwave.jpg') }}" alt="" style=" min-height:180px; max-height: 180px; ">
                    </a>
                  </div>
                  <p>Microwave</p>
                  <div class="aon-ow-bottom">
                    <a href="{{ route('service') }}" class="site-button">View Services</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Featued Vender End -->
  <!-- Recently Posted Jobs -->
  <div class="section-full aon-postjobs-area2">
    <div class="container">
      <!--Title Section Start-->
      <div class="section-head">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <h2 class="sf-title">Recently Provided Services</h2>
          </div>
        </div>
      </div>
      <div class="section-content">
        <div class="aon-postjobs-area2-section">
          <div class="row">
            <!-- COLUMNS 1 -->
            <div class="col-lg-6 col-md-6">
              <div class="aon-post-jobsCol media-bg-animate mba-bdr-15">
                <div class="aon-post-jobs2 aon-icon-effect">
                  <div class="job-comapny-logo">
                    <img class="company_logo aon-icon" src="{{ asset('images/categories/mobile.png') }}" alt="">
                  </div>
                  <div class="job-comapny-info">
                    <div class="position">
                      <h3>
                        <a href="#"> Mobile Extended Warranty</a>
                      </h3>
                      <div class="company">
                        <strong>Hello Mistri Digital Services</strong>
                      </div>
                    </div>
                    <ul class="meta">
                      <li class="job-type hourly">
                        <i class="fa fa-circle"></i>Full Time
                      </li>
                    </ul>
                    <div class="job-date">
                      <span>
                        <i class="fa fa-calendar-o"></i> 1 month ago </span>
                    </div>
                    <div class="job-location">
                      <i class="fa fa-map-marker"></i> Patana
                    </div>
                    <div class="job-amount">
                      <i class="fa fa-money"></i>
                      <span>299</span>
                    </div>
                    <div class="job-label">
                      <img src="{{ asset('images/label.html') }}" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- COLUMNS 2 -->
            <div class="col-lg-6 col-md-6">
              <div class="aon-post-jobsCol media-bg-animate mba-bdr-15">
                <div class="aon-post-jobs2 aon-icon-effect">
                  <div class="job-comapny-logo">
                    <img class="company_logo aon-icon" src="{{ asset('images/categories/mobile.png') }}" alt="">
                  </div>
                  <div class="job-comapny-info">
                    <div class="position">
                      <h3>
                        <a href="#">Mobile Extended Warranty</a>
                      </h3>
                      <div class="company">
                        <strong>Hello Mistri Services</strong>
                      </div>
                    </div>
                    <ul class="meta">
                      <li class="job-type hourly">
                        <i class="fa fa-circle"></i>Full day
                      </li>
                    </ul>
                    <div class="job-date">
                      <span>
                        <i class="fa fa-calendar-o"></i> 3 months ago </span>
                    </div>
                    <div class="job-location">
                      <i class="fa fa-map-marker"></i> Aara
                    </div>
                    <div class="job-amount">
                      <i class="fa fa-money"></i>
                      <span>425</span>
                    </div>
                    <div class="job-label">
                      <img src="" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- COLUMNS 3 -->
            <div class="col-lg-6 col-md-6">
              <div class="aon-post-jobsCol media-bg-animate mba-bdr-15">
                <div class="aon-post-jobs2 aon-icon-effect">
                  <div class="job-comapny-logo">
                    <img class="company_logo aon-icon" src="{{ asset('images/categories/microwave.png') }}" alt="">
                  </div>
                  <div class="job-comapny-info">
                    <div class="position">
                      <h3>
                        <a href="#">Microwave Extended Warranty</a>
                      </h3>
                      <div class="company">
                        <strong>Hello Mistri Services</strong>
                      </div>
                    </div>
                    <ul class="meta">
                      <li class="job-type hourly">
                        <i class="fa fa-circle"></i>Hourly
                      </li>
                    </ul>
                    <div class="job-date">
                      <span>
                        <i class="fa fa-calendar-o"></i> 5 months ago </span>
                    </div>
                    <div class="job-location">
                      <i class="fa fa-map-marker"></i> Chapra
                    </div>
                    <div class="job-amount">
                      <i class="fa fa-money"></i>
                      <span>199</span>
                    </div>
                    <div class="job-label">
                      <img src="" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- COLUMNS 4 -->
            <div class="col-lg-6 col-md-6">
              <div class="aon-post-jobsCol media-bg-animate mba-bdr-15">
                <div class="aon-post-jobs2 aon-icon-effect">
                  <div class="job-comapny-logo">
                    <img class="company_logo aon-icon" src="{{ asset('images/categories/catg3.png') }}" alt="">
                  </div>
                  <div class="job-comapny-info">
                    <div class="position">
                      <h3>
                        <a href="#">Ac Repair</a>
                      </h3>
                      <div class="company">
                        <strong>Hello Mistri Services</strong>
                      </div>
                    </div>
                    <ul class="meta">
                      <li class="job-type hourly">
                        <i class="fa fa-circle"></i>Hourly
                      </li>
                    </ul>
                    <div class="job-date">
                      <span>
                        <i class="fa fa-calendar-o"></i> 3 years ago </span>
                    </div>
                    <div class="job-location">
                      <i class="fa fa-map-marker"></i> Patana
                    </div>
                    <div class="job-amount">
                      <i class="fa fa-money"></i>
                      <span>1500</span>
                    </div>
                    <div class="job-label">
                      <img src="images/label.html" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- COLUMNS 5 -->
            <div class="col-lg-6 col-md-6">
              <div class="aon-post-jobsCol media-bg-animate mba-bdr-15">
                <div class="aon-post-jobs2 aon-icon-effect">
                  <div class="job-comapny-logo">
                    <img class="company_logo ao-icon" src="{{ asset('images/categories/washing_machine.png') }}" alt="">
                  </div>
                  <div class="job-comapny-info">
                    <div class="position">
                      <h3>
                        <a href="#"> Washing Machine Extended Warranty</a>
                      </h3>
                      <div class="company">
                        <strong>Hello Mistri Services</strong>
                      </div>
                    </div>
                    <ul class="meta">
                      <li class="job-type hourly">
                        <i class="fa fa-circle"></i>Hourly
                      </li>
                    </ul>
                    <div class="job-date">
                      <span>
                        <i class="fa fa-calendar-o"></i> 3 years ago </span>
                    </div>
                    <div class="job-location">
                      <i class="fa fa-map-marker"></i> Patana
                    </div>
                    <div class="job-amount">
                      <i class="fa fa-money"></i>
                      <span>499</span>
                    </div>
                    <div class="job-label">
                      <img src="images/label.html" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- COLUMNS 6 -->
            <div class="col-lg-6 col-md-6">
              <div class="aon-post-jobsCol media-bg-animate mba-bdr-15">
                <div class="aon-post-jobs2 aon-icon-effect">
                  <div class="job-comapny-logo">
                    <img class="company_logo aon-icon" src="{{ asset('images/categories/catg3.png') }}" alt="">
                  </div>
                  <div class="job-comapny-info">
                    <div class="position">
                      <h3>
                        <a href="#">Ac Repair</a>
                      </h3>
                      <div class="company">
                        <strong>Hello Mistri Services</strong>
                      </div>
                    </div>
                    <ul class="meta">
                      <li class="job-type hourly">
                        <i class="fa fa-circle"></i>Hourly
                      </li>
                    </ul>
                    <div class="job-date">
                      <span>
                        <i class="fa fa-calendar-o"></i> 3 years ago </span>
                    </div>
                    <div class="job-location">
                      <i class="fa fa-map-marker"></i> Patana
                    </div>
                    <div class="job-amount">
                      <i class="fa fa-money"></i>
                      <span>1920</span>
                    </div>
                    <div class="job-label">
                      <img src="images/label.html" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Recently Posted Jobs Section END -->
  <!-- Service Sectiion 1 -->
  <section class="section-full aon-feature-vender-area2">
    <div class="container">
      <!--Title Section Start-->
      <div class="section-head">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <h2 class="sf-title">Prepare for Summer Ahead</h2>
          </div>
        </div>
      </div>
      <!--Title Section Start-->
      <div class="section-content">
        <div class="owl-carousel aon-vendor-provider-two-carousel aon-owl-arrow">
          <div class="" onclick="search(">
            <div class="aon-blog-section-1 shine-hover">
              <div class="aon-post-media shine-box">
                <a>
                  <img src="{{ asset('images/all-categories/summer1.png') }}" alt="">
                </a>
                <a class="site-button">From 1998/Extend Warranty</a>
              </div>
              <div class="aon-post-meta">
                <ul>
                  <li class="aon-post-category" style="max-width:70%"> Service </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="" onclick="search(">
            <div class="aon-blog-section-1 shine-hover">
              <div class="aon-post-media shine-box">
                <a>
                  <img src="{{ asset('images/all-categories/summer2.png') }}" alt="">
                </a>
                <a class="site-button">From 199/Extend Warranty </a>
              </div>
              <div class="aon-post-meta">
                <ul>
                  <li class="aon-post-category" style="max-width:70%"> Service </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="" onclick="search(">
            <div class="aon-blog-section-1 shine-hover">
              <div class="aon-post-media shine-box">
                <a>
                  <img src="{{ asset('images/all-categories/summer3.jpg') }}" alt="">
                </a>
                <a class="site-button">From 499/Extend Warranty</a>
              </div>
              <div class="aon-post-meta">
                <ul>
                  <li class="aon-post-category" style="max-width:70%"> Service </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</section>
<!--Service Sectiion 1 End -->
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
              <h2 class="aon-title">Why Choose us</h2>
            </div>
            <!--Title Section Start End-->
            <ul class="aon-why-choose-steps list-unstyled">
              <!-- COLUMNS 1 -->
              <li class="d-flex">
                <div class="aon-w-choose-left aon-icon-effect">
                  <div class="aon-w-choose-icon">
                    <i class="aon-icon">
                      <img src="{{ asset('images/whychoose/1.png') }}" alt="">
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
<!-- Testimonials Two -->
<section class="bg-white aon-testimonials-two-area">
  <div class="aon-half-bg"></div>
  <div class="container">
    <!--Title Section Start-->
    <div class="section-head">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <span class="aon-sub-title">Testimonials</span>
          <h2 class="aon-title">What People Say</h2>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="owl-carousel testimonials-two-carousel-owl aon-owl-arrow">
        <!-- COLUMNS 1 -->
        <div class="item">
          <div class="aon-test2-item">
            <div class="aon-test2-pic">
              <img src="{{ asset('images/testimonials2/pic1.jpg') }}" alt="" />
            </div>
            <h3 class="aon-test2-name">David Smith</h3>
            <div class="aon-test2-position">Web Designer</div>
            <div class="aon-test2-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do usmod tempor incididunt ut labore.</div>
            <div class="aon-test2-animate">
              <span class="aon-test2-circle1"></span>
              <span class="aon-test2-square1"></span>
              <span class="aon-test2-square2"></span>
              <span class="aon-test2-circle2"></span>
              <span class="aon-test2-plus">+</span>
            </div>
          </div>
        </div>
        <!-- COLUMNS 2 -->
        <div class="item">
          <div class="aon-test2-item">
            <div class="aon-test2-pic">
              <img src="{{ asset('images/testimonials2/pic2.jpg') }}" alt="" />
            </div>
            <h3 class="aon-test2-name">David Smith</h3>
            <div class="aon-test2-position">Web Designer</div>
            <div class="aon-test2-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do usmod tempor incididunt ut labore.</div>
            <div class="aon-test2-animate">
              <span class="aon-test2-circle1"></span>
              <span class="aon-test2-square1"></span>
              <span class="aon-test2-square2"></span>
              <span class="aon-test2-circle2"></span>
              <span class="aon-test2-plus">+</span>
            </div>
          </div>
        </div>
        <!-- COLUMNS 3 -->
        <div class="item">
          <div class="aon-test2-item">
            <div class="aon-test2-pic">
              <img src="{{ asset('images/testimonials2/pic3.jpg') }}" alt="" />
            </div>
            <h3 class="aon-test2-name">David Smith</h3>
            <div class="aon-test2-position">Web Designer</div>
            <div class="aon-test2-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do usmod tempor incididunt ut labore.</div>
            <div class="aon-test2-animate">
              <span class="aon-test2-circle1"></span>
              <span class="aon-test2-square1"></span>
              <span class="aon-test2-square2"></span>
              <span class="aon-test2-circle2"></span>
              <span class="aon-test2-plus">+</span>
            </div>
          </div>
        </div>
        <!-- COLUMNS 4 -->
        <div class="item">
          <div class="aon-test2-item">
            <div class="aon-test2-pic">
              <img src="{{ asset('images/testimonials2/pic3.jpg') }}" alt="" />
            </div>
            <h3 class="aon-test2-name">David Smith</h3>
            <div class="aon-test2-position">Web Designer</div>
            <div class="aon-test2-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do usmod tempor incididunt ut labore.</div>
            <div class="aon-test2-animate">
              <span class="aon-test2-circle1"></span>
              <span class="aon-test2-square1"></span>
              <span class="aon-test2-square2"></span>
              <span class="aon-test2-circle2"></span>
              <span class="aon-test2-plus">+</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Services Finder categories END -->
<!-- Statics -->
<section class="aon-statics-area2">
  <div class="container">
    <div class="aon-statics-area2-section">
      <div class="aon-statics-area2-bg">
        <!--Title Section Start-->
        <div class="section-head aon-title-center white">
          <h2 class="sf-title">Trusted by businesses globally, our solutions drive success</h2>
        </div>
        <div class="section-content">
          <div class="aon-statics-blocks2">
            <div class="row">
              <!-- COLUMNS 1 -->
              <div class="col-lg-3 col-md-6 col-6">
                <div class="aon-static-section2 aon-t-white2">
                  <div class="aon-company-static-num2 counter">36</div>
                  <div class="aon-company-static-name2">Providers</div>
                </div>
              </div>
              <!-- COLUMNS 2 -->
              <div class="col-lg-3 col-md-6 col-6">
                <div class="aon-static-section2 aon-t-skyblue2">
                  <div class="aon-company-static-num2 counter">59</div>
                  <div class="aon-company-static-name2">Categories</div>
                </div>
              </div>
              <!-- COLUMNS 3 -->
              <div class="col-lg-3 col-md-6 col-6">
                <div class="aon-static-section2 aon-t-yellow2">
                  <div class="aon-company-static-num2 counter">108</div>
                  <div class="aon-company-static-name2">Jobs</div>
                </div>
              </div>
              <!-- COLUMNS 4 -->
              <div class="col-lg-3 col-md-6 col-6">
                <div class="aon-static-section2 aon-t-green2">
                  <div class="aon-company-static-num2 counter">89</div>
                  <div class="aon-company-static-name2">Customer</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Statics END -->
<!--Newsletter Start-->
<section class="aon-newsletter-area2">
  <div class="container">
    <div class="aon-newsletter-area2-section">
      <h3 class="aon-title">Empowering businesses through technology. Partner with us for strategic growth. Unlock your potential with innovative solutions. technology</h3>
      <p>Hello Mistri Digital, we are dedicated to empowering our clients to achieve substantial business growth through strategic and efficient utilization of technology. Our mission is to serve as trusted partners, guiding businesses towards innovation, efficiency, and success in the digital landscape.</p>
    </div>
  </div>
</section>
</div>
<!-- CONTENT END --> @endsection @section('scripts') <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> @if (session()->has('vendorRegistered')) <script>
  swal("Succeffully Registered!", "You have registered successfully. Please check your email to activate account", "success", {
    button: "Okay!",
  });
</script> @endif @auth @if (Auth::user()->default_password) <script>
  Swal.fire({
    title: 'You have default password.Please change this',
    icon: 'info',
    showCloseButton: true,
    showCancelButton: true,
    focusConfirm: false,
    confirmButtonText: ' < a href = ""
    style = "color:#fff" > Change Now < /a>',
    confirmButtonAriaLabel: 'Change Now',
    cancelButtonText: 'Change Later',
    cancelButtonAriaLabel: 'Change Later'
  })
</script> @endif @endauth <script>
  function searching() {
    let ajaxurl = "";
    var formData = {
      'search': $('#search-input').val(),
    };
    $.ajax({
      type: 'POST',
      url: 'http://localhost:8000/service',
      data: formData,
      dataType: 'json',
      headers: {
        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      },
      success: function(data) {
        if (data.status) {
          let keywords = '';
          data.results.forEach(element => {
            keywords += " < li onclick = 'search(" + "\"" + element.xid + "\"" + ")' > " +
            element.service + "</li>";
          });
          $('#search-results').html(keywords);
          $('#search-preview').show();
        } else {
          $('#search-preview').hide();
        }
        console.log(data);
      },
      error: function(data) {}
    });
  }
  $('#search-preview').hide();
  $('#search-input').on('keyup', function() {
    searching();
  });
  //  $('#search-input').on('click',function(){
  //     searching();
  //  });
  function srch(value) {
    $('#search-input').val(value);
    $('#searchForm').submit();
  }
</script> @endsection