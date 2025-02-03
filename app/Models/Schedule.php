<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Schedule extends Model
{ use SoftDeletes; 
    // this is use for delete items form view page 
	protected $table = "schedule";
	
}