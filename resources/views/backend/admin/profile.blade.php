@extends('backend.admin.layouts.app') 
@section('content') 
<main id="main" class="main"> 
  @include('alert_message.notify_message') 
  <div class="pagetitle">
    <h1>Profile</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{ url('/') }}">Home</a>
        </li>
        <li class="breadcrumb-item active">Profile</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->
  <section class="section profile">
    <div class="row">
      <div class="col-xl-4">
        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center"> @if(Auth::check()) @if(Auth::user()->avatar != null) <img src="{{ static_assets(Auth::user()->avatar) }}" alt="Profile" class="rounded-circle"> @else <img src="{{ static_assets('img/avatar.webp') }}" alt="Profile" class="rounded-circle"> @endif @endif <h2>{{ Auth::user()->name }}</h2>
          </div>
        </div>
      </div>
      <div class="col-xl-8">
        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">
              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
              </li>
            </ul>
            <div class="tab-content pt-2">
              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">Profile Details</h5>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Full Name</div>
                  <div class="col-lg-9 col-md-8">{{ Auth::user()->name }}</div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Country</div>
                  <div class="col-lg-9 col-md-8">{{ Auth::user()->country }}</div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Address</div>
                  <div class="col-lg-9 col-md-8">{{ Auth::user()->address }}</div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Phone</div>
                  <div class="col-lg-9 col-md-8">{{ Auth::user()->phone }}</div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email</div>
                  <div class="col-lg-9 col-md-8">{{ Auth::user()->email }}</div>
                </div>
              </div>
              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                <!-- Profile Edit Form -->
                <form action="{{ route('admin.profile-update')}}" method="post" class="" enctype="multipart/form-data"> @csrf <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                    <div class="col-md-8 col-lg-9"> @if(Auth::check()) @if(Auth::user()->avatar != null) <img src="{{ static_assets(Auth::user()->avatar) }}" alt="Profile"> @else <img src="{{ static_assets('img/avatar.webp') }}" alt="Profile"> @endif @endif <div class="pt-2">
                        <a href="{{ route('admin.delete-profile-image') }}" class="btn btn-danger btn-sm" title="Remove my profile image">
                          <i class="bi bi-trash"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">File</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="file" id="formFile" name="avatar" class="form-control" id="fullName" value="{{ Auth::user()->avatar }}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="text" name="name" class="form-control" id="fullName" value="{{ Auth::user()->name }}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="text" name="country" class="form-control" id="Country" value="{{ Auth::user()->country }}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="text" name="address" class="form-control" id="Address" value="{{ Auth::user()->address }}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="text" name="phone" class="form-control" id="Phone" value="{{ Auth::user()->phone }}">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="email" name="email" class="form-control" id="Email" value="{{ Auth::user()->email }}">
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                  </div>
                </form>
                <!-- End Profile Edit Form -->
              </div>
              <div class="tab-pane fade pt-3" id="profile-change-password">
                <!-- Change Password Form -->
                <form action="{{ route('admin.profile-change-password') }}" method="post"> @csrf <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Old Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="old_password" type="password" class="form-control" id="newPassword"> @error('old_password') <small class="form-text text-danger">{{ $message }}</small> @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="password" type="password" class="form-control" id="newPassword"> @error('password') <small class="form-text text-danger">{{ $message }}</small> @enderror
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input type="password" name="password_confirmation" class="form-control" id="renewPassword"> @error('password_confirmation') <small class="form-text text-danger">{{ $message }}</small> @enderror
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                  </div>
                </form>
                <!-- End Change Password Form -->
              </div>
            </div>
            <!-- End Bordered Tabs -->
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- End #main --> 
@endsection