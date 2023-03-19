<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class PaymentController extends Controller
{

    public function createOrderBoll() {

        $sesion = session('cart');
        $sum_quantity = 0 ;
        $total_cart=0;
        foreach( (array) $sesion as $s){
           $sum_quantity = $sum_quantity +$s['quantity'];
        };
        foreach( (array)$sesion as $s){
            $total_cart = $total_cart + $s['price']*$s['quantity'];
         };


         return view('payment.createPayment', [
            'totalpanier' => $total_cart
         ]);


    }




}
