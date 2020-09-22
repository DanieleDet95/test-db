<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Highlight extends Model
{
    protected $fillable = [
      "duration",
      "expire",
      "suite_id",
      "payment_id",
    ];

    public function suite() {
      return $this->belongsTo("App\Suite");
    }

    public function payment() {
      return $this->belongsTo("App\Payment");
    }
}
