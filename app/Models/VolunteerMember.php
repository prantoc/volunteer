<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class VolunteerMember extends Model
{
    public function district(){
    	return $this->belongsto(District::class, 'dis_id');
    }
}
