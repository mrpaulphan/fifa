<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Save extends Model
{
    protected $fillable = [
        'id',
        'save_name',
      'save_manager_name',
      'save_team_name',
      'save_color',
      'user_id',
    ];
}
