@extends('layouts.appcode')

@section('body')



<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <h1 class="text-capitalize mb-5 text-lg"> خدماتنا</h1>
             <span class="text-white"></span>   
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="section service gray-bg" id="service">
    <div class="container">
      <div class="row">
           <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="service-item mb-4">
                <div class="icon d-flex align-items-center">
                    <img  src="{{asset('img/mosanedlog.jpg')}}" height="80">
                  <h4 class="mt-3 mb-3">كل اعمالك على منصة واحدة</h4>
                </div>
                <div class="content">
                  <p class="mb-4">نعمل دائما لتوفير منصة واحدة تشمل جميع اعمالك يتم من خلالها متابعة مشروعاتك من خلال شاشة خاصة بك من جميع انحاء العالم والاطلاع على الدخل اليومى</p>
                </div>
              </div>
            </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="service-item mb-4">
                <div class="icon d-flex align-items-center">
                    <img src="{{asset('img/mosanedlog.jpg')}}" height="80">
                  <h4 class="mt-3 mb-3">الاهتمام بالمطورين</h4>
                </div>
                <div class="content">
                  <p class="mb-4">نؤمن فى منصة مساند المتحدة بأن اهم عوامل الجودة هى البساطة حيث يعمل فريق التطوير لدينا على مواكبة اهم التطورات والتحديثات فى القطاع التكنولوجى</p>
                </div>
              </div>
            </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="service-item mb-4">
                <div class="icon d-flex align-items-center">
                    <img  src="{{asset('img/mosanedlog.jpg')}}" height="80">
                  <h4 class="mt-3 mb-3">مساند  لرحلة تجارة الكترونية أسهل</h4>
                </div>
                <div class="content">
                  <p class="mb-4"> فرصتك الان اشترك دخل شهري يصل إلى 6000 ريال، سواء كنت موظف أو طالب لا تشيل هم الخبرة والادارة خلها علينا.
                      تاسيس متجرك - اضافة المنتجات - تسويق المنتجات - تقرير شهري عن المبيعات. اخصائية أعمال إلكترونية لمتجرك.
                      
                      اشترك الان 
                      سنوي 332 شامل الضريبه</p>
                </div>
              </div>
            </div>
              
            </div>
    </div>
  </section>	
  
  
 @endsection