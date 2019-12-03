<?php

namespace App\Http\Controllers;

use App\Adresse;
use App\Client;
use App\Contact;
use App\Http\Resources\AdresseRessource;
use App\Http\Resources\ClientRessource;
use App\Http\Resources\ContactRessource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $clients = Client::with(['adresse', 'contacts'])->get();
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
            'nom' => 'required',


            'nometp' => 'required',
            'prenom' => 'required',
            'tel' => 'required',
            'mail' => 'required',
            'poste' => 'required'

        ], ['required' => 'l\'attribut :attribute est requis'])->validate();

        // //mon tableau de donne pour rajouter ds la dbb ds adrsse
        $adr = [
            'adresse' => $array['adresse'],
            'code_postal' => $array['code_postal'],
            'ville' => $array['ville'],

        ];
        // //mon tableau de donne pour rajouter ds la dbb ds client
        $cli = [
            'nom' =>  $array['nom'],
            

    
        ];
        // //mon tableau de donne pour rajouter ds la dbb ds contact 
        $con = [
            'nom' =>  $array['nometp'],
            'prenom' =>  $array['prenom'],
            'tel' =>  $array['tel'],
            'email' =>  $array['mail'],
            'poste' =>  $array['poste'],

        ];

        DB::transaction(function () use ($adr, $cli, $con) {

            $adresse = Adresse::create($adr);
            $client = $adresse->client()->create($cli);
            $contact = $client->contacts()->create( $con);
        });

        return $cli;
        //  return $array['nom'];
        //  return json_encode($array);
    }
}
