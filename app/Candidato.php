<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    public function endereco(){
        return $this->hasOne('Endereco');
    }

    public function telefones(){
        return $this->hasMany('Telefone');
    }

    public function vagaEmpregos(){
        return $this->hasMany('VagaEmprego');
    }
}
