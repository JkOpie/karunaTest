<?php

namespace App\Http\Livewire;

use App\Models\Product as ProductModel;
use Livewire\Component;

class ShowProduct extends Component
{
    public $product;

    public function mount($id)
    {
        $this->product = ProductModel::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.show-product', ["product" => $this->product]);
    }
}
