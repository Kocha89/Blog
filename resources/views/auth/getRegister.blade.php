@extends('template')

@section('content')
<div class="container">
<div class="main_section">
    @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
    <form action="{{ route('auth.post.register') }}" method="post">
    {{ csrf_field() }}
    <div>
        <input type="email" name="email" placeholder="Email">
    </div>
    <div>
        <input type="text" name="first_name" placeholder="First name">
    </div>
    <div>
        <input type="text" name="last_name" placeholder="Last name">
    </div>
    <div>
        <input type="text" name="age" placeholder="Age">
    </div>
    <div>
        <input type="text" name="city" placeholder="City">
    </div>
    <div>
        <input type="password" name="password" placeholder="Password">
    </div>
    <div>
        <input type="submit" value="Зарегистрироваться">
    </div>
    </form>
</div>

</div>
@endsection