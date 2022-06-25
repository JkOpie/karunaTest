<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product as ProductModel;
use Illuminate\Support\Facades\Log;

class Product extends Component
{
    public $search, $products;

    public function mount()
    {
        $this->products = ProductModel::orderBy('id', 'desc')->get();
    }

    public function render()
    {
        
        return view('livewire.product', ['products' => $this->products]);
    }

    public function delete($id)
    {
        if($id)
        {
            ProductModel::findOrFail($id)->delete();
            session()->flash('message' , 'Product deleted Sucessfully');
        }
       
    }

    public function btnSearch()
    {
        $this->validate([
            'search' => "required"
        ]);
        
        $this->products = $this->productSearch($this->search);
    }

    public function productSearch($search)
    {
        return ProductModel::where('name', 'like', '%'.$search.'%')
        ->orWhere('price_in_cents', 'like', '$'.$search.'%')
        ->orWhere('details', 'like', '%'.$search.'%')
        ->orWhere('publish', 'like', '%'.$search.'%')
        ->get();
    }
    


}
