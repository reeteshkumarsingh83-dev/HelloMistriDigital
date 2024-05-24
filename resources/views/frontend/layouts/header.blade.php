    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
      <div class="loading-box"></div>
      <div class="loading-pic">
        <div class="windows8">
          <div class="wBall" id="wBall_1">
            <div class="wInnerBall"></div>
          </div>
          <div class="wBall" id="wBall_2">
            <div class="wInnerBall"></div>
          </div>
          <div class="wBall" id="wBall_3">
            <div class="wInnerBall"></div>
          </div>
          <div class="wBall" id="wBall_4">
            <div class="wInnerBall"></div>
          </div>
          <div class="wBall" id="wBall_5">
            <div class="wInnerBall"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- LOADING AREA  END ====== -->
    <div class="page-wraper">
      <!-- HEADER START -->
      <header class="site-header header-style-2 mobile-sider-drawer-menu header-full-width" style="background: #ffffff;">
        <div class="sticky-header main-bar-wraper  navbar-expand-lg" style="background: #ffffff;">
          <div class="main-bar" style="background: #ffffff;">
            <div class="container clearfix">
              <!--Logo section start-->
              <div class="logo-header">
                <div class="logo-header-inner logo-header-one">
                  <a href="/">
                    <img src="{{admin_assets('images/settings/'.get_setting('web_logo'))}}" alt="">
                  </a>
                </div>
              </div>
              <!--Logo section End-->
              <!-- NAV Toggle Button -->
              <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar icon-bar-first"></span>
                <span class="icon-bar icon-bar-two"></span>
                <span class="icon-bar icon-bar-three"></span>
              </button>
              <!-- MAIN Vav -->
              <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">
                <ul class="nav navbar-nav">
                  {{-- <li class="has-child current-menu-item">
                                    <a href="javascript:;">Home</a>
                                </li> --}}
                  <li class="has-child">
                    <a href="javascript:;">Device & Plans</a>
                    <ul class="sub-menu sub-menu-big">
                      <div class="row">
                        @foreach(categories() as $category)
                        <div class="col-lg-3">
                          <li>
                            <a style="padding: 0px 20px; color: red; font-weight: bold" >{{ $category->name }}</a>
                            <a href="{{ route('web.catg-service',$category->slug) }}" style="padding-bottom: 10px;">Extended Warranty</a>
                          </li>
                        </div>
                        @endforeach
                      </div>
                    </ul>
                  </li>
                  <li class="has-child">
                    <a href="javascript:;">Home Protection</a>
                  </li>
                  <!-- <li>
                    <a href="blog.php">Activate Plan</a>
                  </li> -->
                  <li>
                    <a href="{{ route('contact') }}">Contact</a>
                  </li>
                  <li>
                    <a href="">Track Service Request</a>
                  </li>
                </ul>
              </div>
              <!-- Header Right Section-->
              <div class="extra-nav header-2-nav">
                <div class="extra-cell d-flex"> 
                  @if(Auth::user())  <a href="" class="site-button aon-btn-login mx-2">
                    <i class="fa fa-bars"></i> Member Dashboard </a>  @if (Auth::user()->role==1) <a href="{{ route('my-bookings') }}" class="site-button aon-btn-login mx-2">
                    <i class="fa fa-shopping-cart"></i> My Booking </a> @endif @if (Auth::user()->role==2) <a href="{{ route('vendor.dashboard') }}" class="site-button aon-btn-login mx-2">
                    <i class="fa fa-bars"></i> Vendor Dashboard </a> @endif <form method="POST" action="{{route('logout')}}"> @csrf <button type="submit" class="site-button aon-btn-login">
                      <i class="fa fa-sign-out"></i> Logout </button>
                  </form> @else <a href="{{route('login')}}" class="site-button aon-btn-signup m-l20">
                    <i class="fa fa-user-circle opacity-60"></i>Login </a>
                  <!--Login-->
                  <!--Sign up-->
                   <a href="{{  route('register') }}" class="site-button aon-btn-signup m-l20"><i class="fa fa-user"></i> Customer Registration

                                   </a> @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- HEADER END -->