<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ws_users_note extends Model
{
    protected $fillable = [
        'user_id',
        'admin_id',
        'note_text',
        'note_datetime',
        'note_status',
    ];
}
