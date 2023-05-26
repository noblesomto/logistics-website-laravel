<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'country',
        'state',
        'address',
        'date',
        'long',
        'lat',
        'comment',
    ];
}
