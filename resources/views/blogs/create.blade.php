@extends('layouts.app')

@section('content')
	
	<h3>Create Blog</h3>

	{!! Form::open(array('url' => 'blog')) !!}

		<div class="form-group">
			
			{!! Form::label('title', 'Title') !!}

			{!! Form::text('title', old('title'), array('class' => 'form-control')) !!}

	    </div>

	    <div class="form-group">
			
			{!! Form::label('active', 'Active') !!}

			{!! Form::radio('active', 1 , old('active') == 1 ? true : false ) !!} Yes {!! Form::radio('active', 0 , old('active') == 0 ? true : false) !!} No
				

	    </div>

	    <div class="form-group">
			
			{!! Form::label('body', 'Body') !!}

			{!! Form::textarea('body', old('body'), array('class' => 'form-control')) !!}	

	    </div>

	   	{!! Form::submit('Create', array('class' => 'btn btn-primary')) !!} 

	{!! Form::close() !!}

@stop