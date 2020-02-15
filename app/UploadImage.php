<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadImage extends Model
{
    protected $table = 'upload_images';

    protected $fillable = [
        'title', 'image'
    ];
}
