<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleMake extends Model {
	use SoftDeletes;
	protected $dates = ['deleted_at'];
	protected $table = 'vehicle_make';
	protected $fillable = ['make'];
}