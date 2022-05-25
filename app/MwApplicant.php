<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MwApplicant extends Model
{
    protected $table = 'mw_applicants';
//    protected $primaryKey = 'Applicant_Id';
    public $timestamps = false;
    protected $guarded = ['id'];
   // protected $fillable=['Applicant_Id'];


    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }


}
