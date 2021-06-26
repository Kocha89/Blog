<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();
        $categories = DB::table('category')->get();
        return view('index', ['posts'=> $posts, 'categories' => $categories]);
    }

    public function about()
    {
        echo "Страница О нас";
    }
}