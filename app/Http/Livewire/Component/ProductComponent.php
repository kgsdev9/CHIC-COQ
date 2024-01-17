<?php

namespace App\Http\Livewire\Component;

use App\Models\Product;
use Livewire\Component;
use App\Traits\WithProduct;

class ProductComponent extends Component
{

    use WithProduct;
    
    public function render()
    {
        return view('livewire.component.product-component', [
            'allProcuts'=> Product::all()
        ]);
    }
}
