<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable=[
        'grade_name'
    ];

    public function students(){
        return $this->hasmany('App\Student');
    }    
}


