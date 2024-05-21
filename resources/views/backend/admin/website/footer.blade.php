@extends('backend.admin.layouts.app') @section('content') <div class="main-content">
  <div class="page-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
            <h4 class="mb-sm-0">Footer Setup</h4>
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                  <a href="javascript: void(0);">Home</a>
                </li>
                <li class="breadcrumb-item active">Footer Section</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header align-items-center d-flex">
              <h4 class="card-title mb-0 flex-grow-1">Footer Setup</h4>
              <div class="flex-shrink-0">
                <div class="form-check form-switch form-switch-right form-switch-md">
                  <label for="form-grid-showcode" class="form-label text-muted">Show Code</label>
                  <input class="form-check-input code-switcher" type="checkbox" id="form-grid-showcode">
                </div>
              </div>
            </div>
            <form method="post" action="{{ route('footer-update') }}">
              @csrf
              <div class="card-body">
                <div class="live-preview">
                  <div class="row gy-4">
                    <div class="col-xxl-3 col-md-6">
                      <div>
                        <label for="colorPicker" class="form-label">Background Color</label>
                        <input type="color" class="form-control form-control-color w-100" name="footer_background_color" id="colorPicker" value="{{ get_setting('footer_background_color') }}">
                      </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                      <div>
                        <label for="colorPicker" class="form-label">Text Color</label>
                        <input type="color" class="form-control form-control-color w-100" id="colorPicker" name="footer_text_color" value="{{ get_setting('footer_text_color') }}">
                      </div>
                    </div>
                    <div class="col-xxl-3 col-md-6">
                      <div>
                        <label for="basiInput" class="form-label">Facebook(Link)</label>
                        <input type="text" class="form-control" name="facebook" id="basiInput" value="{{ get_setting('facebook') }}">
                      </div>
                    </div>
                    <!--end col-->
                    <div class="col-xxl-3 col-md-6">
                      <div>
                        <label for="labelInput" class="form-label">LinkedIn(Link)</label>
                        <input type="text" class="form-control" name="linkedin" id="labelInput" value="{{ get_setting('linkedin') }}">
                      </div>
                    </div>
                    <!--end col-->
                    <div class="col-xxl-3 col-md-6">
                      <div>
                        <label for="placeholderInput" class="form-label">Youtube(Link)</label>
                        <input type="text" class="form-control" name="youtube" id="placeholderInput" placeholder="Placeholder" value="{{ get_setting('youtube') }}">
                      </div>
                    </div>
                    <!--end col-->
                    <div class="col-xxl-3 col-md-6">
                      <div>
                        <label for="valueInput" class="form-label">Twitter(Link)</label>
                        <input type="text" class="form-control" name="twitter" id="valueInput" value="{{ get_setting('twitter') }}">
                      </div>
                    </div>

                    <div class="col-xxl-12 col-md-12">
                      <div>
                        <label for="valueInput" class="form-label">About Description</label>
                        <textarea name="footer_about_description" id="tiny_mce" class="tinymce-editor" placeholder="Type here.">{!! get_setting('footer_about_description') !!}</textarea>
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
</div> @endsection