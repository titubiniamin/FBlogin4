<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mw_applicant extends Model
{
    protected $table = 'mw_applicants';
    protected $primatyKey= 'Applicant_Id';
    public $timestamps = false;
    protected $guarded = [];
}
