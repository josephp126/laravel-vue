<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductTable extends Component
{
    use WithPagination;

    protected $products = [];

    public function reloadProducts()
    {
        $this->products = Product::paginate(request('perPage', 50));
    }

    public function mount()
    {
        $this->reloadProducts();
    }

    public function delete(Product $product)
    {
        $product->delete();
    }

    public function toggleActive(Product $product)
    {
        $product->update(['active' => !$product->active]);
        $this->reloadProducts();
    }

    public function render()
    {
        $products = $this->products;
        return view('livewire.products.product-table', compact('products'));
    }
}
