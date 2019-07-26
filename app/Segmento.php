<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Segmento extends Model
{
     protected $fillable = [

      'id',
      'segmento',
    ];

    public function setor()
    {
        return $this->hasOne('Setor');
    }
}
