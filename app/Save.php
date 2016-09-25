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

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function seasons()
    {
        return $this->hasMany('App\Season');
    }
    public function recentSeason()
    {
        return $this->hasMany('App\Season')->orderBy('season','desc');
    }
    public function hasSeason()
    {
        return (bool) $this->seasons()->first();
    }

    public function mostRecentSeason()
    {
        $relation->getQuery()->orderBy('created_at', 'desc');

    }
}
