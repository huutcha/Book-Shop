<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductSubCate;

class ProductSubCateController extends Controller
{
    //
    public function index()
    {
        $product_sub_cates = ProductSubCate::all();
        return view('backend.product_sub_cate.index', compact('product_sub_cates'));
    }

    public function show(ProductSubCate $product_sub_cate)
    {
        return view('backend.product_sub_cate.show', compact('product_sub_cate'));
    }

    public function create()
    {
        return view('backend.product_sub_cate.create');
    }

    public function store(Request $request)
    {
        ProductSubCate::create($request->input());
        return redirect('admin/product_sub_cates');
    }

    public function edit(ProductSubCate $product_sub_cate)
    {
        return view('backend.product_sub_cate.edit', compact('product_sub_cate'));
    }

    public function update(Request $request, ProductSubCate $product_sub_cate)
    {
        $product_sub_cate->update($request->input());
        return redirect('admin/product_sub_cates');
    }

    public function destroy(ProductSubCate $product_sub_cate)
    {
        $product_sub_cate->delete();
        return redirect('admin/product_sub_cates');
    }
}
