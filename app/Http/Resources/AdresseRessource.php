<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdresseRessource extends JsonResource
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
            'adresse' => $this->adresse,
            'code_postal' => $this->code_postal,
            
            'ville' =>$this->ville,
            //'id_client' => $this->id_client,
            
        ];

      //  return parent::toArray($request);
    }
}
