<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $table = "fac";
	protected $fillable =['name'];

    public function hotels(){
        return $this->belongsToMany('App\Hotel', 'hotels_fac', 'fac_id', 'hotel_id')->withTimestamps();
    }
}
