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
            <form method="post" action="{{ route('admin.sub-category-save') }}" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="live-preview">
                  <div class="row gy-4">
                    <div class="col-xxl-4 col-md-4 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Sub Category Name</label>
                        <input type="text" class="form-control" name="name" id="valueInput" value="{{ old('name') }}" placeholder="Name">
                        @error('name')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>
                    <div class="col-xxl-4 col-md-4 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Main Category</label>
                        <select class="form-select" aria-label="Default select example" name="parent_id">
                        	@foreach($categories as $category)
						       <option value="{{ $category->id }}">{{ $category->name }}</option>
						    @endforeach
						</select>
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
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Category table ({{ $sub_categories->count() }})</h4>
                    <div class="flex-shrink-0">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                            <label for="hover-rows-showcode" class="form-label text-muted">Show Code</label>
                            <input class="form-check-input code-switcher" type="checkbox" id="hover-rows-showcode">
                        </div>
                    </div>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="live-preview">
                        <div class="row">
                           
                            <!--end col-->

                            <div class="col-xl-12">
                                <div class="table-responsive mt-4 mt-xl-0">
                                    <table class="table table-hover table-striped align-middle table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">CATEGORY ID</th>
                                                <th scope="col">NAME</th>
                                                <th scope="col">SLUG</th>
                                                <th scope="col">ICON</th>
                                                <th scope="col">PRIORITY</th>
                                                <th scope="col">STATUS</th>
                                                <th scope="col">ACTION</th>
                                            </tr>
                                        </thead>
                                           <?php $i = 0 ?>
                                             @foreach($sub_categories as $sub_category)
                                           <?php $i++ ?>
                                           <tbody id="uid{{$sub_category->id}}">
                                            <tr>
                                                <td class="fw-medium">{{ $i }}</td>
                                                <td>{{ $sub_category->name }}</td>
                                                <td>{{ $sub_category->slug }}</td>
                                                <td><i class="ri-checkbox-circle-line align-middle text-success"></i> 
                                                <img src="{{ get_upload_image('categories/'.$sub_category->icon) ?? ''}}" class="get_upload_image" alt="image">
                                                </td>
                                                <td>{{ $sub_category->priority_number }}</td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="SwitchCheck1" checked="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-3 flex-wrap">
                                                        <a href="{{ route('admin.edit-page',$sub_category->id) }}" class="link-success fs-15"><i class="ri-edit-2-line"></i></a>
                                                        <a href="javascript:void(0);" class="link-danger fs-15"><i class="ri-delete-bin-line" onclick="PageDelete({{$sub_category->id}})"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                             </tbody>
                                           @endforeach 
                                    </table>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
    </div>
  </div>
</div> 
<script>
    function PageDelete(id) {
        swal({
            title: "Are you sure?",
            text:  "You will not be able to recover this data!",
            icon:  "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                 $.ajax({
                    url : "page/data-delete/"+id,
                    type : "GET",
                    data:{
                        _token : $("input[name=_token]").val(),
                    },
                    success:function(respone){
                        toastr.success('Sub category delete successfully');
                        $('#uid'+id).remove();
                    }
                });
            } else {
                swal("Your product file is safe!");
            }
        });

        return false;
    }
</script>
<script>
	imgImputIcon.onchange = evt => {
	  const [file] = imgImputIcon.files
	  if (file) {
	    iconImage.src = URL.createObjectURL(file)
	  }
	}
</script>

@endsection