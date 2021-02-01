<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    //
    public function Professeurs() 
    {  
        return $this->hasMany(Professeurs::class); 
    }
    
    


     public function Matières()

    {
        return $this->hasMany(Matières::class); 


 }
    }

