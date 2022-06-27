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
        $products = [];
        return view('product.index', ['products' => $products]);
    }

    public function create(){
        return 'Function to create';
    }

    public function store(){

    }

    public function show($product){
        $product = Product::findOrFail($product);
        return view('product.show', ['product' => $product]);
    }

    public function edit($product){

        return 'showing the form to edit the product given';
    }
    public function update($product){

    }

    public function destroy($product){

    }
}
