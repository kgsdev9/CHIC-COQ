<?php

namespace App\Http\Livewire\Component;

use App\Models\Product;
use App\Traits\WithProduct;
use Livewire\Component;

class PopularProductComponent extends Component
{

    use WithProduct;

    public function render()
    {
        return view('livewire.component.popular-product-component', [
            'allproduct'=> Product::all()
        ]);
    }

   

}
