<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'id_user', 'hint', 'type','fileLocation'
    ];

    protected $primaryKey = 'id_job';
}
