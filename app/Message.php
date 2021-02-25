<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'usersend', 'userreceive', 'content',
    ];

    protected $primaryKey = 'id_message';

}
