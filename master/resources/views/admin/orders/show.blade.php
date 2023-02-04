@extends('admin/master')
@section('content')


{{-- <section style="width: 85%; float: right;"> --}}
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Order Details <small>here are all the details</small></h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5   form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Order <small>used and new books</small></h2>
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

              <section class="content invoice">
                <!-- title row -->
                <div class="row">
                  <div class="  invoice-header">
                    <h1>
                                    <i class="fa fa-globe"></i> 
                                    <small class="pull-right">Order Date: {{ $order[0]->created_at }}</small>
                                </h1>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                  <div class="col-sm-4 invoice-col">
                    From
                    <address>
                                    <strong>BOOK STORE building.</strong>
                                    <br>Prince Hamza Street
                                    <br>As Salt, Jordan
                                    <br>Phone: +(962) 77 235 9691
                                    <br>Email: amani.i.hiary@gmail.com
                                </address>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                    To
                    <address>
                                    <strong>{{ $user[0]->name }}</strong>
                                    <br>{{ $order[0]->address }}
                                    <br>{{ $order[0]->country }}
                                    <br>Phone: +962 {{ $order[0]->phone }}
                                    <br>Email: {{ $user[0]->email }}
                                </address>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                    <b>Invoice Details</b>
                    <br>
                    <br>
                    <b>Order ID:</b> {{ $order[0]->id }}
                    <br>
                    <b>Payment Due:</b> {{ $order[0]->created_at }}
                    <br>
                    {{-- <b>Account:</b> 968-34567 --}}
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Table row -->
                <div class="row">
                  <div class="  table">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>image</th>
                          {{-- <th>Product</th> --}}
                          <th style="width: 59%">Book Name</th>
                          <th>Qty</th>
                          <th>price</th>
                          <th>Subtotal</th>
                        </tr>
                      </thead>
                      <tbody>
                        {{ $total=0 }}
                        @foreach ($orderbooks as $book)    
                   
                        <tr>
<td> <img src="usersimg/image/{{ $book->image }}" width="90"> </td>                          
<td >{{ $book->book_name }}</td>
                          <td>{{ $book->quantity }}</td>
                          <td>JOD {{ $book->price }}.00
                          </td>
                          <td>JOD {{ $book->price*$book->quantity }}.00</td>
                        </tr>
                        {{ $total=$total+$book->price*$book->quantity }}

                        @endforeach
                
                        
                        @foreach ($orderusedbooks as $book)    
                   
                        <tr>
<td> <img src="usersimg/image/{{ $book->image }}" width="90"> </td>                          
<td >{{ $book->book_name }}</td>
                          <td>{{ $book->quantity }}</td>
                          <td>JOD {{ $book->price }}.00
                          </td>
                          <td>JOD {{ $book->price*$book->quantity }}.00</td>
                        </tr>
                        {{ $total=$total+$book->price*$book->quantity }}

                        @endforeach

                       
                       
                      </tbody>
                    </table>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <!-- accepted payments column -->
                  <div class="col-md-6">
                    <p class="lead"></p>
                 
                    <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                      
                    </p>
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                    <p class="lead">Amount Due 2/22/2014</p>
                    <div class="table-responsive">
                      <table class="table">
                        <tbody>
                          <tr>
                            <th style="width:50%">Subtotal:</th>
                            <td>JOD {{ $total }}.00 </td>
                          </tr>
                          <tr>
                            <th>Tax (JOD 3.00)</th>
                            <td>JOD 3.00</td>
                          </tr>
                        
                          <tr>
                            <th>Total:</th>
                            <td>JOD {{ $total+3 }}.00</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- this row will not appear when printing -->
                <div class="row no-print">
                  <div class=" ">
                    <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                    <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                    <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
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
  <!-- /page content -->
  @endsection