<?php

namespace App\Http\Controllers;

use App\Models\Actus;
use App\Models\Semaine;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index(){

        $actuList = Actus::all() ;
        $semaines = Semaine::all() ;


        return view ("index-actu", compact("actuList", "semaines")) ;

    }

    public function detail(Actus $actu){

        return view ("detail-actu") ;

    }
}
