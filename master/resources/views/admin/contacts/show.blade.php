@extends('admin/master')
@section('content')
<link rel="stylesheet" href="{{ asset('admindashboard/build/css/contact.css') }}">

        <!-- page content -->
        <div class="right_col" role="main">
           
            <div class="col-md-8 message-sideright" style="margin-left: 20%;margin-top:20vh">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="media">
                          
                            <a class="pull-left" href="#">
                                <img src="usersimg/image/userimage.png" alt="" class="img-circle img-fluid" style="width: 60px;height:60px">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">{{ $contact[0]->name }} <small></small></h4>
                                <small>{{ $contact[0]->created_at }}</small>
                            </div>
                        </div>
                    </div><!-- /.panel-heading -->
                    <div class="panel-body" style="margin-left: 7%">
                        <p class="lead">
                            {{ $contact[0]->subject }}
                        </p>
                        <hr>
                        <p>
                            {{ $contact[0]->message }}                     
                           </p>
                        <br>
                        <p>
                            Thanks! <br>
                            {{ $contact[0]->name }}.
                        </p>
                        <br>
                        <p>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            email:
                            {{ $contact[0]->email }}.
                        </p>
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->
                
              
                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-sm">
                            <div class="modal-content">
      
                              <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel2">Message From {{ $contact[0]->name }}</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <h4>{{ $contact[0]->subject }}</h4>
                                <p>{{ $contact[0]->message }}</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
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

</body></html>

                       @endsection
