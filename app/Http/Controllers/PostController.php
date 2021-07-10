<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCreateRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function posts()
    {
        $posts =Post::get();
        return view('news', ['posts'=> $posts]);
    }
    public function show(int $post_id)
    {
        $post = Post::findOrfail($post_id);
 
         return view('show', ['post'=> $post]);
    }
    public function create()
    {
        return view('create');
    }

    public function store(PostCreateRequest $request)
    {
        $title=$request->post('title');
        $text=$request->post('text');
        $post=new Post();
        $post->title = $title;
        $post->text = $text;
        $post->save();

  
        return redirect()->route('posts');
    }

      public function update(int $post_id)
    {
        $post = DB::table('posts')
        ->where('id', $post_id)
        ->first();
        if (!isset($post)) {
            throw new ModelNotFoundException();
        }
 
         return view('update', ['post'=> $post, 'post_id'=>$post_id]);
    }

    public function restore(PostCreateRequest $request, int $post_id)
    {
        $title=$request->post('title');
        $text=$request->post('text');

        DB::table('posts')
        ->where('id', $post_id)
        ->update(['title'=>$title, 'text'=>$text]);

        return redirect()->route('posts');

    }

    public function delete(int $post_id)
    {
         DB::table('posts')
        ->where('id', $post_id)
        ->delete();


        return redirect()->route('posts');
    }
}