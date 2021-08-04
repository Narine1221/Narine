<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductsRequest;

use App\Models\Product;


class ProductsController extends Controller
{
    public function index () {
        $products = Product::where("count", "<", 100000000)->get();

        // dd($products->toArray());

        return view("pages.products.index", compact("products"));
    }
    public function create () {
        return view("pages.products.create");

    }
    public function store (ProductsRequest $request) {
       // dd($request->all());
        // dd(1);
        // $rules = [
        //     "name" => "required",
        //     "price" => "required|numeric|max:10|min:1",
        //     "count" => "required",
        // ];

        // $this->validate($request, $rules);


        $name = $request->name;
        $price = $request->price;
        $count = $request->count;
        $description = $request->description;

        $product = new Product();
        $product->name = $name;
        $product->price = $price;
        $product->count = $count;
        $product->description = $description;

        $product->save();

        return redirect("/products");
    }
    public function edit ($id) {
        // dd($id);
        // $product = Product::where("id", "=", $id)->get()[0];
        // $product = Product::where("id", $id)->get()[0];
        // $product = Product::where("id", $id)->first();
        $product = Product::find($id);//findy miayn id-i hamar e//

        // $product->views +=1;
        $product->increment("views");

        $product->save();


        // dd($product->toArray());

        return view("pages.products.edit", compact(["product"]));


    } 
    public function update (ProductsRequest $request, $id) {
        $product = Product::find($id);

        $name = $request->name;
        $price = $request->price;
        $count = $request->count;
        $description = $request->description;

        $product->name = $name;
        $product->price = $price;
        $product->count = $count;
        $product->description = $description;

        $product->save();

        return redirect("/products");

    }    
    public function delete($id) {
          // $product = Product::find($id);
          // $product->deete();

        Product::destroy($id);

        return redirect("/products");
        
    }
}
