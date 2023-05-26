<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reciever extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'first_name',
        'last_name',
        'address',
        'phone',
        'email',
        'city',
        'state',
        'country',
        'ref_number',

    ];
}
