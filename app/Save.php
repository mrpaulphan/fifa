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

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function seasons() {
        return $this->hasMany('App\Season');
    }
}
