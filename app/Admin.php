<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $fillable = [
        'name', 'password',
    ];
    protected $hidden = [
        'password',
    ];
}