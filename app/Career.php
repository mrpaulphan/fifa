<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
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
    public function saves()
    {
        return $this->hasMany('App\Save');
    }
    public function recentSave()
    {
        return $this->hasMany('App\Save')->orderBy('save','desc');
    }
    public function hasSave()
    {
        return (bool) $this->saves()->first();
    }

    public function mostRecentSaves()
    {
        $relation->getQuery()->orderBy('created_at', 'desc');

    }
}
