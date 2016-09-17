<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
  protected $fillable = [
    'user_id',
    'save_id',
    'season',
    'team_color',
    'team_name',
    'domestic_objective',
    'continental_objective',
    'brand_objective',
    'financial_objective',
    'youth_objective',
    'club_worth',
    'transfer_budget'
  ];
}
