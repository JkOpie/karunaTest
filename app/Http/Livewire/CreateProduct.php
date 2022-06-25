<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product as ProductModel;
use Illuminate\Support\Facades\Log;

class CreateProduct extends Component
{
    public $name, $price, $detail, $publish = 'Yes';

    public function resetInputFields()
    {
        $this->name = '';
        $this->price = '';
        $this->detail = '';
        $this->publish = 'Yes';
    }

    public function store()
    {
        $validate = $this->validate([
            'name' => 'required|string',
            'price' => 'required|integer',
            'detail' => 'required|string',
            'publish' => 'required|string'
        ]);

        ProductModel::create([
            "name" => $this->name,
            "price_in_cents" => $this->price * 100,
            "details" => $this->detail,
            'publish' => $this->publish
        ]);

        session()->flash('message' , 'Product Created Sucessfully');
        $this->resetInputFields();
    }

    public function render()
    {
        return view('livewire.create-product');
    }
}
