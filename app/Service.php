<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
      "list",
    ];

    public function suites() {
      return $this->belongsToMany("App\Suite");
    }
}
