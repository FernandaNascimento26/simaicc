<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    
    protected $fillable = [

      'id',
      'atividade',
    ];

 public function segmento()
    {
        return $this->belongsTo('App\setor', 'setor_id', 'id');
    }
     public function empreendedores()
    {
        return $this->hasMany('App\Empreendedor','empreendedor_atividade', 'id','empreendedor_id');
    }
}
