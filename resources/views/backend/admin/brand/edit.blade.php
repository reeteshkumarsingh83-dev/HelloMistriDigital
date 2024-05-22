@extends('backend.admin.layouts.app')

@section('content')
<div class="main-content">
  <div class="page-content web_config">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
            <h4 class="mb-sm-0">Brand Section</h4>
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                  <a href="javascript: void(0);">Home</a>
                </li>
                <li class="breadcrumb-item active">Brand</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header align-items-center d-flex">
              <h4 class="card-title mb-0 flex-grow-1">Brand Section</h4>
              <div class="flex-shrink-0">
                <div class="form-check form-switch form-switch-right form-switch-md">
                  <label for="form-grid-showcode" class="form-label text-muted">Show Code</label>
                  <input class="form-check-input code-switcher" type="checkbox" id="form-grid-showcode">
                </div>
              </div>
            </div>
            <form method="post" action="{{ route('admin.update-brand') }}" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="brand_id" value="{{ $brand_data->id }}">
              <div class="card-body">
                <div class="live-preview">
                  <div class="row gy-4">
                    <div class="col-xxl-6 col-md-6 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="valueInput" value="{{ $brand_data->name }}" placeholder="Name">
                        @error('name')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>

                     <div class="col-xxl-6 col-md-6 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Category</label>
                        <select class="form-select" aria-label="Default select example" name="category_id">
                          @foreach(categories() as $category)	
              						  <option value="{{ $category->id }}"  @if($category->id == $brand_data->category_id) selected @endif>{{ $category->name }}</option>
              						  @endforeach
              						 </select>
                         @error('category_id')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>

                    <div class="col-xxl-6 col-md-6 col-12">
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
                          <img  src="{{ get_upload_image('brands/'.$brand_data->icon) ?? ''}}" class="img-fluid" alt=""  onerror="this.src='{{ asset("images/img2.jpg") }}'" style="height: 200px;">
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

@endsection