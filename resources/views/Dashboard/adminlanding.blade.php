@extends('Dashboard.master')

@section('content')

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex align-items-center mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Dashboard</h2>
						<p class="mb-0">Vermicomposting Admin Dashboard</p>
					</div>

				</div>
				<div class="row">
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600">{{$inactive_accounts}}</h2>
										<span>InActive Acounts</span>
									</div>
                                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">

                                        <i class="fa fa-user"></i>

                                    </a>

								</div>
							</div>
							<div class="progress  rounded-0" style="height:4px;">
								<div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 50%; height:4px;" role="progressbar">
									<span class="sr-only">50% Complete</span>
								</div>
							</div>
						</div>
					</div>
                    <div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600">{{$active_accounts}}</h2>
										<span>Active Acounts</span>
									</div>
                                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">

                                        <i class="fa fa-user"></i>

                                    </a>

								</div>
							</div>
							<div class="progress  rounded-0" style="height:4px;">
								<div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 50%; height:4px;" role="progressbar">
									<span class="sr-only">50% Complete</span>
								</div>
							</div>
						</div>
					</div>






                    <div class="col-xl-3  col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600">{{$count}}</h2>
										<span>Total Acounts</span>
									</div>
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
							</div>
							<div class="progress  rounded-0" style="height:4px;">
								<div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 30%; height:4px;" role="progressbar">
									<span class="sr-only">30% Complete</span>
								</div>
							</div>
						</div>
					</div>










					<div class="col-xl-3  col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600">{{$bins_number}}</h2>
										<span>Total Bins</span>
									</div>
									<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0)">
										<path d="M32.04 4.08H31.24V2.04C31.24 0.8 30.4 0 29.2 0C28 0 27.16 0.8 27.16 2.04V4.08H13.88V2.04C13.88 0.8 13.08 0 11.84 0C10.6 0 9.80002 0.8 9.80002 2.04V4.08H7.96002C4.08002 4.08 0.800018 7.36 0.800018 11.24V32.88C0.800018 36.76 4.08002 40.04 7.96002 40.04H32.04C35.92 40.04 39.2 36.76 39.2 32.88V11.24C39.2 7.36 35.92 4.08 32.04 4.08ZM7.96002 8.16H32.04C33.68 8.16 35.12 9.6 35.12 11.24V14.08H4.88002V11.24C4.88002 9.6 6.32002 8.16 7.96002 8.16ZM32.04 35.92H7.96002C6.32002 35.92 4.88002 34.48 4.88002 32.84V18.16H35.08V32.84C35.12 34.48 33.68 35.92 32.04 35.92Z" fill="#007A64"/>
										<path d="M16.12 20.6H14.48C13.44 20.6 12.84 21.4 12.84 22.24V24.08C12.84 25.12 13.64 25.72 14.48 25.72H16.12C17.16 25.72 17.76 24.92 17.76 24.08V22.44C17.96 21.44 17.16 20.6 16.12 20.6Z" fill="#007A64"/>
										<path d="M25.52 20.6H23.88C22.84 20.6 22.24 21.4 22.24 22.24V24.08C22.24 25.12 23.04 25.72 23.88 25.72H25.52C26.56 25.72 27.16 24.92 27.16 24.08V22.44C27.16 21.44 26.32 20.6 25.52 20.6Z" fill="#007A64"/>
										<path d="M16.12 28.56H14.48C13.44 28.56 12.84 29.36 12.84 30.2V31.84C12.84 32.88 13.64 33.48 14.48 33.48H16.12C17.16 33.48 17.76 32.68 17.76 31.84V30.2C17.96 29.4 17.16 28.56 16.12 28.56Z" fill="#007A64"/>
										</g>
										<defs>
										<clipPath id="clip0">
										<rect width="40" height="40" fill="white"/>
										</clipPath>
										</defs>
									</svg>
								</div>
							</div>
							<div class="progress  rounded-0" style="height:4px;">
								<div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 90%; height:4px;" role="progressbar">
									<span class="sr-only">90% Complete</span>
								</div>
							</div>
						</div>
					</div>


				</div>
				<div class="row">
					<div class="col-xl-6">
						<div class="row">
							<div class="col-xl-12">





								<div class="card">
									<div class="card-header d-sm-flex d-block pb-0 border-0">
										<div class="mr-auto pr-3">
											<h4 class="text-black fs-20 mb-0">BinConditions Percentage</h4>
										</div>
										<div class="card-action card-tabs mt-3 mt-sm-0 mt-3 mb-sm-0 mb-3 mt-sm-0">
											<ul class="nav nav-tabs" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#Daily" role="tab">
														Daily
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#Weekly" role="tab">
														Weekly
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#Monthly" role="tab">
														Monthly
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="card-body">
										<div class="tab-content">
											<div class="tab-pane fade show active" id="Daily" role="tabpanel">
												<div class="d-flex flex-wrap align-items-center px-4 bg-light">
													<div class="mr-auto d-flex align-items-center py-3">
														<span class="heart-ai bg-primary mr-3">

                                                                <i class="fa fa-user"></i>

														</span>
														<div>
															<p class="fs-18 mb-2">Total Accounts</p>
															<span class="fs-26 text-primary font-w600"></span>
														</div>
													</div>
													<ul class="users pl-3 py-2">
														<li><img src="images/users/1.png" alt=""></li>
														<li><img src="images/users/2.png" alt=""></li>
														<li><img src="images/users/3.png" alt=""></li>
														<li><img src="images/users/4.png" alt=""></li>
														<li><img src="images/users/5.png" alt=""></li>
													</ul>
												</div>
												<div class="row align-items-center">
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div id="radialBar"></div>
													</div>
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div class="d-flex mb-4 align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#BDA25C"/>
																</svg>
																64%
															</span>
															<span>Temperature</span>
														</div>
														<div class="d-flex  mb-4 align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#209F84"/>
																</svg>
																73%
															</span>
															<span>Hummidity</span>
														</div>
														<div class="d-flex align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#323232"/>
																</svg>
																48%
															</span>
															<span>Acidity</span>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="Weekly" role="tabpanel">
												<div class="d-flex flex-wrap align-items-center px-4  bg-light">
													<div class="mr-auto py-3 d-flex align-items-center">
														<span class="heart-ai bg-primary mr-3">
															<i class="fa fa-heart-o" aria-hidden="true"></i>
														</span>
														<div>
															<p class="fs-18 mb-2">Total Users</p>
															<span class="fs-26 text-primary font-w600">786,360</span>
														</div>
													</div>
													<ul class="users pl-3 py-2">
														<li><img src="images/users/2.png" alt=""></li>
														<li><img src="images/users/4.png" alt=""></li>
														<li><img src="images/users/1.png" alt=""></li>
														<li><img src="images/users/4.png" alt=""></li>
														<li><img src="images/users/3.png" alt=""></li>
													</ul>
												</div>
												<div class="row align-items-center">
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div id="radialBar2"></div>
													</div>
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div class="d-flex mb-4 align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#BDA25C"/>
																</svg>
																40%
															</span>
															<span>Temperature</span>
														</div>
														<div class="d-flex  mb-4 align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#209F84"/>
																</svg>
																81%
															</span>
															<span>Hummidity</span>
														</div>
														<div class="d-flex align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#323232"/>
																</svg>
																50%
															</span>
															<span>Acidity</span>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="Monthly" role="tabpanel">
												<div class="d-flex flex-wrap align-items-center px-4  bg-light">
													<div class="mr-auto py-3 d-flex align-items-center">
														<span class="heart-ai bg-primary mr-3">
															<i class="fa fa-heart-o" aria-hidden="true"></i>
														</span>
														<div>
															<p class="fs-18 mb-2">Total User</p>
															<span class="fs-26 text-primary font-w600">356,730</span>
														</div>
													</div>
													<ul class="users pl-3 py-2">
														<li><img src="images/users/2.png" alt=""></li>
														<li><img src="images/users/4.png" alt=""></li>
														<li><img src="images/users/1.png" alt=""></li>
														<li><img src="images/users/4.png" alt=""></li>
														<li><img src="images/users/3.png" alt=""></li>
													</ul>
												</div>
												<div class="row align-items-center">
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div id="radialBar3"></div>
													</div>
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div class="d-flex mb-4 align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#BDA25C"/>
																</svg>
																90%
															</span>
															<span>Temperature</span>
														</div>
														<div class="d-flex  mb-4 align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#209F84"/>
																</svg>
																75%
															</span>
															<span>Hummidity</span>
														</div>
														<div class="d-flex align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#323232"/>
																</svg>
																30%
															</span>
															<span>Acidity</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>






							</div>
							<div class="col-xl-6 col-xxl-12 col-md-6">
								<div class="card">
									<div class="card-header d-block border-0 pb-0">
										<div class="d-flex mb-3">
											<h3 class="fs-20 text-black mb-0">User Overview</h3>
											<div class="dropdown ml-auto">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M13.0001 12C13.0001 11.4477 12.5523 11 12.0001 11C11.4478 11 11.0001 11.4477 11.0001 12C11.0001 12.5523 11.4478 13 12.0001 13C12.5523 13 13.0001 12.5523 13.0001 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M6.00006 12C6.00006 11.4477 5.55235 11 5.00006 11C4.44778 11 4.00006 11.4477 4.00006 12C4.00006 12.5523 4.44778 13 5.00006 13C5.55235 13 6.00006 12.5523 6.00006 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M20.0001 12C20.0001 11.4477 19.5523 11 19.0001 11C18.4478 11 18.0001 11.4477 18.0001 12C18.0001 12.5523 18.4478 13 19.0001 13C19.5523 13 20.0001 12.5523 20.0001 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item text-black" href="javascript:;">Info</a>
													<a class="dropdown-item text-black" href="javascript:;">Details</a>
												</div>
											</div>
										</div>
										<div class="d-flex">
											<div class="d-flex mr-auto align-items-center">
												<svg width="12" height="54" viewBox="0 0 12 54" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="12" height="54" fill="#BDA25C"/>
												</svg>
												<div class="ml-2">
													<p class="mb-1">New</p>
													<span class="text-black font-w500">451</span>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<svg width="12" height="54" viewBox="0 0 12 54" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="12" height="54" fill="#209F84"/>
												</svg>
												<div class="ml-2">
													<p class="mb-1">Active User</p>
													<span class="text-black font-w500">623</span>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body p-0">
										<div id="chartTimeline"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-xxl-12 col-md-6">

							</div>
							<div class="col-xl-12">

							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="row">





						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@endsection
