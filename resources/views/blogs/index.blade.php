@extends('layouts.app')

@section('content')
	
	@if(count($blogs) == 0)

		<div class="alert alert-warning" role="alert">No blogs are available</div>

	@else

		<h3>Blog List</h3>

		<table class="table table-striped">

			<tr>
				
				<th>Title</th>

				<th>Active</th>

				<th>Published At</th>

				<th></th>

			</tr>

			@foreach($blogs as $blog)

				<tr>

		            <td>{{ $blog->title }}</td>

		            <td>{{ $blog->active ? 'Yes' : 'No' }}</td>

		            <td>{{ $blog->published_at }}</td>

		            <td>
		            	
		            	<a href="{{ URL::to('blog/'.$blog->id.'/edit') }}">Edit</a>	

		            	<a href="{{ URL::to('blog/'.$blog->id) }}">Show</a>	

		            </td>

		        </tr>

	        @endforeach	

		</table>

	@endif

@stop