@extends('template')

@section('content')
<section class="news">
       <div class="container">
                <div>
                    <div><h2>{{ $post['title'] }}</h2></div>
                    <div><p>{{ $post['text'] }}</p></div>
                </div>
       </div>
</section>

@endsection