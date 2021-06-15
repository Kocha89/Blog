@extends('template')

@section('content')
<section class="news">
       <div class="container">
            <h1 class='title_new'>Страница списка новостей</h1>
            <ul class="news__list">
                <li class="news__list-item">
                    <a href="/ukraine/" class="news__link">На Украине предложили забрать часть акций «Северного потока-2»</a>
                </li>
                <li class="news__list-item">
                    <a href="/stalker/" class="news__link">Названа дата выхода S.T.A.L.K.E.R. 2</a>
                </li>
 
                <li class="news__list-item">
                    <a href="/geneve/" class="news__link">В Женеве перед встречей Путина и Байдена закрыли небо для дронов</a>
                </li>
            </ul>
       </div>
</section>

@endsection