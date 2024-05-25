@extends('layouts.master')
@section('tilte','Show Product ')
@section('show')
    <!-- Main Content -->
    <div class="main-content">
      <section class="section">
        <div class="section-body">
          <div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h1>Product Details</h1>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped table-md">
           <thead>
            <form action="">
              <input type="search" class="form control bg-grey" name="search">
            </form>
              <tr>
                <th>Product Name</th>
                <th>Product Discription</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Product Image</th>
                <th>Product Video</th>
                <th>Product Status</th>
                <th class="text-center" colspan="2">Action</th>
              </tr>
            </thead>
              <tbody>
                @foreach($product as $products)
                <tr>
                  <td>{{$products->product_name}}</td>
                  <td>{{$products->product_discription}}</td>
                  <td>{{$products->product_price}}</td>
                  <td>{{$products->product_quantity}}</td>
                  <td><img src="{{asset('images/'.$products->product_image)}}" width="100px" height="100px"></td>
                  <td><video controls src="{{asset('videos/'.$products->product_video)}}" width="200px" height="100px"></td>
                  <td><a href=" {{route("status", $products->id )}} " class="btn btn-{{$products->status ? "success" : "danger" }}">{{$products->status ? "Active" : "Inactive"}}</a></td>

                  <td><a href="edit/{{ $products->id }}" class="btn btn-success">Edit</a></td>
                  <td><a href="delete/{{ $products->id }}" class="btn btn-danger">Delete</a></td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection