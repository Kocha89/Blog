<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts()
    {
        return view('news');
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