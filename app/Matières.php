<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matières extends Model
{
    //
    public function Etudiant()
    {
        return $this->hasMany( Etudiant::class); 
    }
}
