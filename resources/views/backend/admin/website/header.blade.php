@extends('backend.admin.layouts.app') @section('content') <div class="main-content">
  <div class="page-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
            <h4 class="mb-sm-0">Header Setup</h4>
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                  <a href="javascript: void(0);">Home</a>
                </li>
                <li class="breadcrumb-item active">Header Section</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header align-items-center d-flex">
              <h4 class="card-title mb-0 flex-grow-1">Header Setup</h4>
              <div class="flex-shrink-0">
                <div class="form-check form-switch form-switch-right form-switch-md">
                  <label for="form-grid-showcode" class="form-label text-muted">Show Code</label>
                  <input class="form-check-input code-switcher" type="checkbox" id="form-grid-showcode">
                </div>
              </div>
            </div>
            <form method="post" action="{{ route('header-update') }}">
              @csrf
              <div class="card-body">
                <div class="live-preview">
                  <div class="row gy-4">
                    <div class="col-xxl-3 col-md-6">
                      <div>
                        <label for="colorPicker" class="form-label">Background Color</label>
                        <input type="color" class="form-control form-control-color w-100" name="header_background_color" id="colorPicker" value="{{ get_setting('header_background_color') }}">
                      </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                      <div>
                        <label for="colorPicker" class="form-label">Text Color</label>
                        <input type="color" class="form-control form-control-color w-100" id="colorPicker" name="header_text_color" value="{{ get_setting('header_text_color') }}">
                      </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                      <div>
                        <label for="colorPicker" class="form-label">Website Logo</label>
                        <input type="file" class="form-control form-control-color w-100" id="colorPicker" name="frontend_logo" value="{{ get_setting('frontend_logo') }}">
                         <img src="{{ static_assets(get_setting('frontend_logo')) }}" class="img-fluid" alt="" style="height:70px; padding-top:10px;">

                      </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                      <div>
                        <label for="colorPicker" class="form-label">Website Icon</label>
                        <input type="file" class="form-control form-control-color w-100" id="colorPicker" name="favicon" value="{{ get_setting('favicon') }}">
                         <img src="{{ static_assets(get_setting('favicon')) }}" class="img-fluid" alt="" style="height:70px; padding-top:10px;">

                      </div>
                    </div>
                  </div>
                  <button class="btn btn-sm bg-success mt-2">Update</button>
                </div>
              </div>
            </form>  
        </div>
      </div>
    </div>
  </div>
</div> @endsection