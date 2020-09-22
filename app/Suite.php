<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suite extends Model
{
    protected $fillable = [
      'user_id',
      'title'
    ];

    public function user() {
      return $this->belongsTo('App\User');
    }

    public function highlight() {
      return $this->hasOne('App\Highlight');
    }

    public function images() {
      return $this->hasMany('App\Image');
    }

    public function service() {
      return $this->hasOne("App\Service");
    }
}
