<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
     protected $fillable = [

      'id',
      'cidade',
      'estado',
      'endereco',
      'cnpj',
      'telefone',
    ];

     public function user()
    {
        return $this->hasOne('User');
    }

     public function empreendedores()
    {
        return $this->hasMany('App\Empreendedor');
    }




}
