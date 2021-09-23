<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductInfomation;
use App\Models\Product;

class ProductInfomationController extends Controller
{
    //
    public function index()
    {
        $product_infomations = ProductInfomation::all();
        return view('backend.product_infomation.index', compact('product_infomations'));
    }

    public function show(ProductInfomation $product_infomation)
    {
        return view('backend.product_infomation.show', compact('product_infomation'));
    }

    public function create()
    {
        $products = Product::all();
        return view('backend.product_infomation.create', compact('products'));
    }

    public function store(Request $request)
    {
        ProductInfomation::create($request->input());
        return redirect('admin/product_infomations');
    }

    public function edit(ProductInfomation $product_infomation)
    {
        $products = Product::all();
        return view('backend.product_infomation.edit', compact('product_infomation', 'products'));
    }

    public function update(Request $request, ProductInfomation $product_infomation)
    {
        $product_infomation->update($request->input());
        return redirect('admin/product_infomations');
    }

    public function destroy(ProductInfomation $product_infomation)
    {
        $product_infomation->delete();
        return redirect('admin/product_infomations');
    }
}
