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

        return [
            'id' =>$this->id,
            'nom' => $this->nom,
            'id_adresse' => $this->id_adresse,
           
        ];

      //  return parent::toArray($request);
    }
}
