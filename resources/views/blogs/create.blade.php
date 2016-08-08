@extends('layouts.app')

@section('content')
	
	<h3>Create Blog</h3>

	@if (count($errors) > 0)

	    <div class="alert alert-danger">

	        <ul>

	            @foreach ($errors->all() as $error)

	                <li>{{ $error }}</li>

	            @endforeach

	        </ul>

	    </div>

	@endif

	{!! Form::open(array('url' => 'blog')) !!}

		<div class="form-group">
			
			{!! Form::label('title', 'Title') !!}

			{!! Form::text('title', old('title'), array('class' => 'form-control')) !!}

	    </div>

	   	{!! Form::submit('Create', array('class' => 'btn btn-primary')) !!} 

	{!! Form::close() !!}

@stop