@extends('reuseParts.main')
@section('content')
		<!-- Page -->
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">
					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">SWITCHER-1</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">ECommerce</a></li>
								<li class="breadcrumb-item active" aria-current="page">Switcher-1</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->
					<!-- row -->
                    <div class="container p-5">
                        <div class="row">
                            <div class="col-lg-3 col-md-12 col-sm-12"></div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                 <!-- Switcher -->
								 <div class="switcher-wrapper">
                                    <div class="bg-white">
                                        <div class="form_holder sidebar-right1">
                                            <div class="row">
                                                <div class="p-5">
                                                    <div class="swichermainleft mb-3">
                                                        <h6 class="ms-3">LTR AND RTL VERSIONS</h6>
                                                        <div class="skin-body">
                                                            <div class="switch_section">
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">LTR</span>
                                                                    <p class="onoffswitch2 my-0">
																		<input type="radio" name="onoffswitch25" id="myonoffswitch54" class="onoffswitch2-checkbox" checked>
                                                                        <label for="myonoffswitch54" class="onoffswitch2-label"></label>
																	</p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">RTL</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch25" id="myonoffswitch55" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch55" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swichermainleft mb-3">
                                                        <h6 class="ms-3">Navigation Style</h6>
                                                        <div class="skin-body">
                                                            <div class="switch_section">
                                                                <div class="switch-toggle d-flex">
                                                                    <span class="me-auto">Vertical Menu</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
                                                                        <label for="myonoffswitch34" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Horizantal Click Menu</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch35" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch35" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Horizantal Hover Menu</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch111" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch111" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swichermainleft mb-3">
                                                        <h6 class="ms-3">Theme Style</h6>
                                                        <div class="skin-body">
                                                            <div class="switch_section">
                                                                <div class="switch-toggle d-flex">
                                                                    <span class="me-auto">Light Theme</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                                                        <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex">
                                                                    <span class="me-auto">Light Primary</span>
                                                                    <div class="">
                                                                        <input class="wd-25 ht-25 input-color-picker color-primary-light" value="#38cab3" id="colorID" oninput="changePrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"  data-id7="transparentcolor"  name="lightPrimary">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swichermainleft mb-3">
                                                        <h6 class="ms-3">Primary Theme Style</h6>
                                                        <div class="skin-body">
                                                            <div class="switch_section">
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Dark Theme</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Dark Primary</span>
                                                                    <div class="">
                                                                        <input class="wd-25 ht-25 input-dark-color-picker color-primary-dark" value="#38cab3" id="darkPrimaryColorID" oninput="darkPrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary"  data-id8="transparentcolor" name="darkPrimary">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="swichermainleft mb-3">
														<h6 class="ms-3">Transparent Style</h6>
														<div class="skin-body">
															<div class="switch_section">
																<div class="switch-toggle d-flex mt-2">
																	<span class="me-auto">Transparent Theme</span>
																	<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitchTransparent" class="onoffswitch2-checkbox" >
																		<label for="myonoffswitchTransparent" class="onoffswitch2-label"></label>
																	</p>
																</div>
																<div class="switch-toggle d-flex">
																	<span class="me-auto">Transparent Primary</span>
																	<div class="">
																		<input class="wd-30 ht-30 input-transparent-color-picker color-primary-transparent" value="#38cab3" id="transparentPrimaryColorID" oninput="transparentPrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary"  data-id9="transparentcolor" name="tranparentPrimary">
																	</div>
																</div>
																<div class="switch-toggle d-flex mt-2">
																	<span class="me-auto">Transparent Background</span>
																	<div class="">
																		<input class="wd-30 ht-30 input-transparent-color-picker color-bg-transparent" value="#38cab3" id="transparentBgColorID" oninput="transparentBgColor()" type="color" data-id5="body" data-id6="theme"  data-id9="transparentcolor" name="transparentBackground">
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="swichermainleft mb-3">
														<h6 class="ms-3">Transparent Bg-Image Style</h6>
														<div class="skin-body">
															<div class="switch_section">
																<div class="switch-toggle d-flex">
																	<span class="me-auto">BG-Image Primary</span>
																	<div class="">
																		<input class="wd-30 ht-30 input-transparent-color-picker color-primary-transparent" value="#38cab3" id="transparentBgImgPrimaryColorID" oninput="transparentBgImgPrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary"  data-id9="transparentcolor" name="tranparentPrimary">
																	</div>
																</div>
																<div class="switch-toggle">
																	<a class="bg-img1" onclick="bgImage(this)" href="javascript:void(0);"><img src="{{url('assets/img/media/bg-img1.jpg')}}" id="bgimage1" alt="switch-img" class="br-5 me-2 mb-2"></a>
																	<a class="bg-img2" onclick="bgImage(this)" href="javascript:void(0);"><img src="{{url('assets/img/media/bg-img2.jpg')}}"  id="bgimage2" alt="switch-img" class="br-5 me-2 mb-2"></a>
																	<a class="bg-img3" onclick="bgImage(this)" href="javascript:void(0);"><img src="{{url('assets/img/media/bg-img3.jpg')}}"  id="bgimage3" alt="switch-img" class="br-5 me-2 mb-2"></a>
																	<a class="bg-img4" onclick="bgImage(this)" href="javascript:void(0);"><img src="{{url('assets/img/media/bg-img4.jpg')}}"  id="bgimage4" alt="switch-img" class="br-5 me-2 mb-2"></a>
																</div>
															</div>
														</div>
													</div>
                                                    <div class="swichermainleft mb-3 leftmenu-styles">
                                                        <h6 class="ms-3">Leftmenu Styles</h6>
                                                        <div class="skin-body">
                                                            <div class="switch_section">
                                                                <div class="switch-toggle d-flex">
                                                                    <span class="me-auto">Light Menu</span>
                                                                    <p class="onoffswitch2 my-0">
																		<input type="radio" name="onoffswitch2" id="myonoffswitch3" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Color Menu</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch4" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Dark Menu</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch5" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Gradient Menu</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch25" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch25" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swichermainleft mb-3 header-styles">
                                                        <h6 class="ms-3">Header Styles</h6>
                                                        <div class="skin-body">
                                                            <div class="switch_section">
                                                                <div class="switch-toggle d-flex">
                                                                    <span class="me-auto">Light Header</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch6" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Color Header</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch7" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Dark Header</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch8" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Gradient Header</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch26" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch26" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swichermainleft mb-3">
                                                        <h6 class="ms-3">Layout Width Styles</h6>
                                                        <div class="skin-body">
                                                            <div class="switch_section">
                                                                <div class="switch-toggle d-flex">
                                                                    <span class="me-auto">Full Width</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4" id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                                                                        <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Boxed</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4" id="myonoffswitch10" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swichermainleft mb-3">
                                                        <h6 class="ms-3">Layout Positions</h6>
                                                        <div class="skin-body">
                                                            <div class="switch_section">
                                                                <div class="switch-toggle d-flex">
                                                                    <span class="me-auto">Fixed</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5" id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                                                                        <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Scrollable</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5" id="myonoffswitch12" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swichermainleft vertical-switcher mb-3">
                                                        <h6 class="ms-3">Sidemenu layout Styles</h6>
                                                        <div class="skin-body">
                                                            <div class="switch_section">
                                                                <div class="switch-toggle d-flex">
                                                                    <span class="me-auto">Default Menu</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
                                                                        <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Closed Menu</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch30" class="onoffswitch2-checkbox default-menu">
                                                                        <label for="myonoffswitch30" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Icon with Text</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch14" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Icon Overlay</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch15" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Hover Submenu</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch32" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch32" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                                <div class="switch-toggle d-flex mt-2">
                                                                    <span class="me-auto">Hover Submenu style 1</span>
                                                                    <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch33" class="onoffswitch2-checkbox">
                                                                        <label for="myonoffswitch33" class="onoffswitch2-label"></label>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="swichermainleft p-0">
														<div class="skin-body">
															<div class="switch_section my-4">
																<button class="btn btn-danger btn-block"
																	onclick="localStorage.clear();
																	document.querySelector('html').style = '';
																	names() ;
																	resetData()"
																	type="button">Reset All
																</button>
															</div>
														</div>
													</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Switcher -->
                            </div>
                            <div class="col-lg-3 col-md-12 col-sm-12"></div>
                        </div>
                    </div>
					<!-- row closed -->
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
@endsection