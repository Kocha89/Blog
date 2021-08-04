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
        <form action="{{ route('faq.store') }}" method="post">
           {{ csrf_field() }}
				<input class="form__input post__title" type="text" name="title" placeholder="Тема вопроса">
				<textarea class="form__input textarea" name="text"></textarea>  
				<input class="form__input" type="submit" name="submit" value="Добавить">
			</form>
       </div>
</section>

@endsection