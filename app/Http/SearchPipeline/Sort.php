<?php


namespace App\Http\SearchPipeline;


class Sort extends BaseSearchPipeline
{

    protected function applyFilter($builder, $param)
    {
        //check for relationship
        $columnMap     = explode('.', $param);
        $sortDirection = request('sortDirection', 'desc');

        if (count($columnMap) > 1 && $columnMap[0] == 'address') {
            $mainModel     = $builder->getModel();
            $mainModalName = $mainModel::class;
            $mainTableName = $mainModel->getTable();

            return $builder
                ->leftJoin('addresses', function ($join) use ($mainTableName, $mainModalName) {
                    $join->on("$mainTableName.id", "addresses.addressable_id")
                        ->where("addresses.addressable_type", $mainModalName)
                        ->whereNull("addresses.deleted_at");
                })
                ->orderBy("addresses.{$columnMap[1]}", $sortDirection);
        }

        return $builder->orderBy($param, $sortDirection);
    }
}
