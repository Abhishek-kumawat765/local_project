<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class DhanVenture extends Model
{ use SoftDeletes;
	protected $table = "dhanVenture";
}