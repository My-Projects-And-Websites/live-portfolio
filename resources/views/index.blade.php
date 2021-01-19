<link rel="stylesheet" href="{{ asset('sass/index/index.css') }}">

@extends('template')

@section('content')
    <section class="hero">
        <div class="hero-container">
            <div class="hero-text">
                <h1>Hello. <span id="hero-title"></span></h1>
                <p>
                    To be specific, I'm a web developer. What I enjoy the most
                    in this field is seeing my imagination being projected using
                    lines of code and then converted into reality.
                    You are very welcome to browse my portfolio projects and
                    get in touch if you have any inquiries or projects you 
                    want to collab on.
                </p>
                <div class="cta">
                    <a href="{{ URL::to('/portfolio') }}">Discover</a>
                </div>
            </div>
            <div class="hero-portfolio">
                <div class="hero-gallery">
                    @foreach($images as $image)
                    <div class="{{ $image->classNo }}">
                        <img src="{{ $image->image }}" alt="$image->title">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="subscribe">
        <h3>Subscribe for updates!</h3>
        <form action="{{ URL::to('/sub') }}" method="POST" class="subscribe-form">
            <div class="subscribe-input">
                @csrf
                <input type="text" placeholder="Enter your email here..." name="subEmail">
                <input type="submit" value="Subscribe" name="subSubmit">
            </div>
        </form>
    </section> -->
@endsection