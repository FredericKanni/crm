<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    protected $table = 'adresses';

    protected $fillable = ['id', 'adresse', 'code_postal','ville'
  ,'id_client'
    ];

    public function client()
    {
        return $this->belongsTo('App\Client', 'id_client');
    }
}
