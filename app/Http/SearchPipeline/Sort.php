<?php


namespace App\Http\SearchPipeline;


class Sort extends BaseSearchPipeline
{

    protected function applyFilter($builder, $param)
    {
        return $builder->orderBy($param, request('sortDirection', 'desc'));
    }
}
