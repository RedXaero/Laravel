<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    //

    public function index(){

        $products = DB::table('products')->get();
        return view('products.index');
    }

    public function create(){
        return 'Function to create';
    }

    public function store(){

    }

    public function show($product){
        $product = DB::table('products')->find($product);
        dd($product);
        return view('products.show');
    }

    public function edit($product){

        return 'showing the form to edit the product given';
    }
}
