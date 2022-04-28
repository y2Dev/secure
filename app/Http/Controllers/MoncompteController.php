<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class MoncompteController extends Controller
{
    //Point d'entrée de ma class
    public function __construct(){
        
        //Sécurise toutes les pages de mon controleur
        // $this->middleware("auth") ;
        //  $this->middleware("auth")->except("panier") ;
    }

    public function index(){

        return view ("moncompte") ;
    }

    public function panier(){

        return view ("panier") ;
    }
}

