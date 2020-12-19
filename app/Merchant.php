<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    protected $fillable = [
        'Merchant',
        'Phone_Merchant',
        'Address',
        'Notee',
        'Creat By',

    ];
}
