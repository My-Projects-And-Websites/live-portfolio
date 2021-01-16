<link rel="stylesheet" href="{{ asset('sass/main/about/about.css') }}">

@extends('template')

@section('content')
    <section class="intro">
        <div class="section-container">
            <div class="intro-text">
                <h2>Let me tell you more <span>about</span> me.</h2>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1607962756">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
            </svg>
        </div>
    </section>
    <main> 
        <section class="me">
            <div class="me-img">
                <img src="{{ asset('images/main/about/me.JPG') }}" alt="picture of myself">
            </div>
            <div class="me-text">
                <h3>This is Me</h3>
                <p>
                    So this is me. I am from the island of the Philippines
                    specifically from the northern region and I moved here in
                    the UK to continue my studies and excel in my chosen career.
                    My passion for coding has been running from the first time I
                    programmed from Python which was around 5 years ago until now.
                    Alongside my skills to write code, I have a passion for creativity
                    hence why I chose web development as my future career. A website
                    is a digital art and it consists of code and creativity.
                    <br><br>
                    In the future, I want to become a professional and successful web
                    developer using my forever upgrading abilities to code and to design.
                    I can achieve this through perseverance and having a well planned
                    action for my upcoming projects and experiences.
                    <br><br>
                    I want to welcome you again to my world of programming!
                </p>
            </div>
        </section>
        <section class="profession">
            <div class="section-container">
                <div class="profession-text">
                    <h3>Profession</h3>
                    <p>
                        My chosen career in the IT sector is web development. At once, I am currently
                        an undergraduate student at a London university and a freelancer selling services 
                        to create web applications for potential clients. Being affected by the global 
                        pandemic, I have used my freelancing career to a significant advantage by sharing 
                        my services in various social platforms such as LinkedIn, Instagram and Whatsapp 
                        for my personal connections.
                        <br><br>
                        In these current times it is truly difficult to find opportunities without
                        a solid experience therefore as a web developer freelancer, to showcase my
                        abilities I have created my own opportunity and used the Fiverr platform 
                        to sell my services. At the very bottom of this page, my mastery in various 
                        languages are enlisted. Make sure you have a look!
                    </p>
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