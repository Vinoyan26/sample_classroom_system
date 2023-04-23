<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
        'photo','firstname','lastname','gender','grade_id','school','phone','email','address'
    ];

    public function grade(){
        return $this->belongsTo('App\Grade');
    }  

    public function subjects(){
        return $this->belongsToMany('App\Subject');
    }  
}
