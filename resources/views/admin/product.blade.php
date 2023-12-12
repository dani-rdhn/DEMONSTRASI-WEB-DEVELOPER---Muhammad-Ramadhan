<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NetRent Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
        .div_center 
        {
            text-align: center;
            padding-top: 40px;
        }
        .font 
        {
            font-size:32px;
            font-family: montserrat;
            font-weight: bold;
            padding-bottom: 20px;
        }
        .text_color
        {
            color: black;
            padding-bottom: 8px;
        }
        /* .container 
        {
          color: black;
        } */
        .form-control {
          color: #333;
          background-color: #fff;
        }
        .form-control:focus {
          background-color: #fff !important;
          color: #333;
          box-shadow: none;
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
             @if(session()->has('message'))
            
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}
            </div>

            @endif
            <!-- <div class="div_center">
                <h1 class="font">Add Product</h1>
                <label>Product Title</label>
                <input type="text" class="text_color" name="title" placeholder="Write a title">
            </div> -->
            <div class="container">
            <h1 class="font">Product Form</h1>
            <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
                </div>
                <div class="mb-3">
                  <label for="description">Description</label>
                  <textarea class="form-control" name="description" id="description" placeholder="Enter description"></textarea>
                </div>
                <div class="mb-3">
                  <label for="price">Price</label>
                  <input type="number" name="price" class="form-control" id="price" placeholder="Enter price">
                </div>
                <div class="mb-3">
                  <label for="quantity">Quantity</label>
                  <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Enter quantity">
                </div>
                <div class="mb-3">
                  <label for="category">Category</label>
                  <select class="form-control" name="category" id="category">
                    @foreach($category as $category)
                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="mb-3">
                  <label for="image">Image</label>
                  <input type="file" name="image" class="form-control" id="image" placeholder="Enter image">
                </div>
                <div class="mb-2">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            </div>
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>