<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sub_Category;

class Sub_CategoryController extends Controller
{
    //
    public function index()
    {
        $sub_categories = Sub_Category::all();
        return view('backend.sub_category.index', compact('sub_categories'));
    }

    public function show(Sub_Category $sub_category)
    {
        return view('backend.sub_category.show', compact('sub_category'));
    }

    public function create()
    {
        return view('backend.sub_category.create');
    }

    public function store(Request $request)
    {
        Sub_Category::create($request->input());
        return redirect('sub_categories');
    }

    public function edit(Sub_Category $sub_category)
    {
        return view('backend.sub_category.edit', compact('sub_category'));
    }

    public function update(Request $request, Sub_Category $sub_category)
    {
        $sub_category->update($request->input());
        return redirect('sub_categories');
    }

    public function destroy(Sub_Category $sub_category)
    {
        $sub_category->delete();
        return redirect('sub_categories');
    }
}
