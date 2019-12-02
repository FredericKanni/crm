<?php

namespace App\Http\Controllers;

use App\Adresse;
use App\Client;
use App\Contact;
use App\Http\Resources\AdresseRessource;
use App\Http\Resources\ClientRessource;
use App\Http\Resources\ContactRessource;
use Illuminate\Http\Request;

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
       return ClientRessource::collection($clients);

     //  $clients = Client::with(['adresse','contacts'])->get();
    //   return ClientRessource::collection($clients);

    }
}
