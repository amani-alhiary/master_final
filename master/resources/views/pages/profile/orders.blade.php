@extends('layouts/master')
@section('content')

{{-- <section style="width: 85%; float: right;"> --}}
    <div class="col-md-12 col-sm-12  " style="width: 65%;margin-left:25%">
      <div class="x_panel">
        <div class="x_title">
         
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
                  <th class="column-title">country </th>
                  <th class="column-title">phone </th>
                  <th class="column-title">total price </th>
                  <th class="column-title">Show Details </th>
                  {{-- <th class="column-title no-link last"><span class="nobr">Action</span>
                  </th> --}}
                  <th class="bulk-actions" colspan="7">
                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                  </th>
                </tr>
              </thead>

              <tbody>
                @foreach ($orders as $order)

                <tr class="even pointer">
                  
                  <td class="a-center ">
                    <input type="checkbox" class="flat" name="table_records">
                  </td>
                
                  <td class=" ">{{ $order->country }}</td>
                  <td class=" ">{{ $order->phone }}</td>
                  <td class=" ">JOD {{ $order->total_price }}.00</td>
                  <td class=" "><a href="{{ url('showorder?id=' . $order->id) }}">Show</a></td>


                  {{-- <form action="{{ route('users.destroy',$user->id) }}" method="Post">
                  <td class=" last"><a href="{{ route('users.edit',$user->id) }}">Show</a>
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
 
<!-- /page content -->
{{-- </section> --}}




@endsection