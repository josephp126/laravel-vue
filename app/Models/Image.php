<?php

namespace App\Models;

use App\Traits\Uuidable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Storage;

/**
 *
 **/
class Image extends Model
{
    use HasFactory, SoftDeletes, Uuidable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'path',
        'title',
        'code_number',
        'hash',
        'mime_type',
    ];

    public function imageable()
    {
        return $this->morphTo();
    }

    protected $appends = ['url'];

    public function getFileNameAttribute()
    {
        return $this->uuid;
    }

    public function getFileExistsAttribute()
    {
        return Storage::disk('images')->exists($this->hash);
    }

    public function getFileAttribute()
    {
        return Storage::disk('images')->get($this->hash);
    }

    public function setFileAttribute($fileContents)
    {
        Storage::disk('images')->putFileAs('', $fileContents, $this->hash);
    }

    public function getUrlAttribute()
    {
        if (!$this->fileExists) {
            return url('broken.png');
        }

        return route(
            'image.request',
            [
                'image' => $this->uuid,
                'name'  => $this->name,
            ]
        );
    }

    public function getNameAttribute()
    {
        return $this->title;
    }
}
