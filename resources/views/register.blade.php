@extends('template')

@section('content')
<section class="news">
       <div class="container">
       <h1>Регистрация</h1>
       @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
			<form action="{{ route('post.registration') }}" method="post">
            {{ csrf_field() }}
				<input class="input__form" type="text" name="first_name" placeholder="Имя">
				<input class="input__form" type="text" name="last_name" placeholder="Фамилия">
				<input class="input__form" type="text" name="city" placeholder="Город">
				<input class="input__form" type="text" name="email" placeholder="Email">
				<input class="input__form" type="text" name="password" placeholder="Пароль">
				<input class="input__form" type="text" name="password_2" placeholder="Повторить пароль">
				<input class="input__form" type="submit" name="submit" value="Зарегистрироваться">
			</form>
       </div>
</section>

@endsection