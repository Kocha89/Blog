<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCreateRequest;
use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function posts()
    {
        $posts = DB::select('select * from posts');

        return view('news', ['posts'=> $posts]);
    }
    public function show(int $post_id)
    {
        $post = DB::select('select * from posts where id=:id', ['id'=>$post_id]);

        if (count($post)===0) {
            throw new NotFound();
        }
 
         return view('show', ['post'=> $post[0]]);
    }
    public function create()
    {
        return view('create');
    }

    public function store(PostCreateRequest $request)
    {
        $title=$request->post('title');
        $text=$request->post('text');
        DB::insert('insert into posts (title, text) values (:title, :text)', ['title'=>$title, 'text'=>$text]);
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
        $post = DB::select('select * from posts where id=:id', ['id'=>$post_id]);

        if (count($post)===0) {
            throw new NotFound();
        }
 
         return view('update', ['post'=> $post[0], 'post_id'=>$post_id]);
    }

    public function restore(PostCreateRequest $request, int $post_id)
    {
        $title=$request->post('title');
        $text=$request->post('text');
        DB::insert('update posts set title=:title, text=:text where id=:id', [
            'title'=>$title,
             'text'=>$text,
             'id' => $post_id
             ]);
        return redirect()->route('posts');
         return view('update', ['post'=> $post[0]]);
    }

    public function delete(int $post_id)
    {
        $post = DB::delete('delete from posts where id=:id', ['id'=>$post_id]);

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