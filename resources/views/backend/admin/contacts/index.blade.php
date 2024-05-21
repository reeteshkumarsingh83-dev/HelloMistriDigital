@extends('backend.layouts.app')

@section('content')
<main id="main" class="main">
  <section class="section">
  @include('alert_message.notify_message')
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-10">
                <h5 class="card-title">All Contacts</h5>
              </div>
            </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <?php $i = 0 ?>
            @foreach($contacts as $contact)
            <?php $i++ ?> 
            <tbody id="uid{{$contact->id}}">
              <tr>
                <td>{{ $i }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->phone }}</td>
                <td>
                  <div class="listing_icon">
                    <button class="item" data-placement="top" title="Send" data-placement="top" title="View"  data-bs-toggle="modal"  data-url="" id="reply">
                       <i class="bi bi-check-lg"></i>
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
            @endforeach
          </table>
          <!-- End Default Table Example -->
          {!! $contacts->links('pagination::bootstrap-4') !!}  
          </div>
        </div>
      </div>
    </div>
  </section>
</main><!-- End #main -->

<!-- modal serction -->
@endsection
