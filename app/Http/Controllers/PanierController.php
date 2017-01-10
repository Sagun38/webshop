<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
     // POUR QUE CETTE PAGE SOIS VISIBLE SEULEMENT POUR LES UTILISATEURS CONNECTE 
     public function __construct()
     {
         $this->middleware('auth');
     }
    // POUR LA PAGE PANIER
    public function index()
    {
        return view('panier');
    }
}
