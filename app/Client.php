<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    //ici pas la peine de mettre id-adresse osef 
    protected $fillable = ['id', 'nom'];

    public function adresse()
    {


        //c est la meme chose 
        // return $this->belongsTo('App\Adresse', 'adresse');
        return $this->belongsTo(Adresse::class, 'id_adresse');
        //id_adresse  c est la cle etrangere
    }




    //avoir pas sur 
    public function contacts()
    {
        return $this->hasMany(Contact::class,'id_client');
    }

   
}
