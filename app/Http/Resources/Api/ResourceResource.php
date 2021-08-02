<?php

namespace App\Http\Resources\Api;

use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use DB;
use function PHPUnit\Framework\exactly;

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
        $aux = Resource::all()->where('id',$this->resource_id);
        foreach ($aux as $test)
        {
            $data = $test;
        }
        if(isset($data)) {
            $title = $data->getAttributes()["title"];
            $filename = $data->getAttributes()["filename"];
            $updated_at = $data->getAttributes()["updated_at"];
            $is_active = $data->getAttributes()["is_active"];
        }
        else
        {
            $title = '';
            $filename = "";
            $updated_at = "";
        }
        return [
            'id'                => $this->id,
            'uuid'              => $this->uuid,
            'title'             => $title,
            'filename'          => $filename,
            'product_id'        => $this->product_id,
            'resource_id'       => $this->resource_id,
            'url'               => $this->url,
            'resource_type_id'  => $this->resource_type_id,
            'resource_group_id' => $this->resource_group_id,
            'is_active'         => $is_active ?? false,
            'updated_at'        => $updated_at,
//            'updated_at'        => $updated_at->format(config('app.formats.table_datetime')),

            'type'  => new ResourceTypeResource($this->resourceType),
            'group' => new ResourceTypeResource($this->resourceGroup),
        ];
    }
}
