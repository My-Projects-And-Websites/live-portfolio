<link rel="stylesheet" href="{{ asset('sass/main/blogs/blogs.css') }}">

@extends('template')

@section('title', 'Blogs')

@section('content')
    <section class="main-blog-section">
        <div class="blog-container">
            @foreach($blogs as $blog)
            <a href="{{ URL::to('/blog') }}/{{ $blog->id }}">
                <div class="blog-{{ $blog->id }}-main">
                    <div class="blog-img">
                        <img src="{{ $blog->blog_img }}" alt="thumbnail for blog {{ $blog->id }}">
                    </div>
                    <div class="blog-text">
                        <h3>{{ $blog->title }}</h3>
                        <p>{{ $blog->blog_desc }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </section>
@endsection