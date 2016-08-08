@extends('layouts.app')

@section('content')
    
    <h3>Show {{ $blog->title }}</h3>

    Title: {{ $blog->title }} <br />

    Body: {{ $blog->body }} <br />

    Published at : {{ $blog->published_at }} <br />

    Active : {{ $blog->active ? 'Yes' : 'No' }} <br />

@stop