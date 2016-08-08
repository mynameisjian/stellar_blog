@extends('layouts.app')

@section('content')
    
    @if(count($blogs) > 0)    

        @foreach ($blogs as $blog)

            <h3><a href="{{ action('BlogFrontendController@details', $blog->id) }}">{{ $blog->title }}</a></h3> <br />

            <p>{{ str_limit($blog->body, 100, '...') }}</p>

            <p class="text-left">Published at {{ $blog->published_at }} , by {{ $blog->user->name }}</p>

            <hr />

        @endforeach


    @endif

@stop