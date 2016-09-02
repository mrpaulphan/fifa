<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
  protected $fillable = [
    'position',
    'name',
    'age',
    'overall',
    'appearances',
    'goals',
    'assists',
    'joined',
    'form',
    'contract',
    'nationality',
    'value',
    'wages',
    'status',
    'user_id',
    'season',
    'potential_low',
    'potential_high'

  ];
}
