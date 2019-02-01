<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $table="service";

    protected $fillable = ['title', 'description', 'type','userId','link'];

    public function client()
    {
    	return $this->belongsTo('App\Client','userId');
    }
}
