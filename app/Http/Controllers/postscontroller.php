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
    
        $classe = Classe::where('Nom',$request['titi'])->first();  
        $classe->Nom = $request['nom'];
        $classe->Prenom = $request['prenom'];
        $classe->Age = $request['Age'];
        $classe->save();
        dd($classe);

    }
    public function supprim(Request $request){
       
    Classe:: find($request['nom']);
    $classe= Classe:: find($request['nom']);
    Classe:: destroy($request['nom']);
        dd($classe);
    }
    public function modif(Request $request){
        $Etudiants=Etudiant:: find($request['id']);
        $Etudiants->Nom = $request ['nom'];
        $Etudiants->Prenom = $request ['prenom'];  
        $Etudiants->save();       
        dd($Etudiants);
    }
    public function supp(Request $request){
       
        Etudiant:: find ($request['id']);
    }
    

}