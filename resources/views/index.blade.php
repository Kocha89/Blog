@extends('template')

@section('content')
<div class="container">
  <div class="section__news">
    <div class="new__list-item">
         <div class="img_block"><img class='img_news' src="{{ URL::to('/') }}/img/1.jpeg" alt=""></div>
         <a href="/kanykei/" class="news_title">Каныкей из Кызылкии работает в мировой организации «Врачи без границ» и спасает жизни в горячих точках</a>
    </div>
    <div class="new__list-item">
    <div class="img_block"><img class='img_news' src="{{ URL::to('/') }}/img/2.jpeg" alt=""></div>
         <a href="/school/" class="news_title">Школа Будущих Лидеров помогает кыргызстанцам поступить на грант в ведущие университеты мира</a>
    </div>
    <div class="new__list-item">
    <div class="img_block"><img class='img_news' src="{{ URL::to('/') }}/img/3.jpg" alt=""></div>
         <a href="/erkin/" class="news_title">15 фактов о мультимиллионере из Каракола Эркине Адылове, который создал компанию стоимостью 300 млн. долларов</a>
    </div>
  </div>

</div>
@endsection