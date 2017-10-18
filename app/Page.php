<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
     protected $fillable = [
        'mobile', 'app_name', 'screen_name', 'hospital','location',
    ];
}
