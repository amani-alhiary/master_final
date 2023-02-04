@extends('layouts/master')
@section('content')

    <!--Body Content-->
    <div id="page-content">
    	<!--Collection Banner-->
    	<div class="collection-header">
			<div class="collection-hero">
        		<div class="collection-hero__image"><img class="blur-up lazyload" data-src="https://images.pexels.com/photos/2465877/pexels-photo-2465877.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" src="https://images.pexels.com/photos/2465877/pexels-photo-2465877.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="shop" title="shop" /></div>
        		<div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">BOOKS SHOP</h1></div>
      		</div>
		</div>
        <!--End Collection Banner-->
        
        <div class="container">
        	<div class="row">
            	<!--Sidebar-->
            	<div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                	<div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                	<div class="sidebar_tags">
                    	<!--Categories-->
                    	<div class="sidebar_widget categories filter-widget">
                            <div class="widget-title"><h2>Categories</h2></div>
                            <div class="widget-content">
                                <ul class="sidebar_categories">
                                    {{-- @foreach ($categories as $category)
                                    <li class="level1 sub-level"><a href="#;" class="site-nav">{{ $category->category_name }}</a>
                                        @endforeach --}}

                                    
                                    </li>
                                    <li class="level1 sub-level"><a href="#;" class="site-nav">Fliter by Category</a>
                                    	<ul class="sublinks">
                                            @foreach ($categories as $category)
                                            <form action="{{ route('categorybooksfilter.index') }}" method="GET">
                                                <input type="hidden" name="id" value="{{ $category->id }}">
                                        	<li class="level2"><button type="submit" class="site-nav" style="cursor: pointer">{{ $category->category_name }}</button></li>
                                        </form>

                                            @endforeach
                                          
                                        </ul>
                                    </li>
                                  
                                </ul>
                            </div>
                        </div>
                        <!--Categories-->
                        <!--Price Filter-->
                        <div class="sidebar_widget filterBox filter-widget">
                            <div class="widget-title">
                            	<h2>Price</h2>
                            </div>
                            <form action="{{ route('categorybooksfilter.store') }}"  method="post" class="price-filter" enctype="multipart/form-data">
                                @csrf
                                <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                	<div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="no-margin"><input id="amount" name="price" type="text"></p>
                                    </div>
                                    <input id="minprice" type="hidden" name="minprice" type="text">
                                    <input id="maxprice" type="hidden" name="maxprice" type="text">

                                    <div class="col-6 text-right margin-25px-top">
                                        <button type="submit" class="btn btn-secondary btn--small">filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--End Price Filter-->
                        <!--Size Swatches-->
                      
                        <!--End Size Swatches-->
                        <!--Color Swatches-->
                       
                        <!--End Color Swatches-->
                        <!--Brand-->
                       
                        <!--End Brand-->
                        <!--Popular Products-->
						 <div class="sidebar_widget">
                        	<div class="widget-title"><h2>Popular Products</h2></div>
							<div class="widget-content">
                                <div class="list list-sidebar-products">
                                  <div class="grid">
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image">
                                            <a class="grid-view-item__link" href="#">
                                                <img class="grid-view-item__image" src="assets/images/product-images/mini-product-img.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#">Cena Skirt</a>
                                          <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$173.60</span></span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="assets/images/product-images/mini-product-img1.jpg" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#">Block Button Up</a>
                                          <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$378.00</span></span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="assets/images/product-images/mini-product-img2.jpg" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#">Balda Button Pant</a>
                                          <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$278.60</span></span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image" src="assets/images/product-images/mini-product-img3.jpg" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#">Border Dress in Black/Silver</a>
                                          <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$228.00</span></span></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                          	</div>
						</div> 
                        <!--End Popular Products-->
                        <!--Banner-->
                        <div class="sidebar_widget static-banner">
                        	<img src="usersimg/image/istockphoto-1263779983-612x612.jpg" alt="" />
                        </div>
                        <!--Banner-->
                        <!--Information-->
                        <div class="sidebar_widget">
                            <div class="widget-title"><h2>Information</h2></div>
                            <div class="widget-content"><p>Use this text to share information about your brand with your customers. Describe a product, share announcements, or welcome customers to your store.</p></div>
                        </div>
                        <!--end Information-->
                        <!--Product Tags-->
                        <div class="sidebar_widget">
                          <div class="widget-title">
                            <h2>Authors</h2>
                          </div>
                          <div class="widget-content">
                            <ul class="product-tags">
                                @foreach ($authors as $author)
                                <form action="{{ route('authorbooksfilter.index') }}" method="GET">
                                    @csrf
                                    <input type="hidden" name="author" value="{{ $author->author }}">
                              <li><button type="submit" style="cursor: pointer">{{ $author->author }}</button></li>
                                </form>
                              @endforeach
                              <li><a href="#" title="Show products matching tag $400 - $600">$400 - $600</a></li>
                              <li><a href="#" title="Show products matching tag $600 - $800">$600 - $800</a></li>
                              <li><a href="#" title="Show products matching tag Above $800">Above $800</a></li>
                              <li><a href="#" title="Show products matching tag Allen Vela">Allen Vela</a></li>
                              <li><a href="#" title="Show products matching tag Black">Black</a></li>
                              <li><a href="#" title="Show products matching tag Blue">Blue</a></li>
                              <li><a href="#" title="Show products matching tag Cantitate">Cantitate</a></li>
                              <li><a href="#" title="Show products matching tag Famiza">Famiza</a></li>
                              <li><a href="#" title="Show products matching tag Gray">Gray</a></li>
                              <li><a href="#" title="Show products matching tag Green">Green</a></li>
                              <li><a href="#" title="Show products matching tag Hot">Hot</a></li>
                              <li><a href="#" title="Show products matching tag jean shop">jean shop</a></li>
                              <li><a href="#" title="Show products matching tag jesse kamm">jesse kamm</a></li>
                              <li><a href="#" title="Show products matching tag L">L</a></li>
                              <li><a href="#" title="Show products matching tag Lardini">Lardini</a></li>
                              <li><a href="#" title="Show products matching tag lareida">lareida</a></li>
                              <li><a href="#" title="Show products matching tag Lirisla">Lirisla</a></li>
                              <li><a href="#" title="Show products matching tag M">M</a></li>
                              <li><a href="#" title="Show products matching tag mini-dress">mini-dress</a></li>
                              <li><a href="#" title="Show products matching tag Monark">Monark</a></li>
                              <li><a href="#" title="Show products matching tag Navy">Navy</a></li>
                              <li><a href="#" title="Show products matching tag new">new</a></li>
                              <li><a href="#" title="Show products matching tag new arrivals">new arrivals</a></li>
                              <li><a href="#" title="Show products matching tag Orange">Orange</a></li>
                              <li><a href="#" title="Show products matching tag oxford">oxford</a></li>
                              <li><a href="#" title="Show products matching tag Oxymat">Oxymat</a></li>
                            </ul>
                            <span class="btn btn--small btnview">View all</span> </div>
                        </div>
                        <!--end Product Tags-->
                    </div>
                </div>
                <!--End Sidebar-->
                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                	<div class="productList">
                    	<!--Toolbar-->
                        <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                    	<div class="toolbar">
                        	<div class="filters-toolbar-wrapper">
                            	<div class="row">
                                	<div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
                                    	<a href="shop-left-sidebar.html" title="Grid View" class="change-view change-view--active">
                                        	<img src="assets/images/grid.jpg" alt="Grid" />
                                        </a>
                                        <a href="shop-listview.html" title="List View" class="change-view">
                                        	<img src="assets/images/list.jpg" alt="List" />
                                        </a>
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                    	<span class="filters-toolbar__product-count">Showing: 22</span>
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-4 text-right">
                                    	<div class="filters-toolbar__item">
                                      		<label for="SortBy" class="hidden">Sort</label>
                                      		<select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                                <option value="title-ascending" selected="selected">Sort</option>
                                                <option>Best Selling</option>
                                                <option>Alphabetically, A-Z</option>
                                                <option>Alphabetically, Z-A</option>
                                                <option>Price, low to high</option>
                                                <option>Price, high to low</option>
                                                <option>Date, new to old</option>
                                                <option>Date, old to new</option>
                                      		</select>
                                      		<input class="collection-header__default-sort" type="hidden" value="manual">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--End Toolbar-->
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="grid-products grid--view-items">
                        <div class="row">
                            
                    @foreach ($books as $book)
                 
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">

                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="usersimg/image/{{ $book->image }}" src="usersimg/image/{{ $book->image }}" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="usersimg/image/{{ $book->image_01 }}" src="usersimg/image/{{ $book->image_01 }}" alt="image" title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                        
                                        <!-- countdown start -->
                                        <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                        <!-- countdown end -->
    
                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            {{-- <a href="{{ route('booksdetails.show',$book->id) }}"> --}}
                                                <a  href="{{ url('booksdetails?id=' . $book['id']) }}">

                                            <button class="btn btn-addto-cart" type="button">See Details</button>
                                            </a>
                                        </form>
                                        <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                        <i class="icon anm anm-search-plus-r"></i>
                                                    </a>
                                            <div class="wishlist-btn">
                                                <form action="{{ route('addtofavourite.store') }}"  method="post" class="price-filter" enctype="multipart/form-data">
                                                    <input type="hidden" name="book_id" value="{{ $book->id }}">
                                                    <input type="hidden" name="user_id" value="{{ $book->id }}">

                                                    <button class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                    <i class="icon anm anm-heart-l"></i>
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->
    
                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="#">{{ $book->book_name }}</a>
                                        </div>
                                        <div class="product-name">
                                            <a href="#">{{ $book->author }}</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            {{-- <span class="old-price">$500.00</span> --}}
                                            <span class="price">JOD {{ $book->price }}.00</span>
                                        </div>
                                        <!-- End product price -->
                                        
                                        <div class="product-review">
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                            <i class="font-13 fa fa-star-o"></i>
                                        </div>
                                        <!-- Variant -->
                                        
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                    <!-- countdown start -->
                                    <div class="timermobile"><div class="saleTime desktop" data-countdown="2022/03/01"></div></div>
                                    <!-- countdown end -->
                              
                                </div>

                            @endforeach

                        </div>

                        </div>

                        </div>
                    </div>


                                  
                    <div class="infinitpaginOuter">
                        <div class="infinitpagin">	
                            <a href="#" class="btn loadMore">Load More</a>
                        </div>
                    </div>
                </div>
                <!--End Main Content-->
            </div>
        </div>
        
    </div>
    <!--End Body Content-->
    @endsection