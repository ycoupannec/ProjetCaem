<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExtractController extends Controller
{
    //
    public function countPerson(){
        
    $usersActif = DB::table('people')
                            ->where('status', 'Actif')
                            ->count();
    
    return $usersActif;
        
    
    }
    
    
    
    
    public function district(){
        $districts = DB::table('districts')->get();
        
       foreach ($districts as $district) {
       
    
   
       
           $person=DB::table('people')
                            ->where('district_id', $district->id)
                           /* ->count();*/
                            ->get();
           
           
           
            $nbrPerson = $person->count();
            $district->nbrPersonne = $nbrPerson;
           
        
      print_r("A ". $district -> name." il y a ".$district -> nbrPersonne. " personnes <br/>");
    
        
}
        
        
        
    }
    
/**/
}