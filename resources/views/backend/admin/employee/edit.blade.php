@extends('backend.admin.layouts.app')

@section('content')
<div class="main-content">
  <div class="page-content web_config">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
            <h4 class="mb-sm-0">Employee Section</h4>
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                  <a href="javascript: void(0);">Home</a>
                </li>
                <li class="breadcrumb-item active">Employee</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header align-items-center d-flex">
              <h4 class="card-title mb-0 flex-grow-1">Employee Section</h4>
              <div class="flex-shrink-0">
                <div class="form-check form-switch form-switch-right form-switch-md">
                  <label for="form-grid-showcode" class="form-label text-muted">Show Code</label>
                  <input class="form-check-input code-switcher" type="checkbox" id="form-grid-showcode">
                </div>
              </div>
            </div>
            <form method="post" action="{{ route('admin.employee-update') }}" enctype="multipart/form-data">
            	@csrf
              <input type="hidden" name="employee_edit" value="{{ $employee->id }}">
              <div class="card-body">
                <div class="live-preview">
                  <div class="row gy-4">
                    <div class="col-xxl-6 col-md-6 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="valueInput" value="{{ $employee->name }}" placeholder="Name">
                        @error('name')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>
                    <div class="col-xxl-6 col-md-6 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Phone</label>
                        <input type="number" class="form-control" name="phone" value="{{ $employee->phone }}" placeholder="Phone">
                        @error('phone')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>
                    <div class="col-xxl-6 col-md-6 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="{{ $employee->email }}" placeholder="Email" readonly>
                        @error('email')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>
                    <div class="col-xxl-6 col-md-6 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Role</label>
                        <select class="form-select" aria-label="Default select example" name="admin_role_id">
                         @foreach($roles as $role) 	
						  <option value="{{ $role->id }}" @if($employee->admin_role_id == $role->id) selected @endif>{{ $role->name }}</option>
				         @endforeach
						</select>
                        @error('admin_role_id')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>

                    <div class="col-xxl-6 col-md-6 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Password</label>
                        <input type="text" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password">
                        @error('password')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>

                    <div class="col-xxl-6 col-md-6 col-12">
                      <div class="">
                        <label for="valueInput" class="form-label">Profile</label>
                        <input type="file" class="form-control" name="avatar" id="imgImputIcon">
                        @error('avatar')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>

                    <div class="col-xxl-12 col-md-12 col-12">
                      <div class="category_icon">
                        <label for="valueInput" class="form-label">Profile</label>
                        <div class="image_box py-2">
                          <img  src="" class="img-fluid" alt="" id="iconImage"  onerror="this.src='{{ asset("images/img2.jpg") }}'">
                          <img  src="{{ get_upload_image('profile/'.$role->avatar) ?? ''}}" class="img-fluid" alt=""  onerror="this.src='{{ asset("images/img2.jpg") }}'" style="height: 200px; width: 300;">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
	imgImputIcon.onchange = evt => {
	  const [file] = imgImputIcon.files
	  if (file) {
	    iconImage.src = URL.createObjectURL(file)
	  }
	}
</script>
@endsection