<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleDemandRequests extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'vehicle_demands';
    protected $fillable = ['source', 'destination', 'date_time'];
}
