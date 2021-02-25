<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'id_job','fileLocation'
    ];

    protected $primaryKey = 'id_job';
}
