@extends('frontend.layouts.app')
@section('content')

    <!-- CONTENT START -->
    <div class="page-content">

        <div class="container">
            <div class="row mt-4">
                <div class="col-12">
                    <h4>Hello Mistri {{ $page->title }}</h4>
                    <h6><i>Last updated on June 21, 2022</i></h6>
                    <div class="p-2 m-2">
                        {!! $page->description !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT END -->
@endsection