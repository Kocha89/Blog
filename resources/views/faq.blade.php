@extends('template')

@section('content')
<section class="news">
       <div class="container">
       <div class="posts">
       <button><a href="{{ route('createFaq') }}">Создать вопроc</a></button>
        @foreach($faq as $post)                
                        <div>
                            <div><h2>{{ $post->title }}</h2></div>
                            <div>{{ $post->text }}</div>
                            <div><a href="{{ route('updateFaq', ['post_id'=> $post->id]) }}">Изменить</a></div>
                            <div><a href="{{ route('deleteFaq', ['post_id'=> $post->id]) }}">Удалить</a></div>
                        </div>
        @endforeach
        </div>
       </div>
</section>

@endsection