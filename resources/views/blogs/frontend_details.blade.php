@extends('layouts.app')

@section('content')
	
	<h2>{{ $blog->title }}</h2>		    

	<p>{{ $blog->body }}</p>

	<p>Published at {{ $blog->published_at }}</p>

	<p>Published by {{ $blog->user->name }}</p>

@stop