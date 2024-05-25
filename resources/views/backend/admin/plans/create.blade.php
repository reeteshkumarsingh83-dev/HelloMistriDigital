@extends('backend.admin.layouts.app')

@section('content')
<div class="main-content">
  <div class="page-content web_config">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
            <h4 class="mb-sm-0">Service Section</h4>
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                  <a href="javascript: void(0);">Home</a>
                </li>
                <li class="breadcrumb-item active">Service</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header align-items-center d-flex">
              <h4 class="card-title mb-0 flex-grow-1">Service Section</h4>
              <div class="flex-shrink-0">
                <div class="form-check form-switch form-switch-right form-switch-md">
                  <label for="form-grid-showcode" class="form-label text-muted">Show Code</label>
                  <input class="form-check-input code-switcher" type="checkbox" id="form-grid-showcode">
                </div>
              </div>
            </div>
            <form method="post" action="{{ route('admin.plan-save') }}" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="live-preview">
                  <div class="row gy-4">
                    <div class="col-xxl-12 col-md-12 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Plan Title</label>
                        <input type="text" class="form-control" name="title" id="valueInput" value="{{ old('title') }}" placeholder="Plan Title">
                        @error('title')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>

                    <div class="col-xxl-6 col-md-6 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Category</label>
                        <select class="form-select" aria-label="Default select example" name="category_id">
                          @foreach(categories()  as $category)
                          <option value="2">{{ $category->name }}</option>
                          @endforeach
                        </select>
                        @error('category_id')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>

                    <div class="col-xxl-6 col-md-6 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Service</label>
                        <select class="form-select" aria-label="Default select example" name="service_id">
                          @foreach(services()  as $service)
                          <option value="2">{{ $service->name }}</option>
                          @endforeach
                        </select>
                        @error('service_id')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>

                    <div class="col-xxl-4 col-md-4 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Plan Price</label>
                        <input type="number" class="form-control" name="price" id="valueInput" value="{{ old('price') }}" placeholder="Plan Price">
                        @error('price')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>
                    <div class="col-xxl-4 col-md-4 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Time Duration/Year</label>
                        <select class="form-select" aria-label="Default select example" name="time_duration">
            						  <option value="1">1</option>
            						  <option value="2">2</option>
            						</select>
                        @error('time_duration')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>
                    <div class="col-xxl-4 col-md-4 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Affordable Amount/Per Days</label>
                        <input type="number" class="form-control" name="affordable_amount" id="valueInput" value="{{ old('affordable_amount') }}" placeholder="Affordable Amount/Per Days">
                        @error('affordable_amount')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>

                    <div class="col-xxl-8 col-md-8 col-12">
                      <div id="dynamicFieldsContainer">
                        <div class="dynamic_section col-sm-8 bordered">
                          <div class="row mb-3">
                            <label for="valueInput" class="form-label">Benefits Type</label>
                            <div class="col-sm-10 input-group">
                              <input name="benefits[]"  type="text" class="form-control product-name">
                              <div class="input-group-append">
                                <button class="btn btn-outline-secondary" onclick="addFields()" type="button">Add More</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-end my-3">
                    <button type="submit" class="btn btn-success w-sm">Save</button>
                  </div>
                </div>
              </div>
            </form>  
        </div>
      </div>
    </div>
  </div>
</div> 
<script>
    let productCounter = 1;
    function addFields() {
    productCounter++;
    const dynamicFieldsContainer = document.getElementById('dynamicFieldsContainer');
    const newProductDiv = document.createElement('div');
    newProductDiv.classList.add('dynamic_section', 'col-sm-8', 'bordered');
    newProductDiv.innerHTML = `
        <div class="row mb-3">
          <div class="col-sm-6 input-group">
            <input type="text" name="benefits[]" class="form-control product-name">
            <div class="input-group-append">
              <button class="btn btn-outline-danger" onclick="removeField(this)" type="button">Remove</button>
            </div>
          </div>
        </div>
      `;
      dynamicFieldsContainer.appendChild(newProductDiv);
    }

  function removeField(button) {
      const productDiv = button.closest('.dynamic_section');
      productDiv.remove();
  }
  
  </script>
@endsection