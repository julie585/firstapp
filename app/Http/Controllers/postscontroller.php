<?php

namespace App\Http\Controllers;
use App\Livre;

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
        // dd($livre);
    }
}
