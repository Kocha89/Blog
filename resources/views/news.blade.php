@extends('template')

@section('content')
<section class="news">
       <div class="container">
            <h1 class='title_new'>Страница списка новостей</h1>
            id {{ $id }}
            @foreach($posts as $id => $post)                
                <div>
                    <div><h2><a href="{{ route('show', ['post_id'=> $id]) }}">{{ $post['title'] }}</a></h2></div>
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