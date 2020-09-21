<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable = [
      'name',
      'lastname',
      'birthday',
      'user_id'
    ];

    public function user() {
      return $this->belongsTo('App\User');
    }
}
