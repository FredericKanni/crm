<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    protected $table = 'adresses';

    protected $fillable = ['id', 'adresse', 'code_postal','ville'
  ,'id_client' //mais ds ma bdd il y a pas de id client  car la cle etrangere est dans le Model client  car si double cle impossible d ajouter 
    ];

    public function client()
    {
        return $this->hasOne('App\Client', 'id_client');
    }
}
