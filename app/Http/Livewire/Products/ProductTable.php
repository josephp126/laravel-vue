<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductTable extends Component
{
    use WithPagination;

    public function render()
    {
        $products = Product::paginate(request('perPage', 50));
        return view('livewire.products.product-table', compact('products'));
    }
}
