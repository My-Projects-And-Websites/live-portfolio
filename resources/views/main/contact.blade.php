<link rel="stylesheet" href="{{ asset('sass/main/contact/contact.css') }}">

@extends('template')

@section('content')
    <section class="intro">
        <div class="section-container">
            <div class="intro-text">
                <h2>Get in touch: <a href="mailto:jimm@jimminc.tech">jimm<br>@jimminc.tech</a></h2>
            </div>
        </div>
    </section>
    <section class="contact">
        <form action="{{ URL::to('/query') }}" method="POST" class="contact-form" data-aos="fade-up" data-aos-duration="1000">
            @csrf
            <div class="form-elem">
                <label for="username">Name:</label>
                <input type="text" placeholder="Name..." name="username" id="text-input">
                <small class="text-input-error">Please enter a valid name.</small>
            </div>
            <div class="form-elem">
                <label for="useremail">Email:</label>
                <input type="email" placeholder="Email..." name="useremail" id="email-input">
                <small class="email-input-error">Please enter a valid email.</small>
            </div>
            <div class="form-elem">
                <label for="userquery">Message:</label>
                <textarea placeholder="Say something..." name="userquery" id="msg-input"></textarea>
                <small class="msg-input-error">Please enter your message.</small>
            </div>
            <div class="form-elem">
                <input type="submit" value="Submit" name="submitBtn">
            </div>
        </form>
        <div class="contact-img">
            <img src="{{ asset('images/main/contact/tel.jpg') }}" alt="red telephone">
        </div>
    </section>

    <script src="{{ asset('js/validation.js') }}"></script>
@endsection