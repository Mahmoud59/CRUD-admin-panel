<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public $table="client";

    protected $fillable = array('title', 'description' , 'status' ,'phone','startDate','endDate');
    
    public function service()
    {
    	return $this->hasMany('App\Service','userId');
    }
}
