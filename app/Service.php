<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
      "pool",
      "wifi",
      "parking",
      "pet",
      "sauna",
      "pianoforte",
      "suite_id",
    ];

    public function suite() {
      return $this->belongsTo("App\Suite");
    }
}
