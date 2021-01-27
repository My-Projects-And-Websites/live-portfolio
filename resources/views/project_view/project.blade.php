<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', "JimmInc Web Services") }}</title>

    <link rel="stylesheet" href="{{ asset('sass/project_view/project.css') }}">
    <link rel="stylesheet" href="{{ asset('sass/global.css') }}">
    <link rel="icon" href="{{ asset('images/fav3.png') }}">
</head>
<body>
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
                <div class="project-view">
                    <a href="{{ $project->project->url }}">Visit</a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>