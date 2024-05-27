@extends('backend.admin.layouts.app') @section('content') 
<div class="main-content">
  <div class="page-content web_config">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
            <h4 class="mb-sm-0">Web Config Section</h4>
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                  <a href="javascript: void(0);">Home</a>
                </li>
                <li class="breadcrumb-item active">Web Config Section</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header align-items-center d-flex">
              <h4 class="card-title mb-0 flex-grow-1">Web Config Section</h4>
              <div class="flex-shrink-0">
                <div class="form-check form-switch form-switch-right form-switch-md">
                  <label for="form-grid-showcode" class="form-label text-muted">Show Code</label>
                  <input class="form-check-input code-switcher" type="checkbox" id="form-grid-showcode">
                </div>
              </div>
            </div>
            <form method="post" action="{{ route('admin.configration.update') }}" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="live-preview">
                  <div class="row gy-4">
                    <div class="col-xxl-4 col-md-4 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Company Name</label>
                        <input type="text" class="form-control" name="company_name" id="valueInput" value="{{ get_setting('company_name') }}" placeholder="Company Name">
                      </div>
                   </div>
                      <div class="col-xxl-4 col-md-4 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Company Email</label>
                        <input type="email" class="form-control" name="company_email" id="valueInput" value="{{ get_setting('company_email') }}" placeholder="Company Email">
                      </div>
                  </div>
                      <div class="col-xxl-4 col-md-4 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Company Phone</label>
                        <input type="number" class="form-control" name="phone" id="valueInput" value="{{ get_setting('phone') }}" placeholder="Phone">
                      </div>
                    </div>
                    <div class="col-xxl-4 col-md-4 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Shop address</label>
                        <input type="text" class="form-control" name="shop_address" id="valueInput" value="{{ get_setting('shop_address') }}" placeholder="Shop address">
                      </div>
                    </div>
                    <div class="col-xxl-4 col-md-4 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Country</label>
                        <input type="text" class="form-control" name="country" id="" value="{{ get_setting('country') }}" placeholder="Country">
                      </div>
                    </div>
                    <div class="col-xxl-4 col-md-4 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Rename company Copy right Text</label>
                        <input type="text" class="form-control" name="company_copy_right" id="valueInput" value="{{ get_setting('company_copy_right') }}" placeholder="Rename company Copy right">
                      </div>
                    </div>

                     <div class="col-md-4 col-12">
                        @php($pv  =  get_setting('phone_verification'))
                        <div class="form-group">
                            <label>Phone OTP
                                </label><small style="color: red">*</small>
                            <div class="input-group input-group-md-down-break">
                                <!-- Custom Radio -->
                                <div class="form-control">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" value="1"
                                               name="phone_verification"
                                               id="phone_verification_on" {{(isset($pv) && $pv==1)?'checked':''}}>
                                        <label class="custom-control-label"
                                               for="phone_verification_on">on</label>
                                    </div>
                                </div>
                                <!-- End Custom Radio -->

                                <!-- Custom Radio -->
                                <div class="form-control">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" value="0"
                                               name="phone_verification"
                                               id="phone_verification_off" {{(isset($pv) && $pv==0)?'checked':''}}>
                                        <label class="custom-control-label"
                                               for="phone_verification_off">off</label>
                                    </div>
                                </div>
                                <!-- End Custom Radio -->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-12">
                         @php($ev  =  get_setting('email_verification'))
                        <div class="form-group">
                            <label>email</label><small
                                style="color: red">*</small>
                            <div class="input-group input-group-md-down-break">
                                <!-- Custom Radio -->
                                <div class="form-control">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" value="1"
                                               name="email_verification"
                                               id="email_verification_on" {{$ev==1?'checked':''}}>
                                        <label class="custom-control-label"
                                               for="email_verification_on">on</label>
                                    </div>
                                </div>
                                <!-- End Custom Radio -->

                                <!-- Custom Radio -->
                                <div class="form-control">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" value="0"
                                               name="email_verification"
                                               id="email_verification_off" {{$ev==0?'checked':''}}>
                                        <label class="custom-control-label"
                                               for="email_verification_off">off</label>
                                    </div>
                                </div>
                                <!-- End Custom Radio -->
                            </div>
                        </div>
                    </div>


                    <div class="col-xxl-6 col-md-6 col-12">
                      <div class="card card_logo">
                        <label for="valueInput" class="form-label">Web Logo</label>
                        <div class="text-center py-2">
                          <img src="{{ admin_assets('images/settings/'.get_setting('web_logo')) }}" class="img-fluid" alt="" style="height:70px; padding-top:10px;">
                        </div>
                        <input type="file" class="form-control" name="web_logo" id="valueInput" value="{{ get_setting('web_logo') }}">
                         @error('web_logo')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>
                    <div class="col-xxl-6 col-md-6 col-12">
                      <div class="card card_logo">
                        <label for="valueInput" class="form-label">Web footer Logo</label>
                        <div class="text-center py-2">
                          <img src="{{ admin_assets('images/settings/'.get_setting('web_footer_logo')) }}" class="img-fluid" alt="" style="height:70px; padding-top:10px;">
                        </div>
                        <input type="file" class="form-control" name="web_footer_logo" id="valueInput">
                        @error('web_footer_logo')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>
                    <div class="col-xxl-6 col-md-6 col-12">
                      <div class="card card_logo">
                        <label for="valueInput" class="form-label">Web fav icon</label>
                        <div class="text-center py-2">
                          <img src="{{ admin_assets('images/settings/'.get_setting('web_fav_icon')) }}" class="img-fluid" alt="" style="height:70px; padding-top:10px;">
                        </div>
                        <input type="file" class="form-control" name="web_fav_icon" id="valueInput">
                        @error('web_fav_icon')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>
                     <div class="col-xxl-6 col-md-6 col-12">
                      <div class="card card_logo">
                        <label for="valueInput" class="form-label">Loader gif</label>
                        <div class="text-center py-2">
                          <img src="{{ admin_assets('images/settings/'.get_setting('loader_gif')) }}" class="img-fluid" alt="" style="height:70px; padding-top:10px;">
                        </div>
                        <input type="file" class="form-control" name="loader_gif" id="valueInput">
                        @error('loader_gif')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>
                    <div class="col-xxl-6 col-md-6 col-12">
                      <div>
                        <label for="colorPicker" class="form-label">Web color setup Primary</label>
                        <input type="color" class="form-control form-control-color w-100" name="web_color_primary" id="colorPicker" value="{{ get_setting('web_color_primary') }}">
                      </div>
                    </div>
                    <div class="col-xxl-6 col-md-6 col-12">
                      <div>
                        <label for="colorPicker" class="form-label">Web color setup Secondary</label>
                        <input type="color" class="form-control form-control-color w-100" name="web_color_secondary" id="colorPicker" value="{{ get_setting('web_color_secondary') }}">
                      </div>
                    </div>
                  </div>
                  <div class="text-end my-3">
                    <button type="submit" class="btn btn-success w-sm">Update</button>
                  </div>
                </div>
              </div>
            </form>  
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <script>
            document.write(new Date().getFullYear())
          </script> © Velzon.
        </div>
        <div class="col-sm-6">
          <div class="text-sm-end d-none d-sm-block"> Design & Develop by Themesbrand </div>
        </div>
      </div>
    </div>
  </footer>
</div>
    <script src="{{ admin_assets('js/tags-input.min.js')}}"></script>
    <script src="{{ admin_assets('js/select2.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $("#phone_verification_on").click(function () {
                @if(env('APP_MODE')!='demo')
                if ($('#email_verification_on').prop("checked") == true) {
                    $('#email_verification_off').prop("checked", true);
                    $('#email_verification_on').prop("checked", false);
                    const message = "Both Phone & Email verification can not be active at a time";
                    toastr.info(message);
                }
                @else
                call_demo();
                @endif
            });
            $("#email_verification_on").click(function () {
                if ($('#phone_verification_on').prop("checked") == true) {
                    $('#phone_verification_off').prop("checked", true);
                    $('#phone_verification_on').prop("checked", false);
                    const message = "Both Phone & Email verification can not be active at a time";
                    toastr.info(message);
                }
            });
        });
    </script>
 @endsection