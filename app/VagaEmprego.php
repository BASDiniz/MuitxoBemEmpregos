<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VagaEmprego extends Model
{
    public function empregador(){
        return $this->belongsTo('Empregador');
    }
}
