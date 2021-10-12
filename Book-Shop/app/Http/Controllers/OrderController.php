<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class OrderController extends Controller
{
    public function create(){
        
        // dd(Session::get('myCart'));
        $order = Order::create([
            'price' => Session::get('myCart')->totalPrice(),
            'state' => 0,
            'user_id' => Auth::user()->id
        ]);
        foreach (Session::get('myCart')->products as $key => $value){
            $order->product()->attach((int) $key, ['quantity' => $value['quantity']]);
            Product::find($key)->decrement('quantity', $value['quantity']);
        }
        Session::forget('myCart');
        return 1;
    }
}
