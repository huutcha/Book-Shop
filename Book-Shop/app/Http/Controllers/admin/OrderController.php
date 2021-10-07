<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        return view('backend.order.index', compact('orders'));
    }

    public function show($id){
        $order = Order::find($id);
        return view('backend.order.show', compact('order'));
    }

    public function update($id, Request $request){
        $order = Order::find($id);
        if ($request->input('browse')){
            $order->update(['state' => 1]);
        } else {
            foreach($order->product as $product){
                $product->increment('quantity', $product->pivot->quantity);
            }
            $order->update(['state' => 2]);
        }
        return redirect('admin/orders');
    }

    public function destroy($id){
        $order = Order::find($id);
        $order->delete();
        return redirect('admin/orders');
    }
}
