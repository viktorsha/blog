<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a var and store all posts in it
        // М Н О Ж Е С Т В Е Н Н А Я  В С Т А В К А
        $posts = Post::all()->where('lang', 'rus')->where('id', '<=', '5');
        //return a view and pass var
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //sore in the database

        $post = new Post;

        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->body = $request->body;

        $post->save();

        //redirect to another page
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $post = Post::find($id);

        // Получаем посты с таким же id, как и этот, чтобы отобразить внизу подборку
        $posts = Post::where('category_id', $post->category_id)->where('lang', $post->lang)->get();
        
        // Либо принт, либо дефолт
        $print = (isset($_GET['print']))?'print':'default';
        return view('posts.show', compact('print', 'post', 'posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the database and save as var
        $post = Post::find($id);
        //return the view
        return view('posts.edit')->withPost($post);
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
        //save the data to the DB
        $post = Post::find($id);

        // О Д И Н О Ч Н А Я   В С Т А В К А
        $post->title = $request->input('title');
        $post->category_id = $request->input('category_id');
        $post->body = $request->input('body');

        $post->save();
        //success message

        //redirect to posts.show
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect()->route('posts.index');
    }
}
