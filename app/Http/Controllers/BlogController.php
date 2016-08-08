<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Blog as Blog;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return \View::make('blogs.index')->with('blogs', Blog::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \View::make('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $rules = array(

            'title' => 'required',

            'active' => 'required',

            'body' => 'required'

        );

        $v = \Validator::make($request->all(), $rules);

        if ($v->fails())
        {

            return \Redirect::to('blog/create')->withInput()->withErrors($v->errors());

        } 
        else
        {
            $blog = new Blog();

            $blog->title = $request->get('title');

            $blog->user_id = \Auth::user()->id;

            $blog->published_at = date('Y-m-d H:i:s');

            $blog->body = $request->get('body');

            $blog->active = $request->get('active');

            $blog->save();

            \Session::flash('message', 'Blog created');

            return \Redirect::to('blog');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);

        return \View::make('blogs.show')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return \View::make('blogs.edit')->with('blog', Blog::find($id));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $rules = array(

            'title' => 'required',

            'active' => 'required',

            'body' => 'required'

        );

        $v = \Validator::make($request->all(), $rules);

        if ($v->fails())
        {

            return \Redirect::to('blog/'.$id.'/edit')->withInput()->withErrors($v->errors());

        } 
        else
        {
            $blog = Blog::find($id);

            $blog->title = $request->get('title');

            $blog->user_id = \Auth::user()->id;

            $blog->body = $request->get('body');

            $blog->active = $request->get('active');

            $blog->save();

            \Session::flash('message', 'Blog updated');

            return \Redirect::to('blog');

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
