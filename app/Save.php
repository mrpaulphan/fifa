<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Save extends Model
{
    protected $fillable = [
        'career_id',
        'season',
        'name',
        'color',
        'manager_popularity',
        'continental_objective',
        'domestic_objective',
        'brand_objective',
        'financial_objective',
        'youth_objective',
        'club_worth',
        'transfer_budget',
        'earnings',
        'expenses',
    ];

    public function belongsToCareer()
    {
        return $this->belongsTo('App\Career', 'career_id');
    }
    public function competition()
    {
        return $this->hasMany('App\Competition');
    }
}
