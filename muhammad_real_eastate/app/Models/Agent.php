<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
     protected $fillable = [
        'image', 'name', 'designation', 'fb_link', 'insta_link', 'twitter_link'
    ];
}
