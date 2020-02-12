<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyReviews extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'company_reviews';
    protected $fillable = ['name', 'email', 'review', 'photo'];
}
