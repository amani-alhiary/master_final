@extends('admin/master')
@section('content')
    <section style="width: 85%; float: right;">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>BOOKS <small>all books</small></h2>
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

                    {{-- <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p> --}}
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">id </th>
                            <th class="column-title">user name </th>
                            <th class="column-title">title </th>
                            <th class="column-title">comment </th>
                            <th class="column-title">approval status </th>


                            <th class="column-title">Approve </th>
                            <th class="column-title">Don't Approve </th>
                      
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach ($comments as $comment)

                          <tr class="even pointer">
                            
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" ">{{ $comment->id }}</td>
                            <td class=" ">{{ $comment->name }}</td>
                            <td class=" ">{{ $comment->title }}</td>
                           
                            {{-- <td class=" ">{{ $book->quote }}</td> --}}
                            {{-- <td class=" ">{{ $book->description }}</td> --}}
                            <td class=" " style="width: 30%">{{ $comment->comment }}</td>
                             @if($comment->is_approved=='0')
                             <td class=" ">Not Approved</td>
                            @else
                            <td class=" ">Approved</td>
                            @endif
 
                            <td class=" last">
                            <form class="form-horizontal form-label-left" action="{{route('addcomment.update',$comment->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="is_approved" value="1">
                                <input type="hidden" name="id" value="{{ $comment->id }}">

                                <button type="submit" class="btn btn-success">Approve</button>
                            </form>

                            </td>

                            
                            <td class=" last">
                                <form class="form-horizontal form-label-left" action="{{route('addcomment.update',$comment->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="is_approved" value="0">
                                    <input type="hidden" name="id" value="{{ $comment->id }}">
    
                                    <button type="submit" class="btn btn-danger">Don't Approve</button>
                                </form>
    
                                </td>
                            {{-- <form action="{{ route('booksadmin.destroy',$book->id) }}" method="Post">
                                <td class=" last"><a class="btn btn-primary btn-xs" href="{{ url('showbook?id=' . $book['id']) }}">
                                    <i class="fa fa-folder"></i>Show</a>
                                </td>
                            <td class=" last"><a class="btn btn-success" href="{{ url('editbook?id=' . $book['id']) }}"><i class="fa fa-pencil"></i>Edit</a>
                            </td>
                            @csrf
                            @method('DELETE')
                            <td class=" last"><a href="#"><button type="submit" class="btn btn-danger"  onclick="return confirm('Are you sure?');"> <i class="fa fa-trash-o"></i>Delete</button></a>
                            </td>
                          </form> --}}

                          </tr>
                    
                        @endforeach
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
    </section>

      




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