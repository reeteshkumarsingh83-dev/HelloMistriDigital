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
            <form method="post" action="{{ route('admin.role-and-permission-set') }}"> @csrf <div class="card-body">
                <div class="live-preview">
                  <div class="row gy-4">
                    <div class="col-xxl-12 col-md-12 sms_bo">
                      <div class="row gy-3">
                        <div class="col-sm-12 col-md-12">
                          <label for="valueInput" class="form-label">Role name</label>
                          <input type="text" class="form-control" name="name" value="" placeholder="Ex: Store">
                        </div>
                        <div class="col-sm-12 col-md-12">
                          <label for="valueInput" class="form-label">Module permission :</label>
                          <hr>
                        </div>
                        <div class="col-sm-12 col-md-12">
                          <div class="row">
                            <div class="col-sm-3">
                              <input type="checkbox" name="modules[]" value="order_management">
                              <label for="valueInput" class="form-label"> Order Management</label>
                              </br>
                              <input type="checkbox" name="modules[]" value="category_section">
                              <label for="valueInput" class="form-label"> Category section</label>
                              </br>
                              <input type="checkbox" name="modules[]" value="service_section">
                              <label for="valueInput" class="form-label"> Service Section</label>
                              </br>
                              <input type="checkbox" name="modules[]" value="brand_section">
                              <label for="valueInput" class="form-label"> Brand Section</label>
                              </br>
                            </div>
                            <div class="col-sm-3">
                              <input type="checkbox" name="modules[]" value="contact_section">
                              <label for="valueInput" class="form-label"> Contact section</label>
                              </br>
                              <input type="checkbox" name="modules[]" value="role_and_permission">
                              <label for="valueInput" class="form-label"> Role and Permission</label>
                              </br>
                              <input type="checkbox" name="modules[]" value="web_config">
                              <label for="valueInput" class="form-label">Web Config Section</label>
                              </br>
                            </div>
                            <div class="col-sm-3">
                              <input type="checkbox" name="modules[]" value="plan_section">
                              <label for="valueInput" class="form-label"> Plan Section</label>
                              </br>
                              <input type="checkbox" name="modules[]" value="customer_section">
                              <label for="valueInput" class="form-label"> Customer Section</label>
                              </br>
                              <input type="checkbox" name="modules[]" value="vendor_section">
                              <label for="valueInput" class="form-label"> Vendor Section</label>
                              </br>
                              <input type="checkbox" name="modules[]" value="store_management">
                              <label for="valueInput" class="form-label"> Store Management</label>
                            </div>
                            <div class="col-sm-3">
                              <input type="checkbox" name="modules[]" value="page_management">
                              <label for="valueInput" class="form-label"> Page Management</label>
                              </br>
                              <input type="checkbox" name="modules[]" value="banner_management">
                              <label for="valueInput" class="form-label"> Banner Management</label>
                              </br>
                              <input type="checkbox" name="modules[]" value="social_media">
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
          <div class="card-body">
            <div class="live-preview">
              <div class="row">
                <!--end col-->
                <div class="col-xl-12">
                  <div class="table-responsive mt-4 mt-xl-0">
                    <table class="table table-hover table-striped align-middle table-nowrap mb-0">
                      <thead>
                        <tr>
                          <th scope="col">SL</th>
                          <th scope="col">NAME</th>
                          <th scope="col">MODULE</th>
                          <th scope="col">CREATED AT</th>
                          <th scope="col">STATUS</th>
                          <th scope="col">ACTION</th>
                        </tr>
                      </thead> <?php $i = 0 ?> @foreach($roles as $role) <?php $i++ ?> <tbody id="uid{{$role->id}}">
                        <tr>
                          <td class="fw-medium">{{ $i }}</td>
                          <td>{{ $role->name }}</td>
                          <td> @if($role['module_access']!=null) @foreach((array)json_decode($role['module_access']) as $m) {{str_replace('_',' ',$m)}}
                            <br> @endforeach @endif
                          </td>
                          <td>{{ $role->created_at }}</td>
                          <td>
                            <div class="form-check form-switch">
                              <input class="form-check-input statusChange" type="checkbox" id="{{$role->id}}" <?php if ($role->status == 1) echo "checked" ?>>
                            </div>
                          </td>
                          <td>
                            <div class="hstack gap-3 flex-wrap">
                              <a href="{{ route('admin.social-media-edit',$role->id) }}" class="link-success fs-15">
                                <i class="ri-edit-2-line"></i>
                              </a>
                              <a href="javascript:void(0);" class="link-danger fs-15">
                                <i class="ri-delete-bin-line" onclick="RoleDelete({{$role->id}})"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                      </tbody> @endforeach
                    </table>
                  </div>
                </div>
                <!--end col-->
              </div>
              <!--end row-->
            </div>
          </div>
          <!-- end card-body -->
        </div>
      </div>
    </div>
  </div>
  <script>
    function RoleDelete(id) {
      swal({
        title: "Are you sure?",
        text: "You will not be able to recover this data!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      }).then((willDelete) => {
        if (willDelete) {
          $.ajax({
            url: "role-and-permission-delete/" + id,
            type: "GET",
            data: {
              _token: $("input[name=_token]").val(),
            },
            success: function(respone) {
              toastr.success('Role Permission delete successfully');
              $('#uid' + id).remove();
            }
          });
        } else {
          swal("Your product file is safe!");
        }
      });
      return false;
    }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script>
    $(document).on('change', '.statusChange', function() {
      var id = $(this).attr("id");
      if ($(this).prop("checked") == true) {
        var status = 1;
      } else if ($(this).prop("checked") == false) {
        var status = 0;
      }
      $.ajax({
        url: "{{route('admin.role-and-permission-status')}}",
        method: 'POST',
        data: {
          id: id,
          "_token": "{{ csrf_token() }}",
          status: status
        },
        success: function(data) {
          if (data == 1) {
            toastr.success('Role status update successfully');
          } else {
            toastr.success('Role status update successfully');
          }
        }
      });
    });
  </script> 
  @endsection