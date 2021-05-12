<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessLog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'event_id',
        'entity_id',
        'accessable_type',
        'accessable_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'event_id' => 'integer',
        'entity_id' => 'integer',
        'accessable_id' => 'integer',
    ];


    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    public function event()
    {
        return $this->belongsTo(\App\Models\Event::class);
    }

    public function entity()
    {
        return $this->belongsTo(\App\Models\Entity::class);
    }
}
