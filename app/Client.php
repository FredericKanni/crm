<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    protected $fillable = ['id', 'nom', 'id_adresse'];

    public function adresse()
    {
        return $this->hasOne('App\Adresse', 'adresse');
    }




    //avoir pas sur 
    public function contacts()
    {
        return $this->hasMany('App\Contact','id_client');
    }

   
}
