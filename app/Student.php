<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Student extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'students';

    protected $fillable = [
        'nim', 'name','major', 'gender'
    ];
}
