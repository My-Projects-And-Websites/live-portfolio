<link rel="stylesheet" href="{{ asset('sass/main/portfolio/portfolio.css') }}">

@extends('template')

@section('content')
    <section class="intro-text">
        <h2>Welcome to my collection of <span>works.</span></h2>
    </section>
    <section class="portfolio-gallery">
        <div class="gallery-container">
            <div class="gallery-selection">
                <select name="languages" id="cur-languages">
                @foreach($langs as $lang)
                    <option value="{{ $lang }}">{{ $lang }}</option>
                @endforeach
                </select>
                <div class="arrow-down">
                    <ion-icon name="caret-down-outline"></ion-icon>
                </div>
            </div>
            <div class="gallery-work" data-aos="fade-right" data-aos-duration="1000">
                <div class="gallery-row" id="web">
                    <div class="gallery-heading">
                        <h3>{{ __('Web Projects') }}</h3>
                    </div>
                    <ul class="gallery-links">
                    @if (count($web_apps) > 0)
                        @foreach($web_apps as $web_app)
                            <a href="{{ URL::to('/portfolio') }}/{{ $web_app->id }}">
                                <li class="{{ $web_app->language }}">
                                    <div class="tnail-img">
                                        <img src="{{ $web_app->thumbnail }}" alt="Thumbnail for the project">
                                    </div>
                                    <div class="tnail-text">
                                        <h3>{{ $web_app->title }}</h3>
                                        <p>{{ $web_app->description }}</p>
                                    </div>
                                </li>
                            </a>
                        @endforeach
                    @else
                        <p class="alt-disp">{{ __('Nothing to display.') }}</p>
                    @endif
                    </ul>
                </div>
                <div class="gallery-row" id="py">
                    <div class="gallery-heading">
                        <h3>{{ __('Python') }}</h3>
                    </div>
                    <ul class="gallery-links">
                    @if (count($pythons) > 0)
                        @foreach($pythons as $python)
                            <a href="{{ URL::to('/portfolio') }}/{{ $python->id }}">
                                <li class="{{ $python->language }}">
                                    <div class="tnail-img">
                                        <img src="{{ $python->thumbnail }}" alt="Thumbnail for the project">
                                    </div>
                                    <div class="tnail-text">
                                        <h3>{{ $python->title }}</h3>
                                        <p>{{ $python->description }}</p>
                                    </div>
                                </li>
                            </a>
                        @endforeach
                    @else
                        <p class="alt-disp">{{ __('Nothing to display.') }}</p>
                    @endif
                    </ul>
                </div>
                <div class="gallery-row" id="cpp">
                    <div class="gallery-heading">
                        <h3>{{ __('C++') }}</h3>
                    </div>
                    <ul class="gallery-links">
                    @if (count($cpps) > 0) 
                        @foreach($cpps as $cpp)
                            <a href="{{ URL::to('/portfolio') }}/{{ $cpp->id }}">
                                <li class="{{ $cpp->language }}">
                                    <div class="tnail-img">
                                        <img src="{{ $cpp->thumbnail }}" alt="Thumbnail for the project">
                                    </div>
                                    <div class="tnail-text">
                                        <h3>{{ $cpp->title }}</h3>
                                        <p>{{ $cpp->description }}</p>
                                    </div>
                                </li>
                            </a>
                        @endforeach
                    @else
                        <p class="alt-disp">{{ __('Nothing to display.') }}</p>
                    @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/select.js') }}"></script>
@endsection