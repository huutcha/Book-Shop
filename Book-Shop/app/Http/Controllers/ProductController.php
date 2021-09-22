<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Promotion;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        return view('backend.product.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('backend.product.show', compact('product'));
    }

    public function create()
    {    
        $promotions = Promotion::all();
        return view('backend.product.create', compact('promotions'));
    }

    public function store(Request $request)
    {
        Product::create($request->input());
        return redirect('admin/products');
    }

    public function edit(Product $product)
    {
        $promotions = Promotion::all();
        return view('backend.product.edit', compact('product'), compact('promotions'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->input());
        return redirect('admin/products');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('admin/products');
    }
}
