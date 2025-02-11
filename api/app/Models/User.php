<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    use \App\Traits\uuid;

    protected $fillable = [
        'first_name',
        'last_name',
        'infix',
        'email',
        'password',
        'address',
        'place',
        'country',
        'postalcode',
        'isAdmin'
    ];
}
