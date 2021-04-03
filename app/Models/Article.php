<?php

namespace App\Models;

use App\Traits\Uuidable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 **/
class Article extends Model
{
    use HasFactory, SoftDeletes, Uuidable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'link',
        'content',
        'title',
        'summary',
        'is_homepage',
    ];

    protected $casts = ['is_homepage' => 'bool'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function getUrlAttribute()
    {
        return route('news.show', $this->uuid);
    }
}
