<?php

namespace App\Models;

use App\Traits\Uuidable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Silber\Bouncer\Database\HasRolesAndAbilities;
use Str;
use Arr;

class User extends Authenticatable {
    use HasFactory, Notifiable, SoftDeletes, Uuidable, HasRolesAndAbilities;

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
        'id'                => 'integer',
        'email_verified_at' => 'datetime',
        'is_contact'        => 'boolean',
        'is_representative' => 'boolean',
        'is_international'  => 'boolean',
    ];

    protected static function boot() {
        parent::boot();

        static::creating(

            function ( $model ) {
                $model->setAttribute( 'uuid', ( string )Str::uuid() );
            }
        );
    }

    public function address() {
        return $this->morphOne( Address::class, 'addressable' );
    }

    public function getImageUrlAttribute() {
        return Arr::get( $this->image, 'url', url( 'images/broken.png' ) );
    }

    public function accessLogs() {
        return $this->hasMany( AccessLog::class );
    }

    public function image() {
        return $this->morphOne( Image::class, 'imageable' )->orderBy( 'id', 'desc' );
    }
}
