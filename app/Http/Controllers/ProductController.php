<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.add');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $productimage = time() . "." . $request->productimage->extension();
        $request->productimage->move(public_path('images/'), $productimage);
        $productvideo = time() . "." . $request->productvideo->extension();
        $request->productvideo->move(public_path('videos/'), $productvideo);
        $product = new Product();
        $product->product_name = $request->productname;
        $product->product_discription = $request->productdiscription;
        $product->product_price = $request->productprice;
        $product->product_quantity = $request->productquantity;
        $product->product_image = $productimage;
        $product->product_video = $productvideo;
        $product->save();
        return back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(string $id)
    {
        $product = Product::find($id);
        if($product){
            if($product->status){
                $product->status = 0;
            }else{
                $product->status = 1;
            }
            $product->save();
        }
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $product = Product::all();
        return view('admin.show', compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('admin.update', compact("product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        if(isset($request->productimage) && ($request->productimage)){
            $productimage = time() . "." . $request->productimage->extension();
            $request->productimage->move(public_path('images/'), $productimage);
            $productvideo = time() . "." . $request->productvideo->extension();
            $request->productvideo->move(public_path('videos/'), $productvideo);   
        }
        

        $product->product_name = $request->productname;
        $product->product_discription = $request->productdiscription;
        $product->product_price = $request->productprice;
        $product->product_quantity = $request->productquantity;
        // $product->product_image = $productimage;
        // $product->product_video = $productvideo;
        $product->save();
        return redirect()->route('showproduct');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::find($id)->delete();
        return back();
    }

    /**
     * Search Work
     */

     Public function search(string $id){
        $search = $_GET['query'];
        $products = Product::where('product_name', 'LIKE', '%' . $search . '%')->get();
        return view('admin.search', compact('products'));
     }
}
