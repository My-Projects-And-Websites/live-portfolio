<link rel="stylesheet" href="{{ asset('sass/project_view/project.css') }}">

@extends('template')

@section('title', 'Project')

@section('content')
    <main>
        <div class="project-container">
            <div class="project-left-col">
                @foreach($projects as $project)
                <div class="project-img">
                    <img src="{{ asset($project->project_image) }}" alt="images for cloud copy project">
                </div>
                @endforeach
            </div>
            <div class="project-right-col">
                <div class="project-text">
                    <h2>{{ $project->project->title }}</h2>
                    <p>{{ $project->project->description }}</p>
                </div>
                @isset($project->project->url)
                <div class="project-view">
                    <a href="{{ $project->project->url }}">Visit</a>
                </div>
                @endisset
            </div>
        </div>
    </main>
@endsection