<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){


        return view('products.create');
    }


    public function store(Product $product, ProductRequest $request){

        $data = $request->validated();

        $product->create($data);

        redirect('/')->with('message', 'Novi proizvod je uspesno dodat');


    }
}
