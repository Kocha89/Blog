@extends('template')

@section('content')
<div class="container">
<div class="main_section">
     <div class="posts">
     @foreach($users as $item)                
                    <div>
                         <div><h2>First Name: {{ $item->first_name }}</h2></div>
                         <div><h2>Last Name: {{ $item->last_name }}</h2></div>
                         <div><h2>Email: {{ $item->email }}</h2></div>
                    </div>
                    <div><a href="{{ route('user.update', ['user_id'=> $item->id]) }}">Изменить</a></div>
                    <div><a href="{{ route('user.delete', ['user_id'=> $item->id]) }}">Удалить</a></div>
     @endforeach
     </div>
</div>

</div>
@endsection