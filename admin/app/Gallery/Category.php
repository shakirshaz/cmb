<?php

namespace App\Gallery;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'Category';

    public $timestamps = false;

    protected $guarded = [];

}
