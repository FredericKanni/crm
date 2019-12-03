<?php

namespace App\Http\Controllers;

use App\Adresse;
use App\Client;
use App\Contact;
use App\Http\Resources\AdresseRessource;
use App\Http\Resources\ClientRessource;
use App\Http\Resources\ContactRessource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */





    function all()
    {
        $clients = Client::with(['adresse','contacts'])->get();
        //ca va retourner un array 
       return ClientRessource::collection($clients);

     //  $clients = Client::with(['adresse','contacts'])->get();
    //   return ClientRessource::collection($clients);

    }


    function create(Request $request)
    {
        $array = Validator::make($request->all(), [
            // ATTENTION ds servi state il faut ajouter et completer ces champ dans form data
            //et ds le header remplir un champ X-Csrf-Token ET LE REMPLIR 
            'adresse' => 'required',
            'code_postal' => 'required',
            'ville' => 'required',
            
            
        ], ['required' => 'l\'attribut :attribute est requis'])->validate();

        //ajout en bdd
        $insertionBDD = Adresse::create(
            $array
        )->id;
        $array['id'] = $insertionBDD;

        return $array;
      //  return json_encode($array);
    }


}
