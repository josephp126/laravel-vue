<?php

namespace App\Http\Resources;

use App\Http\Resources\Api\ProductResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'                   => $this->id,
            'name'                 => $this->name,
            'parent_id'            => $this->parent_id,
            'order'                => $this->order,
            'updated_at'           => $this->updated_at,
            'updated_at_formatted' => $this->updated_at->format(config('app.formats.table_datetime')),

            'products'       => ProductResource::collection($this->products),
            'sub_categories' => self::collection($this->children),
        ];
    }
}
