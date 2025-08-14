<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'image',
        'price',
        'title',
        'location',
        'sqrfit',
        'bed',
        'bath'
    ];
}
