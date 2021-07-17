<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
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
            'url'         => $this->url,
            'uuid'        => $this->uuid,
            'id'          => $this->id,
            'sort'        => $this->sort,
            'title'       => $this->title,
            'mime_type'   => $this->mime_type,
            'code_number' => $this->code_number,
            'hash'        => $this->hash,
            'updated_at'  => $this->updated_at,
        ];
    }
}
