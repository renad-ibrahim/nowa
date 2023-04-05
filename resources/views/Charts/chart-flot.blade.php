@extends('reuseParts.main')
@section('content')
    <!-- main-content -->
    <div class="main-content app-content">
        <!-- container -->
        <div class="main-container container-fluid">
            <!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">FLOT CHARTS</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Charts</a></li>
								<li class="breadcrumb-item active" aria-current="page">Flot charts</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->
            <!-- row -->
            <div class="row row-sm">
                <div class="col-md-6">
                    <div class="card mg-b-20">
                        <div class="card-body">
                            <div class="main-content-label mg-b-5">
                                Line Chart
                            </div>
                            <p class="mg-b-20">Basic Charts Of Nowa template.</p>
                            <div class="ht-200 ht-sm-300" id="flotLine1"></div>
                        </div>
                    </div>
                </div><!-- col-6 -->
                <div class="col-md-6">
                    <div class="card mg-b-20">
                        <div class="card-body">
                            <div class="main-content-label mg-b-5">
                                Line Chart
                            </div>
                            <p class="mg-b-20">Basic Charts Of Nowa template.</p>
                            <div class="ht-200 ht-sm-300" id="flotLine2"></div>
                        </div>
                    </div>
                </div><!-- col-6 -->
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row row-sm">
                <div class="col-md-6">
                    <div class="card mg-b-20">
                        <div class="card-body">
                            <div class="main-content-label mg-b-5">
                                Area Chart
                            </div>
                            <p class="mg-b-20">Basic Charts Of Nowa template.</p>
                            <div class="ht-200 ht-sm-300" id="flotArea1"></div>
                        </div>
                    </div>
                </div><!-- col-6 -->
                <div class="col-md-6 ">
                    <div class="card mg-b-20">
                        <div class="card-body">
                            <div class="main-content-label mg-b-5">
                                Area Chart
                            </div>
                            <p class="mg-b-20">Basic Charts Of Nowa template.</p>
                            <div class="ht-200 ht-sm-300" id="flotArea2"></div>
                        </div>
                    </div>
                </div><!-- col-6 -->
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row row-sm">
                <div class="col-md-6">
                    <div class="card mg-b-20">
                        <div class="card-body">
                            <div class="main-content-label mg-b-5">
                                Bar Chart
                            </div>
                            <p class="mg-b-20">Basic Charts Of Nowa template.</p>
                            <div class="ht-200 ht-sm-300" id="flotBar1"></div>
                        </div>
                    </div>
                </div><!-- col-6 -->
                <div class="col-md-6">
                    <div class="card mg-b-20">
                        <div class="card-body">
                            <div class="main-content-label mg-b-5">
                                Bar Chart
                            </div>
                            <p class="mg-b-20">Basic Charts Of Nowa template.</p>
                            <div class="ht-200 ht-sm-300" id="flotBar2"></div>
                        </div>
                    </div>
                </div><!-- col-6 -->
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row row-sm">
                <div class="col-md-6">
                    <div class="card mg-b-20 mg-md-b-0">
                        <div class="card-body">
                            <div class="main-content-label mg-b-5">
                                Pie Chart
                            </div>
                            <p class="mg-b-20">Basic Charts Of Nowa template.</p>
                            <div class="ht-200 ht-sm-300" id="flotPie1"></div>
                        </div>
                    </div>
                </div><!-- col-6 -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="main-content-label mg-b-5">
                                Pie Chart
                            </div>
                            <p class="mg-b-20">Basic Charts Of Nowa template.</p>
                            <div class="ht-200 ht-sm-300" id="flotPie2"></div>
                        </div>
                    </div>
                </div><!-- col-6 -->
            </div>
            <!-- row closed -->
        </div>
        <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection