<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suite extends Model
{
    protected $fillable = [
      'user_id',
      'title',
      'address',
      'rooms',
      'beds',
      'baths',
      'square_m',
      'latitude',
      'longitude',
      'price',
      'description',
      'main_image',
    ];

    public function user() {
      return $this->belongsTo('App\User');
    }

    public function highlight() {
      return $this->belongsToMany('App\Highlight');
    }

    public function images() {
      return $this->hasMany('App\Image');
    }

    public function services() {
      return $this->belongsToMany("App\Service");
    }

}
