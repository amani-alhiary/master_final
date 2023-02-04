@extends('layouts/master')
@section('content')


<script>
    // let $sale= $book[0]->sale_price - book[0]->sale_price
    // console.log($sale)
</script>


@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
</div>
@endif

<div class="col-md-6 " style="margin-left: 30%">
    <div class="x_panel">
        <div class="x_title">
            <h2>Edit your profile <small>with all details</small></h2>
           
            <div class="clearfix"></div>
        </div>


<form class="form-horizontal form-label-left" action="{{route('profile12.update',Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden"  name="id" value="{{ Auth::user()->id }}">

    <div class="form-group row ">
        <label class="control-label col-md-3 col-sm-3 ">User name</label>
        <div class="col-md-9 col-sm-9 ">
            <input type="text" value="{{ Auth::user()->name }}" class="form-control" placeholder="book name" name="name">
        </div>
    </div>
    @error('name')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror


    <div class="form-group row ">
        <label class="control-label col-md-3 col-sm-3 ">Email</label>
        <div class="col-md-9 col-sm-9 ">
            <input type="email" class="form-control" placeholder="email" name="email" value="{{ Auth::user()->email }}">
        </div>
    </div>
    @error('email')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror

    <div class="form-group row ">
        <label class="control-label col-md-3 col-sm-3 ">Image</label>
        <div class="col-md-9 col-sm-9 ">
            <input type="file" name="image" value="{{ Auth::user()->image }}" id="fileupload"> <label for="fileupload"> Select a file to upload</label> <br>

            
</div>
    </div>
    @error('image')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
<img src="usersimg/image/{{ Auth::user()->image }}"/>

    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-9 col-sm-9  offset-md-3">
            <button type="submit" name="submit" class="btn btn-success">Add</button>
        </div>
    </div>

</form>
    
    </div>
</div>

@endsection



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

