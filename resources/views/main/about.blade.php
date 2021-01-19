<link rel="stylesheet" href="{{ asset('sass/main/about/about.css') }}">

@extends('template')

@section('content')
    <section class="intro">
        <div class="section-container">
            <div class="intro-text">
                <h2>Let me tell you more <span>about</span> me.</h2>
            </div>
        </div>
    </section>
    <main> 
        <section class="me">
            <div class="me-img">
                <img src="{{ asset('images/main/about/me.JPG') }}" alt="picture of myself">
            </div>
            <div class="me-text">
                <h3>JIMMINC: An Introduction</h3>
                <p>
                    JIMMINC is a tech start-up that is willing to assist businesses in creating websites
                    that could potentially increase customer traffic, impressions, customer reach which
                    could eventually become global and many more advantages.
                    <br><br>
                    I am a full-stack web developer managing this start-up. I have commenced this start-up 
                    as I believe that a website is one of the best marketing tool that a business could 
                    utilise but also many businesses do not have a website that could drive traffic to their 
                    organisations.
                    <br><br>
                    Get in touch, I'll be happy to assist.
                    <br><br>
                </p>
                <a href="{{ URL::to('/contact') }}" class="cta-get-in-touch">Get in Touch</a>
            </div>
        </section>
        <section class="profession">
            <div class="section-container">
                <div class="profession-text">
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
                <div class="profession-img">
                    <img src="{{ asset('images/main/about/profession.jpg') }}" alt="laptop with css code">
                </div>
            </div>
        </section>
        <section class="mastery">
            <div class="section-container">
                <div class="mastery-text">
                    <h3>Mastery</h3>
                </div>
                <div class="mastery-languages">
                    <ul class="mastery-languages-list">
                        @foreach($masteries as $mastery)
                        <li>
                            <span class="m-lang">{{ $mastery->language }}</span>
                            <div class="progress-bar">
                                @if($mastery->level >= 5)
                                <div class="progress" style="width: calc(100% + 2px);"></div>
                                @elseif($mastery->level == 4)
                                <div class="progress" style="width: calc(75% + 2px);"></div>
                                @elseif($mastery->level == 3)
                                <div class="progress" style="width: calc(50% + 2px);"></div>
                                @elseif($mastery->level == 2)
                                <div class="progress" style="width: calc(25% + 2px);"></div>
                                @elseif($mastery->level <= 1)
                                <div class="progress" style="width: calc(1% + 2px);"></div>
                                @endif
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
    </main>
    
    <script src="{{ asset('js/slider-anim.js') }}"></script>
@endsection