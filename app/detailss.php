<?php

namespace App;
use App\Merchant;
use Illuminate\Database\Eloquent\Model;

class detailss extends Model
{
    protected $fillable = [
        'Container',
        'Arrival_Date',
        'Due_date',
        'Berth',
        'section',
        'Size',
        'Line',
        'Merchant',
        'Name_emp',
        'Creat By',
        'note',
        'user',

    ];


}
