<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Blog as Blog;

class BlogFrontendController extends Controller
{

	public function index()
	{

		return \View::make('blogs.frontend_index')->with('blogs', Blog::active()->get());

	}	

	public function details($id)
	{
		
		return \View::make('blogs.frontend_details')->with('blog', Blog::find($id));

	}

}
