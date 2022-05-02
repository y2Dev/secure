<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){

       $users = User::all() ;

        return view ("admin.user", compact("users")) ;
    }

                /* Management of right users */
    public function manageRight(User $user){

        // $user = User::findorfail($id) ;

       /* 
            La méthode findorfail remplace ce if qui est écrit en PHP pur :

       if(isset($user)){
            echo $user->name ;
        }else {
            
            abort(403) ;
        }
        */

        $user->admin = !$user->admin ;

        /*
            Etant donné que l'on travaille avec des booléen, La nouvelle valeur est la négation de sa précédente valeur :

            if($user->admin == 0){
                $user->admin = 1 ;
            }else{
                $user->admin = 0 ;
            }
        */


        $user->update() ;


        // dd($user) ;

        return back () ;
    }
}
