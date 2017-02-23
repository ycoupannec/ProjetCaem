<?php

namespace App\Http\Controllers\Admin;

use Backpack\Base\app\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;

class ExtractController extends AdminController {

	public function index() {


		 $usersActif = DB::table('people')
        

                            // ->where('status', 'Actif')
                            ->get();   
        $districts = DB::table('districts')
        ->get(); 
		
		$instruments = DB::table('instruments')
        ->get(); 

        $activities = DB::table('activities')
        ->get(); 
		// foreach ($usersActif as $key => $value) {
		// 	# code...
		// 	print_r($value->name);	
		// }

		return view('admin/extract',["usersActif" => $usersActif, "districts" => $districts, 'instruments' => $instruments, "activities" => $activities]); 

	}


}
