<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class VolunteerMember extends Model
{

    protected $fillable = [
        'name','email','phone','dis_id','blood','image', 'gender','slug', 
    ];
    public function district(){
    	return $this->belongsto(District::class, 'dis_id');
    }
}
