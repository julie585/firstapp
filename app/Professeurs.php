<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professeurs extends Model
{
    //
    public function  Etudiant() 
    {  
        return $this->hasMany( Etudiant::class); 
    }
    }
    


