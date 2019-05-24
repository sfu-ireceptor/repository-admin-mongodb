<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Sequence extends Model
{
    protected $collection = 'sequence';
    protected $guarded = [];
}
