@extends('index')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
      .container{
          width:1200px;
          margin: 0 auto;          
      }
      a{
          text-decoration:none;
          color:inherit;
      }
      ul,li{
          list-style: none;
      }
      .menu__list-item{
          display: inline-block;
      }
  </style>
</head>
<body>
   <header class="header">
       <div class="container">           
            <nav class="menu">
            <ul class="menu__list">
                <li class="menu__list-item">
                    <a href="/" class="menu__link">Главная</a>
                </li>
                <li class="menu__list-item">
                    <a href="/posts/" class="menu__link">Новости</a>
                </li>
                <li class="menu__list-item">
                    <a href="" class="menu__link">Личный кабинет</a>
                </li>
                <li class="menu__list-item">
                    <a href="{{ route('auth.get.register') }}" class="menu__link">Регистрация</a>
                </li>
                <li class="menu__list-item">
                    <a href="/about/" class="menu__link">О Нас</a>
                </li>
            </ul>
        </nav>
       </div>
   </header>
@endsection