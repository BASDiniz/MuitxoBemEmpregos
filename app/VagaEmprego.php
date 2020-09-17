<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VagaEmprego extends Model
{
    public function empregador(){
        return $this->belongsTo('Empregador');
    }

    public function candidatos(){
        return $this->belongsToMany('Candidato');
    }
}
