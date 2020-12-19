<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use function Ramsey\Uuid\v1;

class follow extends Model
{
    protected $fillable = [
        'Container',
        'Arrival_Date',
        'Due_date',
        'Berth',
        'Size',
        'Line',
        'Merchant',
        'note_shreh',
        'Name_Dri',
        'phone_Dri',
        'No_Car',
        'Name_stor',
        'phone_stor',
        'oajba',
        'load_date',
        'export_date',
        'end_exp_date',
        'section',
        'notee',
        'Creat By',

    ];
}
