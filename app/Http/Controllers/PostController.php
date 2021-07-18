<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCreateRequest;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function posts()
    {
        $posts =Post::get();
        return view('news', ['posts'=> $posts]);
    }
    public function show(int $post_id)
    {
        $post = Post::where('id', $post_id)->with('comments')->first();
 
         return view('show', ['post'=> $post]);
    }
    public function create()
    {
        return view('create');
    }

    public function store(PostCreateRequest $request)
    {
        $post_data=$request->all('title', 'text');

        Post::create($post_data);
  
        return redirect()->route('posts');
    }

      public function update(int $post_id)
    {
        $post = Post::findOrfail($post_id);
 
        return view('update', ['post'=> $post, 'post_id'=>$post_id]);
    }

    public function restore(PostCreateRequest $request, int $post_id)
    {
        $post_data=$request->all('title', 'text');

        Post::where('id', $post_id)
              ->update($post_data);
  
        return redirect()->route('posts');

    }

    public function delete(int $post_id)
    {
        Post::destroy($post_id);

        return redirect()->route('posts');
    }
}