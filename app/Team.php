<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
  protected $fillable = [
    'user_id',
    'team',
    'age',
    'body',
    'worth',
    'budget',
    'win',
    'loss',
    'tie',
    'season'
  ];
}
