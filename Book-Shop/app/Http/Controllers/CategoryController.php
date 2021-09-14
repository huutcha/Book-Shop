<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('frontend.category.index', compact('categories'));
    }

    public function show(Category $category)
    {
        return view('frontend.category.show', compact('category'));
    }

    public function create()
    {
        return view('frontend.category.create');
    }

    public function store(Request $request)
    {
        Category::create($request->input());
        return redirect('categories');
    }

    public function edit(Category $category)
    {
        return view('frontend.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->input());
        return redirect('categories');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('categories');
    }
}

