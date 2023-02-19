 @extends('layouts.app2')



   <!-- -------------------- js -------------------- -->

  <script src="https://cdn.tailwindcss.com"></script>


 <section class="section_features_nw section-padding">
    <div class="container">


  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <script src="https://cdn.tailwindcss.com"></script>

    </style>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap" rel="stylesheet">


      <style>
      *{
    font-family: 'El Messiri', sans-serif;
    box-sizing:border-box;
  }
          body {
              padding-top:-20px;
     height:100vh;
    font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    overflow:auto;
    background: linear-gradient(315deg,rgba(255,25,25,1)   3%, rgba(60,132,206,1) 38%, rgba(48,238,226,1) 68%, rgba(101,0,94,1)  98%);
    /*animation: gradient 15s ease infinite;*/
    background-size: 400% 400%;
    background-attachment: fixed;


}
          .conta{
            background:rgba(255,255,255, 0.8);

              width: 350px;
              height: 250px;
             margin: 0;
     border-radius: 5%;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
    z-index:1;
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;

          }
           .conta2{
            background:rgba(255,255,255, 0.7);
            width:auto;


            overflow: hidden;

}

@keyframes gradient {
    0% {
        background-position: 0% 0%;
    }
    50% {
        background-position: 100% 100%;
    }
    100% {
        background-position: 0% 0%;
    }
}

.wave {
    background: rgb(255 255 255 / 25%);
    border-radius: 1000% 1000% 0 0;
    position: fixed;
    width: 200%;
    height: 8em;
    animation: wave 10s -3s linear infinite;
    transform: translate3d(0, 0, 0);
    opacity: 0.8;
    bottom: 0;
    left: 0;
    z-index: -1;
}

.wave:nth-of-type(2) {
    bottom: -1.25em;
    animation: wave 18s linear reverse infinite;
    opacity: 0.8;
}

.wave:nth-of-type(3) {
    bottom: -2.5em;
    animation: wave 20s -1s reverse infinite;
    opacity: 0.9;
}

@keyframes wave {
    2% {
        transform: translateX(1%);
    }

    25% {
        transform: translateX(-25%);
    }

    50% {
        transform: translateX(-50%);
    }

    75% {
        transform: translateX(-25%);
    }

    100% {
        transform: translateX(1%);
    }
}

.vst{
    text-align:center;
    width:100%;
    padding:10px;
    position:absolute ;
    bottom:10vh;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
    color:#ffffff;
    text-shadow: 2px 2px 4px rgba(000,000,000,0.3);



}
      </style>

  </head>
  <div class="conta">
      <div class="flex  justify-center h-screen">
      <div>
        <div class="flex flex-col items-center space-y-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="text-green-600 w-28 h-28" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <h1 class="text-4xl font-bold">شكرا لك !</h1>
          <p>شكرا لاستخدامك منصة مساند المتحدة </p>
          <a style="text-decoration:none; "
            class="inline-flex items-center px-4 py-2 text-white bg-indigo-600 border border-indigo-600 rounded rounded-full hover:bg-indigo-700 focus:outline-none focus:ring"  href="{{route('home')}}">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 mr-2" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M7 16l-4-4m0 0l4-4m-4 4h18"  />
            </svg>
            <span class="text-sm font-medium">
              عودة
            </span>
          </a>
        </div>
      </div>

    </div>
      </div>
       <div   class="vst" >
    <p>جاري تفعيل حسابكم ، وسيتم التواصل معكم خلال 7 أيام من قبل خدمة العملاء لإنشاء متجركم   .</p>
      </div>




 <div>
     <div class="wave"></div>
     <div class="wave"></div>
     <div class="wave"></div>
  </div>
    </div>
 </section>


