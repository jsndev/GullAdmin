<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use MongoDB\BSON\UTCDateTime;


class Participante extends Model {

    protected $connection = 'mongodb';
    protected $fillable = array('nome', 'cpf', 'data_nascimento');

    public function getDataNascimentoAttribute($value) {
        return $value->toDateTime()->format('d/m/Y');
    }
}
