<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empreendedor extends Model
{
    protected $fillable = [

      'id',
      'nome',
      'sexo',
      'rg',
      'cpf',
      'dt_nasc',
      'secretaria_id',
      'rua',
      'numero',
      'bairro',
      'cidade',
      'estado',
      'cep',
      'telefone',
      'escolaridade',
      'atividade_id',
      'trabalha_informal',
      'ganho_mensal',
      'formacao_atividade',
    ];

     public function user()
    {
        return $this->hasOne('User');
    }

     public function secretaria()
    {
        return $this->belobgsTo('App\Secretaria','secretaria_id','id');
    }

     public function atividades()
    {
        return $this->belongsToMany('App\Atividade', 'empreendedor_atividade','id','atividade_id')->withTimestamps();
    }
}
