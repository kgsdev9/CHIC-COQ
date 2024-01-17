<?php

namespace App\Traits  ;

use App\Models\Product;


trait   WithProduct  {

    public function add($id) {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "img_one" => $product->img_one,
                "statut"  => $product->statut,
                "product_id"  =>$product->id,
            ];
        }
        session()->put('cart', $cart);
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Produit Ajouté à votre commande"
        ]);
        $this->emit('updateCartCount');
    }





}
