@extends('backend.admin.layouts.app')

@section('content')
<div class="main-content">
  <div class="page-content web_config">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
            <h4 class="mb-sm-0">Social media form</h4>
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                  <a href="javascript: void(0);">Home</a>
                </li>
                <li class="breadcrumb-item active">Social media form</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header align-items-center d-flex">
              <h4 class="card-title mb-0 flex-grow-1">Social media form</h4>
              <div class="flex-shrink-0">
                <div class="form-check form-switch form-switch-right form-switch-md">
                  <label for="form-grid-showcode" class="form-label text-muted">Show Code</label>
                  <input class="form-check-input code-switcher" type="checkbox" id="form-grid-showcode">
                </div>
              </div>
            </div>
            <form method="post" action="{{ route('admin.social-media-save') }}" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="live-preview">
                  <div class="row gy-4">
                    <div class="col-xxl-6 col-md-6 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="valueInput" value="{{ old('name') }}" placeholder="Name">
                        @error('title')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>

                    <div class="col-xxl-6 col-md-6 col-12">
                      <div>
                        <label for="valueInput" class="form-label">Social Media Url</label>
                        <input type="text" class="form-control" name="social_media_url" id="" value="{{ old('social_media_url') }}" placeholder="Enter Social media link">
                        @error('social_media_url')
                             <small class="form-text text-danger">{{ $message }}</small>
                         @enderror
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-sm bg-success mt-2">Save</button>
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
                    <h4 class="card-title mb-0 flex-grow-1">Category table ({{ $socialMedias->count() }})</h4>
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
                                                <th scope="col">SL</th>
                                                <th scope="col">NAME</th>
                                                <th scope="col">LINK</th>
                                                <th scope="col">STATUS</th>
                                                <th scope="col">ACTION</th>
                                            </tr>
                                        </thead>
                                           <?php $i = 0 ?>
                                             @foreach($socialMedias as $socialMedia)
                                           <?php $i++ ?>
                                           <tbody id="uid{{$socialMedia->id}}">
                                            <tr>
                                                <td class="fw-medium">{{ $i }}</td>
                                                <td>{{ $socialMedia->name }}</td>
                                                <td>{{ $socialMedia->social_media_url }}</td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input statusChange" type="checkbox" id="{{$socialMedia->id}}" <?php if ($socialMedia->status == 1) echo "checked" ?>>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-3 flex-wrap">
                                                        <a href="{{ route('admin.social-media-edit',$socialMedia->id) }}" class="link-success fs-15"><i class="ri-edit-2-line"></i></a>
                                                        <a href="javascript:void(0);" class="link-danger fs-15"><i class="ri-delete-bin-line" onclick="PageDelete({{$socialMedia->id}})"></i></a>
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
                    url : "/page/social-media-delete/"+id,
                    type : "GET",
                    data:{
                        _token : $("input[name=_token]").val(),
                    },
                    success:function(respone){
                        toastr.success('social media deleted successfully');
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $(document).on('change', '.statusChange', function () {
        var id = $(this).attr("id");
        if ($(this).prop("checked") == true) {
            var status = 1;
        } else if ($(this).prop("checked") == false) {
            var status = 0;
        }
        $.ajax({
            url: "{{route('admin.social-media-status')}}",
            method: 'POST',
            data: {
                id: id,
                "_token": "{{ csrf_token() }}",
                status: status
            },
            success: function (data) {
                if (data == 1) {
                   toastr.success('social media status update successfully');
                } else {
                    toastr.success('social media status update successfully');
                }
            }
        });
    });
</script>
@endsection