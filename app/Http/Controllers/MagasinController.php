<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class MagasinController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */

    // POUR LA PAGE MAGASIN
    public function index()
    {
        $products = Product::all();
        return view('magasin', ['products' => $products]);
    }
}
