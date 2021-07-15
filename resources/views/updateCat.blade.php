@extends('template')

@section('content')
<section class="news">
       <div class="container">
           
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
       <form action="{{ route('restoreCat', ['post_id'=> $category->id]) }}" method="post">
           {{ csrf_field() }}
				<input class="form__input post__title" type="text" name="name" value="{{ $category->name }}">
				<input class="form__input" type="hidden" name="user_id">
				<input class="form__input" type="submit" name="submit" value="Изменить">
			</form>
       </div>
</section>

@endsection