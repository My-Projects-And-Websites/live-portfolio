<link rel="stylesheet" href="{{ asset('sass/blog_details/blog_details.css') }}">

@extends('template')

@section('title', $blogs->title)

@section('content')
    <section class="blog">
        <div class="blog-container">
            <div class="blog-title">
                <h2>{{ $blogs->title }}</h2>
                <small>Posted at: {{ $blogs->created_at }}</small>
            </div>
            <div class="blog-img">
                <img src="{{ asset($blogs->blog_img) }}" alt="image for blog">
            </div>
            <div class="main-blog">
                <p id="main-blog-text">{!! str_replace('|', '<br>', $blogs->blog) !!}</p>
            </div>
            <div class="blog-socials">
                <a href="{{ URL::to('/instagram') }}"><ion-icon name="logo-instagram"></ion-icon></a>
                <a href="{{ URL::to('/twitter') }}"><ion-icon name="logo-twitter"></ion-icon></a>
                <a href="{{ URL::to('/linkedin') }}"><ion-icon name="logo-linkedin"></ion-icon></a>
                <a href="{{ URL::to('/github') }}"><ion-icon name="logo-github"></ion-icon></a>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/escape-text.js') }}"></script>
@endsection