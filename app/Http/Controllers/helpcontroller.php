<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helpcontroller extends Controller
{
    //
    public function help(){
    $last_name = [ 'mike','dorcas','elisé','BARRY'];
        return view ('pages.help',compact('last_name'));
    return view ('pages.help');
    } 
}
