<?php

namespace App\Http\Controllers\Admin;

use Backpack\Base\app\Http\Controllers\AdminController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Excel;
class ExtractController extends AdminController {

	public function index(Request $request) {




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

        $data = $request->all();
        $dataExtract = DB::table( 'activities')
        				->Join('teachers_activities','activities.id', 'teachers_activities.activity_id')
        				->Join('people','teachers_activities.person_id', 'people.id')
        				->Join('activity_instruments','activities.id', 'activity_instruments.activity_id')
        				;
        				
        if(!empty($data)){
        	if (!empty($data['sday'])){
        		print_r($data['sday']);
        		$dataExtract = $dataExtract->where('activities.year', '>', $data['sday']);	
        	}
        	if (!empty($data['eday'])){
        		print_r($data['eday']);	
        		$dataExtract = $dataExtract->where('activities.year', '<', $data['eday']);	
        	}
        	if (!empty($data['agemin'])){
        		// print_r($data['agemin']);
        		$dmin = Carbon::now();
        		$dmin = $dmin->subYears($data['agemin']);
        		
        		$dataExtract = $dataExtract->where('people.birthday', '>', $dmin);
        	}
        	if (!empty($data['agemax'])){
        		$dmax = Carbon::now();
        		$dmax = $dmax->subYears($data['agemax']);
        		
        		$dataExtract = $dataExtract->where('people.birthday', '<', $dmax);	
        		
        	}
        	if (!empty($data['teachers'])){
        		print_r($data['teachers']);	
        		$dataExtract = $dataExtract
        		 
        		 ->where('people.id', '=',$data['teachers'] );
        	}
        	if (!empty($data['districts'])){
        		$dataExtract = $dataExtract->where('people.district_id', '=', $data['districts']);	
        	}
        	if (!empty($data['instruments'])){
        		print_r($data['instruments']);	
        		$dataExtract = $dataExtract->where('activity_instruments.instrument_id', '=', $data['instruments']);
        	}
        	if (!empty($data['activities'])){
        		print_r($data['activities']);	
        		$dataExtract = $dataExtract->where('activities.id', '=', $data['activities']);
        	}

        }
		DB::connection()->enableQueryLog();
        // $dataExtract = $dataExtract->skip(10)->take(5)->get();
        $dataExtract = $dataExtract
        ->select(
        	'activities.id as act_id',
        	'activities.name as act_name',
        	'activities.created_at as act_created_at',
        	'activities.updated_at as act_updated_at',
        	'activities.description as act_description',
        	'activities.day as act_day',
        	'activities.hour_start as act_hour_start',
        	'activities.year as act_year',
        	'activities.status as act_status',
        	'people.id as peo_id',
        	'people.name as peo_name',
        	'people.family_name as peo_family_name',
        	'people.birthday as peo_birthday',
        	'people.observation as peo_observation',
        	'people.city_id as peo_city_id',
        	'people.district_id as peo_district_id',
        	'people.created_at as peo_created_at',
        	'people.updated_at as peo_updated_at',
        	'people.code_analytique as peo_code_analytique',
        	'people.image_right as peo_image_right',
        	'people.picture as peo_picture',
        	'people.status as peo_status',
        	'people.city_id as peo_city_id',
        	'people.city_id as peo_city_id',
        	'teachers_activities.*',
        	'activity_instruments.*' )
        	->get();
        // print_r($dataExtract);
        // dd($dataExtract);
        // foreach ($dataExtract as $key => $value) {
        // 	# code...
        // 	print_r($value);
        // 	// exit;
        // }
        				
		//dd(DB::getQueryLog());

 // $entitiesArray = $this->entities->toArray();
        	// Excel::create('activities',function($excel){
        	// 	$excel->sheet('activities', function($sheet){
        	// 		$sheet->loadView('export_activities');
        	// 	});
        	// })->export('xlsx');

   




		return view('admin/extract',["usersActif" => $usersActif, "districts" => $districts, 'instruments' => $instruments, "activities" => $activities, "dataExtract" => $dataExtract ]); 

	}

    // public function getbirthday($years = 0){
    // 	$born = Carbon::now();
    //     return $born->subYears($years);
    // }



}
