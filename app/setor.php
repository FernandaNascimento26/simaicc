<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $fillable = [

      'id',
      'setor',
    ];

 public function segmento()
    {
        return $this->belongsTo('App\Segmento','segmento_id', 'id');
    }

    public function atividade()
    {
        return $this->hasOne('Atividade');
    }
}
