@extends('template')

@section('content')
<section class="news">
       <div class="container">
                <div>
                    <div><h2>{{ $post->title }}</h2></div>
                    <div><p>{{ $post->text }}</p></div>
                    <div><a href="{{ route('update', ['post_id'=> $post->id]) }}">Изменить</a></div>
                </div>
       </div>
</section>

@endsection