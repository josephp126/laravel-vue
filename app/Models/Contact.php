<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contact
 * @property string name
 * @property string email
 * @property string message
 * @package App\Models
 * @method static create(array $param)
 */
class Contact extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'message',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
