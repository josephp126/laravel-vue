<?php

namespace App\Observers;

use App\Models\Category;

class CategoryObserver
{
    /**
     * Handle the Category "created" event.
     *
     * @param Category $category
     * @return void
     */
    public function created(Category $category)
    {
        if (!$category->order) {
            $order = (Category::where('parent_id', $request->get('parent_id'))->orderBy('order', 'desc')->first(
                    )->order ?? 1) + 1;

            $category->update(compact('order'));
        }
    }
}
