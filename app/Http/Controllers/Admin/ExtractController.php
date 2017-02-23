<?php 

namespace App\Http\Controllers\Admin; 

use Backpack\Base\app\Http\Controllers\AdminController; 
use Illuminate\Support\Facades\DB;

class ExtractController extends AdminController { 

	public function index() { 


		 $usersActif = DB::table('people')
                            ->where('status', 'Actif')
                            ->get();
		print_r($usersActif);

		return view('admin/extract',$usersActif); 

	} 

	
}