<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            dd('Вы уже авторизовались');
        }
        $posts = DB::table('posts')->get();
        $categories = DB::table('category')->get();
        return view('index', ['posts'=> $posts, 'categories' => $categories]);
    }

    public function about()
    {
        echo "Страница О нас";
    }
}