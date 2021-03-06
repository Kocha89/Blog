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
       <form action="{{ route('cat.store') }}" method="post">
           {{ csrf_field() }}
				<input class="form__input post__title" type="text" name="name" placeholder="Тема записи">
				<input class="form__input" type="hidden" name="user_id">
				<input class="form__input" type="submit" name="submit" value="Добавить">
			</form>
       </div>
</section>

@endsection