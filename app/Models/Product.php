<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property bool active
 */
class Product extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
        'link',
        'code',
        'more_info',
        'subtitle',
        'title',
        'active',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'     => 'integer',
        'active' => 'boolean',
    ];


    public function attributes()
    {
        return $this->hasMany(ProductAttribute::class);
    }

    public function setCategoriesAttribute($values)
    {
        $this->categories()->sync($values);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, ProductCategory::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
