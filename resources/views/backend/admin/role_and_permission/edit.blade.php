@extends('backend.admin.layouts.app') @section('content') <div class="main-content">
  <div class="page-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
            <h4 class="mb-sm-0">Role</h4>
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                  <a href="javascript: void(0);">Home</a>
                </li>
                <li class="breadcrumb-item active">Role Form</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header align-items-center d-flex">
              <div class="flex-shrink-0">
                <div class="form-check form-switch form-switch-right form-switch-md">
                  <label for="form-grid-showcode" class="form-label text-muted">Show Code</label>
                  <input class="form-check-input code-switcher" type="checkbox" id="form-grid-showcode">
                </div>
              </div>
            </div>
            <form method="post" action="{{route('admin.role-and-permission-update',[$role['id']])}}"> @csrf <div class="card-body">
                <div class="live-preview">
                  <div class="row gy-4">
                    <div class="col-xxl-12 col-md-12 sms_bo">
                      <div class="row gy-3">
                        <div class="col-sm-12 col-md-12">
                          <label for="valueInput" class="form-label">Role name</label>
                          <input type="text" class="form-control" name="name" value="{{ $role->name }}" placeholder="Ex: Store">
                        </div>
                        <div class="col-sm-12 col-md-12">
                          <label for="valueInput" class="form-label">Module permission :</label>
                          <hr>
                        </div>
                        <div class="col-sm-12 col-md-12">
                          <div class="row">
                            <div class="col-sm-3">
                              <input type="checkbox" name="modules[]" value="order_management" {{in_array('order_management',(array)json_decode($role['module_access']))?'checked':''}}>
                              <label for="valueInput" class="form-label"> Order Management</label>
                              </br>
                              <input type="checkbox" name="modules[]" value="category_section" {{in_array('category_section',(array)json_decode($role['module_access']))?'checked':''}}>
                              <label for="valueInput" class="form-label"> Category section</label>
                              </br>
                              <input type="checkbox" name="modules[]" value="service_section" {{in_array('service_section',(array)json_decode($role['module_access']))?'checked':''}}>
                              <label for="valueInput" class="form-label"> Service Section</label>
                              </br>
                              <input type="checkbox" name="modules[]" value="brand_section" {{in_array('brand_section',(array)json_decode($role['module_access']))?'checked':''}}>
                              <label for="valueInput" class="form-label"> Brand Section</label>
                              </br>
                            </div>
                            <div class="col-sm-3">
                              <input type="checkbox" name="modules[]" value="contact_section" {{in_array('contact_section',(array)json_decode($role['module_access']))?'checked':''}}>
                              <label for="valueInput" class="form-label"> Contact section</label>
                              </br>
                              <input type="checkbox" name="modules[]" value="role_and_permission" {{in_array('role_and_permission',(array)json_decode($role['module_access']))?'checked':''}}>
                              <label for="valueInput" class="form-label"> Role and Permission</label>
                              </br>
                              <input type="checkbox" name="modules[]" value="web_config" {{in_array('web_config',(array)json_decode($role['module_access']))?'checked':''}}>
                              <label for="valueInput" class="form-label">Web Config Section</label>
                              </br>
                            </div>
                            <div class="col-sm-3">
                              <input type="checkbox" name="modules[]" value="plan_section" {{in_array('plan_section',(array)json_decode($role['module_access']))?'checked':''}}>
                              <label for="valueInput" class="form-label"> Plan Section</label>
                              </br>
                              <input type="checkbox" name="modules[]" value="customer_section" {{in_array('customer_section',(array)json_decode($role['module_access']))?'checked':''}}>
                              <label for="valueInput" class="form-label"> Customer Section</label>
                              </br>
                              <input type="checkbox" name="modules[]" value="vendor_section" {{in_array('vendor_section',(array)json_decode($role['module_access']))?'checked':''}}>
                              <label for="valueInput" class="form-label"> Vendor Section</label>
                              </br>
                              <input type="checkbox" name="modules[]" value="store_management" {{in_array('store_management',(array)json_decode($role['module_access']))?'checked':''}}>
                              <label for="valueInput" class="form-label"> Store Management</label>
                            </div>
                            <div class="col-sm-3">
                              <input type="checkbox" name="modules[]" value="page_management" {{in_array('page_management',(array)json_decode($role['module_access']))?'checked':''}}>
                              <label for="valueInput" class="form-label"> Page Management</label>
                              </br>
                              <input type="checkbox" name="modules[]" value="banner_management" {{in_array('banner_management',(array)json_decode($role['module_access']))?'checked':''}}>
                              <label for="valueInput" class="form-label"> Banner Management</label>
                              </br>
                              <input type="checkbox" name="modules[]" value="social_media" {{in_array('social_media',(array)json_decode($role['module_access']))?'checked':''}}>
                              <label for="valueInput" class="form-label"> Social Media</label>
                              </br>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-end mb-3">
                    <button type="submit" class="btn btn-success w-sm">Set</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <!-- end card-body -->
        </div>
      </div>
    </div>
  </div>
  @endsection