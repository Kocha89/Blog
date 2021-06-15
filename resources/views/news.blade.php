@extends('template')

@section('content')
<section class="news">
       <div class="container">
            <h1 class='title_new'>Страница списка новостей</h1>

            @foreach($posts as $post)                
                <div>
                    <div><h2>{{ $post['title'] }}</h2></div>
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