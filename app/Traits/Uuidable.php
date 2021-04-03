<?php

namespace App\Traits;

use Str;

trait Uuidable
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->setAttribute('uuid', (string) Str::uuid());
        });
    }

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}
