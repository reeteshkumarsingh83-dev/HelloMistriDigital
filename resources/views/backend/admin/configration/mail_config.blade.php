@extends('backend.admin.layouts.app')
 @section('content') 
<div class="main-content">
  <div class="page-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
            <h4 class="mb-sm-0">Mail Setup</h4>
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                  <a href="javascript: void(0);">Home</a>
                </li>
                <li class="breadcrumb-item active">Mail Section</li>
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
            <form method="post" action="{{ route('admin.mail-config-save') }}">
              @csrf
               @php($data = get_setting('mail_config_smtp'))
               @php($config = json_decode($data, true))
              <div class="card-body">
                <div class="live-preview">
                  <div class="row gy-4">
                    <div class="col-xxl-3 col-md-6 sms_bo">
                      <div class="row gy-3">
                        <div class="col-sm-12">
                          <label for="valueInput" class="form-label">Mailer name</label>
                          <input type="text" class="form-control" name="name" value="{{env('APP_MODE')!='demo'?$config['name']?? '':''}}" placeholder="Mailer name">
                         </div>

                         <div class="col-sm-12">
                          <label for="valueInput" class="form-label">Host</label>
                          <input type="text" class="form-control"  name="host" value="{{env('APP_MODE')!='demo'?$config['host']?? '':''}}" placeholder="Host">
                         </div>

                         <div class="col-sm-12">
                          <label for="valueInput" class="form-label">Driver</label>
                          <input type="text" class="form-control" name="driver" value="{{env('APP_MODE')!='demo'?$config['driver']?? '':''}}" placeholder="Driver">
                         </div>

                         <div class="col-sm-12">
                          <label for="valueInput" class="form-label">Port</label>
                          <input type="text" class="form-control" name="port" value="{{env('APP_MODE')!='demo'?$config['port']?? '':''}}" placeholder="Port">
                         </div>

                         <div class="col-sm-12">
                          <label for="valueInput" class="form-label">Username</label>
                          <input type="text" class="form-control"  name="username" value="{{env('APP_MODE')!='demo'?$config['username']?? '':''}}" placeholder="Username">
                         </div>

                         <div class="col-sm-12">
                          <label for="valueInput" class="form-label">Email id</label>
                          <input type="text" class="form-control" name="email_id" value="{{env('APP_MODE')!='demo'?$config['email_id']?? '':''}}" placeholder="Email id">
                         </div>

                         <div class="col-sm-12">
                          <label for="valueInput" class="form-label">Encryption</label>
                          <input type="text" class="form-control"  name="encryption" value="{{env('APP_MODE')!='demo'?$config['encryption']?? '':''}}" placeholder="Tls">
                         </div>

                         <div class="col-sm-12">
                          <label for="valueInput" class="form-label">Password</label>
                          <input type="text" class="form-control" name="password" value="{{env('APP_MODE')!='demo'?$config['password']?? '':''}}" placeholder="Password">
                         </div>
                      </div>

                    </div>
                    <div class="col-xxl-3 col-md-6 sms_bo">
                      <div class="row">
                        <div class="col-sm-12">
                       <label for="valueInput" class="form-label text-success">Smtp mail config</label></br>
                        <div class="form-check form-switch">
                            <input class="form-check-input statusChange" type="checkbox" id="" name="status" <?php if ($config['status'] == 1) echo "checked" ?>>
                        </div>
                        </div>
                      </div>
    						    </div>
                    </div>
                  </div>
                  <div class="text-end mb-3">
                    <button type="submit" class="btn btn-success w-sm">Save</button>
                  </div>
                </div>
              </div>
            </form>  
        </div>
      </div>
    </div>
  </div>
</div> @endsection