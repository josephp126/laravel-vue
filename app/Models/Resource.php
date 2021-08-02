<?php

namespace App\Models;

use App\Traits\Uuidable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;

/**
 * @property boolean fileExists
 * @property boolean is_active
 * @property mixed   file
 * @property string  title
 * @property string  filename
 * @property string  hash
 */
class Resource extends Model
{
    use HasFactory, Uuidable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'filename',
        'resource_type_id',
        'resource_group_id',
        'is_active',
        'hash',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'                => 'integer',
        'user_id'           => 'integer',
        'resource_type_id'  => 'integer',
        'resource_group_id' => 'integer',
        'is_active'         => 'boolean',
    ];

    protected $appends = ['url'];


    /**
     * @var \App\Http\Resources\Api\ProductResource|mixed
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function resourceType()
    {
        return $this->belongsTo(ResourceType::class);
    }

    public function resourceGroup()
    {
        return $this->belongsTo(ResourceGroup::class);
    }

    public function resourceable()
    {
        return $this->morphTo();
    }

    public function getFileNameAttribute()
    {
        return $this->uuid;
    }

    public function getFileExistsAttribute()
    {
        return Storage::disk('resources')->exists($this->hash);
    }

    public function getFileAttribute()
    {
        return Storage::disk('resources')->get($this->hash);
    }

    public function deleteFile()
    {
        return Storage::disk('resources')->delete($this->hash);
    }

    public function setFileAttribute($fileContents)
    {
        Storage::disk('resources')->putFileAs('', $fileContents, $this->hash);
    }

    public function getUrlAttribute()
    {
        if (!$this->fileExists) {
            return url('/images/broken.png');
        }

        return route(
            'resource.request',
            [
                'resource' => $this->uuid,
                'name'     => $this->name,
            ]
        );
    }

    public function getNameAttribute()
    {
        return $this->title;
    }
}
