<?php

namespace App\Models\Porcao;

use Illuminate\Database\Eloquent\Model;

class ReceitaPorcao extends Model
{
    protected $table = 'receita_porcao';
    public $timestamps = false;

    public function tipoPorcao()
    {
        return $this->belongsTo('App\Models\Porcao\TipoPorcao', 'idTipoPorcao');
    }

    public function faixaEtaria()
    {
        return $this->belongsTo('App\Models\Faixa_Etaria\FaixaEtaria', 'idFEtaria');
    }

    public function receita()
    {
        return $this->belongsTo('App\Models\Receita\Receita');
    }
}
