<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Attribute extends Model
{
    public function construct() {
        return $this->belongsTo('App\Construct');
    }
}
