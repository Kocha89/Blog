<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCreateRequest;
use Illuminate\Http\Request;
use DB;

class RegisterController extends Controller
{
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

        return redirect()->route('register');
    }

}