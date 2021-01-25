<?php

namespace App\Http\Controllers;
use App\information;
use Illuminate\Http\Request;

class informationController extends Controller
{
     /**
     * Nom information = §request[$nom]
     */
    public function inform(Request $request)
    {
        
        $information= new information();
        $information->Nom = $request['nom'];
        $information->Prenom= $request['prenom'];
        $information->Age = $request['age'];
        $information->Sexe = $request['sexe'];
        $information->save();   
}
public function updateinform(Request $request){
    //find the element 
   $information =information::where('nom',$request['recherche'])->first(); 
   if ($information != null) {
        $information->Nom = $request['nom'];
        $information->Prenom= $request['prenom'];
        $information->Age = $request['age'];
        $information->Sexe = $request['sexe'];
        $information->save(); 
        return response()->json([
            'Succes'=> true,
            'information'=> $information,
            'message'=>'existant'
        ],201);
   } else {
        return response()->json([
            'Succes'=> false,
            'message'=>'inexistant'

        ],401);  
   }
}
public function supprimer(Request $request){
       $information= information:: find($request['id']);
       $information->delete();        

}
}
