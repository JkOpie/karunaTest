<?php

namespace App\Http\Livewire;

use App\Models\Product as ProductModel;
use Livewire\Component;

class UpdateProduct extends Component
{
    public $name, $price, $detail, $publish, $product;

    public function mount($id)
    {
        $this->product = ProductModel::findOrFail($id);
       
        $this->name = $this->product->name;
        $this->price = $this->product->price_in_cents / 100;
        $this->detail = $this->product->details;
        $this->publish = $this->product->publish;
    }

    public function update()
    {
        $validate = $this->validate([
            'name' => 'required|string',
            'price' => 'required',
            'detail' => 'required|string',
            'publish' => 'required|string'
        ]);

        ProductModel::where('id' , $this->product->id)->update([
            "name" => $this->name,
            "price_in_cents" => $this->price * 100,
            "details" => $this->detail,
            'publish' => $this->publish
        ]);

        session()->flash('message' , 'Product Update Sucessfully');
    }

    public function render()
    {
        return view('livewire.update-product', ['product', $this->product]);
    }
}
