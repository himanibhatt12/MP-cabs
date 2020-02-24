<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kodeine\Metable\Metable;

class Bookings extends Model
{
    use Metable;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = "bookings";
    protected $metaTable = 'bookings_meta';
    protected $fillable = [
        'customer_id', 'vehicle_id', 'user_id', 'pickup', 'dropoff', 'pickup_addr', 'dest_addr', 'travellers', 'status', 'comment', 'dropoff_time', 'driver_id', 'note', 'is_booked',
    ];

    protected function getMetaKeyName()
    {
        return 'booking_id'; // The parent foreign key
    }

    public function package()
    {
        return $this->hasOne("App\Model\PackagesModel", "id", "package_id")->withTrashed();
    }

    public function route()
    {
        return $this->hasOne("App\Model\RouteModel", "id", "route_id")->withTrashed();
    }

    public function offer()
    {
        return $this->hasOne("App\Model\RideOffers", "id", "offer_id")->withTrashed();
    }

    public function vehicle()
    {
        return $this->hasOne("App\Model\VehicleModel", "id", "vehicle_id")->withTrashed();
    }

    public function customer()
    {
        return $this->hasOne("App\Model\User", "id", "customer_id")->withTrashed();
    }

    public function driver()
    {
        return $this->hasOne("App\Model\User", "id", "driver_id")->withTrashed();
    }

    public function user()
    {
        return $this->hasOne("App\Model\User", "id", "user_id")->withTrashed();
    }

}
