<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryCreateRequest;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function categories()
    {
        $categories = DB::table('category')->get();
        return view('index', ['categories'=> $categories]);
    }
    public function show(int $post_id)
    {
        $category = DB::table('category')
        ->where('id', $post_id)
        ->first();
        if (!isset($category)) {
            throw new ModelNotFoundException();
        }
 
         return view('show', ['category'=> $category]);
    }
    public function create()
    {
        return view('createCat');
    }

    public function store(CategoryCreateRequest $request)
    {
        $name=$request->post('name');
        DB::table('category')
        ->insert(['name'=>$name]);
  
        return redirect()->route('home');
    }

      public function update(int $post_id)
    {
        $category = DB::table('category')
        ->where('id', $post_id)
        ->first();
        if (!isset($category)) {
            throw new ModelNotFoundException();
        }
 
         return view('updateCat', ['category'=> $category, 'post_id'=>$post_id]);
    }

    public function restore(CategoryCreateRequest $request, int $post_id)
    {
        $name=$request->post('name');

        DB::table('category')
        ->where('id', $post_id)
        ->update(['name'=>$name]);

        return redirect()->route('home');

    }

    public function delete(int $post_id)
    {
         DB::table('category')
        ->where('id', $post_id)
        ->delete();

        return redirect()->route('home');
    }
}