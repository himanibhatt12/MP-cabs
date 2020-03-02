<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RideOffers extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'offers';
    protected $fillable = ['source', 'destination', 'vehicle_id', 'valid_from', 'valid_till', 'user_id', 'vehicle_id', 'distance', 'timing'];

    public function vehicle()
    {
        return $this->hasOne("App\Model\VehicleModel", "id", "vehicle_id")->withTrashed();
    }
}
