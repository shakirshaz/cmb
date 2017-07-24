<?php

namespace App\Gallery;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $table = 'gallery';

    public $timestamps = false;

    protected $guarded = [];
}
