<link rel="stylesheet" href="{{ asset('sass/main/about/about.css') }}">

@extends('template')

@section('content')
    <section class="intro">
        <div class="section-container">
            <div class="intro-text">
                <h2><span>JIMMINC:</span><br> a business for web services.</h2>
            </div>
        </div>
    </section>
    <main> 
        <section class="me" id="intro">
            <div class="me-img">
                <img src="{{ asset('images/main/about/about1.svg') }}" alt="illustration for JIMMINC coding in about page">
            </div>
            <div class="me-text" data-aos="fade-up" data-aos-duration="1000">
                <h3>JIMMINC: An Introduction</h3>
                <p>
                    JIMMINC is a tech-based start-up willing to assist other businesses in creating websites
                    that will drastically increase customer traffic, impressions and customer reach. Aside from
                    website creation, JIMMINC is a lobby for tutoring services to teach keen learners the
                    fundamentals of writing code that translates to web elements.
                    <br><br>
                    I am a full-stack web developer managing this start-up. I have commenced this start-up 
                    as I believe that a website is one of the best marketing tool that a business could 
                    utilise but also many businesses do not have a website. I started these services to help
                    uplift my clients' organisation and bring its name to a level that every customer around
                    the globe can reach.
                    <br><br>
                    Get in touch, I'll be happy to assist.
                    <br><br>
                </p>
                <a href="{{ URL::to('/contact') }}" class="cta-get-in-touch">Get in Touch</a>
            </div>
        </section>
        <section class="profession" id="works">
            <div class="section-container">
                <div class="profession-img">
                    <img src="{{ asset('images/main/about/about2.svg') }}" alt="illustration for JIMMINC coding in about page">
                </div>
                <div class="profession-text" data-aos="fade-up" data-aos-duration="1000">
                    <p>
                        I specialise in creating websites from scratch using the fundamental languages 
                        such as HTML, CSS, JavaScript and PHP. Laravel is also available if you prefer a framework
                        to be used. I will be consulting with you about the website at any time so drop an email when
                        you need to.
                        <br><br>
                        Another service I am offering is web development tutorials. If you want to learn how to make
                        a website, book a session with me and we'll start developing. I'll help you kick-start your
                        career in the tech industry by teaching you the fundamentals of a website. You'll be learning
                        the syntax of HTML (the skeleton), CSS (the appearance), JavaScript (the behaviour) and also
                        PHP if back-end development suits your tastes.
                        <br><br>
                    </p>
                    <a href="{{ URL::to('/contact') }}" class="cta-get-in-touch">Get in Touch</a>
                </div>
            </div>
        </section>
    </main>
@endsection