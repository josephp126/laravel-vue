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
        'bg_default_image_id',
        'bg_md_image_id',
        'bg_sm_image_id',

        'fg_sm_image_id',
        'fg_md_image_id',
        'fg_lg_image_id',
    ];


    public function bg_default_image()
    {
        return $this->belongsTo(Image::class, 'bg_default_image_id');
    }


    public function bg_default_md()
    {
        return $this->belongsTo(Image::class, 'bg_md_image_id');
    }


    public function bg_default_sm()
    {
        return $this->belongsTo(Image::class, 'bg_sm_image_id');
    }

    public function getBackgroundImageDefaultUrlAttribute()
    {
        return Arr::get($this->bg_default, 'url', url('images/broken.png'));
    }

    public function getBackgroundImageMdUrlAttribute()
    {
        return Arr::get($this->bg_default_md, 'url', url('images/broken.png'));
    }

    public function getBackgroundImageSmUrlAttribute()
    {
        return Arr::get($this->bg_default_sm, 'url', url('images/broken.png'));
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
