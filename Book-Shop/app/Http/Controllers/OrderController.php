<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    //
    public function index()
    {
        $orders = Order::all();
        return view('backend.order.index', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('backend.order.show', compact('order'));
    }

    public function create()
    {
        return view('backend.order.create');
    }

    public function store(Request $request)
    {
        Order::create($request->input());
        return redirect('admin/orders');
    }

    public function edit(Order $order)
    {
        return view('backend.order.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $order->update($request->input());
        return redirect('admin/orders');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect('admin/orders');
    }
}
