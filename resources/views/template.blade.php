<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="/css/style.css">
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
                    <a href="/login/" class="menu__link">Вход</a>
                </li>
                <li class="menu__list-item">
                    <a href="/register/" class="menu__link">Регистрация</a>
                </li>
                <li class="menu__list-item">
                    <a href="{{ route('auth.get.register') }}" class="menu__link">Регистрация2</a>
                </li>
                <li class="menu__list-item">
                    <a href="{{ route('auth.get.login') }}" class="menu__link">Войти</a>
                </li>
                <li class="menu__list-item">
                    <a href="/about/" class="menu__link">О Нас</a>
                </li>
            </ul>
        </nav>
       </div>
   </header>
   <section class="news">
      @yield('content')
    </section>
    <footer id="colophon" class="site-footer" role="contentinfo">
    <nav class="menu">
            <ul class="menu__list">
                <li class="menu__list-item">
                    <a href="/" class="menu__link2">Главная</a>
                </li>
                <li class="menu__list-item">
                    <a href="/posts/" class="menu__link2">Новости</a>
                </li>
                <li class="menu__list-item">
                    <a href="" class="menu__link2">Личный кабинет</a>
                </li>
                <li class="menu__list-item">
                    <a href="/about/" class="menu__link2">О Нас</a>
                </li>
            </ul>
        </nav>


<div class="site-info footer">
<div class="container">
    <div class="logo logo__footer">
        <div class="logo footer__inner">
                        
                    <a class="" href=""><div class="footer__description">Центр анализа политики здравоохранения</div></a>
                    
        </div>
        <div class="menu__footer">
            <div class="menu__footer-title">Мы в соцсетях</div>
                        <div class="vcard_socials__inner">
                        <ul class="vcard_socials">
                            <li class="vcard_socials_item icon_twi"><a href="#" target="_blank"></a></li>
                            <li class="vcard_socials_item icon_fb"><a href="#" target="_blank"></a></li>
                            <li class="vcard_socials_item icon_vk"><a href="#" target="_blank"></a></li>
                            <li class="vcard_socials_item icon_ok"><a href="#" target="_blank"></a></li>
                            <li class="vcard_socials_item icon_instagram"><a href="#" target="_blank"></a></li>
                        </ul>


                    </div>
                                
            </div>
 

</div>
    <div class="copy">Copyright © 2020 hpac.kg все права защищены</div>
</footer>

</div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/libs.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>