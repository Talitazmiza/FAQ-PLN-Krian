<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lainlain extends Model
{
    protected $table = 'lainlain';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'images', 'keteranagan',
    ];
}
