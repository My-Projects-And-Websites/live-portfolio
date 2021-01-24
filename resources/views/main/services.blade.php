<link rel="stylesheet" href="{{ asset('sass/main/services/services.css') }}">

@extends('template')

@section('content')
    <main>
        <section class="custom-create" id="custom-create">
            <div class="custom-create-text">
                <h2 class="custom-create-heading">Custom Created Website</h2>
                <p>
                    Need a website for your business? Or for your portfolio? You
                    have come to the right place. JIMMINC specialises in creating
                    web applications according to your needs. All I'll need to
                    proceed with your website is a brief detail on what you want
                    to be created then I will handle things from there. 
                    <br>
                    These are included for this package:
                </p>
                <ul class="custom-create-package">
                    <li>Content Creation</li>
                    <li>Search Engine Optimisation</li>
                    <li>Stunning Images</li>
                    <li>Device Responsiveness</li>
                </ul>
                <p class="custom-create-notice">
                    * Note: This package is fully customisable. Clients, you're suggestions
                    are freely welcome.
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
                <h2 class="live-learning-heading">Full Stack 101</h2>
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