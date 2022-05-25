<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MwApplicantAddress extends Model
{
    protected $fillable = ['user_id','division_id','district_id','address'];
}
