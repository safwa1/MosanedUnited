
<!DOCTYPE html>
<html >
    <head>
          <meat charset="UTF-8"/>

      <title>منصة مساند المتحدة</title>
      <meta name="og:title" content=" منصة مساند المتحدة "/>

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="google-site-verification" content="l7GU5icNidsX7w7CVzqaUB7YeoMd3fyCoqu1QCYyFvE" />

    <link rel="icon" type="image/x-icon" href="https://musanedunited.sa/favicon.ico">
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://musanedunited.sa/favicon.ico">
    <link rel="apple-touch-icon" type="image/x-icon" href="https://musanedunited.sa/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="https://musanedunited.sa/favicon.ico">



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"/>

        <!-- Styles -->



          <link href="{{asset('js/jquery.js')}}" rel="stylesheet">
          <link href="{{asset('js/bootstrap.min.js')}}" rel="stylesheet">

          <script src="{{asset('js/jquery.js')}}"></script>
          <script src="{{asset('js/slick.min.js')}}"></script>
          <script src="{{asset('js/bootstrap.min.js')}}"></script>
          <script src="{{asset('js/script.js')}}"></script>




          <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
          <link href="{{asset('css/icofont.min.css')}}" rel="stylesheet">
          <link href="{{asset('css/dirction.css')}}"rel="stylesheet">
          <link href="{{asset('css/slick.css')}}" rel="stylesheet">
          <link href="{{asset('css/slick-theme.css')}}" rel="stylesheet">
          <link href="{{asset('css/style.css')}}" rel="stylesheet">
          <link rel="stylesheet" href="/css/main/home.css">

<!-- ---------------------------------------------------------------------------------------- -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }



            .MultiCarousel { float: left; overflow: hidden; padding: 15px; width: 100%; position:relative; }
    .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
        .MultiCarousel .MultiCarousel-inner .item { float: left;        height: 148px;  padding:10px}
        .MultiCarousel .MultiCarousel-inner .item > div { text-align: center; padding:10px; margin:10px; background:#f1f1f1; color:#666;}
    .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:50%;top:calc(50% - 20px); }
    .MultiCarousel .leftLst { left:0; }
    .MultiCarousel .rightLst { right:0; }

        .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; background:#ccc; }
        </style>

        <style>

            /*=====================================
           Home page RTL CSS
======================================*/

body {
    text-align: right;
}

.slick-list {
    direction: ltr;
}
.slick-slide{
    direction: rtl;
}

.banner {
    background-position: right 62vw bottom -8vw;
}
.translate_form {
    text-align: left;
}
.navbar-expand-lg .navbar-collapse {
    justify-content: flex-end;
}
.navbar-nav {
    margin-left: 0 !important;
}

.top-bar-info {
    display: flex;
    padding: 0;
    gap: 30px;
}
.top-bar-info li,
.top-bar-info li a {
    margin-right: 0 !important;
    align-items: center;
    display: flex;
}
.top-bar-info li i{
    margin-left: 8px;
}
.service h4 {
    padding-left: 0px;
    padding-right: 20px;
}
.list-unstyled {
    text-align: right !important;
    padding: 0;
}
.testimonial-block.style-2 .testimonial-thumb {
    float: right;
}
.testimonial-block.style-2 .testimonial-thumb img {
    margin-left: 20px;
    margin-right: 0;
}
.testimonial-block i {
    left: 46px;
    right: auto;
}
.list-inline {
    padding: 0;
}
.list-inline-item:not(:first-child) {
    margin-right: .5rem;
}
.list-inline-item:first-child {
    margin-right: 0;
}

@media (max-width: 1599px){
    .banner {
        background-position: right 62vw bottom -2vw;
    }
}


@media (max-width: 991px){
    .translate_form {
        text-align: right;
    }
}

        </style>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">
<style>
  *{
    font-family: 'El Messiri', sans-serif;
  }
</style>




    </head>
    <body id="top" dir="rtl">



       @include('layouts.header')
            @yield('body')

       <!-- Google Tag Manager (noscript) --
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5TTTCJS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

            @include('layouts.footer')


            </body>
         </html>

