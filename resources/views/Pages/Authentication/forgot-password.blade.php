@extends('reuseParts.main-authentication-pages')
@section('content')
<div class="cover-image" data-image-src="{{url('assets/img/backgrounds/1.jpg')}}">
    <div class="page" >
        <div class="page-single">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 card-sigin-main py-4 justify-content-center mx-auto">
                        <div class="card-sigin">
                             <!-- Demo content-->
                             <div class="main-card-signin d-md-flex">
                                 <div class="wd-100p">
                                     <div class="mb-3 d-flex"> <a href="index.html"><img src="{{url('assets/img/brand/favicon.png')}}" class="sign-favicon ht-40" alt="logo"></a></div>
                                         <div class="main-card-signin d-md-flex bg-white">
                                             <div class="wd-100p">
                                                 <div class="main-signin-header">
                                                     <h2>Forgot Password!</h2>
                                                     <h4>Please Enter Your Email</h4>
                                                     <form action="#">
                                                         <div class="form-group">
                                                             <label>Email</label> <input class="form-control" placeholder="Enter your email" type="text">
                                                         </div>
                                                         <button class="btn btn-primary btn-block">Send</button>
                                                     </form>
                                                 </div>
                                                 <div class="main-signup-footer mg-t-20 text-center">
                                                     <p>Forget it, <a href="javascript:void(0);"> Send me back</a> to the sign in screen.</p>
                                                 </div>
                                             </div>
                                         </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection