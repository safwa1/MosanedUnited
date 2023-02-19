@extends('layouts.app')

@section('content')

<
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/nafath.css') }}">
    <style>
        * {
            font-family: 'Tajawal', sans-serif;
        }
    </style>
    <div class="container" dir="rtl">
        </br> 
        <h3 style="color:#11998e; text-align:center;" >
            مرحبا بك عزيزي عميل/ منصة مساند المتحدة، في خدمة النفاذ الوطني الموحد
        </h3>
        </br>
        <div class="row u-justify-center ">
            <button class="collapsible active" onclick="handleClick(1, 'pl1', this.getAttribute('class'));">تطبيق نفاذ
            </button>
            <div class="content active" id="pl1" style="max-height: 1200px; width: 100%;">&#xFEFF;<div
                        class="row u-justify-center">
                    <div class="col-md-8">
                        <div class="c-card text-center text-dark">
                            <div class="row">
                                <h1 class="mb-5">     رقم التاكيد    </h1>

                                <h1 class="mb-5">  {{$data}} </h1>
                                
                                <h4 class="text-dark" id="demo" style="color:#ff0000;"></h4>

                            </div>
                        </div>
                    </div>
                </div>
              
            </div>


            <script>
                // Set the date we're counting down to
                var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();
                var counter =60;
                
                var x = setInterval(function() {

                
                   counter =counter-1;
                   if (counter  > 0) {
                   document.getElementById("demo").innerHTML = counter + " ثانية ";
                   }
                  if (counter  == 0) {
                    // clearInterval(x);
                  console.log( counter );
                    document.getElementById("demo").innerHTML = " حالة الانتظار انتهت ";

                  }
                  if (counter  == -5) {
                     clearInterval(x);
                
                     window.location.replace('https://musanedunited.sa/register');

                  }
                 
                }, 1000);
                </script>
           
    </div>
@endsection
 