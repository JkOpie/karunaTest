<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product as ProductModel;

class Product extends Component
{
    public function render()
    {
        $products = ProductModel::orderBy('id', 'desc')->get();
        return view('livewire.product', ['products' => $products]);
    }

    public function delete($id)
    {
        if($id)
        {
            ProductModel::findOrFail($id)->delete();
            session()->flash('message' , 'Product deleted Sucessfully');
        }
       
    }
}
