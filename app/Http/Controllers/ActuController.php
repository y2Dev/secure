<?php

namespace App\Http\Controllers;

use App\Models\Actus;
use App\Models\Semaine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActuController extends Controller
{
    //
    public function index(){

        $actuList = Actus::all() ;

        return view ("admin.actu-lister", compact("actuList")) ;
    }

    public function editer(Actus $actu){
        $semaines = Semaine::all() ;

    
        
        return view ("admin.actu-editer", compact("actu","semaines")) ;
    }

            /* Création d'une actu */
    public function create(Request $request){
        // dd($actu) ;
        
        $validate = $request->validate(

            ["titre"=>"required"]
            ) ;

            $saveActu = new Actus ;
            $saveActu->titre = $request->titre ;
            $saveActu->description = $request->description ;
            $saveActu->semaine_id = $request->semaine_id ;
    
            

        // dd($request) ;

        /* Je vérifie l'existence de mon image */
        if ($request->hasFile('imageActu')) {
            # code...
            /* Je récupère les informations de mon image dans mon formulaire */
            $image = $request->file("imageActu") ;

            // dd($image) ;

            /* Formatage de mon image */
            $fileName = time().".".$image->getClientOriginalExtension() ;

            // dd($fileName) ;

            /* Copie de l'image sur le serveur */
            // Image::make("$image")->save(storage_path("/upload".$fileName)) ;

            $path = Storage::putFile('public', $request->file('imageActu')) ;
            $saveActu->image=$path ;

            // dd($path) ;
        }
         ;

        
         $saveActu->save() ;


        


        return back() ;
    }

    public function update(Request $request, Actus $actu){

        $validate = $request->validate(
            ["titre"=>"required"]
        ) ;
            /*   On met à jour les informations */
            $actu->update(["titre" => $request->titre, "semaine_id" => $request->semaine_id, "description" => $request->description ]) ;
            return back() ;
        // dd ($actu) ;
    }

    public function delete(Actus $actu){

        $actu->delete() ;

        return back() ;

    }
}
