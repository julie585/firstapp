<?php

namespace App\Http\Controllers;
use App\Etudiants_Matieres;
use App\Matières;
use App\Etudiant;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class EtudMathController extends Controller
{
    //
    public function index1()
    {
        $etud = Etudiant::get();
        $mat = Matières::get();
        return view('Etudiant_Matiere',compact('etud','mat'));



}

public function validerEM (Request $request)
{
    $Etud_Mat= new Etudiants_Matieres();
    $Etud_Mat->etudiants_id = $request['etud'];
    $Etud_Mat->matières_id= $request['mat'];
    $Etud_Mat->save();
    $Etud=DB::table('etudiants__matieres')
            ->join('etudiants','etudiants__matieres.etudiants_id','=','etudiants_id')
            ->join('matières','etudiants__matieres.matières_id','=','matières.id')
            ->select('etudiants.nomEtudiant' ,'etudiants.prenomEtudiant','matières.nomMatière')
            ->get();




                return view ('E_M',compact('Etud'));
  
            }
            public function afficheEM(){
                $Etud=Etudiants_Matieres::get();
                dd($Etud->Matières());
               
                return view ('E_M',compact('Etud'));
            
        }
        

}
