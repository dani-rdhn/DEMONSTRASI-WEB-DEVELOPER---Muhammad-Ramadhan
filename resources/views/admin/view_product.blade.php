<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NetRent Admin</title>
    <!-- Required meta tags -->
    @include('admin.css')
    <link href="home/css/order_product.css" rel="stylesheet" />
    <style type="text/css">
        .div_center
        {
            text-align: center;
            padding-top: 40px;
           
        }
        .h2_font 
        {
            font-family: montserrat;
            font-weight: bold;
            font-size: 32px;
            padding-bottom: 40px;
        }
        .table
        {
            color: #fcfcfc;
        }
        .description-cell {
            max-width: 300px; /* Adjust the max-width as needed */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->
        
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="div_center">
                <h2 class="h2_font">All Orders</h2>
                <div class="container">
                    <div class="row">
                        <div class="mb-3 col-12 mb-lg-5">
                            <div class="position-relative card table-nowrap table-card">
                                <div class="card-header align-items-center">
                                    <h5 class="mb-0">Latest Transactions</h5>
                                </div>
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="small text-uppercase bg-body">
                                            <tr>
                                                <th>Title</th>
                                                <th>Desciption</th>
                                                <th>Category</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($product as $product)
                                            <tr class="align-middle">
                                                <td>{{$product->title}}</td>
                                                <td class="description-cell">{{$product->description}}</td>
                                                <td>{{$product->category}}</td>
                                                <td>{{$product->quantity}}</td>
                                                <td>Rp.{{$product->price}}</td>
                                                <td><img src="{{ asset($product->image) }}" alt="Product Image" style="max-width: 100px; height: auto;"></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- <div class="card-footer text-end">
                                    <a href="#!" class="btn btn-gray">View All Transactions</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>