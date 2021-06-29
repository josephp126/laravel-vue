<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property mixed category
 */
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
        'category_id',
        'product_id',
        'sort',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'          => 'integer',
        'parent_id'   => 'integer',
        'category_id' => 'integer',
        'product_id'  => 'integer',
    ];

    public function getNameAttribute()
    {
        return optional($this->category)->name ?? '';
    }

    public function parent()
    {
        return $this->belongsTo(__CLASS__);
    }

    public function getChildrenAttribute()
    {
        return self::where('parent_id', $this->id)->orderBy('sort')->get();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
