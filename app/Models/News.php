<?php

namespace App\Models;

use Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Str;
use Venturecraft\Revisionable\RevisionableTrait;

/**
 * @property mixed uuid
 * @property mixed image
 */
class News extends Model
{
    use HasFactory, SoftDeletes, RevisionableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'title',
        'slug',
        'summary',
        'content',
        'is_homepage',
    ];

    protected $revisionEnabled = true;
    protected $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)
    protected $historyLimit = 500;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'          => 'integer',
        'is_homepage' => 'boolean',
    ];

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
        return $this->morphOne(Image::class, 'imageable');
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
