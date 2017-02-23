<?php

namespace App\Http\Controllers\Admin;

use Backpack\Base\app\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;

class ExtractController extends AdminController {

	public function index() {


		 $usersActif = DB::table('people')
<<<<<<< HEAD
                            ->where('status', 'Actif')
                            ->get();
		print_r($usersActif);

		return view('admin/extract',$usersActif);
=======
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
>>>>>>> bb658f969e1bad3d6c88e8512ecdfdf4d86e8113

	}


}
