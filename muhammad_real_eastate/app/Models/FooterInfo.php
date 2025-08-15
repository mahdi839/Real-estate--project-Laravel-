<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterInfo extends Model
{
     protected $fillable = [
        'facebook',
        'youtube',
        'linkedin',
        'twitter',
        'company_location',
        'phone',
        'email'
    ];
}
