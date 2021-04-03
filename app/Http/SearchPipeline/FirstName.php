<?php

namespace App\Http\SearchPipeline;

class FirstName extends BaseSearchPipeline
{
    protected function applyFilter($builder, $param)
    {
        return $builder->where('first_name', 'like', "%{$param}%");
    }
}
