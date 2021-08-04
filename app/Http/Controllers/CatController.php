<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryCreateRequest;
use Illuminate\Http\Request;
use App\Models\Cat;


class CatController extends Controller
{
    public function categories()
    {
        $category = Category::get();
        return view('index', ['category'=> $category]);
    }
    public function show(int $post_id)
    {
        $category = Cat::where('id', $post_id)->first();
         return view('show', ['category'=> $category]);
    }
    public function create()
    {
        return view('createCat');
    }

    public function store(CategoryCreateRequest $request)
    {

        $post_data=$request->all('name');

        Cat::create($post_data);
        return redirect()->route('home');
    }

      public function update(int $post_id)
    {

        $category = Cat::findOrfail($post_id);
        
  
         return view('updateCat', ['category'=> $category, 'post_id'=>$post_id]);
    }

    public function restore(CategoryCreateRequest $request, int $post_id)
    {
        $post_data=$request->all('name');

        Cat::where('id', $post_id)
              ->update($post_data);

        return redirect()->route('home');

    }

    public function delete(int $post_id)
    {
        Cat::destroy($post_id);

        return redirect()->route('home');
    }
}