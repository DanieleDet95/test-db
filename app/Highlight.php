<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Highlight extends Model
{
    protected $fillable = [
      "start",
      "end",
      "type",
      "price",
      "payment_id",
    ];

    public function suite() {
      return $this->belongsToMany("App\Suite");
    }

    public function payment() {
      return $this->belongsTo("App\Payment");
    }
}
