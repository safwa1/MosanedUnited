@extends('layouts.appcode')

@section('body')


<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <span class="text-white"></span>
            <h1 class="text-capitalize mb-5 text-lg">تواصل معنا</h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <section class="section contact-info pb-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="contact-block mb-4 mb-lg-0">
            <i class="icofont-live-support"></i>
            <h5>اتصل بنا</h5>
            7288 828 011
            
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="contact-block mb-4 mb-lg-0">
            <i class="icofont-support-faq"></i>
            <h5>الإيميل </h5>
            info@musanedunited.sa
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="contact-block mb-4 mb-lg-0">
            <i class="icofont-location-pin"></i>
            <h5>الموقع</h5>
           الرياض , جدة 
           </br>
            
جميع الخدمات تقدم بشكل إلكتروني
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="contact-form-wrap section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          
          <form method="POST" action="{{ route('contact.store') }}">
            {{-- <form action="{{route('saveContact')}}" method="post" class="basicform_with_reset contact__form" enctype="multipart/form-data"> --}}
                @csrf
                {{-- <input type="hidden" name="_token" value="IQIH8zmieJwZRrSgEQN5AB2X0EgpaxorqqRjuQMs">          <!-- form message --> --}}
            
  
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <input name="name" id="name"   required type="text" class="form-control" placeholder="ادخل الاسم كامل">
                </div>
              </div>
  
              <div class="col-lg-6">
                <div class="form-group">
                  <input name="email" id="email"  type="email" class="form-control" placeholder="ادخل الايميل " required>
                </div>
              </div>
             
            </div>
  
            <div class="form-group-2 mb-4">
              <textarea name="message" id="message" class="form-control" rows="8" placeholder="الرسالة" required></textarea>
            </div>

             
            <div>
              <input class="btn btn-main btn-round-full basicbtn" name="submit" type="submit" value="إرسال الرسالة"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  
  
  
  
  

 @endsection