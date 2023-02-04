@extends('layouts/master')
@section('content')




    <!--Body Content-->
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Wish List</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<form action="#">
                        <div class="wishlist-table table-content table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    	<th class="product-name text-center alt-font">Remove</th>
                                        <th class="product-price text-center alt-font">Images</th>
                                        <th class="product-name alt-font">Product</th>
                                        <th class="stock-status text-center alt-font">Author</th>
                                        <th class="product-price text-center alt-font">Unit Price</th>

                                        <th class="product-subtotal text-center alt-font">Add to Cart</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($favourites as $favourite)

                                    <tr>
                                        
                                    	<td class="product-remove text-center" valign="middle"><a href="{{ url('removefromwishlist?id=' . $favourite->book_id) }}"><i class="icon icon anm anm-times-l"></i></a></td>
                                        <td class="product-thumbnail text-center">
                                            <a href="#"><img src="usersimg/image/{{ $favourite->image }}" alt="" title="" /></a>
                                        </td>
                                        <td class="product-name"><h4 class="no-margin"><a href="#">{{ $favourite->book_name }}</a></h4></td>
                                        <td class="stock text-center">
                                            <span class="in-stock">{{ $favourite->author }}</span>
                                        </td>
                                        <td class="product-price text-center"><span class="amount">JOD {{ $favourite->price }}.00</span></td>
                                     

                                        <td class="product-subtotal text-center">
                                            <a  href="{{ url('booksdetails?id=' . $favourite->book_id) }}">
                                                <button type="button" class="btn btn-small">See Details</button></a></td>
                                    </tr>
                                    @endforeach
                                    @foreach ($usedbooksfavourites as $favourite)

                                    <tr>
                                        
                                    	<td class="product-remove text-center" valign="middle"><a href="{{ url('removefromwishlistusedbooks?id=' . $favourite->user_book_id) }}"><i class="icon icon anm anm-times-l"></i></a></td>
                                        <td class="product-thumbnail text-center">
                                            <a href="#"><img src="usersimg/image/{{ $favourite->image }}" alt="" title="" /></a>
                                        </td>
                                        <td class="product-name"><h4 class="no-margin"><a href="#">{{ $favourite->book_name }}</a></h4></td>
                                        <td class="stock text-center">
                                            <span class="in-stock">{{ $favourite->author }}</span>
                                        </td>
                                        <td class="product-price text-center"><span class="amount">JOD {{ $favourite->price }}.00</span></td>
                                     

                                        <td class="product-subtotal text-center">
                                            <a  href="{{ url('userbooksdetails?id=' .$favourite->user_book_id) }}">
                                                                                                <button type="button" class="btn btn-small">See Details</button></a></td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                    	
                                </tbody>
                            </table>
                        </div>
                    </form>                   
               	</div>
            </div>
        </div>
        
    </div>
    <!--End Body Content-->





@endsection