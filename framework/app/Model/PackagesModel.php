<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackagesModel extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'packages';
    protected $fillable = ['vehicle_id', 'hourly_rate', 'km_rate', 'package_hours', 'package_rate'];

    public function vehicle()
    {
        return $this->belongsTo("App\Model\VehicleModel", "vehicle_id", "id")->withTrashed();
    }
}
