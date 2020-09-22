<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuiteInfo extends Model
{
    protected $fillable = [
      "address",
      "rooms",
      "beds",
      "baths",
      "square_m",
      "price",
      "description",
      "suite_id",
    ];

    public function suite() {
      return $this->belongsTo('App\Suite');
    }
}
