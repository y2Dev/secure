<?php

namespace App\Http\Controllers;

use App\Models\Actus;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index(){

        $actuList = Actus::all() ;

        return view ("index-actu", compact("actuList")) ;

    }

    public function detail(Actus $actu){

        return view ("detail-actu") ;

    }
}
