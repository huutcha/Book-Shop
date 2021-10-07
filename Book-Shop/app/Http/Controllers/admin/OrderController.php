<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
class OrderController extends Controller
{
    public function index(){
        $categories = Category::all();
        $orders = Order::all();
        return view('frontend.order.index', compact('orders', 'categories'));
    }
    public function create()
    {
        $orders = Order::all();
        return view('frontend.order.create', compact('ordes'));
    }

    public function store(Request $request)
    {

        Order::create($request->input());
        return redirect('orders');
    }
    public function show($id){
        $order = Order::find($id);
        return view('frontend.order.show', compact('order'));
    }

    public function update($id, Request $request){
        $order = Order::find($id);
        if ($request->input('browse')){
            $order->update(['state' => 1]);
        } else {
            $order->update(['state' => 2]);
        }
        return redirect('orders');
    }

    public function destroy($id){
        $order = Order::find($id);
        $order->delete();
        return redirect('orders');
    }
}
