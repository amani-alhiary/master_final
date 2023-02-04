
						@extends('admin/master')
                        @section('content')
                        
                        <div class="col-md-6 " style="margin-left: 30%">
							<div class="x_panel">
								<div class="x_title">
									<h2>ADD NEW BOOK <small>with all details</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a class="dropdown-item" href="#">Settings 1</a>
												<a class="dropdown-item" href="#">Settings 2</a>
											</div>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>


								@if(session('status'))
								<div class="alert alert-success mb-1 mt-1">
									{{ session('status') }}
								</div>
								@endif

								<div class="x_content">
									<br />
									<form class="form-horizontal form-label-left" action="{{route('books.store') }}" method="POST" enctype="multipart/form-data">
										@csrf

										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">book name</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" placeholder="book name" name="book_name">
											</div>
										</div>
										@error('book_name')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
										@enderror


										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">Author</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" placeholder="author" name="author">
											</div>
										</div>
										@error('author')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
										@enderror
                                      
									
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Quote <span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 ">
												<textarea class="form-control" rows="3" placeholder="" name="quote"></textarea>
											</div>
										</div>
										@error('quote')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
										@enderror



										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Description <span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 ">
												<textarea class="form-control" rows="3" placeholder="" name="description"></textarea>
											</div>
										</div>

										@error('description')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
										@enderror


										
										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">Price</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" placeholder="Price" name="price">
											</div>
										</div>
										@error('price')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
										@enderror


										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">Price before sales</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" placeholder="sale_price" name="sale_price">
											</div>
										</div>
										@error('sale_price')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
										@enderror


										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Select</label>
											<div class="col-md-9 col-sm-9 ">
												<select class="form-control" name="category_id">
													{{-- <option>Choose one</option> --}}
													@foreach ($categories as $category)
													<option value="{{ $category->id }}">{{ $category->category_name }}</option>
													@endforeach
													
												</select>
											</div>
										</div>


										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">Video Link</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" placeholder="video" name="video">
											</div>
										</div>
										@error('video')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
										@enderror


										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">Image</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="file" name="image" value="fileupload" id="fileupload"> <label for="fileupload"> Select a file to upload</label> <br>
									</div>
										</div>
										@error('image')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
										@enderror



										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">Image 02</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="file" name="image_01" value="fileupload" id="fileupload"> <label for="fileupload"> Select a file to upload</label> <br>
									</div>
										</div>




										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">Image 03</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="file" name="image_02" value="fileupload" id="fileupload"> <label for="fileupload"> Select a file to upload</label> <br>
									</div>
										</div>



										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">Image 04</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="file" name="image_03" value="fileupload" id="fileupload"> <label for="fileupload"> Select a file to upload</label> <br>
									</div>
										</div>
										


										
										
										
										{{-- <div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Select Grouped</label>
											<div class="col-md-9 col-sm-9 ">
												<select class="select2_group form-control">
													<optgroup label="Alaskan/Hawaiian Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="NV">Nevada</option>
														<option value="OR">Oregon</option>
														<option value="WA">Washington</option>
													</optgroup>
													<optgroup label="Mountain Time Zone">
														<option value="AZ">Arizona</option>
														<option value="CO">Colorado</option>
														<option value="ID">Idaho</option>
														<option value="MT">Montana</option>
														<option value="NE">Nebraska</option>
														<option value="NM">New Mexico</option>
														<option value="ND">North Dakota</option>
														<option value="UT">Utah</option>
														<option value="WY">Wyoming</option>
													</optgroup>
													<optgroup label="Central Time Zone">
														<option value="AL">Alabama</option>
														<option value="AR">Arkansas</option>
														<option value="IL">Illinois</option>
														<option value="IA">Iowa</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
														<option value="LA">Louisiana</option>
														<option value="MN">Minnesota</option>
														<option value="MS">Mississippi</option>
														<option value="MO">Missouri</option>
														<option value="OK">Oklahoma</option>
														<option value="SD">South Dakota</option>
														<option value="TX">Texas</option>
														<option value="TN">Tennessee</option>
														<option value="WI">Wisconsin</option>
													</optgroup>
													<optgroup label="Eastern Time Zone">
														<option value="CT">Connecticut</option>
														<option value="DE">Delaware</option>
														<option value="FL">Florida</option>
														<option value="GA">Georgia</option>
														<option value="IN">Indiana</option>
														<option value="ME">Maine</option>
														<option value="MD">Maryland</option>
														<option value="MA">Massachusetts</option>
														<option value="MI">Michigan</option>
														<option value="NH">New Hampshire</option>
														<option value="NJ">New Jersey</option>
														<option value="NY">New York</option>
														<option value="NC">North Carolina</option>
														<option value="OH">Ohio</option>
														<option value="PA">Pennsylvania</option>
														<option value="RI">Rhode Island</option>
														<option value="SC">South Carolina</option>
														<option value="VT">Vermont</option>
														<option value="VA">Virginia</option>
														<option value="WV">West Virginia</option>
													</optgroup>
												</select>
											</div>
										</div> --}}
										{{-- <div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Select Multiple</label>
											<div class="col-md-9 col-sm-9 ">
												<select class="select2_multiple form-control" multiple="multiple">
													<option>Choose option</option>
													<option>Option one</option>
													<option>Option two</option>
													<option>Option three</option>
													<option>Option four</option>
													<option>Option five</option>
													<option>Option six</option>
												</select>
											</div>
										</div> --}}

										
										
										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-9 col-sm-9  offset-md-3">
												<button type="submit" name="submit" class="btn btn-success">Add</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>




   <script src="{{ asset('admindashboard/vendors/jquery/dist/jquery.min.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('admindashboard/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
	<!-- FastClick -->
	<script src="{{ asset('admindashboard/vendors/fastclick/lib/fastclick.js') }}"></script>
	<!-- NProgress -->
	<script src="{{ asset('admindashboard/vendors/nprogress/nprogress.js') }}"></script>
	<!-- bootstrap-progressbar -->
	<script src="{{ asset('admindashboard/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
	<!-- iCheck -->
	<script src="{{ asset('admindashboard/vendors/iCheck/icheck.min.js') }}"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="{{ asset('admindashboard/vendors/moment/min/moment.min.js') }}"></script>
	<script src="{{ asset('admindashboard/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
	<!-- bootstrap-wysiwyg -->
	<script src="{{ asset('admindashboard/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
	<script src="{{ asset('admindashboard/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
	<script src="{{ asset('vendors/google-code-prettify/src/prettify.js') }}"></script>
	<!-- jQuery Tags Input -->
	<script src="{{ asset('vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
	<!-- Switchery -->
	<script src="{{ asset('admindashboard/vendors/switchery/dist/switchery.min.js') }}"></script>
	<!-- Select2 -->
	<script src="{{ asset('admindashboard/vendors/select2/dist/js/select2.full.min.js') }}"></script>
	<!-- Parsley -->
	<script src="{{ asset('admindashboard/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
	<!-- Autosize -->
	<script src="{{ asset('admindashboard/venvendors/autosize/dist/autosize.min.js') }}"></script>
	<!-- jQuery autocomplete -->
	<script src="{{ asset('admindashboard/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
	<!-- starrr -->
	<script src="{{ asset('admindashboard/vendors/starrr/dist/starrr.js') }}"></script>
	<!-- Custom Theme Scripts -->
	<script src="{{ asset('admindashboard/build/js/custom.min.js') }}"></script>

</body></html>

                        @endsection
