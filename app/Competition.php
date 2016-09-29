<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable = [
        'name',
        'type',
        'result',
        'played',
        'won',
        'tied',
        'lost',
    ];

    public function season()
    {
        return $this->belongsTo('App\Season');
    }
}
