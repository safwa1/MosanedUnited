<header>
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
       <div class="container">
          <a class="navbar-brand" href="#">

             <div class=" align-items-center ">
               <img src="{{asset('img/mosanedlog.jpg')}}" alt="" class="img-fluid" style="width: 100px">
               <div class="lh-1">
                 <h1 class="h6 mb-0  lh-1"> منصة سعودية مرخصة </h1>
                 <small style="font-size: 66%;">راس مال 60 مليون ريال </small>
               </div>
             </div>
          </a>


          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
             aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
             <span class="icofont-navigation-menu"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarmain">
             <ul class="navbar-nav ml-auto">
                <li  class="nav-item">
    <a  class="nav-link"  href="{{route('home')}}"  target="_self" > الرئيسية</a>
 </li>



 <li  class="nav-item">
    <a  class="nav-link"  href="{{route('about')}}"  target="_self" >من نحن</a>
 </li>


  <li  class="nav-item">
    <a  class="nav-link"  href="{{route('service')}}"  target="_self" >خدماتنا</a>
 </li>



 <li  class="nav-item">
    <a  class="nav-link" href="{{route('contact.index')}}" target="_self" >اتصل بنا</a>
 </li>




 <li  class="nav-item">
    <a  class="nav-link"  href="{{route('manager')}}"  target="_self" > الادارة</a>
 </li>



 <li  class="nav-item">
    <a  class="nav-link"  href="{{route('Professionalism')}}"  target="_self" >  الشروط والأحكام </a>
 </li>

  <li  class="nav-item">
    <a  class="nav-link"  href="{{route('nafathlogin')}}"  target="_self" >نفاذ </a>
 </li>
{{--@include(Illuminate\Support\Facades\Auth::user())--}}
  @if(! Auth::user())
 <li  class="nav-item">
    <a  class="nav-link"  href="{{route('login')}}"  target="_self" >تسجيل الدخول</a>
 </li>
         <li  class="nav-item">


            <a style="    background: #42155c;  width: 100px; vertical-align: baseline;"  href="{{route('register')}}" class="btn site_color text-white btn-block p-2 shadow rounded-pill">إشترك الان</a>
{{--             <a href="{{route('register')}}"  class="btn btn-main-2 btn-icon btn-round-full">سجل الان <i class="icofont-simple-right ml-2"></i></a> --}}
         </li>
                 @else
                         <div class="dropdown p-0 ">
{{--                                 @if ( Laravel\Jetstream\Jetstream::managesProfilePhotos())--}}
                             @if(! Auth::user()->profile_photo_path == null )
                                         <button type="button" class="btn btn-primary dropdown-toggle p-0 border-0 " style="width: 50px; height:50px ; border-radius: 25% " data-bs-toggle="dropdown">
                                             <img class="  " src="http://127.0.0.1:8000/storage/{{Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->name }}" width="50px" height="50px" style="border-radius: 25% " />
                                         </button>

                                 @else
                                 <button type="button" class="btn  dropdown-toggle w-auto mb-4 " style="width:auto; height:50px ; border-radius: 25% " data-bs-toggle="dropdown">
                                     {{ Auth::user()->name }}
                                     <svg class="ml-2 -mr-0.5 h-2 w-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                         <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                     </svg>
                                 </button>
                                 @endif
                         <ul class="dropdown-menu  ">
                             <li><a class="dropdown-item" href="{{ route('profile.show') }}" >حسابي</a></li>
                             <form method="POST" action="{{ route('logout') }}" >
                                 @csrf
                                 <li><a class="dropdown-item " >
                                 <button class="border-0 bg-transparent " type="submit" > تسجيل خروج </button>
                                     </a>
                                 </li>
                             </form>

                         </ul>
                             </div>

                 @endif

             </ul>
          </div>

       </div>
    </nav>
 </header>
