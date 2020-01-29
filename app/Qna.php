<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qna extends Model
{
    protected $table = 'qna';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'jenis', 'pertanyaan', 'jawaban',
    ];
}
