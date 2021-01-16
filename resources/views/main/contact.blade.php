<link rel="stylesheet" href="{{ asset('sass/main/contact/contact.css') }}">

@extends('template')

@section('content')
    <section class="intro">
        <div class="section-container">
            <div class="intro-text">
                <h2>Let's have a <span>chat.</span></h2>
            </div>
        </div>
    </section>
    <section class="contact">
        <form action="{{ URL::to('/query') }}" method="POST" class="contact-form">
            @csrf
            <p>Got any questions you want to ask?</p>
            <input type="text" placeholder="Name..." name="username">
            <input type="email" placeholder="Email..." name="useremail">
            <textarea placeholder="Say something..." name="userquery"></textarea>
            <input type="submit" value="Submit" name="submitBtn">
        </form>
        <div class="contact-img">
            <img src="{{ asset('images/main/contact/tel.jpg') }}" alt="red telephone">
        </div>
    </section>
@endsection