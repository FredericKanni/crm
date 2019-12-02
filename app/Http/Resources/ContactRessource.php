<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' =>$this->id,
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            
            'tel' =>$this->tel,
            'mail' => $this->mail,
            'poste' => $this->poste,
            'id_client' => $this->id_client,
        ];

      //  return parent::toArray($request);
    }
}
