@extends('layouts.master')

@section('tilte','Add Product ')
@section("add")
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <form method="POST" action="{{ route('update', $product->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                      <h4>Add Product</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Product Name</label>
                        <input name="productname" value="{{ $product->product_name }}" type="text" class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label>Product Discription</label>
                        <input type="text" name="productdiscription" class="form-control" value="{{ $product->product_discription }}" required="">
                      </div>
                      <div class="form-group">
                        <label>Product Price</label>
                        <input type="number" class="form-control" name="productprice" value="{{ $product->product_price }}">
                      </div>
                      <div class="form-group">
                        <label>Product Quantity</label>
                        <input type="number" class="form-control" value="{{ $product->product_quantity }}" name="productquantity">
                      </div>
                      <div class="form-group">
                        <label>Product Image</label>
                        <input type="file" class="form-control" name="productimage">
                        <img src="{{asset('images/'.$product->product_image)}}" width="100px" height="100px">
                      </div>
                      <div class="form-group">
                        <label>Product Video</label>
                        <input type="file" class="form-control" name="productvideo">
                        <video controls src="{{asset('videos/'.$product->product_video)}}" width="200px" height="100px">
                      </div>
                    </div>
                    <div id="alert-message" class="alert alert-success" style="display: none;">
                      Product data inserted successfully!
                  </div>
              </div>
              <div class="card-footer text-right">
                  <button class="btn btn-primary" onclick="showAlert()">Add Product</button>
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