<?php

namespace App\Http\Livewire\Component;

use App\Models\Category;
use Livewire\Component;

class CategorieComponent extends Component
{
    public function render()
    {
        return view('livewire.component.categorie-component', [
            'allCategories'=> Category::all()
        ]);
    }
}
