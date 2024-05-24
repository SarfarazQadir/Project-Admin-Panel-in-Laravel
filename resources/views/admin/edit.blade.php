@extends('layouts.master')

@section('tilte','Edit Product ')
@section("add")
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                      <h4>Edit Product</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Product Name</label>
                        <input name="productname" value="{{ $product->product_name }}" type="text" class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label>Product Discription</label>
                        <input type="text" name="productdiscription" value="{{ $product->product_discription }}" class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label>Product Price</label>
                        <input type="number" class="form-control" value="{{ $product->product_price }}" name="productprice">
                      </div>
                      <div class="form-group">
                        <label>Product Quantity</label>
                        <input type="number" class="form-control" name="productquantity" value="{{ $product->product_quantity }}" >
                      </div>
                      <div class="form-group">
                        <label>Product Image</label>
                        <input type="file" class="form-control" name="productimage" value="{{ $product->product_image }}" >
                      </div>
                      <div class="form-group">
                        <label>Product Video</label>
                        <input type="file" class="form-control" name="productvideo" value="{{ $product->product_video }}" >
                      </div>
                    </div>
                    <div id="alert-message" class="alert alert-success" style="display: none;">
                      Product data edited successfully!
                  </div>
              </div>
              <div class="card-footer text-right">
                  <button class="btn btn-primary" onclick="showAlert()">Edit Product</button>
              </div>
                  </form>
                  <script>
                    function showAlert() {
                        document.getElementById('alert-message').style.display = 'block';   
                    }
                    // end{code}
                </script>
                </div>
              </div>
            </div>
          </div>
        </div>
  @endsection 