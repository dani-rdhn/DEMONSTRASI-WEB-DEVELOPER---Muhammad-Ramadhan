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
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
         <!-- end header section -->

         <main class="main">
          <section class="product-wrapper">
            <div class="container">
              <div class="product-images-wrapper">
                <div class="preview-image-wrapper">
                  <img
                    src="product/{{$product->image}}"
                    class="preview-image"
                    alt="Product Image"
                  />
                  <div class="arrows hide-for-desktop">
                    <div class="next">
                      <img src="home/images/icon-next.svg" alt="Next Icon" />
                    </div>
                    <div class="prev">
                      <img src="home/images/icon-previous.svg" alt="Previous Icon" />
                    </div>
                  </div>
                  <div class="count">
                    <p>
                      <span class="current"></span> of
                      <span class="total"></span>
                    </p>
                  </div>
                </div>

              </div>
              <div class="product-details-wrapper">
                <h1 class="product-title">{{$product->title}}</h1>
                <p class="product-description">
                  {{$product->description}}
                </p>

                <div class="product-price">
                  <div class="current-price-wrapper">
                    <h2 class="current-price">Rp{{$product->price}}</h2>
                  </div>
                </div>

                
                <form action="{{url('add_cart', $product->id)}}" class="add-to-cart-form" style="margin-top:12px; margin-left:-12px" method="post">
                  @csrf
                  <div class="col-md-2" style="margin-top:2px">
                    <a>Quantity</a>
                    <input type="number" name="quantity" value="1" min="1" max="2">
                  </div>
                  <div class="col-md-2" style="margin-top:2px">
                    <label for="duedate">Due Date</label>
                    <input type="date" id="duedate" name="duedate" required>
                </div>

                  <button
                    type="submit"
                    aria-label="Add to cart"
                    class="button add-btn"
                  >
                    <img src="home/images/icon-cart.svg" alt="" />
                    Add to cart
                  </button>

                  <p class="form-alert"></p>
                </form>
                
              </div>
            </div>
          </section>
        </main>


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

       <!-- LightBox -->
    <div class="lightbox-wrapper">
      <div class="lightbox-content"></div>
    </div>
    <!-- Overlay -->
    <div class="overlay"></div>
    <script src="home/js/main.js"></script>
   </body>
</html>