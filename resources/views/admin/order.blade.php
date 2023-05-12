<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Threadly Admin</title>
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
                        <div class="col-12 mb-3 mb-lg-5">
                            <div class="position-relative card table-nowrap table-card">
                                <div class="card-header align-items-center">
                                    <h5 class="mb-0">Latest Transactions</h5>
                                </div>
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="small text-uppercase bg-body">
                                            <tr>
                                                <th>Product ID</th>
                                                <th>Product</th>
                                                <th>Date</th>
                                                <th>Name</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($order as $order)
                                            <tr class="align-middle">
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->product_title}}</td>
                                                <td>{{$order->created_at}}</td>
                                                <td>{{$order->name}}</td>
                                                <td>Rp.{{$order->price}}</td>
                                                <td>
                                                    <span class="badge fs-6 fw-normal bg-tint-success text-success">{{$order->payment_status}}</span>
                                                </td>
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