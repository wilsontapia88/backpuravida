<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $table = 'ws_users';

    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    const CREATED_AT = 'user_registration';
    const UPDATED_AT = 'user_lastupdate';

    const id = 'user_id';

    protected $fillable = [
        'user_id',
        'user_thumb',
        'user_name',       //nome douser
        'user_lastname',
        'user_document',
        'user_document_check',
        'user_genre',
        'user_datebirth',
        'user_telephone',
        'user_cell',
        'user_email',      //email do user
        'user_password',   //password do user
        'user_channel',
        'user_registration',
        'user_lastupdate',
        'user_lastaccess',
        'user_login',
        'user_login_cookie',
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
