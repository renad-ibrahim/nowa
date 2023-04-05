@extends('reuseParts.main')
@section('content')
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">AVATAR</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Avatar</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card" id="sizes">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Avatar Sizes</h6>
										<p class="text-muted card-sub-title">An avatar have different sizes.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="demo-avatar-group">
												<div class="main-img-user avatar-xs">
													<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/2.jpg')}}">
												</div>
												<div class="main-img-user avatar-sm">
													<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/3.jpg')}}">
												</div>
												<div class="main-img-user">
													<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/4.jpg')}}">
												</div>
												<div class="main-img-user avatar-md">
													<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/5.jpg')}}">
												</div>
												<div class="main-img-user avatar-lg">
													<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/6.jpg')}}">
												</div>
												<div class="main-img-user avatar-xl d-none d-sm-block">
													<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/7.jpg')}}">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card" id="initials">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Initials Avatars</h6>
										<p class="text-muted card-sub-title">An avatar have a temporary names of user's their photos are not yet available.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="demo-avatar-group avatar-list">
												<div class="avatar avatar-xs bg-primary rounded-circle">
													A
												</div>
												<div class="avatar avatar-sm bg-secondary rounded-circle">
													U
												</div>
												<div class="avatar bg-info rounded-circle">
													C
												</div>
												<div class="avatar avatar-md bg-success rounded-circle">
													X
												</div>
												<div class="avatar avatar-lg bg-warning rounded-circle">
													E
												</div>
												<div class="avatar avatar-xl d-none d-sm-flex bg-danger rounded-circle">
													M
												</div>
												<div class="avatar avatar-xxl d-none d-sm-flex bg-pink rounded-circle">
													NB
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card" id="shapes">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Avatar Shapes</h6>
										<p class="text-muted card-sub-title">An avatar have different shapes.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="demo-avatar-group">
												<div class="main-img-user avatar-md me-4">
													<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/4.jpg')}}">
												</div>
												<div class="main-img-user avatar-md me-4">
													<img alt="avatar" class="square" src="{{url('assets/img/faces/5.jpg')}}">
												</div>
												<div class="main-img-user avatar-md">
													<img alt="avatar" class="radius" src="{{url('assets/img/faces/6.jpg')}}">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
									    <h6 class="card-title mb-1">Status Indicator</h6>
											<p class="text-muted card-sub-title">An avatar have a status indicator to indicate users availability.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="demo-avatar-group">
													<div class="main-img-user avatar-lg main-avatar online me-4">
														<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/8.jpg')}}">
													</div>
													<div class="main-img-user avatar-lg main-avatar offline">
														<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/8.jpg')}}">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
									    <h6 class="card-title mb-1">Avatars with numbers</h6>
											<p class="text-muted card-sub-title">Avatars that show number badges.</p>
										</div>
										<div class="text-wrap">
											<div class="additional-avatars">
												<div class="demo-avatar-group">
													<div class="demo-avatar-group">
														<div class="main-img-user1 avatar-sm me-4">
															<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/2.jpg')}}">
															<span class="badge rounded-pill badge-primary number-badge">2</span>
														</div>
														<div class="main-img-user1 avatar-md me-4">
															<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/1.jpg')}}">
															<span class="badge rounded-pill bg-secondary number-badge">11</span>
														</div>
														<div class="main-img-user1 avatar-lg">
															<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/11.jpg')}}">
															<span class="badge rounded-pill bg-success number-badge">3</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Avatars with icons</h6>
										<p class="text-muted card-sub-title">Avatars that show icon badges.</p>
									</div>
									<div class="text-wrap">
										<div class="additional-avatars">
											<div class="demo-avatar-group">
												<div class="demo-avatar-group">
													<div class="main-img-user3 avatar-sm me-4">
														<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/2.jpg')}}">
														<span class="badge rounded-pill badge-primary icon-badgeavatar"><i class="fe fe-plus"></i></span>
													</div>
													<div class="main-img-user3 avatar-md me-4">
														<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/1.jpg')}}">
														<span class="badge rounded-pill bg-secondary icon-badgeavatar"><i class="fe fe-edit"></i></span>
													</div>
													<div class="main-img-user3 avatar-lg">
														<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/11.jpg')}}">
														<span class="badge rounded-pill bg-success icon-badgeavatar"><i class="fe fe-delete"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Stacked Avatars in Numbers</h6>
										<p class="text-muted card-sub-title">Group of avatars stacked together with number representation.</p>
									</div>
									<div class="text-wrap">
										<div class="avatar-list avatar-list-stacked">
											<span class="avatar1 brround"><img alt="" class="rounded-circle" src="{{url('assets/img/faces/2.jpg')}}"></span>
											<span class="avatar1 brround"><img alt="" class="rounded-circle" src="{{url('assets/img/faces/6.jpg')}}"></span>
											<span class="avatar1 brround"><img alt="" class="rounded-circle" src="{{url('assets/img/faces/8.jpg')}}"></span>
											<span class="avatar1 brround"><img alt="" class="rounded-circle" src="{{url('assets/img/faces/10.jpg')}}"></span>
											<span class="avatar1 brround"><img alt="" class="rounded-circle" src="{{url('assets/img/faces/12.jpg')}}"></span>
											<span class="avatar1 brround">+8</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Stacked Avatars in Numbers</h6>
										<p class="text-muted card-sub-title">Avatars that show icon badges.</p>
									</div>
									<div class="text-wrap">
										<div class="avatar-list avatar-list-stacked">
											<span class="avatar1 brround"><img alt="" class="rounded-circle" src="{{url('assets/img/faces/2.jpg')}}"></span>
											<span class="avatar1 brround"><img alt="" class="rounded-circle" src="{{url('assets/img/faces/6.jpg')}}"></span>
											<span class="avatar1 brround"><img alt="" class="rounded-circle" src="{{url('assets/img/faces/8.jpg')}}"></span>
											<span class="avatar1 brround"><img alt="" class="rounded-circle" src="{{url('assets/img/faces/10.jpg')}}"></span>
											<span class="avatar1 brround"><img alt="" class="rounded-circle" src="{{url('assets/img/faces/12.jpg')}}"></span>
											<span class="avatar1 brround"><i class="fe fe-plus"></i></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->
			<!-- Country-selector modal-->
			<div class="modal fade" id="country-selector">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header border-bottom">
							<h6 class="modal-title">Choose Country</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
						</div>
						<div class="modal-body">
							<div class="row p-3">
								<div class="col-lg-6">
									<input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked="">
									<label class="btn btn-country btn-lg btn-block" for="btnradio1">
										<span class="country-selector"><img alt="" src="{{url('assets/img/flags/us_flag.jpg')}}" class="me-3 language"></span>Usa
									</label>

									<input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
									<label class="btn btn-country btn-lg btn-block" for="btnradio2">
										<span class="country-selector"><img alt="" src="{{url('assets/img/flags/italy_flag.jpg')}}" class="me-3 language"></span>Italy
									</label>

									<input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
									<label class="btn btn-country btn-lg btn-block" for="btnradio3">
										<span class="country-selector"><img alt="" src="{{url('assets/img/flags/spain_flag.jpg')}}" class="me-3 language"></span>Spain
									</label>

									<input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
									<label class="btn btn-country btn-lg btn-block" for="btnradio4">
										<span class="country-selector"><img alt="" src="{{url('assets/img/flags/india_flag.jpg')}}" class="me-3 language"></span>India
									</label>

									<input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
									<label class="btn btn-country btn-lg btn-block" for="btnradio5">
										<span class="country-selector"><img alt="" src="{{url('assets/img/flags/french_flag.jpg')}}" class="me-3 language"></span>France
									</label>
									<input type="radio" class="btn-check" name="btnradio" id="btnradio16" autocomplete="off">
									<label class="btn btn-country btn-lg btn-block" for="btnradio16">
										<span class="country-selector"><img alt="" src="{{url('assets/img/flags/mexico.jpg')}}" class="me-3 language"></span>Mexico
									</label>
									<input type="radio" class="btn-check" name="btnradio" id="btnradio17" autocomplete="off">
									<label class="btn btn-country btn-lg btn-block" for="btnradio17">
										<span class="country-selector"><img alt="" src="{{url('assets/img/flags/singapore.jpg')}}" class="me-3 language"></span>Singapore
									</label>
									<input type="radio" class="btn-check" name="btnradio" id="btnradio18" autocomplete="off">
									<label class="btn btn-country btn-lg btn-block" for="btnradio18">
										<span class="country-selector"><img alt="" src="{{url('assets/img/flags/poland.jpg')}}" class="me-3 language"></span>Poland
									</label>
									<input type="radio" class="btn-check" name="btnradio" id="btnradio19" autocomplete="off">
									<label class="btn btn-country btn-lg btn-block" for="btnradio18">
										<span class="country-selector"><img alt="" src="{{url('assets/img/flags/austria.jpg')}}" class="me-3 language"></span>Austria
									</label>
								</div>
								<div class="col-lg-6">
									<input type="radio" class="btn-check" name="btnradio" id="btnradio7" autocomplete="off">
									<label class="btn btn-country btn-lg btn-block" for="btnradio7">
										<span class="country-selector"><img alt="" src="{{url('assets/img/flags/russia_flag.jpg')}}" class="me-3 language"></span>Russia
									</label>

									<input type="radio" class="btn-check" name="btnradio" id="btnradio8" autocomplete="off">
									<label class="btn btn-country btn-lg btn-block" for="btnradio8">
										<span class="country-selector"><img alt="" src="{{url('assets/img/flags/germany_flag.jpg')}}" class="me-3 language"></span>Germany
									</label>

									<input type="radio" class="btn-check" name="btnradio" id="btnradio9" autocomplete="off">
									<label class="btn btn-country btn-lg btn-block" for="btnradio9">
										<span class="country-selector"><img alt="" src="{{url('assets/img/flags/argentina.jpg')}}" class="me-3 language"></span>Argentina
									</label>

									<input type="radio" class="btn-check" name="btnradio" id="btnradio10" autocomplete="off">
									<label class="btn btn-country btn-lg btn-block" for="btnradio10">
										<span class="country-selector"><img alt="" src="{{url('assets/img/flags/brazil.jpg')}}" class="me-3 language"></span>Brazil
									</label>

									<input type="radio" class="btn-check" name="btnradio" id="btnradio11" autocomplete="off">
									<label class="btn btn-country btn-lg btn-block" for="btnradio11">
										<span class="country-selector"><img alt="" src="{{url('assets/img/flags/uae.jpg')}}" class="me-3 language"></span>U.A.E
									</label>
									<input type="radio" class="btn-check" name="btnradio" id="btnradio12" autocomplete="off">
									<label class="btn btn-country btn-lg btn-block" for="btnradio12">
										<span class="country-selector"><img alt="" src="{{url('assets/img/flags/china.jpg')}}" class="me-3 language"></span>China
									</label>
									<input type="radio" class="btn-check" name="btnradio" id="btnradio14" autocomplete="off">
									<label class="btn btn-country btn-lg btn-block" for="btnradio14">
										<span class="country-selector"><img alt="" src="{{url('assets/img/flags/uk.jpg')}}" class="me-3 language"></span>U.K
									</label>
									<input type="radio" class="btn-check" name="btnradio" id="btnradio15" autocomplete="off">
									<label class="btn btn-country btn-lg btn-block" for="btnradio15">
										<span class="country-selector"><img alt="" src="{{url('assets/img/flags/malaysia.jpg')}}" class="me-3 language"></span>Malaysia
									</label>
									<input type="radio" class="btn-check" name="btnradio" id="btnradio20" autocomplete="off">
									<label class="btn btn-country btn-lg btn-block" for="btnradio20">
										<span class="country-selector"><img alt="" src="{{url('assets/img/flags/canada.jpg')}}" class="me-3 language"></span>Canada
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Country-selector modal-->

			<!-- Message Modal -->
			<div class="modal fade" id="chatmodel" tabindex="-1" role="dialog"  aria-hidden="true">
				<div class="modal-dialog modal-dialog-right chatbox" role="document">
					<div class="modal-content chat border-0">
						<div class="card overflow-hidden mb-0 border-0">
							<!-- action-header -->
							<div class="action-header clearfix">
								<div class="float-start hidden-xs d-flex ms-2">
									<div class="img_cont me-3">
										<img src="{{url('assets/img/faces/6.jpg')}}" class="rounded-circle user_img" alt="img">
									</div>
									<div class="align-items-center mt-0">
										<h4 class="text-white mb-0 font-weight-semibold">Daneil Scott</h4>
										<span class="dot-label bg-success"></span><span class="me-3 text-white">online</span>
									</div>
								</div>
								<ul class="ah-actions actions align-items-center">
									<li class="call-icon">
										<a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal" data-bs-target="#audiomodal">
											<i class="fe fe-phone"></i>
										</a>
									</li>
									<li class="video-icon">
										<a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal" data-bs-target="#videomodal">
											<i class="fe fe-video"></i>
										</a>
									</li>
									<li class="dropdown">
										<a href="" data-bs-toggle="dropdown" aria-expanded="true">
											<i class="fe fe-more-vertical"></i>
										</a>
										<ul class="dropdown-menu dropdown-menu-right">
											<li><i class="fa fa-user-circle"></i> View profile</li>
											<li><i class="fa fa-users"></i>Add friends</li>
											<li><i class="fa fa-plus"></i> Add to group</li>
											<li><i class="fa fa-ban"></i> Block</li>
									</ul>
									</li>
									<li>
										<a href=""  class="" data-bs-dismiss="modal" aria-label="Close">
											<span aria-hidden="true"><i class="fe fe-x-circle text-white"></i></span>
										</a>
									</li>
							</ul>
							</div>
							<!-- action-header end -->

							<!-- msg_card_body -->
							<div class="card-body msg_card_body">
								<div class="chat-box-single-line">
									<abbr class="timestamp">july 1st, 2021</abbr>
								</div>
								<div class="d-flex justify-content-start">
									<div class="img_cont_msg">
										<img src="{{url('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Hi, how are you Jenna Side?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end ">
									<div class="msg_cotainer_send">
										Hi Connor Paige i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="{{url('assets/img/faces/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="{{url('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end ">
									<div class="msg_cotainer_send">
										You welcome Connor Paige
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="{{url('assets/img/faces/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="{{url('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Yo, Can you update Views?
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										But I must explain to you how all this mistaken  born and I will give
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="{{url('assets/img/faces/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="{{url('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Yo, Can you update Views?
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										But I must explain to you how all this mistaken  born and I will give
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="{{url('assets/img/faces/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start ">
									<div class="img_cont_msg">
										<img src="{{url('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Yo, Can you update Views?
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										But I must explain to you how all this mistaken  born and I will give
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="{{url('assets/img/faces/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
									</div>
								</div>
								<div class="d-flex justify-content-start">
									<div class="img_cont_msg">
										<img src="{{url('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
									</div>
									<div class="msg_cotainer">
										Okay Bye, text you later..
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<!-- msg_card_body end -->
							<!-- card-footer -->
							<div class="card-footer">
								<div class="msb-reply d-flex">
									<div class="input-group">
										<input type="text" class="form-control " placeholder="Typing....">
										<div class="input-group-append ">
											<button type="button" class="btn btn-primary ">
												<i class="far fa-paper-plane" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
							</div><!-- card-footer end -->
						</div>
					</div>
				</div>
			</div>

			<!--Video Modal -->
			<div id="videomodal" class="modal fade">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-body mx-auto text-center p-7">
							<h5>Nowa Video call</h5>
							<img src="{{url('assets/img/faces/6.jpg')}}" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
							<h4 class="mb-1 font-weight-semibold">Daneil Scott</h4>
							<h6>Calling...</h6>
							<div class="mt-5">
								<div class="row">
									<div class="col-4">
										<a class="icon icon-shape rounded-circle mb-0 me-3" href="javascript:void(0);">
											<i class="fas fa-video-slash"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape rounded-circle text-white mb-0 me-3" href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
											<i class="fas fa-phone bg-danger text-white"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape rounded-circle mb-0 me-3" href="javascript:void(0);">
											<i class="fas fa-microphone-slash"></i>
										</a>
									</div>
								</div>
							</div>
						</div><!-- modal-body -->
					</div>
				</div><!-- modal-dialog -->
			</div><!-- modal -->

			<!-- Audio Modal -->
			<div id="audiomodal" class="modal fade">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-body mx-auto text-center p-7">
							<h5>Nowa Voice call</h5>
							<img src="{{url('assets/img/faces/6.jpg')}}" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
							<h4 class="mb-1  font-weight-semibold">Daneil Scott</h4>
							<h6>Calling...</h6>
							<div class="mt-5">
								<div class="row">
									<div class="col-4">
										<a class="icon icon-shape rounded-circle mb-0 me-3" href="javascript:void(0);">
											<i class="fas fa-volume-up bg-light"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape rounded-circle text-white mb-0 me-3" href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
											<i class="fas fa-phone text-white bg-primary"></i>
										</a>
									</div>
									<div class="col-4">
										<a class="icon icon-shape  rounded-circle mb-0 me-3" href="javascript:void(0);">
											<i class="fas fa-microphone-slash bg-light"></i>
										</a>
									</div>
								</div>
							</div>
						</div><!-- modal-body -->
					</div>
				</div><!-- modal-dialog -->
			</div><!-- modal -->

		<!-- End Page -->

@endsection