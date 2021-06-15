@extends('template')

@section('content')
<section class="news">
       <div class="container">
                <div>
                    <div><h2>{{ $post['title'] }}</h2></div>
                    <div><h2>{{ $post['text'] }}</h2></div>
                </div>
       </div>
</section>

@endsection