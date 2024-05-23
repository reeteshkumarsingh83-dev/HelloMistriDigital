@extends('backend.admin.layouts.app')

@section('content')
<div class="main-content">
  <div class="page-content web_config">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
            <h4 class="mb-sm-0">Category Section</h4>
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                  <a href="javascript: void(0);">Home</a>
                </li>
                <li class="breadcrumb-item active">Category</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header align-items-center d-flex">
              <h4 class="card-title mb-0 flex-grow-1">Category Section</h4>
              <div class="flex-shrink-0">
                <div class="form-check form-switch form-switch-right form-switch-md">
                  <label for="form-grid-showcode" class="form-label text-muted">Show Code</label>
                  <input class="form-check-input code-switcher" type="checkbox" id="form-grid-showcode">
                </div>
              </div>
            </div>
            <form method="post" action="{{ route('admin.category-update') }}" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="category_id" value="{{ $category->id }}">
              <div class="card-body">
                <div class="live-preview">
                  <div class="row gy-4">
                    <div class="col-xxl-4 col-md-4 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="valueInput" value="{{ $category->name }}" placeholder="Name">
                        @error('name')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>
                    <div class="col-xxl-4 col-md-4 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Choose priority number</label>
                        <select class="form-select" aria-label="Default select example" name="priority_number">
						  <option value="0">0</option>
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						</select>
                        @error('priority_number')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>

                    <div class="col-xxl-4 col-md-4 col-12">
                      <div class="">
                        <label for="valueInput" class="form-label">Icon</label>
                        <input type="file" class="form-control" name="icon" id="imgImputIcon">
                        @error('icon')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>

                    <div class="col-xxl-12 col-md-12 col-12">
                      <div class="category_icon">
                        <label for="valueInput" class="form-label">Icon</label>
                        <div class="image_box py-2">
                          <img  src="" class="img-fluid" alt="" id="iconImage"  onerror="this.src='{{ asset("images/img2.jpg") }}'">
                          <img  src="{{ get_upload_image('categories/'.$category->icon) ?? ''}}" class="img-fluid" alt=""  onerror="this.src='{{ asset("images/img2.jpg") }}'" style="height: 200px;">
                        </div>
                      </div>
                    </div>

                    <div class="col-xxl-4 col-md-4 col-12">
                      <div class="">
                        <label for="valueInput" class="form-label">Banner</label>
                        <input type="file" class="form-control" name="banner" id="imputImage">
                        @error('banner')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>

                    <div class="col-xxl-12 col-md-12 col-12">
                      <div class="category_icon">
                        <label for="valueInput" class="form-label">Banner</label>
                        <div class="image_box py-2">
                          <img  src="" class="img-fluid" alt="" id="bannerImage"  onerror="this.src='{{ asset("images/img2.jpg") }}'">
                          <img  src="{{ get_upload_image('categories/'.$category->banner) ?? ''}}" class="img-fluid" alt=""  onerror="this.src='{{ asset("images/img2.jpg") }}'" style="height: 200px; width: 300;">
                        </div>
                      </div>
                    </div>

                  </div>
                  <button class="btn btn-sm bg-success mt-2">Create</button>
                </div>
              </div>
            </form>  
        </div>
      </div>
    </div>
  </div>
</div> 
<script>
	imgImputIcon.onchange = evt => {
	  const [file] = imgImputIcon.files
	  if (file) {
	    iconImage.src = URL.createObjectURL(file)
	  }
	}
</script>
<script>
    imputImage.onchange = evt => {
      const [file] = imputImage.files
      if (file) {
        bannerImage.src = URL.createObjectURL(file)
      }
    }
</script>

@endsection