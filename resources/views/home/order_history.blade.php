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
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>NetRent</title>
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
                    <div class="px-4 py-5 card-header">
                        <!-- <h5 class="mb-0 text-muted">Thanks for your Order, <span style="color: #a8729a;">Anna</span>!</h5> -->
                        <h5 class="mb-0 text-muted" style="font-size: 24px; font-family: Montserrat;">Thanks for your Order!</h5>
                    </div>
                    <div class="p-4 card-body">
                        <div class="mb-4 d-flex justify-content-between align-items-center">
                        <p class="mb-0 lead fw-normal" style="color: #a8729a;">Receipt</p>
                        <!-- <p class="mb-0 small text-muted">Receipt Voucher : 1KAU9-84UIL</p> -->
                        </div>
                        @foreach($order as $order)
                            <div class="mb-2 border card shadow-0">
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-md-3">
                                        <img src="product/{{$order->image}}"
                                        class="img-fluid" alt="Phone">
                                    </div>
                                    <div class="text-center col-md-2 d-flex justify-content-center align-items-center">
                                        <p class="mb-0 text-muted ">{{$order->product_title}}</p>
                                    </div>
                                    <div class="text-center col-md-2 d-flex justify-content-center align-items-center">
                                        <p class="mb-0 text-muted ">Qty: {{$order->quantity}}</p>
                                    </div>
                                    <div class="text-center col-md-2 d-flex justify-content-center align-items-center">
                                        <p class="mb-0 text-muted ">{{$order->payment_status}}</p>
                                    </div>
                                    <div class="text-center col-md-2 d-flex justify-content-center align-items-center">
                                        <p class="mb-0 text-muted ">{{$order->duedate}}</p>
                                    </div>
                                    <div class="text-center col-md-2 d-flex justify-content-center align-items-center">
                                        <button class="btn btn-primary" onclick="returnProduct('{{ $order->id }}')">Kembalikan</button>
                                    </div>
                                    <!-- <div class="text-center col-md-2 d-flex justify-content-center align-items-center">
                                        <p class="mb-0 text-muted small">Capacity: 64GB</p>
                                    </div> -->                        
                                    <div class="text-center col-md-2 d-flex justify-content-center align-items-center">
                                        <p class="mb-0 text-muted ">Rp.{{$order->price}}</p>
                                    </div>
                                    </div>
                                    <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                                </div>
                            </div>
                        @endforeach
                        <!-- <div class="mb-4 border card shadow-0">
                        
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
      <script>
            // Ambil token CSRF dari meta tag
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            function returnProduct(orderId) {
                $.ajax({
                    type: 'POST',
                    url: '/return-order/' + orderId,
                    data: {
                        _token: csrfToken, // Sertakan token CSRF dalam data
                    },
                    success: function(response) {
                        console.log(response);
                        location.reload(); // Refresh halaman setelah berhasil
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }
        </script>

       <!-- LightBox -->
    <div class="lightbox-wrapper">
      <div class="lightbox-content"></div>
    </div>
    <!-- Overlay -->
    <div class="overlay"></div>
    <script src="home/js/main.js"></script>
   </body>
</html>