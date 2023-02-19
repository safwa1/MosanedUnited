@extends('layouts.app2')

@section('content')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/nafath.css') }}">
    <style>
        * {
            font-family: 'Tajawal', sans-serif;
        }
        p{
            color:black;
            margin:10px;
        }
        .naser{
            /*width:transparent;*/
        }
        .c-card {
    margin-bottom: 30px;
    padding: 30px;
    border-radius: 5px;
    background-color: #fafafa;
    box-shadow: 0 10px 60px 0 rgb(29 29 31 / 9%);
        }
    </style>
    <!--
    <div style="text-align:right;  background-color:#FFFFFF; padding:20px;">
<div class="ftur_thumb">

           <img src="img/nafathlogo.png" alt="منصة مساند المتحدة"  style="width:100px;">

        </div>
</div>

  -->
    <div class="container" dir="rtl">
        </br>
        <h3 style="color:#11998e; text-align:center;" >
            النفاذ الوطني الموحد
            </br>
عزيزي العميل.. يمكنك الدخول عن طريق تطبيق نفاذ باستخدام رقم الهوية.
منصة مساند المتحدة
         </h3>
        </br>
        <div class="row u-justify-center ">
            <!--
            <button class="collapsible active" onclick="handleClick(1, 'pl1', this.getAttribute('class'));">تطبيق نفاذ
            </button
            -->
            <div class="content active" id="pl1" style="max-height: 1200px; width: 100%;">&#xFEFF;<div
                        class="row u-justify-center">
                    <div class="col-md-8">
                        <div class="c-card">
                            <!--
                            <div class="row">

                                <div class="col-md-6 naser">   -->
                                    <form novalidate="novalidate" style="text-align: right" method="POST" action="{{ route('nafathcheck') }}" id="natForm">
                                        @csrf
                                        <div class="c-field u-mb-medium">
                                            <label class="c-field__label" for="NAT_ID" style="text-align: right !important;">رقم بطاقة الأحوال/الاقامة</label>
                                            <input class="c-input"
                                                    id="NAT_ID" name="natId" type="tel"
                                                    autocomplete="off"
                                                    placeholder="أدخل رقم الأحوال/الاقامة الخاص بك هنا"
                                                    maxlength="10">
                                        @error('natId')
                                            <div style="color:red; text-align:right; font-size:12px; margin-top:4px">
                                              @if(str_contains($message, "required"))
                                               <span>يجب كتابة رقم الهوية بشكل صحيح</span>
                                              @else
                                               {{ $message }}
                                              @endif
                                            </div>
                                        @enderror
                                        @error('message')
                                            <div style="color:red; text-align:right; font-size:12px; margin-top:4px">
                                              {{ $message }}
                                            </div>
                                        @enderror
                                        </div>

                                        <div class="c-field u-text-center">
                                            <button id="sendBtn" type="submit" name="btnAuthenticate" class="c-btn c-btn--fullwidth">
                                                تسجيل الدخول
                                            </button>
                                            <div class=" u-mt-medium u-color-secondary">
                                                <p> لتحميل تطبيق نفاذ</p>
                                            </div>
                                            <div class="u-flex justify-content-center g-8 ">
                                                <a id="link" href="https://apps.apple.com/sa/app/نفاذ-nafath/id1598909871" target="_blank">
                                                    <img src="/img/apple_store.png" width="100" height="100">
                                                </a>
                                                <a style="margin-right: 10px;" id="link_andr"
                                                   href="https://play.google.com/store/apps/details?id=sa.gov.nic.myid" target="_blank">
                                                    <img src="/img/google_play.png" width="100" height="100">
                                                </a>
                                                <a style="margin-right: 12px;" id="link_andr" href="https://appgallery.huawei.com/app/C106870695" target="_blank">
                                                    <img src="/img/huawei_store.jpg" width="120">
                                                </a>
                                            </div>

                                    <p> الرجاء إدخال رقم بطاقة الأحوال/الاقامة، ثم اضغط دخول.</p>
                                        </div>
                                    </form>

                                    <div class="clr"></div>
                                </div>
                                <!--
                                <div class="col-md-5 u-text-center u-p-small u-mh-small u-hidden-down@mobile u-color-secondary">

                                    <img src="/img/secure.svg" width="150">


                                </div>
                                -->
                            </div>

                     <!--   </div>
                    </div>  -->
                </div>
                <script> document.getElementById("NAT_ID").focus();

                    function postErrorHandler() {
                        refreshCaptcha();
                    } </script>
                <script type="text/javascript" src="/js/validations-ar.js"></script>
            </div>
            <script> var option;
                if (true === true) {
                    option = 1;
                } else {
                    option = 1;
                } </script>
            <div class="content" id="pl2">
                <form style="padding: 25px;text-align: center;" novalidate="novalidate"><h3 id="placeholder1">الرجاء
                        الانتظار
                        حتى يتم جلب البيانات</h3></form>
            </div>
        </div>

        <script>
            const grep = document.querySelector.bind(document);
            grep('#NAT_ID').addEventListener('keypress', (evt) => {
                if (evt.which < 48 || evt.which > 57) {
                    evt.preventDefault();
                }
            });

        </script>
    </div>
@endsection
