@extends('backend.admin.layouts.app')

@section('content')
<div class="main-content">
  <div class="page-content">
    <div class="container-fluid">
     <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Pages <a href="{{ route('admin.banner-create') }}"><button class="btn btn-sm bg-success text-white">Create New</button></a></h4>
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
                                                <th scope="col">ID</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Url</th>
                                                <th scope="col">Banner</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                           <?php $i = 0 ?>
                                             @foreach($banners as $banner)
                                           <?php $i++ ?>
                                           <tbody id="uid{{$banner->id}}">
                                            <tr>
                                                <td class="fw-medium">{{ $i }}</td>
                                                <td>{{ $banner->title }}</td>
                                                <td>{{ $banner->url }}</td>
                                                <td><i class="ri-checkbox-circle-line align-middle text-success"></i> 
                                                <img src="{{ get_upload_image('banners/'.$banner->banner) ?? ''}}" class="get_upload_image" alt="image">
                                                </td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="SwitchCheck1" checked="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-3 flex-wrap">
                                                        <a href="{{ route('admin.banner-edit',$banner->id) }}" class="link-success fs-15"><i class="ri-edit-2-line"></i></a>
                                                        <a href="javascript:void(0);" class="link-danger fs-15"><i class="ri-delete-bin-line" onclick="BannerDelete({{ $banner->id }})"></i></a>
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
</div>
<script>
    function BannerDelete(id) {
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
                    url : "banner-delete/"+id,
                    type : "GET",
                    data:{
                        _token : $("input[name=_token]").val(),
                    },
                    success:function(respone){
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

@endsection