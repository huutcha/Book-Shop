<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function show(){
        $cart = Session::get('myCart');
        
        return view('frontend.cart.payment', [
            'cart' => $cart,
            'totalPrice' => $cart->totalPrice()
        ]);
    }
}
