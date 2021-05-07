<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 **/
class ProductCategory extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parent_id',
        'product_id',
        'category_id',
        'name',
        'sort',
    ];

    public function getChildrenAttribute()
    {
        return self::where('parent_id', $this->id)->orderBy('sort')->get();
    }
}
