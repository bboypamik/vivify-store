<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(20);
        return view('home', compact('products'));
    }

    public function show()
    {
        return view('products.create');
    }

    public function store(Product $product, ProductRequest $request)
    {
        $data = $request->validated();
        $product->create($data);
       return redirect('/')->with('message', 'Novi proizvod je uspesno dodat');
    }
}
