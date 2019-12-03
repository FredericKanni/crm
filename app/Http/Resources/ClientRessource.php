<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {


        //on fait appelle a AdresseRessource this->adresse  ça renvoie 1 0 2 etc
        //whenloaded c est qd on charge l adresse alors fait ça sinon renvoie null 
        //'adresse' ici appelle la fct adresse qui et ds le model Client
        $adresse = new AdresseRessource($this->whenLoaded('adresse'));

        //on utlisise collection parce qu il y a plusieurs 
        $contact = ContactRessource::collection($this->whenLoaded('contacts'));



        return [
            'id' => $this->id,
            'nom' => $this->nom,
            // 'id_adresse' => $this->id_adresse,
            //return une adresse  appelle la variable adresse
            //  'adresse' => $adresse,
            // dans le deuxieme adresse il a y une cle qui s appelle adresse comme id par ex pour le recup on use ->adresse ou ->id 
            'adresse' => $adresse->adresse,
            'contacts' => $contact,
        ];

        //  return parent::toArray($request);
    }
}
