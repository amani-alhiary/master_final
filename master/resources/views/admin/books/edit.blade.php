
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
									<form class="form-horizontal form-label-left" action="{{route('booksadmin.update',$book[0]->id) }}" method="POST" enctype="multipart/form-data">
										@csrf
										@method('PUT')
										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">book name</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" placeholder="book name" name="book_name" 
                                                value="{{ $book[0]->book_name }}">
											</div>
										</div>
										@error('book_name')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
										@enderror


									

										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">Author</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" placeholder="author" name="author"  value="{{ $book[0]->author }}">
											</div>
										</div>
										@error('author')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
										@enderror
                                      
									
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Quote <span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 ">
												<input class="form-control" rows="3"  name="quote" value="{{ $book[0]->quote }}" style="height: 150px;width:100%">
											</div>
										</div>
										@error('quote')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
										@enderror



										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Description <span class="required">*</span>
											</label>
											<div class="col-md-9 col-sm-9 ">
												<input class="form-control" rows="3" value="{{ $book[0]->description }}"  name="description"/>
											</div>
										</div>

										@error('description')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
										@enderror


										
										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">Price</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" placeholder="Price" name="price" value="{{ $book[0]->price }}">
											</div>
										</div>
										@error('price')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
										@enderror

										<input type="hidden" class="form-control" placeholder="id" name="id" value="{{ $book[0]->id }}">

										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">Price before sales</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" class="form-control" placeholder="sale_price" name="sale_price" value="{{ $book[0]->sale_price }}">
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
												<input type="text" class="form-control" placeholder="video" name="video" value="{{ $book[0]->video }}">
											</div>
										</div>
										@error('video')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
										@enderror


										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">Image</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="file" name="image" value="{{ $book[0]->image }}" id="fileupload"> <label for="fileupload"> Select a file to upload</label> <br>
									</div>
										</div>
										@error('image')
										<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
										@enderror



										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">Image 02</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="file" name="image_01" value="{{ $book[0]->image_01 }}" id="fileupload"> <label for="fileupload"> Select a file to upload</label> <br>
									</div>
										</div>




										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">Image 03</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="file" name="image_02" value="{{ $book[0]->image_02 }}" id="fileupload"> <label for="fileupload"> Select a file to upload</label> <br>
									</div>
										</div>



										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">Image 04</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="file" name="image_03" value="{{ $book[0]->image_03 }}"id="fileupload"> <label for="fileupload"> Select a file to upload</label> <br>
									</div>
										</div>
										


										
										
									
										
										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-9 col-sm-9  offset-md-3">
												<button type="submit" name="submit" class="btn btn-success">Edit</button>
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
