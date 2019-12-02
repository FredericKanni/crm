<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = ['id', 'nom', 'prenom','tel','mail','poste','id_client'];
    
    public function client()
    {
        return $this->belongsTo('App\Client', 'id_client');
    }
}


