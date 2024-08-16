@extends('master')

@section('contents')
    <!-- Start Not Found Area -->
        <div class="not-found-area ptb-100">
            <div class="container">
                <div class="not-found-content">
                    <img src="{{ asset('assets/img/error.png') }}" alt="error-image">
                    <h3>Page Doesn't Exist</h3>
                    <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
                    <a href="{{ url('/') }}" class="default-btn"><span>Back to Home</span></a>
                </div>
            </div>
        </div>
        <!-- End Not Found Area -->
@endsection
