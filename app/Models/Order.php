<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'freight_type',
        'package_type',
        'departure_date',
        'arrival_date',
        'departure_loc',
        'arrival_loc',
        'weight',
        'package_des',
        'status',
        'order_status',
        'num_stops',
        'price',
        'order_date'
    ];
}
