@extends('layouts.appcode')

@section('body')



<section class="page-title bg-1">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block text-center">
					<h1 class="text-capitalize mb-5 text-lg">اسعار الباقات</h1>
					<span class="text-white">اسعار الباقات الخاصة بالمتاجر الالكترونية</span>   
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section gray-bg" id="priceing">
	<div class="container">
		
		<!-- END -->
		<div class="row text-center align-items-end plan_list">
			<!-- Pricing Table-->
			          <div class="col-lg-4 mb-5 mb-lg-0   priceing ">
           <div class="bg-white p-5 rounded-lg   ">
           <h1 class="h6 text-uppercase font-weight-bold mb-4">الخطة الاساسية</h1>
           <h2 class="h1 font-weight-bold">332.00ريال</h2>
              <span class="font-weight-bold"> سنويا </span>
          <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
         <li class="mb-3">
            عدد المنتجات <b>100</b>
         </li>
         <li class="mb-3">
             مساحة التخزين <b>50MB</b>
         </li>
          <li class="mb-3">
            استخدام النطاق الفرعى الخاص بكم 
         </li>
         <li class="mb-3">
                        <del>Use your existing domain</del>
                     </li>
        
         <li class="mb-3">
                        تحكم فى المخزون
                     </li>
         <li class="mb-3">
                      <del>نقاط البيع</del>
                    </li>
         <li class="mb-3">
                      <del>لوحة تحكم العميل</del>
            
         </li>
         <li class="mb-3">
                       Google Analytics
            
         </li>
         <li class="mb-3">
                      <del>Google Tag Manager (GTM)</del>
            
            
         </li>
         
         <li class="mb-3">
                    <del>Facebook Pixel</del>
           
         </li>

         <li class="mb-3">
                   <del> Whatsapp Api</del>
             
         </li>
         
          <li class="mb-3">
                   <del> QR Code</del>
             
         </li>
          <li class="mb-3">
                      Technical Support
             
         </li>
         
         
         <li class="mb-3">
           تعدد اللغات
         </li>
         <li class="mb-3">
           معالجة الصور
         </li>
      </ul>
      
      <a href="{{route('register')}}"  style="  background: #3e1658;" class="btn site_color text-white btn-block p-2 shadow rounded-pill">التسجيل</a>
     
     </div>
    </div>
			<!-- END -->
		</div>
	</div>
</section>

 @endsection