@extends('layouts.app')

@section('content')
    
    <h3>Edit {{ $blog->title }}</h3>

    {!! Form::model($blog , array('route' => array('blog.update', $blog->id), 'method' => 'PUT')) !!}

        <div class="form-group">
            
            {!! Form::label('title', 'Title') !!}

            {!! Form::text('title', $blog->title, array('class' => 'form-control')) !!}

        </div>

        <div class="form-group">
            
            {!! Form::label('active', 'Active') !!}

            {!! Form::radio('active', 1 , $blog->active == 1 ? true : false ) !!} Yes {!! Form::radio('active', 0 , $blog->active == 0 ? true : false) !!} No
                

        </div>

        <div class="form-group">
            
            {!! Form::label('body', 'Body') !!}

            {!! Form::textarea('body', $blog->body, array('class' => 'form-control')) !!}   

        </div>

        {!! Form::submit('Create', array('class' => 'btn btn-primary')) !!} 

    {!! Form::close() !!}

@stop