<?php

namespace App\Models;

use Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 *
 * @property Image background
 * @property Image fg_sm_image
 * @property Image fg_md_image
 * @property Image fg_lg_image
 */
class CarouselSlide extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bg_image_id',
        'fg_sm_image_id',
        'fg_md_image_id',
        'fg_lg_image_id',
    ];


    public function background()
    {
        return $this->belongsTo(Image::class, 'background_id');
    }

    public function getBackgroundImageUrlAttribute()
    {
        return Arr::get($this->background, 'url', url('images/broken.png'));
    }

    public function fg_sm_image()
    {
        return $this->belongsTo(Image::class, 'fg_sm_image_id');
    }

    public function fg_md_image()
    {
        return $this->belongsTo(Image::class, 'fg_md_image_id');
    }

    public function fg_lg_image()
    {
        return $this->belongsTo(Image::class, 'fg_lg_image_id');
    }

    public function getFgSmImageUrlAttribute()
    {
        return Arr::get($this->fg_sm_image, 'url', url('images/broken.png'));
    }

    public function getFgMdImageUrlAttribute()
    {
        return Arr::get($this->fg_md_image, 'url', url('images/broken.png'));
    }

    public function getFgLgImageUrlAttribute()
    {
        return Arr::get($this->fg_lg_image, 'url', url('images/broken.png'));
    }
}
