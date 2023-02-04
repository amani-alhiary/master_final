@extends('admin/master')
@section('content')

{{-- <div class="col-md-6 " style="margin-left: 30%"> --}}

    
        <!-- page content -->
        <div class="right_col" role="main">

            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>Book Details:</h3>
                </div>
  
                <div class="title_right">
                  <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="clearfix"></div>
  
              <div class="row">
                <div class="col-md-12 col-sm-12 ">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>E-Book Details Page</h2>
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
                    <div class="x_content">
  
                      <div class="col-md-7 col-sm-7 ">
                        <div class="product-image">
                          <img src="usersimg/image/{{ $book[0]->image }}" alt="..." />
                        </div>
                        <div class="product_gallery">
                          <a>
                            <img src="usersimg/image/{{ $book[0]->image_01 }}" alt="..." />
                          </a>
                          <a>
                            <img src="usersimg/image/{{ $book[0]->image_02 }}" alt="..." />
                          </a>
                          <a>
                            <img src="usersimg/image/{{ $book[0]->image_03 }}" alt="..." />
                          </a>
                         
                        </div>
                      </div>
  
                      <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">
  
                        <h3 class="prod_title">{{ $book[0]->book_name }}</h3>
                        <div class="">
                            <h2>Author Name:</h2>
                            <ul class="list-inline prod_color display-layout">
                              <li>
                                <p>{{ $book[0]->author }}</p>
                              </li>
                             
                            </ul>
                          </div>
                          <br />
    
                        <p>"{{ $book[0]->quote }}"</p>
                        <br />
                        <p>"{{ $book[0]->description }}"</p>

                   
                       
  
                        <div class="">
                          <div class="product_price">
                            <h1 class="price">JOD {{ $book[0]->price }}.00</h1>
                            <span class="price-tax">Original Price: JOD {{ $book[0]->sale_price }}.00</span>
                            <br>
                          </div>
                        </div>
  
                     
  
                      
  
                      </div>
  
  
                  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /page content -->
  
          <!-- footer content -->
          <footer>
            <div class="pull-right">
              Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
          </footer>
          <!-- /footer content -->
        </div>
      </div>
  
      <!-- jQuery -->
      <script src="../vendors/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap -->
     <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <!-- FastClick -->
      <script src="../vendors/fastclick/lib/fastclick.js"></script>
      <!-- NProgress -->
      <script src="../vendors/nprogress/nprogress.js"></script>
  
      <!-- Custom Theme Scripts -->
      <script src="../build/js/custom.min.js"></script>
    </body>
  </html>
    
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



<!-- /footer content -->
</div>
</div>
<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
</body>
</html>
    @endsection
