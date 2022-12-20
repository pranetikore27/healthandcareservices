@extends("layouts.dashboard")
@section("content")

<div class="page-container">
					<div class="container-fluid">
						<div class="page-content-wrapper d-flex flex-column">
							<h1 class="font-size-h4 mb-4 font-weight-normal">My Profile</h1>
							<div class="row">
								<div class="col-lg-6 mb-4 mb-lg-0">
									<div class="card rounded-0 border-0 bg-white px-4 pt-3 pb-6">
										<div class="card-header p-0 bg-transparent"><h5
												class="card-title text-capitalize">Profile
											Details</h5>
										</div>
										<div class="card-body px-0 pt-4 pb-0">
											<!-- <div class="profile media d-flex align-items-center flex-wrap">
												<div class="image mb-4"><img src="images/other/update-profile.png"
												                             alt="User image" class="rounded-circle">
												</div>
												<div class="media-body d-flex flex-wrap">
													<div class="upload-btn-wrapper mr-4 mb-4">
														<button class="btn btn-primary px-4 font-size-md">Upload
															New Picture
														</button>
														<input type="file" name="myfile"/>
													</div>
													<a href="#" class="btn btn-darker-light mb-4 font-size-md">Delete</a>
												</div>
											</div> -->

											<div class="">

    														<div class="form-row mb-2">
														<div class="col-sm-12 mb-2 mb-sm-0">
															<label for="first-name"
															       class="font-size-md text-dark font-weight-semibold mb-1">Full
																   Name
																<span class="text-danger">*</span></label>
															<input class="form-control" id="first-name" type="text"
															       value="{{$user->name}}">
														</div>
														<!-- <div class="col-sm-6">
															<label for="last-name"
															       class="font-size-md text-dark font-weight-semibold mb-1">Last
																Name
																<span class="text-danger">*</span></label>
															<input class="form-control" id="last-name" type="text"
															       value="Cee">
														</div> -->
													</div>
													<div class="form-row mb-2">
														<div class="col-sm-6 mb-2 mb-sm-0">
															<label for="email"
															       class="font-size-md text-dark font-weight-semibold mb-1">Email
																Address
																<span class="text-danger">*</span></label>
															<input class="form-control" id="email" type="text"
															       value="{{$user->email}}">
														</div>
														<div class="col-sm-6">
															<label for="phone"
															       class="font-size-md text-dark font-weight-semibold mb-1">Phone
																<span class="text-secondary font-weight-normal">(Optional)</span></label>
															<input class="form-control" id="phone" type="text"
															       value="{{$user->phone_number}}">
														</div>
													</div>
													<div class="form-group mb-2">
														<label for="bio"
														       class="font-size-md text-dark font-weight-semibold mb-1">Bio</label>
														<textarea class="form-control" id="bio"
														          placeholder="Short desscription about you..." value="{{$user->bio}}"></textarea>
													</div>
													<div class="form-row mb-6">
														<div class="col-md-4 mb-2 mb-md-0">
															<label for="twitter"
															       class="font-size-md text-dark font-weight-semibold mb-1">Twitter
															</label>
															<input class="form-control" id="twitter" type="text"
															       placeholder="Twitter URL">
														</div>
														<div class="col-md-4 mb-2 mb-md-0">
															<label for="facebook"
															       class="font-size-md text-dark font-weight-semibold mb-1">Facebook
															</label>
															<input class="form-control" id="facebook" type="text"
															       placeholder="Facebook URL">
														</div>
														<div class="col-md-4">
															<label for="google"
															       class="font-size-md text-dark font-weight-semibold mb-1">Google
																Plus
															</label>
															<input class="form-control" id="google" type="text"
															       placeholder="Google Plus URL">
														</div>
													</div>
													<button type="submit" class="btn btn-primary btn-block font-size-lg">Save Change
													</button>
												</form>
											</div>

										</div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="card rounded-0 border-0 bg-white px-4 pt-3 pb-6">
										<div class="card-header p-0 bg-transparent"><h5
												class="card-title text-capitalize">Change
											Password</h5>
										</div>
										<div class="card-body px-0 pt-4 pb-0">
											<div class="form-update-profile">
												<form>
													<div class="form-group mb-2">
														<label for="current-password"
														       class="font-size-md text-dark font-weight-semibold mb-1">Current
															Password</label>
														<input type="password" class="form-control"
														       id="current-password"
														       value="password">
													</div>
													<div class="form-group mb-2">
														<label for="new-password"
														       class="font-size-md text-dark font-weight-semibold mb-1">New
															Password</label>
														<input type="password" class="form-control"
														       id="new-password">
													</div>
													<div class="form-group mb-6">
														<label for="confirm-new-password"
														       class="font-size-md text-dark font-weight-semibold mb-1">Confirm
															New Password</label>
														<input type="password" class="form-control"
														       id="confirm-new-password">
													</div>

													<button type="submit" class="btn btn-primary btn-block font-size-lg">Change
														Password
													</button>
												</form>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="mt-6">
								&copy; 2020 Thedir. All Rights Reserved.
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection