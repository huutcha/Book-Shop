<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageProduct;
use App\Models\Product;
class ImageProductController extends Controller
{
    //
    public function index()
    {
        $image_products = ImageProduct::all();
        return view('backend.image_product.index', compact('image_products'));
    }

    public function show(ImageProduct $image_product)
    {
        return view('backend.image_product.show', compact('image_product'));
    }

    public function create()
    {
        $products = Product::all();
        return view('backend.image_product.create', compact('products'));
    }

    public function store(Request $request)
    {
        ImageProduct::create($request->input());
        return redirect('admin/image_products');
    }

    public function edit(ImageProduct $imageProduct)
    {
        $products = Product::all();
        return view('backend.image_product.edit', compact('imageProduct'), compact('products'));
    }

    public function update(Request $request, ImageProduct $imageProduct)
    {
        $imageProduct->update($request->input());
        return redirect('admin/image_products');
    }

    public function destroy(ImageProduct $imageProduct)
    {
        $imageProduct->delete();
        return redirect('admin/image_products');
    }
}
