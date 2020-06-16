<?php

namespace App\Http\Controllers;

use App\Utente;

use Illuminate\Http\Request;

class UtenteController extends Controller
{
    public function index(){

      $utenti = Utente::all();

      // dd($utenti);

      return view("home", compact("utenti"));
    }
    public function show_user($id){

      $utente = Utente::findOrFail($id);
      // $utenti = Utente::all();
      //
      // $utente = $utenti -> where("id", $id);
      // dd($utente);
      // $utente = $utente[];
      return view("stampa_utente", compact("utente"));

    }
}
