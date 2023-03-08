<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    protected $table = 'USER';
    protected $primaryKey = 'USER_ID';

    public const CREATED_AT = 'USER_CREATED_AT';
    public const UPDATED_AT = 'USER_UPDATED_AT';

    protected $fillable = [
        'USER_NAME',
        'USER_EMAIL',
        'USER_PASSWORD',
    ];

    protected $hidden = [
        'USER_PASSWORD',
    ];
}
