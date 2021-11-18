<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table='users';

    protected $fillable=[
        'name',
        'gender',
        'phone',
        'email',
        'address',
        'nationality',
        'date_of_birth',
        'education_background',
        'preferred_mode_of_contact'
    ];
}
