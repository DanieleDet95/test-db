<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
  protected $fillable = [
    'user_id',
    'type'
  ];

  public function user() {
    return $this->belongsTo('App\User');
  }

  public function highlight() {
    return $this->hasOne('App\Highlight');
  }
}
