<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empregador extends Model
{
    public function telefones(){
        return $this->hasMany('Telefone');
    }

    public function vagaEmprego(){
        return $this->hasMany('VagaEmprego');
    }
}
