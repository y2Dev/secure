<?php

namespace App\Http\Controllers;

use App\Models\Actus;
use Illuminate\Http\Request;

class ActuController extends Controller
{
    //
    public function index(){

        return view ("admin.actu-lister") ;
    }

    public function editer(){
        
        return view ("admin.actu-editer") ;
    }


    public function saveInDb(Request $request){

        // dd($request) ;

        /* Je vérifie l'existence de mon image */
        if ($request->hasFile('imageActu')) {
            # code...
            /* Je récupère les informations de mon image dans mon formulaire */
            $image = $request->file("imageActu") ;

            // dd($image) ;

            /* Formatage de mon image */
            $fileName = time().".".$image->getClientOriginalExtension() ;

            dd($fileName) ;

            /* Copie de l'image sur le serveur */
            Image::make("$image")->save(storage_path("/upload".$fileName)) ;
        }
         ;

        

        // $validate = $request->validate(

        //     ["titre"=>"required"]
        //     ) ;

        //     $saveActu = new Actus ;
        //     $saveActu->titre = $request->titre ;
        //     $saveActu->description = $request->description ;
    
        //     $saveActu->save() ;

        return back() ;
    }
}
