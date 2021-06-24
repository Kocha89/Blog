<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCreateRequest;
use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function posts()
    {
        $posts = DB::table('posts')->get();
        return view('news', ['posts'=> $posts]);
    }
    public function show(int $post_id)
    {
        $post = DB::table('posts')
        ->where('id', $post_id)
        ->first();
        if (!isset($post)) {
            throw new ModelNotFoundException();
        }
 
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
        DB::table('posts')
        ->insert(['title'=>$title, 'text'=>$text]);
  
        return redirect()->route('posts');
    }

    public function login()
    {
        return view('login');
    }

    public function loginin(Request $request)
    {
        $this->validate($request, [
            'email' => "required",
            'password' => "required"
        ]);
        echo "Здесь идет сохранение";

        return redirect()->route('login');
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
   
    public function register()
    {
        return view('register');
    }

    public function registration(Request $request)
    {
        $this->validate($request, [
            'first_name' => "required",
            'last_name' => "required",
            'city' => "required",
            'email' => "required",
            'password' => "required",
            'password_2' => "required"
        ]);
        echo "Здесь идет сохранение";

        return redirect()->route('register');
    }

    public function stalker()
    {
        return view('stalker');
    }

    public function kanykei()
    {
        return view('kanykei');
    }

    public function school()
    {
        return view('school');
    }
    public function erkin()
    {
        return view('erkin');
    }
    public function ukraine()
    {
        return view('ukraine');
    }
    public function geneve()
    {
        return view('geneve');
    }
}