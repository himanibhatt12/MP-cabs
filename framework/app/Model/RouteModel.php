<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RouteModel extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'routes';
    protected $fillable = ['name', 'source', 'destination', 'image', 'cost', 'ratings', 'timing', 'distance'];
}
