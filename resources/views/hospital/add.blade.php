@extends('guest.template')


@section('content')


<!-- #site-wrapper start -->
<div id="site-wrapper" class="site-wrapper page-submit-listing">
		<div id="page-title" class="page-title pt-11 text-center">
			<div class="container">
				<div>
					<h1 class="mb-0 letter-spacing-50" data-animate="fadeInDown">
						Submit Your Listing
					</h1>
					<!-- <ul class="breadcrumb justify-content-center"
					    data-animate="fadeInUp">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><span>Submit Your Listing</span></li>
					</ul> -->
				</div>
			</div>
		</div>
</div>
		<!-- #page-title end -->
		<!-- #wrapper-content start -->
		<div id="wrapper-content" class="wrapper-content pb-13 pt-8">
			<div class="container">
				<!-- <div class="page-description text-center font-size-md py-3 lh-15 mb-9">
					<span class="font-weight-semibold text-dark">Returning User? Please </span>
					<a class="text-link font-weight-semibold" href="#login-popup" data-gtf-mfp="true"
					   data-mfp-options='{"type":"inline"}'>Sign In</a> and if you
					are a <span
						class="font-weight-semibold text-dark">New User, Continue Below</span> and register along with
					this submission.
				</div> -->
				<!-- #submit-listing START -->
				<div id="submit-listing" class="section-submit-listing pb-2">

                <form action="{{ route('hospitals.store') }}" method="POST">
    	            @csrf
        				<div class="submit-listing-blocks mb-9 border-bottom pb-6">
							<div class="row lh-18">
								<div class="col-md-6 ">
									<div class="card border-0 p-0">
                                        <h5> Basic Details </h5>
										<!-- <img src="{{asset('images/other/submit-listing-1.jpg')}}"
										     alt="Submit listing 01" class="card-img-top"> -->
										<div class="card-body px-0 pt-6">
											<div class="form-group mb-4">
												<div class="text-dark font-weight-semibold font-size-md mb-2 lh-15">
                                                    Hospital Name
												</div>
												<div class="text-dark font-weight-semibold font-size-md mb-2 lh-15">
												<input type="text" class="form-control"
												       placeholder="Name of your Hospital" name="Hospital_name">

												</div>	
												</div>




												<div class="text-dark font-weight-semibold font-size-md mb-2 lh-15">
                                                    Email
												</div>
												<div class="text-dark font-weight-semibold font-size-md mb-2 lh-15">
												<input type="email" class="form-control"
												       placeholder="Email of your Hospital for login" name="Hospital_email_id_login">
												
												<input type="email" class="form-control"
												       placeholder="Email of your Hospital for contact" name="Hospital_email_id">

												</div>	

				
												<div class="text-dark font-weight-semibold font-size-md mb-2 lh-15">
                                                    Address
												</div>
												<div class="text-dark font-weight-semibold font-size-md mb-2 lh-15">
												<input type="text" class="form-control"
												       placeholder="Hospital address" name="Hospital_address">
												
												<input type="text" class="form-control"
												       placeholder="State" name="Hospital_state">
												<input type="text" class="form-control"
												       placeholder="District" name="Hospital_district">
												
												<input type="text" class="form-control"
												       placeholder="City" name="Hospital_city">
												<input type="text" class="form-control"
												       placeholder="Pincode" name="Hospital_pin_Code">
												
												</div>
												

												

												<div class="text-dark font-weight-semibold font-size-md mb-2 lh-15">
                                                    Contact number
												</div>
												<div class="text-dark font-weight-semibold font-size-md mb-2 lh-15">
												<input type="text" class="form-control"
												       placeholder="Contact number" name="Hospital_OPD_contact_no">
												</div>

												<div class="text-dark font-weight-semibold font-size-md mb-2 lh-15">
												Hospital logo
												</div>
												<div class="text-dark font-weight-semibold font-size-md mb-2 lh-15">
												<input type="file" class="form-control"
												       placeholder="Contact number" name="Hospital_logo">
												</div>


												<div class="text-dark font-weight-semibold font-size-md mb-2 lh-15">
												Hospital ambulance avalibility
												</div>
												<div class="text-dark font-weight-semibold font-size-md mb-2 lh-15">
												<label for="cars">Choose a car:</label>

<select name="Hospital_ambulance_avalibility" id="Hospital_ambulance_avalibility">
  <option value="1">Yes</option>
  <option value="0">No</option>
  
</select>
												</div>













												
												
												
											
											<div class="form-group mb-4">
												<div class="mb-2 d-flex align-items-center lh-15">
													<label class="mb-0 text-dark font-weight-semibold font-size-md lh-15" for="city">City</label>
													<a href="#" class="text-darker-light d-inline-block ml-2"  data-toggle="tooltip"
													   data-placement="top"
													   title="Region of listing">
														<i class="fas fa-question-circle"></i></a></div>
												<input type="text" id="city" class="form-control"
												       placeholder="Select your listing region">
											</div>
											<div class="form-group mb-4">
												<label for="phone" class="text-dark font-weight-semibold font-size-md mb-2 lh-15">Phone</label>
												<input type="text" id="phone" class="form-control"
												       placeholder="123-456-789">
											</div>
											<div class="form-group mb-4">
												<div class="mb-2 d-flex align-items-center lh-15">
													<label class="mb-0 text-dark font-weight-semibold font-size-md lh-15" for="address">Full Address
													(Geolocation) </label>
													<a href="#" class="text-darker-light d-inline-block ml-2" data-toggle="tooltip"
													   data-placement="top"
													   title="Full address for finding in google map"><i
														class="fas fa-question-circle"></i></a></div>
												<input type="text" id="address" class="form-control"
												       placeholder="Start typing and find your place in google map">
											</div>
											<div class="form-group mb-4">
												<label for="website" class="text-dark font-weight-semibold font-size-md mb-2 lh-15">Website</label>
												<input type="text" id="website" class="form-control"
												       placeholder="http://">
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 ">
									<div class="card border-0 p-0">
										<!-- <img src="{{asset('images/other/submit-listing-2.jpg')}}"
										     alt="Submit listing 02" class="card-img-top"> -->
										<div class="card-body px-0 pt-6">
											<div class="form-group business-hours mb-2">
												<div class="text-dark font-weight-semibold font-size-md mb-3 lh-12">Add Business Hours
												</div>
												<div class="row lh-18">
													<span class="font-weight-semibold col-4 col-md-3">Monday</span>
													<span class="col-4 col-md-3 ">09:00   -   17:00</span>
													<a href="#" class="col-4 col-md-3 text-danger text-decoration-none">Remove</a>
												</div>
												<div class="row lh-18">
													<span class="font-weight-semibold col-4 col-md-3">Tuesday </span>
													<span class="col-4 col-md-3">09:00   -   17:00</span>
													<a href="#" class="col-4 col-md-3 text-danger text-decoration-none">Remove</a>
												</div>
												<div class="row lh-18">
													<span class="font-weight-semibold col-4 col-md-3">Wednesday</span>
													<span class="col-4 col-md-3">09:00   -   17:00</span>
													<a href="#" class="col-4 col-md-3 text-danger text-decoration-none">Remove</a>
												</div>
												<div class="row lh-18">
													<span class="font-weight-semibold col-4 col-md-3">Thursday</span>
													<span class="col-4 col-md-3">09:00   -   17:00</span>
													<a href="#" class="col-4 col-md-3 text-danger text-decoration-none">Remove</a>
												</div>
												<div class="row lh-18">
													<span class="font-weight-semibold col-4 col-md-3">Friday </span>
													<span class="col-4 col-md-3">09:00   -   17:00</span>
													<a href="#" class="col-4 col-md-3 text-danger text-decoration-none">Remove</a>
												</div>
											</div>
											<div class="form-row align-items-center form-time">
												<div class="col item form-group day">
													<select class="form-control">
														<option>Monday</option>
														<option>Tuesday</option>
														<option>Wednesday</option>
														<option>Thursday</option>
														<option>Friday</option>
														<option>Saturday</option>
														<option>Sunday</option>
													</select>
												</div>
												<div class="col item form-group">
													<select class="form-control">
														<option>07:00</option>
														<option>08:00</option>
														<option>09:00</option>
														<option>10:00</option>
														<option>11:00</option>
														<option>12::00</option>
													</select>
												</div>
												<div class="col item form-group">
													<select class="form-control">
														<option>13:00</option>
														<option>14:00</option>
														<option>15:00</option>
														<option>16:00</option>
														<option>17:00</option>
														<option>18::00</option>
													</select>
												</div>
												<div class="item form-checkbox">
													<div class="custom-control custom-checkbox d-flex align-items-center">
														<input class="custom-control-input" type="checkbox" id="hour">
														<label class="custom-control-label" for="hour">
															24 Hours
														</label>
													</div>
												</div>
												<div class="col item">
													<a href="#" class="btn btn-primary btn-add-new"><i
															class="fal fa-plus"></i></a>
												</div>

											</div>
											<div class="form-group mb-4">
												<label for="category" class="text-dark font-weight-semibold font-size-md mb-2 lh-15">Category</label>
												<select id="category" class="form-control color-gray">
													<option selected>Choose your business category</option>
												</select>
											</div>
											<div class="form-group mb-4">
												<label for="price-status" class="text-dark font-weight-semibold font-size-md mb-2 lh-15">Price Status</label>
												<select id="price-status" class="form-control color-gray">
													<option>Not to say</option>
												</select>
											</div>
											<div class="form-row mb-4">
												<div class="col">
													<label for="price-form" class="text-dark font-weight-semibold font-size-md mb-2 lh-15">Price From</label>
													<select id="price-form" class="form-control color-gray">
														<option>$0.00</option>
														<option>$10.00</option>
													</select>
												</div>
												<div class="col">
													<label class="text-dark font-weight-semibold font-size-md mb-2 lh-15" for="price-to">Price To</label>
													<select id="price-to" class="form-control color-gray">
														<option>$0.00</option>
														<option>$10.00</option>
													</select>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="submit-listing-blocks mb-6">
							<div class="row lh-18">
								<div class="col-md-6 submit-listing-block">
									<div class="card border-0 p-0">
										<img src="{{asset('images/other/submit-listing-3.jpg')}}"
										     alt="Submit listing 02" class="card-img-top">
										<div class="card-body px-0 pt-6">
											<div class="form-group mb-4">
												<label class="text-dark font-weight-semibold font-size-md mb-2 lh-15" for="description">Description
												</label>
												<textarea id="description" data-tinymce="true"
												          placeholder="Detail description about your listing"></textarea>
											</div>
											<div class="form-group mb-4">
												<label class="text-dark font-weight-semibold font-size-md mb-2 lh-15">Social</label>
												<div class="row mb-4">
													<div class="col-md-6 mb-4 mb-md-0">
														<input type="text" class="form-control"
														       placeholder="Your Twitter URL">
													</div>
													<div class="col-md-6">
														<input type="text" class="form-control"
														       placeholder="Your Facebook URL">
													</div>
												</div>
												<div class="row mb-4">
													<div class="col-md-6 mb-4 mb-md-0">
														<input type="text" class="form-control"
														       placeholder="Your Linkedln URL">
													</div>
													<div class="col-md-6">
														<input type="text" class="form-control"
														       placeholder="Your Google Plus URL">
													</div>
												</div>
												<div class="row mb-4">
													<div class="col-md-6 mb-4 mb-md-0">
														<input type="text" class="form-control"
														       placeholder="Your Youtube URL">
													</div>
													<div class="col-md-6">
														<input type="text" class="form-control"
														       placeholder="Your Instagram URL">
													</div>
												</div>
											</div>

											<div class="form-group mb-4">
												<div class="mb-2 d-flex align-items-center lh-15">
													<label class="mb-0 text-dark font-weight-semibold font-size-md lh-15" for="tags">Tags or keywords (Comma
													seprated)</label>
													<a href="#" class="text-darker-light d-inline-block ml-2"
													   data-toggle="tooltip"
													   data-placement="top"
													   title="Tags or keyword for search easier"><i
															class="fas fa-question-circle"></i></a>
												</div>

												<textarea id="tags"
												          class="form-control"
												          placeholder="Enter tags or keywords comma sperated..."></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 submit-listing-block">
									<div class="card border-0 p-0">
										<img src="{{asset('images/other/submit-listing-4.jpg')}}"
										     alt="Submit listing 04" class="card-img-top">
										<div class="card-body px-0 pt-6">
											<div class="form-group mb-4">
												<label class="text-dark font-weight-semibold font-size-md mb-2 lh-15" for="video">Your Business Video
												</label>
												<input type="text" id="video" class="form-control"
												       placeholder="ex: https://youtube.com/ssgfse249Klf">
											</div>
											<div class="form-group mb-4">
												<label class="text-dark font-weight-semibold font-size-md mb-2 lh-15">Images
												</label>
												<div class="dropzone upload-file text-center" data-uploader="true"
												     id="myDropzone"
												     data-uploader-url="./page-submit-listing.html">
													<div class="dz-default dz-message">
														<div class="title">
															<span>Drag &amp; Drop files here</span>
															<span>or</span>
														</div>
														<div class="upload-btn-wrapper">
															<button class="btn btn-primary font-size-md px-5">Browse Files</button>
															<input type="file">
														</div>
													</div>
												</div>
												<div class="mt-3">The first image will be shown on listing
													cards.
												</div>
											</div>

										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="pt-8 border-top">
							<div class="contact-section text-center pt-3">
								<div class="form-group mb-5">
									<label for="email" class="font-weight-semibold text-dark font-size-md">Enter email to signup & recieve
										notification upon
										listing
										approval</label>
									<input type="email" class="form-control" id="email"
									       placeholder="Enter your contact email">
								</div>
								<div class="d-flex justify-content-center pb-8">
									<div class="custom-control custom-checkbox">
										<input class="custom-control-input" type="checkbox" id="have-account">
										<label class="custom-control-label mb-0" for="have-account">
											Already Have Account?
										</label>
									</div>
								</div>
								<button type="button" class="btn btn-primary btn-block font-size-h5 lh-19 mt-2">Save & Preview</button>
							</div>
						</div>
					</form>

				</div>
				<!-- #submit-listing END -->

			</div>
		</div>
@endsection