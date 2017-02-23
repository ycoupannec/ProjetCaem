<?php

namespace App\Http\Controllers\Admin;

use Backpack\Base\app\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ExtractController extends AdminController {

	public function index() {




        $usersActif = DB::table('people')
        					->join('teachers_activities','people.id','=','teachers_activities.person_id')
        					->select('people.*')
                            ->get();   

        $districts = DB::table('districts')
					        ->get(); 
		
		$instruments = DB::table('instruments')
        ->get(); 

        $activities = DB::table('activities')
        ->get(); 
		

		return view('admin/extract',["usersActif" => $usersActif, "districts" => $districts, 'instruments' => $instruments, "activities" => $activities]); 

	}

	 public function extract(Request $request)
    {
        $name = $request->all();
        print_r($name);
        print_r("toto");
        //
    }



}
