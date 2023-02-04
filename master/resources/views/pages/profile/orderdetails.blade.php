
@extends('layouts/master')
@section('content')

<link rel="stylesheet" href="bill.css">
    
<section>
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
    <div class="col-md-8">
    <div class="card">
    <div class="text-left logo p-2 px-5"> <img src="usersimg/image/{{ Auth::user()->image }}" width="50"> </div>
    <div class="invoice p-5">
    <h5>Your order details!</h5> 
    <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">
    <table class="table table-borderless">
    <tbody>
    <tr>
    <td>
    <div class="py-2"> <span class="d-block text-muted">Order Date</span> <span>{{ $order[0]->created_at }}</span> </div>
    </td>
    <td>
    <div class="py-2"> <span class="d-block text-muted">Order No</span> <span>{{ $order[0]->id }}</span> </div>
    </td>
    <td>
    <div class="py-2"> <span class="d-block text-muted">Country</span> <span>{{ $order[0]->country }}</span> </div>
    </td>
    <td>
    <div class="py-2"> <span class="d-block text-muted">Shiping Address</span> <span>{{ $order[0]->address }}</span> </div>
    </td>
    </tr>
     </tbody>
    </table>
    </div>
    <div class="product border-bottom table-responsive">
    <table class="table table-borderless">
    <tbody>
        {{ $total=0 }}
     @foreach ($orderbooks as $book)    

    <tr>
    <td width="20%"> <img src="usersimg/image/{{ $book->image }}" width="90"> </td>
    <td width="60%"> <span class="font-weight-bold">{{ $book->book_name }}</span>
    <div class="product-qty" style="color: black"> <span class="d-block" style="color: black">Quantity:{{ $book->quantity }}</span> <span style="color: black">Status:New Book</span> </div>
    </td>
    <td width="20%">
    <div class="text-right"> <span class="font-weight-bold">JOD {{ $book->price*$book->quantity }}.00</span> </div>
    </td>
    </tr>
    <tr>
        {{ $total=$total+$book->price*$book->quantity }}

        @endforeach

        @foreach ($orderusedbooks as $book)    

        <tr>
        <td width="20%"> <img src="usersimg/image/{{ $book->image }}" width="90"> </td>
        <td width="60%"> <span class="font-weight-bold">{{ $book->book_name }}</span>
        <div class="product-qty" style="color: black"> <span class="d-block" style="color: black">Quantity:{{ $book->quantity }}</span> <span style="color: black">Status:Used Book</span> </div>
        </td>
        <td width="20%">
        <div class="text-right"> <span class="font-weight-bold">JOD {{ $book->price*$book->quantity }}.00</span> </div>
        </td>
        </tr>
        {{ $total=$total+$book->price*$book->quantity }}

            @endforeach
   
    </tbody>
    </table>
    </div>
    <div class="row d-flex justify-content-end">
    <div class="col-md-5">
    <table class="table table-borderless">
    <tbody class="totals">
    <tr>
    <td>
    <div class="text-left"> <span class="text-muted">Subtotal</span> </div>
    </td>
    <td>
    <div class="text-right"> <span>JOD {{ $total }}.00</span> </div>
    </td>
    </tr>
    <tr>
    <td>
    <div class="text-left"> <span class="text-muted">Shipping Fee</span> </div>
    </td>
    <td>
    <div class="text-right"> <span class="text-success">JOD 3.00</span> </div>
    </td>
    </tr>
    
    <tr class="border-top border-bottom">
    <td>
    <div class="text-left"> <span class="font-weight-bold">Subtotal</span> </div>
    </td>
    <td>
    <div class="text-right"> <span class="font-weight-bold">JOD {{ $total+3 }}.00</span> </div>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
   
    </div>
    <div class="d-flex justify-content-between footer p-3"> <span>Need Help? visit our <a href="#"> Contact center</a></span> <span>28 Jan, 2023</span> </div>
    </div>
    </div>
    </div>
    </div> 


</section>
     <!-- Including Jquery -->
     <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
     <script src="assets/js/vendor/jquery.cookie.js"></script>
     <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
     <script src="assets/js/vendor/wow.min.js"></script>
     <!-- Including Javascript -->
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/plugins.js"></script>
     <script src="assets/js/popper.min.js"></script>
     <script src="assets/js/lazysizes.js"></script>
     <script src="assets/js/main.js"></script>
</div>
</body>

<!-- belle/about-us.html   11 Nov 2019 12:44:39 GMT -->
</html>
@endsection