@extends('layouts.app')

@section('content')

 
   <div class="container" dir="rtl">
             <div class="card-header" style="text-align: center;"> 
               <img src="{{asset('img/vision2030-grey.svg')}}" alt="" class="img-fluid" style="width: 200px">
               <img src="{{asset('img/nafathlogo.png')}}" alt="" class="img-fluid" style="width: 200px">
            </div>
    <div class="row justify-content-center">  
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center; color: #11998e!important;">{{ __('تسجيل  الدخول عبر نفاذ') }}</div>              
                <div class="card-body">
                    <form method="POST" action="{{ route('nafath') }}">
                        @csrf
                        <div class="row mb-3">
                           <label for="IDnumber" class="col-md-4 col-form-label text-md-end">{{ __(' رقم بطاقة الأحوال/الاقامة') }}</label>

                            <div class="col-md-6">
                                <input id="IDnumber" type="number" class="form-control @error('email') is-invalid @enderror" name="IDnumber" value="{{ old('email') }}" required autocomplete="number" autofocus>
                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                      
                        <div class="row mb-0" style=" text-align:center;">
                            <div class="col-md-8 offset-md-4"> 
                                <button type="submit" class="btn btn-primary" style="width:140px;">
                                    {{ __('دخــول') }}
                                </button> 
                      
                                 <div style=" text-align:left; "> 
                                       ليس لديك حساب ؟ 
                                     <a style="background:none;  width: 150px; height:50px; padding:0px; color:blue; text-decoration: none; "  href="{{route('register')}}" > انشاء حساب 
                                       </a>
                                </div>
                               
                            </div>
                        </div>
                        
                            
                    </form>
                     
                </div>
            </div>
        </div>
    </div>
 
</div>
@endsection
