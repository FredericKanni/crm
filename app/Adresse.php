<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
  protected $table = 'adresses';
//ici pas besoin de id_client 
  protected $fillable = ['id', 'adresse', 'code_postal', 'ville','created_at','updated_at'];

  public $timestamps = false;

  public function client()
  {
  // resolution transaction dans client controller mettre id_adresse a la place de id_clientt cf phpmyadmin
  return $this->hasOne('App\Client', 'id_adresse');
  }
}
