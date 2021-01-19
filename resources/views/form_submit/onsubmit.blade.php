<link rel="stylesheet" href="{{ asset('sass/form_submit/onsubmit.css') }}">

@extends('template')

@section('content')
    <div class="modal">
        <div class="modal-container">
            <h2>Speak to you <span>soon.</span></h2>
            <p>
                Thank you for submitting your inquiry. We'll get back to you as soon as we can.
            </p>
            <div class="cta">
                <a href="{{ URL::to('/portfolio') }}">View Portfolio</a>
                <a href="{{ URL::to('/') }}">Home</a>
            </div>
        </div>
    </div>
@endsection