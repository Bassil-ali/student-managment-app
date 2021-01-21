<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sheet extends Model
{
    protected $fillable = [
        'name', 'category', 'month','year','Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday'
    ];


}
