<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sender extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'first_name',
        'last_name',
        'address',
        'company',
        'phone',
        'email',
        'city',
        'state',
        'country',
        'ref_number',

    ];
}
