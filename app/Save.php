<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Save extends Model
{
    protected $fillable = [
        'id',
        'name',
        'manager',
        'user_id',
    ];
}
