@extends('backend.admin.layouts.app') 
@section('content') 
<div class="main-content">
  <div class="page-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
            <h4 class="mb-sm-0">SMS Setup</h4>
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item">
                  <a href="javascript: void(0);">Home</a>
                </li>
                <li class="breadcrumb-item active">Sms Section</li>
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
            <form method="post" action="{{ route('admin.sms-save') }}">
              @csrf
               @php($data = get_setting('twilio_sms'))
               @php($config = json_decode($data, true))
              <div class="card-body">
                <div class="live-preview">
                  <div class="row gy-4">
                    <div class="col-xxl-3 col-md-6 sms_bo">
                      <div class="row gy-3">
                        <div class="col-sm-12">
                          <label for="valueInput" class="form-label">Sid</label>
                          <input type="text" class="form-control" name="sid" value="{{env('APP_MODE')!='demo'?$config['sid']?? '':''}}">
                         </div>

                         <div class="col-sm-12">
                          <label for="valueInput" class="form-label">Messaging Service Sid</label>
                          <input type="text" class="form-control"  name="messaging_service_sid" value="{{env('APP_MODE')!='demo'?$config['messaging_service_sid']?? '':''}}">
                         </div>

                         <div class="col-sm-12">
                          <label for="valueInput" class="form-label">Token</label>
                          <input type="text" class="form-control "  name="token" value="{{env('APP_MODE')!='demo'?$config['token']?? '':''}}">
                         </div>

                         <div class="col-sm-12">
                          <label for="valueInput" class="form-label">From</label>
                          <input type="text" class="form-control"  name="from" value="{{env('APP_MODE')!='demo'?$config['from']?? '':''}}">
                         </div>
                      </div>

                    </div>
                    <div class="col-xxl-3 col-md-6 sms_bo">
                      <div class="row">
                        <div class="col-sm-12">
                       <label for="valueInput" class="form-label text-success">Twilio sms</label></br>
                        <div class="form-check form-switch">
                            <input class="form-check-input statusChange" type="checkbox" id=""  name="status" <?php if ($config['status'] == 1) echo "checked" ?>>
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
      </div>
    </div>
  </div>
</div> @endsection