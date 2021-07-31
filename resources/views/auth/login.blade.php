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
    <form action="{{ route('auth.post.login') }}" method="post">
    {{ csrf_field() }}
    <div>
        <input type="email" name="email" placeholder="Email">
    </div>
    <div>
        <input type="password" name="password" placeholder="Password">
    </div>
    <div>
        <input type="submit" value="Войти">
    </div>
    </form>
</div>

</div>
@endsection