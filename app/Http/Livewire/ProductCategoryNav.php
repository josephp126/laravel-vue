<?php

namespace App\Http\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class ProductCategoryNav extends Component
{
    public $navs = [];

    public function mount()
    {
        $newNavs = [];

        \App\Models\Category::ordered()->whereNull('parent_id')->each(
            function ($c) use (&$newNavs) {
                $newNavs["/product?type={$c->id}"] = [
                    'label' => $c->name,
                ];
            }
        );

        $this->navs = $newNavs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('livewire.product-category-nav');
    }
}
