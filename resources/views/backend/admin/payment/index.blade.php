@extends('backend.admin.layouts.app') @section('content') <div class="main-content">
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
            <div class="card-body">
              <div class="live-preview">
                <div class="row gy-4">
                  <div class="col-xxl-6 col-md-6 sms_bo">
                    <div class="row gy-3 card payment_active_card">
                      <form method="post" action="{{ route('admin.payment-update') }}"> @csrf @php($data = get_setting('razor_pay')) @php($config = json_decode($data, true)) <h5 class="text-center">Razor pay</h5>
                        <h6>Razor pay</h6>
                        <div class="col-sm-12">
                        	<div class="form-check form-switch">
	                            <input class="form-check-input statusChange" type="checkbox" id=""  name="status" <?php if ($config['status'] == 1) echo "checked" ?>>
	                        </div>
                         <input type="hidden" name="payment_type" value="razor_pay">
                        </div>
                        <div class="col-sm-12">
                          <label for="valueInput" class="form-label">Key</label>
                          <input type="text" class="form-control" name="key" value="{{env('APP_MODE')!='demo'?$config['key']?? '':''}}">
                        </div>
                        <div class="col-sm-12">
                          <label for="valueInput" class="form-label">Secret Key</label>
                          <input type="text" class="form-control" name="secret_key" value="{{env('APP_MODE')!='demo'?$config['secret_key']?? '':''}}">
                        </div>
                        <div class="text-end my-3">
                          <button type="submit" class="btn btn-success w-sm">Set</button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-xxl-6 col-md-6 sms_bo">
                    <div class="row gy-3 card payment_active_card">
                      <form method="post" action="{{ route('admin.payment-update') }}"> @csrf @php($data = get_setting('paypal')) @php($config = json_decode($data, true)) <h5 class="text-center">Paypal</h5>
                        <h6>Paypal</h6>
                        <div class="col-sm-12">
                            <div class="form-check form-switch">
	                            <input class="form-check-input statusChange" type="checkbox" id=""  name="status" <?php if ($config['status'] == 1) echo "checked" ?>>
	                        </div>
                          <input type="hidden" name="payment_type" value="paypal">
                        </div>
                        <div class="col-sm-12">
                          <label for="valueInput" class="form-label">Choose Environment</label>
                          <select class="form-control" name="environment">
                          	<option value="sendbox" @if($config['environment'] == 'sendbox') selected @endif>Sendbox</option>
                          	<option value="live" @if($config['environment'] == 'live') selected @endif>Live</option>
                          <select>
                        </div>
                        <div class="col-sm-12">
                          <label for="valueInput" class="form-label">Paypal ClientID</label>
                          <input type="text" class="form-control" name="client_id" value="{{env('APP_MODE')!='demo'?$config['client_id']?? '':''}}">
                        </div>
                        <div class="col-sm-12">
                          <label for="valueInput" class="form-label">Paypal Secret</label>
                          <input type="text" class="form-control" name="secret_key" value="{{env('APP_MODE')!='demo'?$config['secret_key']?? '':''}}">
                        </div>
                        <div class="text-end my-3">
                          <button type="submit" class="btn btn-success w-sm">Set</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> @endsection