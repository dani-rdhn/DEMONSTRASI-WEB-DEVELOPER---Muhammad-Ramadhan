<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>Threadly</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <link href="home/css/stylearticle.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
         <!-- end header section -->

        <section class="h-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-10 col-xl-8">
                    <div class="card" style="border-radius: 10px;">
                    <div class="card-header px-4 py-5">
                        <!-- <h5 class="text-muted mb-0">Thanks for your Order, <span style="color: #a8729a;">Anna</span>!</h5> -->
                        <h5 class="text-muted mb-0" style="font-size: 24px; font-family: Montserrat;">Thanks for your Order!</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                        <p class="lead fw-normal mb-0" style="color: #a8729a;">Receipt</p>
                        <!-- <p class="small text-muted mb-0">Receipt Voucher : 1KAU9-84UIL</p> -->
                        </div>
                        @foreach($order as $order)
                        <div class="card shadow-0 border mb-2">
                        
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-3">
                                <img src="product/{{$order->image}}"
                                class="img-fluid" alt="Phone">
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                <p class="text-muted mb-0 ">{{$order->product_title}}</p>
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                <p class="text-muted mb-0 ">Qty: {{$order->quantity}}</p>
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                <p class="text-muted mb-0 ">{{$order->payment_status}}</p>
                            </div>
                            <!-- <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                <p class="text-muted mb-0 small">Capacity: 64GB</p>
                            </div> -->                        
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                <p class="text-muted mb-0 ">Rp.{{$order->price}}</p>
                            </div>
                            </div>
                            <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                            <!-- <div class="row d-flex align-items-center">
                            <div class="col-md-2">
                                <p class="text-muted mb-0 small">Track Order</p>
                            </div>
                            <div class="col-md-10">
                                <div class="progress" style="height: 6px; border-radius: 16px;">
                                <div class="progress-bar" role="progressbar"
                                    style="width: 65%; border-radius: 16px; background-color: #a8729a;" aria-valuenow="65"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-around mb-1">
                                <p class="text-muted mt-1 mb-0 small ms-xl-5">Out for delivary</p>
                                <p class="text-muted mt-1 mb-0 small ms-xl-5">Delivered</p>
                                </div>
                            </div>
                            </div> -->
                        </div>
                        </div>
                        @endforeach
                        <!-- <div class="card shadow-0 border mb-4">
                        
                        </div> -->
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
     
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

       <!-- LightBox -->
    <div class="lightbox-wrapper">
      <div class="lightbox-content"></div>
    </div>
    <!-- Overlay -->
    <div class="overlay"></div>
    <script src="home/js/main.js"></script>
   </body>
</html>