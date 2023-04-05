@extends('reuseParts.main')
@section('conent')
			<!-- main-content -->
			<div class="main-content app-content">
				<!-- container -->
				<div class="main-container container-fluid">
					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">USER LIST</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Advanced UI</a></li>
								<li class="breadcrumb-item active" aria-current="page">User List</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->
					<!--Row-->
						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div class="table-responsive  deleted-table">
											<table id="user-datatable" class="table table-bordered text-nowrap border-bottom Userlist">
												<thead>
													<tr>
														<th class="wd-2">
															Photo
														</th>
														<th>Name</th>
														<th>Role</th>
														<th>Last Active</th>
														<th>Country</th>
														<th>Verification</th>
														<th>Joined Date</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-center">
															<div class="avatar-md  rounded-circle">
																<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/4.jpg')}}">
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Ajanto</p>
															<p class="tx-13 text-muted mb-0">ajanto.aja445@hotmail.in</p>
														</td>
														<td>
															<span class="text-muted tx-13">Architect</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">20 days ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">France</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-success-transparent text-success tx-11">Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">23-7-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar avatar-md bg-success text-white rounded-circle">
																W
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Winters</p>
															<p class="tx-13 text-muted mb-0">winters.w345@gmail.org</p>
														</td>
														<td>
															<span class="text-muted tx-13">Front end Designer</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">20 hrs ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">Greece</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-secondary-transparent text-secondary tx-11">Not Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">11-2-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar avatar-md bg-secondary text-white rounded-circle">
																CX
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Cox</p>
															<p class="tx-13 text-muted mb-0">morenocox.g111@gmail.in</p>
														</td>
														<td>
															<span class="text-muted tx-13">Junior Technical Author</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">1 month ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">Texas</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-success-transparent text-success tx-11">Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">25-5-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar-md  rounded-circle">
																<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/7.jpg')}}">
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Kelly</p>
															<p class="tx-13 text-muted mb-0">kellybelly357@webmail.org</p>
														</td>
														<td>
															<span class="text-muted tx-13">Senior Javascript Developer</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">36 mins ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">Columbia</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-secondary-transparent text-secondary tx-11">Not Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">13-3-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar-md  rounded-circle">
																<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/8.jpg')}}">
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Satou</p>
															<p class="tx-13 text-muted mb-0">satousatti3345@gmail.org</p>
														</td>
														<td>
															<span class="text-muted tx-13">Accountant</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">11 hrs ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">Spain</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-success-transparent text-success tx-11">Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">12-6-2020</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar-md  rounded-circle">
																<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/9.jpg')}}">
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Williamson</p>
															<p class="tx-13 text-muted mb-0">Williamson.wilson123@gmail.in</p>
														</td>
														<td>
															<span class="text-muted tx-13">Integration Specialist</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">21 hrs ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">Bermuda</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-success-transparent text-success tx-11">Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">29-1-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar avatar-md bg-info text-white rounded-circle">
																CH
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Chandler</p>
															<p class="tx-13 text-muted mb-0">Chandler.k@mobimail.in</p>
														</td>
														<td>
															<span class="text-muted tx-13">Sales Assistant</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">28 days ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">China</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-secondary-transparent text-secondary tx-11">Not Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">3-4-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar-md  rounded-circle">
																<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/11.jpg')}}">
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Davidson</p>
															<p class="tx-12 font-weight-semibold text-muted mb-0">davidson.david@hotmail.com</p>
														</td>
														<td>
															<span class="text-muted tx-13">Integration Specialist</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">14 mins ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">Portugal</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-success-transparent text-success tx-11">Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">19-8-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar avatar-md bg-warning text-white rounded-circle">
																H
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Hurst</p>
															<p class="tx-13 text-muted mb-0">Hurst.h@webmail.org.in</p>
														</td>
														<td>
															<span class="text-muted tx-13">Javascript Developer</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">17 days ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">Iceland</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-success-transparent text-success tx-11">Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">16-4-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar-md  rounded-circle">
																<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/13.jpg')}}">
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Frost</p>
															<p class="tx-13 text-muted mb-0">Frostpup143@gmail.org</p>
														</td>
														<td>
															<span class="text-muted tx-13">Software Engineer</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">19 hrs ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">India</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-success-transparent text-success tx-11">Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">31-1-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar-md  rounded-circle">
																<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/14.jpg')}}">
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Gaines</p>
															<p class="tx-13 text-muted mb-0">Gaines.j@hotmail.in</p>
														</td>
														<td>
															<span class="text-muted tx-13">Office Manager</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">15 days ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">Romania</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-secondary-transparent text-secondary tx-11">Not Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">27-3-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar-md  rounded-circle">
																<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/15.jpg')}}">
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Flynn</p>
															<p class="tx-13 text-muted mb-0">flynn.gov@gmail.in</p>
														</td>
														<td>
															<span class="text-muted tx-13">Support Lead</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">1 month ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">Japan</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-success-transparent text-success tx-11">Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">23-5-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar-md  rounded-circle">
																<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/16.jpg')}}">
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Marshall</p>
															<p class="tx-13 text-muted mb-0">Marshall@ravichandra.mail</p>
														</td>
														<td>
															<span class="text-muted tx-13">Regional Director</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">2 days ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">Mexico</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-success-transparent text-success tx-11">Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">11-7-2020</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
													<tr>
														<td class="text-center">
															<div class="avatar-md  rounded-circle">
																<img alt="avatar" class="rounded-circle" src="{{url('assets/img/faces/17.jpg')}}">
															</div>
														</td>
														<td>
															<p class="tx-14 font-weight-semibold text-dark mb-1">Kennedy</p>
															<p class="tx-13 text-muted mb-0">Kennedy@123.org.in</p>
														</td>
														<td>
															<span class="text-muted tx-13">Senior Marketing Designer</span>
														</td>
														<td>
															<span class="badge bg-light text-muted tx-13">12 mins ago</span>
														</td>
														<td>
															<span class="text-muted tx-13">Italy</span>
														</td>
														<td>
															<span class="badge font-weight-semibold bg-success-transparent text-success tx-11">Verified</span>
														</td>
														<td>
															<span class="text-muted tx-13">26-4-2021</span>
														</td>
														<td><a href="javascript:void(0);" class="btn btn-icon btn-primary-light me-2" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
															<i class="las la-pen"></i>
														</a></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->
					<!-- row closed  -->
				</div>
				<!-- Container closed -->
			</div>
			<!-- New User Modal-->
			<div class="modal fade" id="Vertically">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content modal-content-demo">
						<div class="modal-header">
							<h6 class="modal-title">Add User</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<div class="p-4">
								<form class="form-horizontal">
									<div class="form-group">
										<input type="text" class="form-control" id="inputName" placeholder="Name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" id="inputName1" placeholder="Role">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
									</div>
									<div class="form-group mb-0 justify-content-end">
										<div class="checkbox">
											<div class="custom-checkbox custom-control">
												<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
												<label for="checkbox-2" class="custom-control-label mt-1 text-dark">New User?</label>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn ripple btn-primary" type="button">Add</button>
							<button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /New User Modal-->
			<!-- main-content closed -->
@endsection