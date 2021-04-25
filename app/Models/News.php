<?php

namespace App\Models;

use App\Traits\Uuidable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Arr;
use Str;

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
        'slug',
        'content',
        'title',
        'code_number',
        'is_homepage',
        'hash',
    ];

    protected $casts = ['is_homepage' => 'bool'];

    protected static function boot()
    {
        parent::boot();

        static::creating(
            function ($model) {
                $model->setAttribute('uuid', (string)Str::uuid());
                $model->setAttribute('slug', Str::slug($model->title));
            }
        );
    }


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

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
