<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_thumb',
        'user_lastname',
        'user_document',
        'user_document_check',
        'user_genre',
        'user_datebirth',
        'user_telephone',
        'user_cell',
        'user_channel',
        'user_lastaccess',
        'user_level',
        'user_facebook',
        'user_twitter',
        'user_youtube',
        'user_google',
        'user_document_name',
        'user_blocking_reason',
        'user_agreement',
        'user_videointro'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
