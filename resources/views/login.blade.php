@extends('template')

@section('content')
<section class="news">
       <div class="container">
       <h1>Логин</h1>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
			<form action="{{ route('post.loginin') }}" method="post">
            {{ csrf_field() }}
				<input class="input__form" type="text" name="email" placeholder="Email">
				<input class="input__form" type="text" name="password" placeholder="Пароль">
				<input class="input__form" type="submit" name="submit" value="Войти">
			</form>
       </div>
</section>

@endsection