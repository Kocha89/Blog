@extends('template')

@section('content')
<div class="container">
<div class="main_section">
     <div class="posts">
     @foreach($posts as $post)                
                    <div>
                         <div><h2><a href="{{ route('show', ['post_id'=> $post->id]) }}">{{ $post->title }}</a></h2></div>
                    </div>
     @endforeach
     </div>
     <div class="category">
     <button><a href="{{ route('createCat') }}">Создать категорию</a></button>
     @foreach($categories as $post)                
                    <div>
                         <div><h2>{{ $post->name }}</h2></div>
                         <div><a href="{{ route('updateCat', ['post_id'=> $post->id]) }}">Изменить</a></div>
                         <div><a href="{{ route('delete', ['post_id'=> $post->id]) }}">Удалить</a></div>
                    </div>
     @endforeach
     </div>
</div>

</div>
@endsection