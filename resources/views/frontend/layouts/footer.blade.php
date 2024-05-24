<!-- FOOTER START -->
<style>
  .sf-site-link ul li a{
     color: {{ get_setting('footer_text_color') }};
  }
  .sf-site-link ul li{
    color: {{ get_setting('footer_text_color') }};
  }
</style>
<footer class="site-footer footer-light" style="background-color: {{ get_setting('footer_background_color') }}; ">
  <!-- FOOTER NEWSLETTER START -->
  <div class="footer-top-newsletter">
    <div class="container">
      <div class="sf-news-letter">
        <span>Subscribe Our Newsletter</span>
        <form>
          <div class="form-group sf-news-l-form">
            <input type="text" class="form-control" placeholder="Enter Your Email">
            <button type="submit" class="sf-sb-btn">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- FOOTER BLOCKES START -->
  <div class="footer-top">
    <div class="container">
      <div class="row mt-4">
        <!-- Footer col 2-->
        <div class="col-lg-3 col-md-6 col-sm-6  m-b30">
          <div class="sf-site-link sf-widget-cities">
            <h4 class="sf-f-title">Policies</h4>
            <ul>
              <li>
                <a href="{{ route('about') }}">About</a>
              </li>
              <li>
                <a href="{{ route('slug-page', page('terms-and-conditions')->slug) }}">Terms and Conditions</a>
              </li>
              <li>
                <a href="{{ route('slug-page', page('privacy-policy')->slug) }}">Privacy Policy</a>
              </li>
              <li>
                <a href="{{ route('slug-page', page('return-policy')->slug) }}">Return Policy</a>
              </li>
              <li>
                <a href="{{ route('slug-page', page('refund-policy')->slug) }}">Refund Policy</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- Footer col 1-->
        <div class="col-lg-3 col-md-6 col-sm-6  m-b30">
          <div class="sf-site-link sf-widget-link">
            <h4 class="sf-f-title">Warranty Check</h4>
            <ul>
              <li>
                <a href="">Apple Warranty Check</a>
              </li>
              <li>
                <a href="">Lenovo Warranty Check</a>
              </li>
              <li>
                <a href="">Samsung Warranty Check</a>
              </li>
              <li>
                <a href="">Iphone Warranty Check</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- Footer col 1-->
        <div class="col-lg-3 col-md-6 col-sm-6  m-b30">
          <div class="sf-site-link sf-widget-categories">
            <h4 class="sf-f-title">For Service Providers</h4>
            <ul>
              <li>
                <a>Customer Consent</a>
              </li>
              <li>
                <a>Grievance Redressal</a>
              </li>
              <li>
                <a>LSP Partners</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- Footer col 1-->
        <div class="col-lg-3 col-md-6 col-sm-6  m-b30">
          <div class="sf-site-link sf-widget-contact">
            <h4 class="sf-f-title">Contact Info</h4>
            <ul>
              <li><i class="fa fa-flag footer_icon" aria-hidden="true"></i> {{ get_setting('country') }}</li>
              <li><i class="fa fa-phone footer_icon" aria-hidden="true"></i> {{ get_setting('phone') }}</li>
              <li><i class="fa fa-envelope footer_icon" aria-hidden="true"></i> {{ get_setting('company_email') }}</li>
              <li><i class="fa fa-location footer_icon" aria-hidden="true"></i> {{ get_setting('shop_address') }}</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- FOOTER COPYRIGHT -->
  <div class="footer-bottom">
    <div class="container">
      <div class="sf-footer-bottom-section">
        <div class="sf-f-logo">
          <a href="javascript:void(0);">
            <img src="{{admin_assets('images/settings/'.get_setting('web_footer_logo'))}}" alt="">
          </a>
        </div>
        <div class="">
            @foreach (social_media() as $item)
                <a class="social-btn"
                   target="_blank" href="{{$item->social_media_url}}" style="color: white!important;">
                    <i class="{{$item->icon}}" aria-hidden="true"></i>
                </a>
            @endforeach
        </div>
        <div class="sf-f-copyright">
          <span>{{ get_setting('company_copy_right') }} <br>Designed and Developed by <a href=""> Ronisha Informatics Pvt Ltd.</a>
          </span>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- FOOTER END -->
<!-- BUTTON TOP START -->
<button class="scroltop">
  <span class="fa fa-angle-up  relative" id="btn-vibrate"></span>
</button>
</div>
<!-- Login Sign Up Modal -->
<div class="modal fade" id="login-signup-model">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close aon-login-close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <div class="modal-body">
        <div class="sf-custom-tabs sf-custom-new aon-logon-sign-area p-3">
          <!--Tabs-->
          <ul class="nav nav-tabs nav-table-cell">
            <li>
              <a data-toggle="tab" href="#Upcoming" class="active">Login</a>
            </li>
            <li>
              <a data-toggle="tab" href="#Past">Sign up</a>
            </li>
          </ul>
          <!--Tabs Content-->
          <div class="tab-content">
            <!--Login Form-->
            <div id="Upcoming" class="tab-pane active">
              <div class="sf-tabs-content">
                <form class="aon-login-form" method="POST" action="{{route('login')}}"> @csrf <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="aon-inputicon-box">
                          <input class="form-control sf-form-control" name="email" type="text" placeholder="User Name">
                          <i class="aon-input-icon fa fa-user"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="aon-inputicon-box">
                          <input class="form-control sf-form-control" name="password" type="password" placeholder="Password">
                          <i class="aon-input-icon fa fa-lock"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group d-flex aon-login-option justify-content-between">
                        <div class="aon-login-opleft">
                          <div class="checkbox sf-radio-checkbox">
                            <input id="td2_2" name="abc" value="five" type="checkbox">
                            <label for="td2_2">Keep me logged</label>
                          </div>
                        </div>
                        <div class="aon-login-opright">
                          <a href="#">Forget Password</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <button type="submit" class="site-button w-100">Submit <i class="feather-arrow-right"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!--Sign up Form-->
            <div id="Past" class="tab-pane">
              <div class="sf-tabs-content">
                <form class="aon-login-form" method="POST" action="{{route('register')}}"> @csrf <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="aon-inputicon-box">
                          <input class="form-control sf-form-control" name="fname" type="text" placeholder="First Name">
                          <i class="aon-input-icon fa fa-user"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div class="aon-inputicon-box">
                          <input class="form-control sf-form-control" name="lname" type="text" placeholder="Last Name">
                          <i class="aon-input-icon fa fa-user"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="aon-inputicon-box">
                          <input class="form-control sf-form-control" name="mobile" type="text" placeholder="Phone">
                          <i class="aon-input-icon fa fa-phone"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="aon-inputicon-box">
                          <input class="form-control sf-form-control" name="email" type="email" placeholder="Email">
                          <i class="aon-input-icon fa fa-envelope-o"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="aon-inputicon-box">
                          <input class="form-control sf-form-control" name="password" type="password" placeholder="Password">
                          <i class="aon-input-icon fa fa-lock"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="aon-inputicon-box">
                          <input class="form-control sf-form-control" name="password_confirmation" type="password" placeholder="Confirm Password">
                          <i class="aon-input-icon fa fa-lock"></i>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group sign-term-con">
                        <div class="checkbox sf-radio-checkbox">
                          <input id="td33" name="terms" value="1" type="checkbox">
                          <label for="td33">I've read and agree with your <a href="#">Privacy Policy</a> and <a href="#">Terms & Conditions</a>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <button type="submit" class="site-button w-100">Submit <i class="feather-arrow-right"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Login Sign Up Modal -->