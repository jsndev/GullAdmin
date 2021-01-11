<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model;


class Test extends Model
{
    protected $collection = 'participantes';

    protected $connection = 'mongodb';
    protected $fillable = array('title');

}
