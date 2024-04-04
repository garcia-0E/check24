<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Order extends Model
{
    use Authorizable, HasFactory;

    protected $fillable = ["customer_first_name", "customer_last_name", "tariff_id"];
}
