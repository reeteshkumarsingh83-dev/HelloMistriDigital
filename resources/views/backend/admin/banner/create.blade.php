@extends('backend.admin.layouts.app')

@section('content')
<div class="main-content">
  <div class="page-content web_config">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
            <h4 class="mb-sm-0">Banner Section</h4>
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                  <a href="javascript: void(0);">Home</a>
                </li>
                <li class="breadcrumb-item active">Banner</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header align-items-center d-flex">
              <h4 class="card-title mb-0 flex-grow-1">Banner Section</h4>
              <div class="flex-shrink-0">
                <div class="form-check form-switch form-switch-right form-switch-md">
                  <label for="form-grid-showcode" class="form-label text-muted">Show Code</label>
                  <input class="form-check-input code-switcher" type="checkbox" id="form-grid-showcode">
                </div>
              </div>
            </div>
            <form method="post" action="{{ route('admin.banner-save') }}" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="live-preview">
                  <div class="row gy-4">
                    <div class="col-xxl-6 col-md-6 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Banner Title</label>
                        <input type="text" class="form-control" name="title" id="valueInput" value="{{ old('title') }}" placeholder="Banner Title">
                        @error('title')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>

                    <div class="col-xxl-6 col-md-6 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Banner Url</label>
                        <input type="text" class="form-control" name="url" id="" value="{{ old('url') }}" placeholder="Banner Url">
                        @error('page_url')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>

                    <div class="col-xxl-12 col-md-12 col-12">
                      <div class="card card_logo">
                        <label for="valueInput" class="form-label">Banner</label>
                        <input type="file" class="form-control" name="banner" id="valueInput">
                        @error('banner')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
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
@endsection