<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    //ici pas la peine de mettre id_adresse osef 
    // en faite nan parce plus tard ds la l ajout en bdd il faut remplir le id_adresse
    protected $fillable = ['id', 'nom','id_adresse'];

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
