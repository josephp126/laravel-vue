<?php

namespace App\Models;

use App\Traits\Uuidable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Arr;

/**
 *
 *
 * @property bool is_homepage
 */
class News extends Model
{
    use HasFactory, SoftDeletes, Uuidable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mime_type',
        'summary',
        'content',
        'title',
        'code_number',
        'is_homepage',
        'hash',
    ];

    protected $casts = ['is_homepage' => 'bool'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable')->orderBy('id', 'desc');
    }

    public function getUrlAttribute()
    {
        return route('news.show', $this->uuid);
    }

    public function getImageUrlAttribute()
    {
        return Arr::get($this->image, 'url', url('images/broken.png'));
    }
}
