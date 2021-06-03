<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string link
 * @property Image  image
 * @observer SlideObserver
 */
class Slide extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'link',
        'filename',
        'is_homepage',
        'title',
        'description',
        'sort'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'          => 'integer',
        'is_homepage' => 'boolean',
    ];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function scopeSorted($query)
    {
        return $query
            ->orderBy('is_homepage', 'desc')
            ->orderBy('sort', 'asc')
            ->orderBy('id', 'desc');
    }
}
