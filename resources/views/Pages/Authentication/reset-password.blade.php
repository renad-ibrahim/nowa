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
                                     <div class="d-flex mb-3"><a href="index.html"><img src="{{url('assets/img/brand/favicon.png')}}" class="sign-favicon ht-40" alt="logo"></a></div>
                                     <div class="  mb-1">
                                          <div class="main-signin-header">
                                               <div class="">
                                                 <h2>Welcome back!</h2>
                                                 <h4 class="text-start">Reset Your Password</h4>
                                                 <form>
                                                     <div class="form-group text-start">
                                                         <label>Email</label>
                                                         <input class="form-control" placeholder="Enter your email" type="text">
                                                     </div>
                                                     <div class="form-group text-start">
                                                         <label>New Password</label>
                                                         <input class="form-control" placeholder="Enter your password" type="password">
                                                     </div>
                                                     <div class="form-group text-start">
                                                         <label>Confirm Password</label>
                                                         <input class="form-control" placeholder="Enter your password" type="password">
                                                     </div>
                                                     <button class="btn ripple btn-primary btn-block">Reset Password</button>
                                                 </form>
                                                  <div class="mt-2 d-flex mx-auto text-center justify-content-center">
                                                         <button class="btn btn-icon btn-facebook me-3" type="button">
                                                             <span class="btn-inner--icon"> <i class="bx bxl-facebook tx-18 tx-prime"></i> </span>
                                                         </button>
                                                         <button class="btn btn-icon me-3" type="button">
                                                             <span class="btn-inner--icon"> <i class="bx bxl-twitter tx-18 tx-prime"></i> </span>
                                                         </button>
                                                         <button class="btn btn-icon me-3" type="button">
                                                             <span class="btn-inner--icon"> <i class="bx bxl-linkedin tx-18 tx-prime"></i> </span>
                                                         </button>
                                                         <button class="btn  btn-icon me-3" type="button">
                                                             <span class="btn-inner--icon"> <i class="bx bxl-instagram tx-18 tx-prime"></i> </span>
                                                         </button>
                                                     </div>
                                              </div>
                                          </div>
                                          <div class="main-signup-footer mg-t-20 text-center">
                                         <p>Already have an account? <a href="signin.html">Sign In</a></p>
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