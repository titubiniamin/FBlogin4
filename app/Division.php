<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{

    public function districts()
    {
        return $this->hasMany(District::class,'division_id','id');
    }
}
