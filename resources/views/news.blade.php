@extends('template')

@section('content')
<section class="news">
       <div class="container">
            <h1 class='title_new'>Страница списка новостей</h1>
            <button><a href="{{ route('create') }}">Создать новость</a></button>
            @foreach($posts as $post)                
                <div>
                    <div><h2><a href="{{ route('show', ['post_id'=> $post->id]) }}">{{ $post->title }}</a></h2></div>
                    <div><p>{{ $post->text }}</p></div>
                    <div><a href="{{ route('update', ['post_id'=> $post->id]) }}">Изменить</a></div>
                    <div><a href="{{ route('delete', ['post_id'=> $post->id]) }}">Удалить</a></div>
                </div>
            @endforeach

            @if (count($posts) === 1)
            Здесь есть одна запись!
            @elseif (count($posts) > 1)
            Здесь есть много записей!
            @else
            Здесь нет записей!
            @endif
       </div>
</section>

@endsection