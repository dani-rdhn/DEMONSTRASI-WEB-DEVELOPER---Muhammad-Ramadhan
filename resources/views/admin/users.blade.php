<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NetRent Admin</title>
    <!-- Required meta tags -->
    @include('admin.css')
    <link href="home/css/user_product.css" rel="stylesheet" />
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
                <h2 class="h2_font">All users</h2>
                <div class="container">
                    <div class="row">
                        <div class="mb-3 col-12 mb-lg-5">
                            <div class="position-relative card table-nowrap table-card">
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="small text-uppercase bg-body">
                                            <tr>
                                                <th>nama lengkap</th>
                                                <th>alamat email</th>
                                                <th>phone</th>
                                                <th>Name</th>
                                                <th>address</th>
                                                <th>nationality</th>
                                                <th>tempat lahir</th>
                                                <th>tanggal lahir</th>
                                                <th>gender</th>
                                                <th>agama</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($user as $user)
                                            <tr class="align-middle">
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->phone}}</td>
                                                <td>{{$user->address}}</td>
                                                <td>{{$user->nationality}}</td>
                                                <td>{{$user->tempat_lahir}}</td>
                                                <td>{{$user->tanggal_lahir}}</td>
                                                <td>{{$user->gender}}</td>
                                                <td>{{$user->religion}}</td>
                                                <td>
                                                    <span class="badge fs-6 fw-normal bg-tint-success text-success">{{$user->payment_status}}</span>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="inline-flex p-1 bg-black border border-black rounded-lg">
                                        <button
                                            class="inline-block px-4 py-2 text-sm text-black text-blue-500 bg-white rounded-md shadow-sm focus:relative"
                                        ><a href="/users/pdf">Print Pdf</a>
                                        </button>
                                        </div>
                                    
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