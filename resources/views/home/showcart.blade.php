<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>NetRent</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <link href="home/css/cart.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
      <section class="h-100" style="background-color: #eee;">
         <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
               <div class="col-10">

               <div class="mb-4 d-flex justify-content-between align-items-center">
                  <p style="color: #1D7A1B; font-size: 32px">Cart</p>
               </div>
               <?php $totalprice=0; ?>
               @foreach($cart as $cart)
               <div class="mb-4 card rounded-3">
                  <div class="p-4 card-body">
                     <div class="row d-flex justify-content-between align-items-center">
                     <div class="col-md-2 col-lg-2 col-xl-2">
                        <img
                           src="/product/{{$cart->image}}"
                           class="img-fluid rounded-3" alt="Cotton T-shirt">
                     </div>
                     <div class="col-md-3 col-lg-3 col-xl-3">
                        <p class="mb-2 lead fw-normal">{{$cart->product_title}}</p>
                        <p><span class="text-muted">Quantity: </span>{{$cart->quantity}}</p>
                     </div>
                     <div class="col-md-3 col-lg-3 col-xl-3">
                        <p><span class="text-muted">duedate: </span>{{$cart->duedate}}</p>
                     </div>
                     <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h5 class="mb-0">Rp{{$cart->price}}</h5>
                     </div>
                     <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <a href="{{url('/remove_cart', $cart->id)}}"><img src="/home/images/trash-10-24.png"></img></a>
                     </div>
                     </div>
                  </div>
               </div>
               <?php $totalprice=$totalprice + $cart->price ?>
               @endforeach
               <div class="card">
                  <div class="card-body">
                     <p>Total Price : Rp{{$totalprice}}</p>
                  </div>
               </div>
               <div class="card">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-sm-6">
                           <a href="{{url('order')}}"><button type="button" class="btn btn-block btn-warning btn-lg">Cash On Delivery</button></a>
                        </div>
                        <div class="col-sm-6">
                           <a href="{{url('stripe', $totalprice)}}"><button type="button" class="btn btn-block btn-warning btn-lg">Payment With Card</button></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </section>
         <!-- end slider section -->
      </div>
      
      <!-- footer start -->
      @include('home.footer')
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>