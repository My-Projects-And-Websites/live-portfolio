<link rel="stylesheet" href="{{ asset('sass/blog_details/blog_details.css') }}">

@extends('template')

@section('title', 'Blog')

@section('content')
    <!-- FIXME: fix blogging section and fetch appropriate data from database  -->
    <h3>{{ $blogs->blog }}</h3>
@endsection