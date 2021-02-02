<link rel="stylesheet" href="{{ asset('sass/index/index.css') }}">

@extends('template')

@section('title', 'Web Professional At Your Service')

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
        </div>
    </section>
    <section class="latest-blogs">
        <div class="blogs-container">
            <h2>Latest Blogs</h2>
            <div class="blogs">
                @foreach($blogs_index as $blog)
                <a href="{{ URL::to('/blog') }}/{{ $blog->id }}" class="go-to-blog">
                    <div class="blog">
                        <div class="blog-img">
                            <img src="{{ $blog->blog_img }}" alt="introduction to JIMMINC Web Services">
                        </div>
                        <h3 class="blog-title">{{ $blog->title }}</h3>
                        <p class="blog-desc">{{ $blog->blog_desc }}</p>
                    </div>
                </a>
                @endforeach
            </div>
            <a href="{{ URL::to('/blogs') }}" class="blog-cta">See All</a>
        </div>
    </section>
    <section class="testimonials">
        @foreach($testimonials as $testimonial)
        <div class="testimonials-container">
            <div class="testimonials-text">
                <blockquote>"{{ $testimonial->testimonial }}"</blockquote>
            </div>
            <div class="testimonials-details">
                <div class="testimonials-details-text">                
                    <h3>{{ $testimonial->fname }} {{ $testimonial->lname }}</h3>
                    <small>{{ $testimonial->role }} at {{ $testimonial->company }}</small>
                </div>
                <a class="testimonials-details-url" href="{{ $testimonial->company_url }}" rel="nofollow">Visit</a>
            </div>
        </div>
        @endforeach
    </section>

    <script src="{{ asset('js/typewriterjs-master/dist/core.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/typewriter.js') }}"></script>
@endsection