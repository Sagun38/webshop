<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */

    // POUR LA PAGE HOME
    public function index()
    {
        return view('home');
    }
}
