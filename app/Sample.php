<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Sample extends Model
{
    protected $collection = 'sample';
    protected $guarded = [];
}
