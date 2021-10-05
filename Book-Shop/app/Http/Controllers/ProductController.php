<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;

class ProductController extends Controller
{
    public function home(){
        $categories = Category::all();
        $date = time() - 259200;
        $lastestProducts = Product::whereRaw('created_at >= ?', [date( 'Y-m-d',$date)])->orderBy('created_at', 'desc')->limit(6)->get();
        return view('frontend.index', compact('categories'), compact('lastestProducts'));
    }

    public function shop($category_id, $subcategory_id, Request $request){
        $categories = Category::all();

        $products = SubCategory::find($subcategory_id)->product;

        if ($request->query('sort')){
            if ($request->query('sort') == 'new'){
                $products = SubCategory::find($subcategory_id)->product->sortByDesc('created_at');
            }
        }
        return view('frontend.shop.index', [
            'categories' => $categories,
            'subcategory_id' => $subcategory_id,
            'products' => $products,
        ]);
    }

    public function show($id){
        $product = Product::find($id);
        $productsSame = collect();
        foreach ($product->subCategory as $subCate){
            foreach ($subCate->product as $pro){
                $productsSame->push($pro);
            } 
        }
        // dd($productsSame);
        $categories = Category::all();
        return view('frontend.product.detail', [
            'categories' => $categories,
            'product' => $product,
            'productsSame' => $productsSame,
        ]);
    }
}
