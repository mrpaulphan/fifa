<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $fillable = [
        'save_id',
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

    public function belongsToSave()
    {
        return $this->belongsTo('App\Save', 'save_id');
    }
}
