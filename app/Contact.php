<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = ['id', 'nom', 'prenom','tel','email','poste','id_client','created_at','updated_at'];
    public $timestamps = true;
    public function client()
    {
        return $this->belongsTo('App\Client', 'id_client');
    }
}


