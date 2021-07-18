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
       <div>
       Comments
       <div>
            @foreach($post->comments as $comment)
            <div>
            {{ $comment->text }}
            <a href="{{ route('comments.delete', ['comment_id'=> $comment->id, 'post_id'=> $post->id]) }}">Delete</a>
            </div>
            @endforeach
       </div>
            <form action="{{ route('comments.create') }}" method="get">
            {{ csrf_field() }}
                    <input class="form__input post__title" type="hidden" name="post_id" value="{{ $post->id }}" placeholder="Комментарий">
                    <textarea class="form__input textarea" name="text"></textarea>  
                    <input class="form__input" type="submit" name="submit" value="Добавить">
            </form>
       </div>
      
</section>

@endsection