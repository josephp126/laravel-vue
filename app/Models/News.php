<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 **/
class News extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mime_type',
        'path',
        'title',
        'code_number',
        'hash',
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
