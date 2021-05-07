<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductCategory extends Component
{
    public $categories = [];

    public function mount($categories = false)
    {
        if($categories !== false){
            $this->categories = $categories;
            return true;
        }

        $this->categories = \App\Models\ProductCategory::orderBy('sort')->whereNull('parent_id')->get();
        return true;
    }

    public function updateTaskOrder($records){
        foreach($records as $record){
            \App\Models\ProductCategory::find($record['value'])->update(['order' => $record['order']]);
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.product-category');
    }
}
