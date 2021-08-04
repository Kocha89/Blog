<?php

namespace App\Http\Controllers;

use App\Http\Requests\FaqCreateRequest;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    public function faqindex()
    {
        $faq = Faq::get();
        return view('faq', ['faq'=> $faq]);
    }

    public function faqcreate()
    {
        return view('createFaq');
    }
    public function store(FaqCreateRequest $request)
    {

        $post_data=$request->all('title', 'text');

        Faq::create($post_data);
        return redirect()->route('faq');
    }
    public function update(int $post_id)
    {

        $faq = Faq::findOrfail($post_id);
        
  
         return view('updateFaq', ['faq'=> $faq, 'post_id'=>$post_id]);
    }

    public function restore(FaqCreateRequest $request, int $post_id)
    {
        $post_data=$request->all('title', 'text');

        Faq::where('id', $post_id)
              ->update($post_data);

        return redirect()->route('faq');

    }

    public function delete(int $post_id)
    {
        Faq::destroy($post_id);

        return redirect()->route('faq');
    }
}