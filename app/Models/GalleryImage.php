<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'gallery_id',
        'image_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'gallery_id' => 'integer',
        'image_id' => 'integer',
    ];


    public function gallery()
    {
        return $this->belongsTo(\App\Models\Gallery::class);
    }

    public function image()
    {
        return $this->belongsTo(\App\Models\Image::class);
    }
}
