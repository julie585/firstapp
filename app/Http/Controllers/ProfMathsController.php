<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professeurs;
use App\Matières;
use App\Professeurs_Matieres;
use App\Etudiant;
use Illuminate\Support\Facades\DB;

class ProfMathsController extends Controller
{
    //
    public function index()
    {
        $prof = Professeurs::get();
        $mat = Matières::get();
        return view('Prof_Mat',compact('prof','mat'));
    }

    public function validerPM(Request $request)
    {
        $Prof_Mat= new Professeurs_Matieres();
        $Prof_Mat->professeurs_id = $request['prof'];
        $Prof_Mat->matières_id= $request['mat'];
        $Prof_Mat->save();
        $Prof=DB::table('professeurs__matieres')
                ->join('professeurs','professeurs__matieres.professeurs_id','=','professeurs.id')
                ->join('matières','professeurs__matieres.matières_id','=','matières.id')
                ->select('professeurs.nomProfesseurs','professeurs.prenomProfesseurs','matières.nomMatière')
                ->get();
        

          

        
            return view ('P_M',compact('Prof'));
    }
    public function affichePM(){
        $Prof=Professeurs_Matieres::get();
        dd($prof->Matières());
       
        return view ('P_M',compact('Prof'));
    

    }


   public function create()
   {

   $Etud = Etudiant::get();
    
   return view('CreateEtudiant',compact('Etud'));

  }

   public function createM()
   {

   $Mats = Matières::get();
    
  return view('CreateMatiere',compact('Mats'));
    }

    public function createP()
  {
  
        $Profs = Professeurs::get();
   
           return view('CreateProfesseur',compact('Profs'));
  
   }

  
  
}






    



