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
        'access_log_event_id',
        'entity_id',
        'accessable',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'access_log_event_id' => 'integer',
        'entity_id' => 'integer',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function accessLogEvent()
    {
        return $this->belongsTo(AccessLogEvent::class);
    }

    public function entity()
    {
        return $this->belongsTo(Entity::class);
    }
}
