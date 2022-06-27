<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;


class ProductController extends Controller
{
    //

    public function index(){

        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }

    public function create(){
        return view('product.create');
    }

    public function store(){

        /*$product = Product::create([
            'title' => request()->title,
            'description' => request()->description,
            'price' => request()->price,
            'stock' => request()->stock,
            'status' => request()->status,
        ]);*/
        $product = Product::create(request()->all());
        return redirect()->route('products.index');

    }

    public function show($product){
        $product = Product::findOrFail($product);
        return view('product.show', ['product' => $product]);
    }

    public function edit($product){
        return view('product.edit', [
            'product' => Product::findOrFail($product)
        ]);
    }
    public function update($product){
        $product = Product::findOrFail($product);
        $product->update(request()->all());

        return redirect()->route('products.index');
    }

    public function destroy($product){
        $product = Product::findOrFail($product);
        $product->delete();

        return $product //redirect()->route('products.index');
    }
}
