<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class CategoryProductComponent extends Component
{

    public $slug;

    public function mount($slug) {
        $this->slug = $slug ;
    }


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



    public function render()
    {

        $category   =  Category::where('slug', $this->slug)->first();
        $category_id =  $category->id ;
        $productcategory = Product::where('category_id', '=', $category_id)->get();
        return view('livewire.category-product-component', [
            'productcategory' => $productcategory
        ])->extends('layout.app')->section('content');
    }





}
