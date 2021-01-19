<link rel="stylesheet" href="{{ asset('sass/main/services/services.css') }}">

@extends('template')

@section('content')
    <main>
        <section class="custom-create" id="custom-create">
            <div class="custom-create-text">
                <h2 class="custom-create-heading">Custom Created Website</h2>
                <p>
                    A custom created website is made by writing code and is built
                    from scratch using the fundamental languages such as HTML, CSS,
                    JavaScript and many other languages. The MERN stack is coming 
                    soon! If you prefer a framework to be used, I'll be using Laravel.
                    <br>
                    These are the available languages to build your customised website:
                </p>
                <ul class="custom-create-lang">
                    <li>Fundamentals: HTML5 | CSS3 | JavaScript (Must Have)</li>
                    <li>SCSS</li>
                    <li>jQuery</li>
                    <li>PHP</li>
                </ul>
                <p class="custom-create-notice">
                    * Note: This package is fully customisable and it's up to clients whether
                    they would like the Laravel framework to be used on their website.
                </p>
            </div>
            <div class="custom-create-cta">
                <div class="custom-create-cta-img">
                    <img src="{{ asset('images/main/services/codeIllus.svg') }}" alt="undraw illustration for coding">
                </div>
                <a class="custom-create-cta-link" href="{{ URL::to('/contact') }}">Get in Touch</a>
            </div>
        </section>
        <section class="live-learning" id="live-learning">
            <div class="live-learning-text">
                <h2 class="live-learning-heading">Train To Be A Full Stack</h2>
                <p>
                    Always wanted to learn how to make a website? Has it always been your dream
                    to learn how to code? You have come to the right place. I will train you and transform
                    your knowledge from an empty canvas to a beautifully painted one. In this training
                    course you will be learning the fundamental languages used to create a website. Not just
                    the must-know knowledge but all the advanced stuff too!
                    <br><br>
                    Starting from the fundamentals, you will be a master of the front-end, HTML, CSS and JavaScript.
                    We will then dive deep into PHP which is the most popular back-end tool. Enough talk, I believe
                    it is more wise to get started now.
                </p>
                <p class="live-learning-notice">
                    * Note: First session is free and clients can book a session that are most suitable to their time.
                </p>
            </div>
            <div class="live-learning-cta">
                <div class="live-learning-cta-img">
                    <img src="{{ asset('images/main/services/learn2codeIllus.svg') }}" alt="">
                </div>
                <a class="live-learning-cta-link" href="{{ URL::to('/contact') }}">Get in Touch</a>
            </div>
        </section>
    </main>
@endsection