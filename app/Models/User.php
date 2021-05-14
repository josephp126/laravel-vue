<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'first_name',
        'last_name',
        'username',
        'password',
        'email',
        'email_verified_at',
        'date_joined',
        'guid',
        'phone',
        'fax',
        'website',
        'notification_preferences',
        'is_contact',
        'is_representative',
        'is_international',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'email_verified_at' => 'datetime',
        'is_contact' => 'boolean',
        'is_representative' => 'boolean',
        'is_international' => 'boolean',
    ];


    public function accessLogs()
    {
        return $this->hasMany(AccessLog::class);
    }
}
