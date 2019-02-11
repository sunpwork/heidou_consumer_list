<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopUser extends Model
{
    protected $fillable = [
        'uid', 'name', 'consumption', 'avatar'
    ];
}
