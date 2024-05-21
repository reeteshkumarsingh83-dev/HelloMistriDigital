@extends('frontend.layouts.app') 
@section('content')
<!-- Content -->
<div class="page-content">
  <section class="login section_pd">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-6 grid_center">
          <!--Login Form-->
          <div class="sf-tabs-content">
            <form class="aon-login-form" method="POST" action="{{route('register-save')}}"> @csrf <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="aon-inputicon-box">
                      <input class="form-control sf-form-control" name="fname" type="text" placeholder="First Name" value="{{ old('fname') }}">
                      <i class="aon-input-icon fa fa-user"></i>
                    </div> @error('fname') <span class="text-danger">First Name is required</span> @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="aon-inputicon-box">
                      <input class="form-control sf-form-control" name="lname" type="text" placeholder="Last Name" value="{{ old('lname') }}">
                      <i class="aon-input-icon fa fa-user"></i>
                    </div> @error('lname') <span class="text-danger">Last Name is required</span> @enderror
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="aon-inputicon-box">
                      <input class="form-control sf-form-control" name="mobile" id="mobile" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" placeholder="Phone" value="{{ old('mobile') }}">
                      <i class="aon-input-icon fa fa-phone"></i>
                    </div> @error('mobile') <span class="text-danger">{{$message}}</span> @enderror <span class="text-danger" id="mobile_error"></span>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="aon-inputicon-box">
                      <input class="form-control sf-form-control" name="email" id="email" type="email" placeholder="Email" value="{{ old('email') }}">
                      <i class="aon-input-icon fa fa-envelope-o"></i>
                    </div> @error('email') <span class="text-danger">{{$message}}</span> @enderror <span class="text-danger" id="email_error"></span>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="aon-inputicon-box">
                      <input class="form-control sf-form-control" name="password" id="pwd" type="password" placeholder="Password">
                      <i class="aon-input-icon fa fa-lock"></i>
                    </div> @error('password') <span class="text-danger">{{$message}}</span> @enderror
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="aon-inputicon-box">
                      <input class="form-control sf-form-control" name="password_confirmation" id="cnfpwd" type="password" placeholder="Confirm Password">
                      <i class="aon-input-icon fa fa-lock"></i>
                    </div> @error('password_confirmation') <span class="text-danger">{{$message}}</span> @enderror <span class="text-danger" id="pwd_error"></span>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group sign-term-con">
                    <div class="checkbox sf-radio-checkbox">
                      <input id="td33" name="terms" value="1" type="checkbox">
                      <label for="td33">I've read and agree with your <a href="#">Privacy Policy</a> and <a href="#">Terms & Conditions</a>
                      </label>
                    </div> @error('terms') <span class="text-danger">Kindly accept the terms ad conditions.</span> @enderror
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="site-button w-100">Submit <i class="feather-arrow-right"></i>
                  </button>
                </div>
                <div class="col-md-12 bottom_form">
                  <p>or use your email for <a href="{{route('login')}}">Login</a>
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
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
                          <img src="{{asset('images/step-icon/1.png')}}" alt="">
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
                          <img src="{{asset('images/step-icon/2.png')}}" alt="">
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
                          <img src="{{asset('images/step-icon/3.png')}}" alt="">
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
</div>
<!-- Content END-->
 @endsection