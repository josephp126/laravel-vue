<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ResourceResource extends JsonResource
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
            'id'                => $this->id,
            'uuid'              => $this->uuid,
            'title'             => $this->title,
            'filename'          => $this->filename,
            'url'               => $this->url,
            'resource_type_id'  => $this->resource_type_id,
            'resource_group_id' => $this->resource_group_id,
            'is_active'         => $this->is_active ?? false,
            'updated_at'        => $this->updated_at->format(config('app.formats.table_datetime')),

            'type'  => new ResourceTypeResource($this->resourceType),
            'group' => new ResourceTypeResource($this->resourceGroup),
        ];
    }
}
