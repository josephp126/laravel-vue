<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

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
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'resource_type_id' => 'integer',
        'resource_group_id' => 'integer',
    ];


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
}
