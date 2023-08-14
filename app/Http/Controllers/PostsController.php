<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBlogRequest;
use Illuminate\Http\Request;
use App\Models\Blog;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = Blog::latest()->get();
        return view('blogs.index', compact('blogs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBlogRequest $request)
    {
        //
        $input = $request->all();
        if ($file = $request->file('file')) {
            $name = $file->getClientOriginalName();
            $file->move('images', $name);
            $input['path'] = $name;
        }

        Blog::create($input);
        return redirect('/blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $blog = Blog::findOrFail($id);
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $blog = Blog::findOrFail($id);
        $blog->update($request->all());
        return redirect('/blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect('/blogs');
    }

    public function contact()
    {

        // $people = ['Edwin', 'Jose', 'Peter', 'Maria'];
        $people = [];

        return view('contact', compact('people'));
    }

    public function show_post($id, $name)
    {
        // return view('post')->with('id', $id);
        return view('post', compact('id', 'name'));
    }
}
