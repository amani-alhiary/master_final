@extends('admin/master')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>Contacts Design</h3>
                </div>
  
                <div class="title_right">
                  <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                    
                  </div>
                </div>
              </div>
  
              <div class="clearfix"></div>
  
              <div class="row">
                  <div class="x_panel">
                    <div class="x_content">
                        <div class="col-md-12 col-sm-12  text-center">
                          
                        </div>
  
                        <div class="clearfix"></div>
                         @foreach ($contacts as $contact)
                             
                        <div class="col-md-4 col-sm-4  profile_details">
                          <div class="well profile_view">
                            <div class="col-sm-12">
                              <h4 class="brief"><i>Contact Message</i></h4>
                              <div class="left col-md-7 col-sm-7">
                                <h2>{{ $contact->name }}</h2>
                                <p><strong>Subject: </strong> {{ $contact->subject }} </p>
                                <ul class="list-unstyled">
                                  <li>                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                    Email:{{ $contact->email }} </li>
                                  <li><i class="fa fa-phone"></i> Phone #:{{ $contact->phone }} </li>
                                </ul>
                              </div>
                              <div class="right col-md-5 col-sm-5 text-center">
                                <img src="usersimg/image/userimage.png" alt="" class="img-circle img-fluid">
                              </div>
                            </div>
                            <div class=" profile-bottom text-center">
                              <div class=" col-sm-6 emphasis">
                              
                              </div>
                              <div class=" col-sm-6 emphasis">
                                <a  href="{{ url('contactshow?id=' . $contact['id']) }}">
                                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm">
                                  <i class="fa fa-user"> </i> View Message
                                </button>
                              </a>
                              </div>
                            </div>
                          </div>
                        </div>
                       
              
                        @endforeach
                       
          

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
