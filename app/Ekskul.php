<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ekskul extends Model
{
    public function sekbid()
	{
    	return $this->belongsTo(Sekbid::class, 'sekbid_id');
	}
}
