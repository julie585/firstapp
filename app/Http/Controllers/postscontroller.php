<?php

namespace App\Http\Controllers;
use App\Livre;
use App\Etudiant;
use App\Classe;


use Illuminate\Http\Request;

class postscontroller extends Controller
{
    //
    public function show() {
        $primo_name = [ 'mike','dorcas','elisé','BARRY'];
        return view ('pages.ATL')-> with ('primo_name', $primo_name);
       
    }
    public function join(){
        
         $livre= Livre::where('Nom','DORCAS')
            ->select('id')
            ->first(); 
         //dd($livre[0]['Nom']);
         dd
                                                           
          ($livre);
    }
    public function make(){
        $Etudiants= Etudiant::where('Prenom','benonie')->get();         
        dd($Etudiants);
    }
    /**
     * Nom Livre = §request[$nom]
     */
    public function store(Request $request)
    {
        
        $livre= new Livre();
        $livre->Nom = $request['nom'];
        $livre->save();        
    }


    /**
     * Nom Classe = $request[$nom]
     * Prenom Classe = $request[$Prenom]
     * Age Classe = $request[$Age]
     */
    public function up(Request $request)
     {
         $classe= new Classe();
         $classe->Nom = $request['nom'];
         $classe->Prenom = $request['prenom'];
         $classe->Age  = $request['Age'];
         $classe->save();
          return response()->json([
            'Succes'=> true,
            'message'=>'insertion effecuer'
        ],201);
           

    }

    public function update(Request $request){
        //find the element 
       // $livre = Livre::find(3);
       $livre = Livre::where('Nom',$request['FANHO'])->first();       
       $livre->Nom = $request['nom'];
       $livre->save(); 
        dd($livre);
    }

    public function delete(Request $request){
        $livre = Livre::where('Nom',$request['alen'])->first();
       // Livre::destroy(3);
       Livre:: find($request['id']);
       Livre::destroy($request ['id']);
       Livre::destroy($livre->id);
    }
    public function modify(Request $request){
    
        $classe = Classe::where('Nom',$request['cherche'])->first();
        if ($classe != null) { 
        $classe->Nom = $request['nom'];
        $classe->Prenom = $request['prenom'];
        $classe->Age = $request['Age'];
        $classe->save();
       
        return response()->json([
            'Succes'=> true,
            'classe'=> $classe,
            'message'=>'existant'
        ],201);
   } else {
        return response()->json([
            'Succes'=> false,
            'message'=>'inexistant'

        ],401);  
    
    }
}
    public function supprim(Request $request){        
        $classe = classe::where('Nom',$request['search'])->first();
         
        if ($classe != null) {  
           classe::where('Nom',$request['search'])->delete(); 
          
        return response()->json([
            'Succes'=> true,
            'message'=>'la classe à été supprimer avec succès'
        ],201);
   } else {
        return response()->json([
            'Succes'=> false,
            'message'=>'classe non supprimer'

        ],401);
    
    
}
    }

    public function modif(Request $request){
        $Etudiants=Etudiant::where('Nom',$request['search'])->first(); 
        if ($Etudiants != null) { 
        $Etudiants->Nom = $request ['nom'];
        $Etudiants->Prenom = $request ['prenom'];  
        $Etudiants->save();       
        return response()->json([
            'Succes'=> true,
            'Etudiants'=> $Etudiants,
            'message'=>'modification etudiant réussi'
        ],201);
   } else {
        return response()->json([
            'Succes'=> false,
            'message'=>'modification non existant'

        ],401);  
    
    }

    }
    public function supp(Request $request){
        $Etudiants = Etudiant::where('Nom',$request['search'])->first(); 
        if ($Etudiants != null) {  
            $Etudiants->deleted();
          return response()->json([
              'Succes'=> true,
              'message'=>'la classe etudiant à été supprimer avec succès'
          ],201);
     } else {
          return response()->json([
              'Succes'=> false,
              'message'=>'classe etudiant non supprimer'
  
          ],401);  
       
        }
    }
}
//

public function affichage(){
$classe = classe::get();
      if ($classe!=null){

            return response()->json([
            'succes'=>true,
            'classe'=> $classe,
             'message'=>'Affichage correcte'
],201);
    }else{
             return response()->json([
            'succes'=> false,
            'message'=>'Affichage incorrecte'

],401);




}

}
 //
 public function valider(Request $request){
     dd($request);
     $test = $request->name 





 }

}

   
   