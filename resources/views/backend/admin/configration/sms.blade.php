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
              <div class="col-sm">
	                <h5 class="card-title mb-0">Order History</h5>
	            </div>
	            <div class="col-sm-auto">
	                <div class="d-flex gap-1 flex-wrap">
	                    <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Create Order</button>
	                </div>
	            </div>
              <div class="flex-shrink-0">
                <div class="form-check form-switch form-switch-right form-switch-md">
                  <label for="form-grid-showcode" class="form-label text-muted">Show Code</label>
                  <input class="form-check-input code-switcher" type="checkbox" id="form-grid-showcode">
                </div>
              </div>
            </div>
            <form method="post" action="">
              @csrf
              <div class="card-body">
                <div class="live-preview">
                  <div class="row gy-4">
                    <div class="col-xxl-3 col-md-6 sms_bo">

                        <label for="colorPicker" class="form-label">Sid</label>
                        <input type="text" class="form-control form-control-color w-100" id="colorPicker" name="favicon" value="">

                    </div>
                    <div class="col-xxl-3 col-md-6 sms_bo">
                             <label for="colorPicker" class="form-label">Action</label>
						      <input type="radio" id="contactChoice1" name="contact" value="email" />
						      <label for="contactChoice1">Email</label>
						      <input type="radio" id="contactChoice2" name="contact" value="phone" />
						      <label for="contactChoice2">Phone</label>
						      <input type="radio" id="contactChoice3" name="contact" value="mail" />
						      <label for="contactChoice3">Mail</label>
						    </div>


                    </div>
                  </div>
                  <div class="text-end mb-3">
                    <button type="submit" class="btn btn-success w-sm">Submit</button>
                  </div>
                </div>
              </div>
            </form>  
        </div>
      </div>
    </div>
  </div>
</div> @endsection