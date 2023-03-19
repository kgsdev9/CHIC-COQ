<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Category;
class CategoryComponent extends Component
{


    public function render()
    {
        $category = Category::all();
        return view('livewire.category-component', [
            'category'  => $category
        ])->extends('layout.app')->section('content');;
    }
}
