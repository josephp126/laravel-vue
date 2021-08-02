<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductResource extends JsonResource
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
            'description' => $this->description,
            'link'        => $this->link,
            'code'        => $this->code,
            'more_info'   => $this->more_info,
            'subtitle'    => $this->subtitle,
            'title'       => $this->title,
            'updated_at'  => $this->updated_at,
            'active'      => $this->active,

            'image'     => new ImageResource($this->image),
            'images'    => ImageResource::collection($this->images),
            'resources' => ResourceResource::collection($this->resources),
        ];
    }

}
