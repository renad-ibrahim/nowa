@extends('reuseParts.main')
@section('content')
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1">LIST GROUP</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">List Group</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- Page-Header-->
						<div class="row">
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic List group</h3>
									</div>
									<div class="card-body ps-5 pe-5">
										<ul class="list-group">
											<li class="list-group-item">An item</li>
											<li class="list-group-item">A second item</li>
											<li class="list-group-item">A third item</li>
											<li class="list-group-item">A fourth item</li>
											<li class="list-group-item">And a fifth one</li>
										  						</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic List group with Active item</h3>
									</div>
									<div class="card-body ps-5 pe-5">
										<ul class="list-group">
											<li class="list-group-item active" aria-current="true">An active item</li>
											<li class="list-group-item">A second item</li>
											<li class="list-group-item">A third item</li>
											<li class="list-group-item">A fourth item</li>
											<li class="list-group-item">And a fifth one</li>
										  						</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Basic List group with Disabled item</h3>
									</div>
									<div class="card-body ps-5 pe-5">
										<ul class="list-group">
											<li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
											<li class="list-group-item">A second item</li>
											<li class="list-group-item">A third item</li>
											<li class="list-group-item">A fourth item</li>
											<li class="list-group-item">And a fifth one</li>
										  						</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List group with Link</h3>
									</div>
									<div class="card-body ps-5 pe-5">
										<div class="list-group">
											<a href="javascript:void(0);" class="list-group-item list-group-item-action active" aria-current="true">
											  The current link item
											</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action">A second link item</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action">A third link item</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action">A fourth link item</a>
											<a href="javascript:void(0);" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">A disabled link item</a>
										  </div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List group with Buttons</h3>
									</div>
									<div class="card-body ps-5 pe-5">
										<div class="list-group">
											<button type="button" class="list-group-item list-group-item-action active" aria-current="true">
											  The current button
											</button>
											<button type="button" class="list-group-item list-group-item-action">A second item</button>
											<button type="button" class="list-group-item list-group-item-action">A third button item</button>
											<button type="button" class="list-group-item list-group-item-action">A fourth button item</button>
											<button type="button" class="list-group-item list-group-item-action" disabled>A disabled button item</button>
										  </div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Numbered list group</h3>
									</div>
									<div class="card-body ps-5 pe-5">
										<ol class="list-group list-group-numbered">
											<li class="list-group-item">Cras justo odio</li>
											<li class="list-group-item">Cras justo odio</li>
											<li class="list-group-item">Cras justo odio</li>
											<li class="list-group-item">Cras justo odio</li>
											<li class="list-group-item">Cras justo odio</li>
										  </ol>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-body">
										<h3 class="card-title  mg-b-10">List group with flush</h3>
										   <p class="mg-b-20">Add .list-group-flush to remove some borders and rounded corners to render list group items edge-to-edge in a parent container(e.g., cards).</p>
										   <div>
											<ul class="list-group list-group-flush">
												<li class="list-group-item">An item</li>
												<li class="list-group-item">A second item</li>
												<li class="list-group-item">A third item</li>
												<li class="list-group-item">A fourth item</li>
										</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Numbered list group with custon content</h3>
									</div>
									<div class="card-body ps-5 pe-5">
										<ol class="list-group list-group-numbered">
											<li class="list-group-item d-flex justify-content-between align-items-start">
											  <div class="ms-2 me-auto">
												<div class="fw-bold">Subheading</div>
												Cras justo odio
											  </div>
											  <span class="badge bg-primary rounded-pill">14</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-start">
											  <div class="ms-2 me-auto">
												<div class="fw-bold">Subheading</div>
												Cras justo odio
											  </div>
											  <span class="badge bg-primary rounded-pill">14</span>
											</li>
											<li class="list-group-item d-flex justify-content-between align-items-start">
											  <div class="ms-2 me-auto">
												<div class="fw-bold">Subheading</div>
												Cras justo odio
											  </div>
											  <span class="badge bg-primary rounded-pill">14</span>
											</li>
										  </ol>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-body">
										<h3 class="card-title  mg-b-10">Horizontal List group</h3>
										   <p class="mg-b-20">Add .list-group-horizontal to change the layout of list group items from vertical to horizontal across all breakpoints. Alternatively, choose a responsive variant .list-group-horizontal-{sm|md|lg|xl|xxl} to make a list group horizontal starting at that breakpoint’s min-width.</p>
										   <div>
											<ul class="list-group list-group-horizontal">
												<li class="list-group-item">An item</li>
												<li class="list-group-item">A second item</li>
												<li class="list-group-item">A third item</li>
											  						</ul>
											  <ul class="list-group list-group-horizontal-sm">
												<li class="list-group-item">An item</li>
												<li class="list-group-item">A second item</li>
												<li class="list-group-item">A third item</li>
											  						</ul>
											  <ul class="list-group list-group-horizontal-md">
												<li class="list-group-item">An item</li>
												<li class="list-group-item">A second item</li>
												<li class="list-group-item">A third item</li>
											  						</ul>
											  <ul class="list-group list-group-horizontal-lg">
												<li class="list-group-item">An item</li>
												<li class="list-group-item">A second item</li>
												<li class="list-group-item">A third item</li>
											  						</ul>
											  <ul class="list-group list-group-horizontal-xl">
												<li class="list-group-item">An item</li>
												<li class="list-group-item">A second item</li>
												<li class="list-group-item">A third item</li>
											  						</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-body">
										<h3 class="card-title  mg-b-10">List group with Checkboxes</h3>
										   <p class="mg-b-20">Place Bootstrap’s checkboxes and radios within list group items and customize as needed. You can use them without labels, but please remember to include an aria-label attribute and value for accessibility.</p>
										   <div>
											<ul class="list-group">
												<li class="list-group-item">
													<label class="d-flex align-items-center mb-0">
														<span class="check-box mb-0 ms-2">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
														<span class="ms-3 my-auto">
															First checkbox
														</span>
													</label>
												</li>
												<li class="list-group-item">
													<label class="d-flex align-items-center mb-0">
														<span class="check-box mb-0 ms-2">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
														<span class="ms-3 my-auto">
															Second checkbox
														</span>
													</label>
												</li>
												<li class="list-group-item">
													<label class="d-flex align-items-center mb-0">
														<span class="check-box mb-0 ms-2">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
														<span class="ms-3 my-auto">
															Third checkbox
														</span>
													</label>
												</li>
												<li class="list-group-item">
													<label class="d-flex align-items-center mb-0">
														<span class="check-box mb-0 ms-2">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
														<span class="ms-3 my-auto">
															Fourth checkbox
														</span>
													</label>
												</li>
												<li class="list-group-item">
													<label class="d-flex align-items-center mb-0">
														<span class="check-box mb-0 ms-2">
															<span class="ckbox"><input type="checkbox"><span></span></span>
														</span>
														<span class="ms-3 my-auto">
															Fifth checkbox
														</span>
													</label>
												</li>
											  						</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-body">
										<h3 class="card-title  mg-b-10">List group with Contextual classes</h3>
										   <p class="mg-b-20">Use contextual classes to style list items with a stateful background and color..</p>
										   <div>
											<ul class="list-group">
												<li class="list-group-item">A simple default list group item</li>

												<li class="list-group-item list-group-item-primary">A simple primary list group item</li>
												<li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
												<li class="list-group-item list-group-item-success">A simple success list group item</li>
												<li class="list-group-item list-group-item-warning">A simple warning list group item</li>
												<li class="list-group-item list-group-item-info">A simple info list group item</li>
											  						</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">List style with paragraph</h3>
									</div>
									<div class="card-body ps-5 pe-5">
										<div>
											<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor, fuga veniam alias ab nemo nesciunt aperiam vero rem enim ,Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos obcaecati velit earum suscipit possimus quaerat similique eos quod distinctio commodi dicta ?
											</p>
											<ul class="paragraph-list">
												<li>Lorem ipsum dolor sit amet</li>
												<li>Consectetur adipiscing elit</li>
												<li>Integer molestie lorem at massa</li>
												<li>Facilisis in pretium nisl aliquet</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Unorder List Style</h3>
									</div>
									<div class="card-body ps-5 pe-5">
										<ul class="list-style-1">
										  <li>Lorem ipsum dolor sit amet</li>
										  <li>Consectetur adipiscing elit</li>
										  <li>Integer molestie lorem at massa</li>
										  <li>Facilisis in pretium nisl aliquet</li>
										  <li>Nulla volutpat aliquam velit
											<ul>
											  <li>Phasellus iaculis neque</li>
											  <li>Purus sodales ultricies</li>
											  <li>Vestibulum laoreet porttitor sem</li>
											  <li>Ac tristique libero volutpat at</li>
										</ul>
										  </li>
										  <li>Faucibus porta lacus fringilla vel</li>
										  <li>Aenean sit amet erat nunc</li>
										  <li>Eget porttitor lorem</li>
									</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Unorder List Style2</h3>
									</div>
									<div class="card-body ps-5 pe-5">
										<ul class="list-style2">
										  <li>Lorem ipsum dolor sit amet</li>
										  <li>Consectetur adipiscing elit</li>
										  <li>Integer molestie lorem at massa</li>
										  <li>Facilisis in pretium nisl aliquet</li>
										  <li>Nulla volutpat aliquam velit
											<ul>
											  <li>Phasellus iaculis neque</li>
											  <li>Purus sodales ultricies</li>
											  <li>Vestibulum laoreet porttitor sem</li>
											  <li>Ac tristique libero volutpat at</li>
										</ul>
										  </li>
										  <li>Faucibus porta lacus fringilla vel</li>
										  <li>Aenean sit amet erat nunc</li>
										  <li>Eget porttitor lorem</li>
									</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Unorder List Style3</h3>
									</div>
									<div class="card-body ps-5 pe-5">
										<ul class="list-style3">
										  <li>Lorem ipsum dolor sit amet</li>
										  <li>Consectetur adipiscing elit</li>
										  <li>Integer molestie lorem at massa</li>
										  <li>Facilisis in pretium nisl aliquet</li>
										  <li>Nulla volutpat aliquam velit
											<ul>
											  <li>Phasellus iaculis neque</li>
											  <li>Purus sodales ultricies</li>
											  <li>Vestibulum laoreet porttitor sem</li>
											  <li>Ac tristique libero volutpat at</li>
										</ul>
										  </li>
										  <li>Faucibus porta lacus fringilla vel</li>
										  <li>Aenean sit amet erat nunc</li>
										  <li>Eget porttitor lorem</li>
									</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Unorder List Style4</h3>
									</div>
									<div class="card-body ps-5 pe-5">
										<ul class="list-style4">
										  <li>Lorem ipsum dolor sit amet</li>
										  <li>Consectetur adipiscing elit</li>
										  <li>Integer molestie lorem at massa</li>
										  <li>Facilisis in pretium nisl aliquet</li>
										  <li>Nulla volutpat aliquam velit
											<ul>
											  <li>Phasellus iaculis neque</li>
											  <li>Purus sodales ultricies</li>
											  <li>Vestibulum laoreet porttitor sem</li>
											  <li>Ac tristique libero volutpat at</li>
										</ul>
										  </li>
										  <li>Faucibus porta lacus fringilla vel</li>
										  <li>Aenean sit amet erat nunc</li>
										  <li>Eget porttitor lorem</li>
									</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Unorder List Style5</h3>
									</div>
									<div class="card-body ps-5 pe-5">
										<ul class="list-style5">
										  <li>Lorem ipsum dolor sit amet</li>
										  <li>Consectetur adipiscing elit</li>
										  <li>Integer molestie lorem at massa</li>
										  <li>Facilisis in pretium nisl aliquet</li>
										  <li>Nulla volutpat aliquam velit
											<ul>
											  <li>Phasellus iaculis neque</li>
											  <li>Purus sodales ultricies</li>
											  <li>Vestibulum laoreet porttitor sem</li>
											  <li>Ac tristique libero volutpat at</li>
										</ul>
										  </li>
										  <li>Faucibus porta lacus fringilla vel</li>
										  <li>Aenean sit amet erat nunc</li>
										  <li>Eget porttitor lorem</li>
									</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Unorder List Style6</h3>
									</div>
									<div class="card-body ps-5 pe-5">
										<ul class="list-style6">
										  <li>Lorem ipsum dolor sit amet</li>
										  <li>Consectetur adipiscing elit</li>
										  <li>Integer molestie lorem at massa</li>
										  <li>Facilisis in pretium nisl aliquet</li>
										  <li>Nulla volutpat aliquam velit
											<ul>
											  <li>Phasellus iaculis neque</li>
											  <li>Purus sodales ultricies</li>
											  <li>Vestibulum laoreet porttitor sem</li>
											  <li>Ac tristique libero volutpat at</li>
										</ul>
										  </li>
										  <li>Faucibus porta lacus fringilla vel</li>
										  <li>Aenean sit amet erat nunc</li>
										  <li>Eget porttitor lorem</li>
									</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Order list</h3>
									</div>
									<div class="card-body ps-5 pe-5">
										<ol class="order-list">
										  <li>Lorem ipsum dolor sit amet</li>
										  <li>Consectetur adipiscing elit</li>
										  <li>Integer molestie lorem at massa</li>
										  <li>Facilisis in pretium nisl aliquet</li>
										  <li>Nulla volutpat aliquam velit
											<ol class="order-list">
											  <li>Phasellus iaculis neque</li>
											  <li>Purus sodales ultricies</li>
											  <li>Vestibulum laoreet porttitor sem</li>
											  <li>Ac tristique libero volutpat at</li>
											</ol>
										  </li>
										  <li>Faucibus porta lacus fringilla vel</li>
										  <li>Aenean sit amet erat nunc</li>
										  <li>Eget porttitor lorem</li>
										</ol>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Order With unorder</h3>
									</div>
									<div class="card-body ps-5 pe-5">
										<ol class="order-list">
										  <li>Lorem ipsum dolor sit amet</li>
										  <li>Consectetur adipiscing elit</li>
										  <li>Integer molestie lorem at massa</li>
										  <li>Facilisis in pretium nisl aliquet</li>
										  <li>Nulla volutpat aliquam velit
											<ul class="list-style4 ps-5">
											  <li>Phasellus iaculis neque</li>
											  <li>Purus sodales ultricies</li>
											  <li>Vestibulum laoreet porttitor sem</li>
											  <li>Ac tristique libero volutpat at</li>
										</ul>
										  </li>
										  <li>Faucibus porta lacus fringilla vel</li>
										  <li>Aenean sit amet erat nunc</li>
										  <li>Eget porttitor lorem</li>
										</ol>
									</div>
								</div>
							</div>
						</div>

					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-6 col-md-12">
							<div class="card mg-b-20" id="list">
									<div class="card-header">
										<h3 class="card-title">Basic Example</h3>
									<p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication</p>
									</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="example">
											<div class="listgroup-example ">
												<ul class="list-group">
													<li>Dapibus ac facilisis in</li>
													<li>Morbi leo risus</li>
													<li>Cras justo odio
														<ul class="list-style-disc">
														  <li>Lorem </li>
														  <li>established</li>
														  <li>Contrary</li>
						</ul>
													</li>
													<li>Porta ac consectetur ac</li>
													<li>Vestibulum at eros</li>
											</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


						<div class="col-lg-6 col-md-12">
							<div class="card mg-b-20" id="list1">
									<div class="card-header">
										<h3 class="card-title">Active Item</h3>
									<p class="mg-b-20 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication</p>
									</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="example">
											<div class="listgroup-example2">
												<ul class="list-group">
													<li>Dapibus ac facilisis in</li>
													<li>Morbi leo risus</li>
													<li>Cras justo odio
														<ul class="list-style-disc">
														  <li>Lorem </li>
														  <li>established</li>
														  <li>Contrary</li>
						</ul>
													</li>
													<li>Porta ac consectetur ac</li>
													<li>Vestibulum at eros</li>
											</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-12 col-xl-6 col-md-12">
							<div class="card mg-b-20" >
									<div class="card-header">
									<h3 class="card-title">Custom content</h3>
									<p class="mg-b-20 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication</p>
									</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="example">
											<div class="list-group">
												<a class="list-group-item list-group-item-action flex-column align-items-start active" href="javascript:void(0);">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-2 tx-14">List group item heading</h5><small>3 days ago</small>
												</div>
												<p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small>Donec id elit non mi porta.</small></a> <a class="list-group-item list-group-item-action flex-column align-items-start" href="javascript:void(0);">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-2 tx-14">List group item heading</h5><small class="text-muted">3 days ago</small>
												</div>
												<p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small class="text-muted">Donec id elit non mi porta.</small></a> <a class="list-group-item list-group-item-action flex-column align-items-start" href="javascript:void(0);">
												<div class="d-flex w-100 justify-content-between">
													<h5 class="mb-2 tx-14">List group item heading</h5><small class="text-muted">3 days ago</small>
												</div>
												<p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small class="text-muted">Donec id elit non mi porta.</small></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-12 col-xl-6 col-md-12">
							<div class="card mg-b-20" >
									<div class="card-header">
									<h3 class="card-title">Custom content with image</h3>
									<p class="mg-b-20 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication</p>
									</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="example">
											<div class="list-group">
												<a class="list-group-item list-group-item-action flex-column align-items-start active" href="javascript:void(0);">
													<div class="d-flex">
														<img alt="" class="me-3 rounded-circle avatar-md" src="{{url('assets/img/faces/3.jpg')}}">
														<div class="">
															<div class="d-flex w-100 justify-content-between">
																<h5 class="mb-2 tx-14">List group item heading</h5><small>3 days ago</small>
															</div>
															<p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small>Donec id elit non mi porta.</small>
														</div>
													</div>
												</a>
												<a class="list-group-item list-group-item-action flex-column align-items-start" href="javascript:void(0);">
													<div class="d-flex">
														<img alt="" class="me-3 rounded-circle avatar-md" src="{{url('assets/img/faces/8.jpg')}}">
														<div class="">
															<div class="d-flex w-100 justify-content-between">
																<h5 class="mb-2 tx-14">List group item heading</h5><small>3 days ago</small>
															</div>
															<p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small>Donec id elit non mi porta.</small>
														</div>
													</div>
												</a>
												<a class="list-group-item list-group-item-action flex-column align-items-start" href="javascript:void(0);">
													<div class="d-flex">
														<img alt="" class="me-3 rounded-circle avatar-md" src="{{url('assets/img/faces/11.jpg')}}">
														<div class="">
															<div class="d-flex w-100 justify-content-between">
																<h5 class="mb-2 tx-14">List group item heading</h5><small>3 days ago</small>
															</div>
															<p class="mb-1 tx-13">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p><small>Donec id elit non mi porta.</small>
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-12 col-xl-6 col-md-12">
							<div class="card mg-b-20">
									<div class="card-header">
										<h3 class="card-title">USER LIST</h3>
									<p class="mg-b-20 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication</p>
									</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="">
											<div class="list-group">
												<div class="list-group-item pd-y-20">
													<div class="media">
														<div class="d-flex mg-r-10 wd-50">
															<img class="me-4 rounded-circle avatar-md" src="{{url('assets/img/faces/17.jpg')}}" alt="avatar">
														</div>
														<div class="media-body">
															<div class="media-body d-flex">
																<h6 class="tx-15 mb-2">Blake Vanessa</h6>
																<span class="tx-12 float-end ms-auto text-muted">4 hours ago</span>
															</div>
															<p class="tx-13 mg-b-10 text-muted mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's .</p>
														</div>
													</div>
												</div>
												<div class="list-group-item pd-y-20">
													<div class="media">
														<div class="d-flex mg-r-10 wd-50">
															<img class="me-4 rounded-circle avatar-md" src="{{url('assets/img/faces/5.jpg')}}" alt="avatar">
														</div>
														<div class="media-body">
															<div class="media-body d-flex">
																<h6 class="tx-15 mb-2">Elizabeth Parsons</h6>
																<span class="tx-12 float-end ms-auto text-muted">8 hours ago</span>
															</div>
															<p class="tx-13 mg-b-10 text-muted mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's .</p>
														</div>
													</div>
												</div>
												<div class="list-group-item pd-y-20">
													<div class="media">
														<div class="d-flex mg-r-10 wd-50">
															<img class="me-4 rounded-circle avatar-md" src="{{url('assets/img/faces/12.jpg')}}" alt="avatar">
														</div>
														<div class="media-body">
															<div class="media-body d-flex">
																<h6 class="tx-15 mb-2">Nicola Lambert</h6>
																<span class="tx-12 float-end text-muted ms-auto">12 hours ago</span>
															</div>
															<p class="tx-13 mg-b-10 text-muted mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's .</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-12 col-xl-6 col-md-12">
							<div class="card mg-b-20" id="list8">
							   <div class="card-header border-bottom-0">
									<div>
										<h3 class="card-title ">Using Image</h3>
									<p class="mg-b-20 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
									</div>
								</div>
								<div class="card-body">
									<div class="text-wrap">
										<div class="">
											<ul class="list-group wd-md-100p users-list-group">
												<li class="list-group-item d-flex align-items-center">
													<img alt="" class="me-3 rounded-circle avatar-md" src="{{url('assets/img/faces/5.jpg')}}">
													<div>
														<h6 class="tx-15 mb-1 tx-inverse tx-semibold mg-b-0">Adrian Monino</h6><span class="d-block tx-13 text-muted">Premium Member</span>
													</div>
													<div class="d-flex float-start ms-auto">
														<a href="javascript:void(0);" class="btn btn-light btn-icon me-2">
														  <div class=""><i class="bx bx-plus"></i></div>
														</a>
														<a href="javascript:void(0);" class="btn btn-light btn-icon">
														  <div class=""><i class="bx bx-minus"></i></div>
														</a>
													</div>
												</li>
												<li class="list-group-item d-flex align-items-center">
													<img alt="" class="me-3 rounded-circle avatar-md" src="{{url('assets/img/faces/6.jpg')}}">
													<div>
														<h6 class="tx-15 mb-1 tx-inverse tx-semibold mg-b-0">Joel Mendez</h6><span class="d-block tx-13 text-muted">Premium Member</span>
													</div>
													<div class="d-flex float-start ms-auto">
														<a href="javascript:void(0);" class="btn btn-light btn-icon me-2">
														  <div class=""><i class="bx bx-plus"></i></div>
														</a>
														<a href="javascript:void(0);" class="btn btn-light btn-icon">
														  <div class=""><i class="bx bx-minus"></i></div>
														</a>
													</div>
												</li>
												<li class="list-group-item d-flex align-items-center">
													<img alt="" class="me-3 rounded-circle avatar-md" src="{{url('assets/img/faces/15.jpg')}}">
													<div>
														<h6 class="tx-15 mb-1 tx-inverse tx-semibold mg-b-0">Joel Mendez</h6><span class="d-block tx-13 text-muted">Premium Member</span>
													</div>
													<div class="d-flex float-start ms-auto">
														<a href="javascript:void(0);" class="btn btn-light btn-icon me-2">
														  <div class=""><i class="bx bx-plus"></i></div>
														</a>
														<a href="javascript:void(0);" class="btn btn-light btn-icon">
														  <div class=""><i class="bx bx-minus"></i></div>
														</a>
													</div>
												</li>
												<li class="list-group-item d-flex align-items-center">
													<img alt="" class="me-3 rounded-circle avatar-md" src="{{url('assets/img/faces/12.jpg')}}">
													<div>
														<h6 class="tx-15 mb-1 tx-inverse tx-semibold mg-b-0">Marianne Audrey</h6><span class="d-block tx-13 text-muted">Premium Member</span>
													</div>
													<div class="d-flex float-start ms-auto">
														<a href="javascript:void(0);" class="btn btn-light btn-icon me-2">
														  <div class=""><i class="bx bx-plus"></i></div>
														</a>
														<a href="javascript:void(0);" class="btn btn-light btn-icon">
														  <div class=""><i class="bx bx-minus"></i></div>
														</a>
													</div>
												</li>
										</ul>
										</div>
									</div>
								</div>

							</div>
						</div>
						<!-- /row -->
					</div>
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
										<img src="{{url('')}}assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
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
										<img src="{{url('')}}assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
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