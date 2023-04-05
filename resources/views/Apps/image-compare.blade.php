@extends('reuseParts.main')
@section('content')
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
					<span class="main-content-title mg-b-0 mg-b-lg-1">IMAGE COMPARISION</span>
					</div>
					<div class="justify-content-center mt-2">
						<ol class="breadcrumb">
							<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Apps</a></li>
							<li class="breadcrumb-item active" aria-current="page">Image-Compare</li>
						</ol>
					</div>
				</div>
				<!-- /breadcrumb -->
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
							<div class="card mg-b-20">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Horizontal Image Comparision
									</div>
									<p class="mg-b-20">Example of nowa Horizontal Image Comparision.</p>
									<div class="twentytwenty-container">
										<img src="{{url('assets/img/photos/compare1.jpg')}}" alt="img" />
										<img src="{{url('assets/img/photos/compare2.jpg')}}" alt="img" />
									</div>
								</div>
							</div>
							<!-- div -->

							<!-- div -->
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Vertical Image Comparision
									</div>
									<p class="mg-b-20">Example of nowa Vertical Image Comparision.</p>
									<div class="twentytwenty-container" data-orientation="vertical">
										<img src="{{url('assets/img/photos/compare1.jpg')}}" alt="img" />
										<img src="{{url('assets/img/photos/compare2.jpg')}}" alt="img" />
									</div>
								</div>
							</div>
							<!-- div -->
						</div>
					</div>
				</div>
			</div>
			<!--/Main Content-->
@endsection