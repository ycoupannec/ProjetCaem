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
    	$dataExtract = "";    				
        if(!empty($data)){
        	
        		if ($data['type']=="1"){
        			// -------------------------------------------------
        			// Cas affichage membres
        			// -------------------------------------------------
        			
        		}else{
        			// -------------------------------------------------
        			// Cas affichage activitées
        			// -------------------------------------------------
        			
        		}
        	$dataExtract = DB::table( 'activities')
	        ->select(
	        	'activities.id as act_id',
	        	'activities.name as act_name',
	        	'activities.created_at as act_created_at',
	        	'activities.updated_at as act_updated_at',
	        	'activities.description as act_description',
	        	'activities.day as act_day',
	        	'activities.hour_start as act_hour_start',
	        	'activities.hour_end as act_hour_end',
	        	'activities.year as act_year',
	        	'activities.status as act_status',
	        	DB::raw('Teacher.id as peo_id'),
	        	// 'people.name as peo_name',
	        	DB::raw('Teacher.family_name as peo_family_name'),
	        	DB::raw('Teacher.birthday as peo_birthday'),
	        	DB::raw('Teacher.observation as peo_observation'),
	        	DB::raw('Teacher.city_id as peo_city_id'),
	        	DB::raw('Teacher.district_id as peo_district_id'),
	        	DB::raw('Teacher.created_at as peo_created_at'),
	        	DB::raw('Teacher.updated_at as peo_updated_at'),
	        	DB::raw('Teacher.code_analytique as peo_code_analytique'),
	        	DB::raw('Teacher.image_right as peo_image_right'),
	        	DB::raw('Teacher.picture as peo_picture'),
	        	DB::raw('Teacher.status as peo_status'),
	        	DB::raw('Teacher.city_id as peo_city_id'),
	        	DB::raw('Teacher.city_id as peo_city_id'),
	        	DB::raw('Teacher.name as peo_name'), 
	        	DB::raw('Member.name as mem_name'),
	        	DB::raw('Member.id as mem_id'),
	        	// 'people.name as peo_name',
	        	DB::raw('Member.family_name as mem_family_name'),
	        	DB::raw('Member.birthday as mem_birthday'),
	        	DB::raw('Member.observation as mem_observation'),
	        	DB::raw('Member.city_id as mem_city_id'),
	        	DB::raw('Member.district_id as mem_district_id'),
	        	DB::raw('Member.created_at as mem_created_at'),
	        	DB::raw('Member.updated_at as mem_updated_at'),
	        	DB::raw('Member.code_analytique as mem_code_analytique'),
	        	DB::raw('Member.image_right as mem_image_right'),
	        	DB::raw('Member.picture as mem_picture'),
	        	DB::raw('Member.status as mem_status'),
	        	DB::raw('Member.city_id as mem_city_id'),
	        	DB::raw('Member.city_id as mem_city_id'),
	        	DB::raw('instruments.name as ins_name'),
	        	'types_activities.name as typ_name',
	        	DB::raw('teachers_activities.*'),
	        	DB::raw('activity_instruments.*'))
	        ->join('teachers_activities', 'teachers_activities.activity_id','activities.id')
	        ->join('member_activities', 'member_activities.activity_id','activities.id')
	        ->join('people as Teacher', 'Teacher.id', 'teachers_activities.person_id')
	        ->join('people as Member', 'Member.id', 'member_activities.person_id')
	        ->join('activity_instruments','activity_instruments.activity_id','activities.id')
	        ->join('instruments','instruments.id','activity_instruments.instrument_id')
	        ->join('types_activities','types_activities.id', 'activities.type_activity_id');

        	
        	if (!empty($data['agemin'])){
        		// print_r($data['agemin']);
        		$dmin = Carbon::now();
        		$dmin = $dmin->subYears($data['agemin']);
        		
        		$dataExtract = $dataExtract->where('Member.birthday', '>', $dmin);
        	}
        	if (!empty($data['agemax'])){
        		$dmax = Carbon::now();
        		$dmax = $dmax->subYears($data['agemax']);
        		
        		$dataExtract = $dataExtract->where('Member.birthday', '<', $dmax);	
        		
        	}
        	if (!empty($data['districts'])){
        		$dataExtract = $dataExtract->where('Member.district_id', '=', $data['districts']);	
        	}
        	if (!empty($data['sday'])){
        		$dataExtract = $dataExtract->where('activities.year', '>', $data['sday']);	
        	}
        	if (!empty($data['eday'])){
        		$dataExtract = $dataExtract->where('activities.year', '<', $data['eday']);	
        	}
        	if (!empty($data['teachers'])){
        		$dataExtract = $dataExtract
        		 
        		 ->where('Teacher.id', '=',$data['teachers'] );
        	}
        	if (!empty($data['instruments'])){
        		$dataExtract = $dataExtract->where('activity_instruments.instrument_id', '=', $data['instruments']);
        	}
        	if (!empty($data['activities'])){
        		$dataExtract = $dataExtract->where('activities.id', '=', $data['activities']);
        	}
        	if (!empty($data['days'])){
        		$dataExtract = $dataExtract->where('activities.day', '=', $data['days']);
        	}
	       



			//DB::connection()->enableQueryLog();
	        // $dataExtract = $dataExtract->skip(10)->take(5)->get();
	        $dataExtract = $dataExtract
	        
	        
	        	->orderBy('act_year','desc')->orderBy('act_updated_at','desc')->get();
	        	// 
	        	// dd($dataExtract);
	        // print_r($dataExtract);

	        // $nbMembre = DB::table( 'member_activities')->where('member_activities.activity_id', '=',$dataExtract['act_id'] )->count();
	        // print_r($nbMembre);
	        // dd($dataExtract);
	        foreach ($dataExtract as $key => $value) {
	        	# code...
	        	$nbMembre = DB::table( 'member_activities')->where('member_activities.activity_id', '=',$value->act_id )->count();
	        	$dataExtract[$key]->nbMembre = $nbMembre;
	        	// exit;
	        }
	        				
			//dd(DB::getQueryLog());

			 // $entitiesArray = $this->entities->toArray();
	        $GLOBALS['dataExtract'] = $dataExtract;
	        //dd($dataExtract);
			        	
	        try{

	        	Excel::create('activities',function($excel){
	        		$excel->sheet('activities', function($sheet){
	        			$sheet->loadView('admin/export_activities', ["dataExtract" => $GLOBALS['dataExtract']]);
	        		});
	        	})->export('xlsx');
	        }
	        catch(Exception $e){
	        	if (getenv('APP_ENV') !== 'testing'){
	        		throw $e;
	        	}
	        }

			   
        }




		return view('admin/extract',["usersActif" => $usersActif, "districts" => $districts, 'instruments' => $instruments, "activities" => $activities, "dataExtract" => $dataExtract ]); 

	}

    // public function getbirthday($years = 0){
    // 	$born = Carbon::now();
    //     return $born->subYears($years);
    // }

    public function allData(){
    	 $data = $request->all();
    	$dataExtract = "";    				
        if(!empty($data)){
	        $dataExtract = DB::table( 'activities')
	        ->select(
	        	'activities.id as act_id',
	        	'activities.name as act_name',
	        	'activities.created_at as act_created_at',
	        	'activities.updated_at as act_updated_at',
	        	'activities.description as act_description',
	        	'activities.day as act_day',
	        	'activities.hour_start as act_hour_start',
	        	'activities.hour_end as act_hour_end',
	        	'activities.year as act_year',
	        	'activities.status as act_status',
	        	DB::raw('Teacher.id as peo_id'),
	        	// 'people.name as peo_name',
	        	DB::raw('Teacher.family_name as peo_family_name'),
	        	DB::raw('Teacher.birthday as peo_birthday'),
	        	DB::raw('Teacher.observation as peo_observation'),
	        	DB::raw('Teacher.city_id as peo_city_id'),
	        	DB::raw('Teacher.district_id as peo_district_id'),
	        	DB::raw('Teacher.created_at as peo_created_at'),
	        	DB::raw('Teacher.updated_at as peo_updated_at'),
	        	DB::raw('Teacher.code_analytique as peo_code_analytique'),
	        	DB::raw('Teacher.image_right as peo_image_right'),
	        	DB::raw('Teacher.picture as peo_picture'),
	        	DB::raw('Teacher.status as peo_status'),
	        	DB::raw('Teacher.city_id as peo_city_id'),
	        	DB::raw('Teacher.city_id as peo_city_id'),
	        	DB::raw('Teacher.name as peo_name'), 
	        	DB::raw('Member.name as mem_name'),
	        	DB::raw('Member.id as mem_id'),
	        	// 'people.name as peo_name',
	        	DB::raw('Member.family_name as mem_family_name'),
	        	DB::raw('Member.birthday as mem_birthday'),
	        	DB::raw('Member.observation as mem_observation'),
	        	DB::raw('Member.city_id as mem_city_id'),
	        	DB::raw('Member.district_id as mem_district_id'),
	        	DB::raw('Member.created_at as mem_created_at'),
	        	DB::raw('Member.updated_at as mem_updated_at'),
	        	DB::raw('Member.code_analytique as mem_code_analytique'),
	        	DB::raw('Member.image_right as mem_image_right'),
	        	DB::raw('Member.picture as mem_picture'),
	        	DB::raw('Member.status as mem_status'),
	        	DB::raw('Member.city_id as mem_city_id'),
	        	DB::raw('Member.city_id as mem_city_id'),
	        	'types_activities.name as typ_name',
	        	DB::raw('teachers_activities.*'),
	        	DB::raw('activity_instruments.*'))
	        ->join('teachers_activities', 'teachers_activities.activity_id','activities.id')
	        ->join('member_activities', 'member_activities.activity_id','activities.id')
	        ->join('people as Teacher', 'Teacher.id', 'teachers_activities.person_id')
	        ->join('people as Member', 'Member.id', 'member_activities.person_id')
	        ->join('activity_instruments','activity_instruments.activity_id','activities.id')
	        ->join('types_activities','types_activities.id', 'activities.type_activity_id');

        	
        	if (!empty($data['agemin'])){
        		// print_r($data['agemin']);
        		$dmin = Carbon::now();
        		$dmin = $dmin->subYears($data['agemin']);
        		
        		$dataExtract = $dataExtract->where('Member.birthday', '>', $dmin);
        	}
        	if (!empty($data['agemax'])){
        		$dmax = Carbon::now();
        		$dmax = $dmax->subYears($data['agemax']);
        		
        		$dataExtract = $dataExtract->where('Member.birthday', '<', $dmax);	
        		
        	}
        	if (!empty($data['districts'])){
        		$dataExtract = $dataExtract->where('Member.district_id', '=', $data['districts']);	
        	}
        	if (!empty($data['sday'])){
        		print_r($data['sday']);
        		$dataExtract = $dataExtract->where('activities.year', '>', $data['sday']);	
        	}
        	if (!empty($data['eday'])){
        		print_r($data['eday']);	
        		$dataExtract = $dataExtract->where('activities.year', '<', $data['eday']);	
        	}
        	if (!empty($data['teachers'])){
        		print_r($data['teachers']);	
        		$dataExtract = $dataExtract
        		 
        		 ->where('people.id', '=',$data['teachers'] );
        	}
        	if (!empty($data['instruments'])){
        		print_r($data['instruments']);	
        		$dataExtract = $dataExtract->where('activity_instruments.instrument_id', '=', $data['instruments']);
        	}
        	if (!empty($data['activities'])){
        		print_r($data['activities']);	
        		$dataExtract = $dataExtract->where('activities.id', '=', $data['activities']);
        	}
        	if (!empty($data['days'])){
        		print_r($data['days']);	
        		$dataExtract = $dataExtract->where('activities.day', '=', $data['days']);
        	}

			//DB::connection()->enableQueryLog();
	        // $dataExtract = $dataExtract->skip(10)->take(5)->get();
	        $dataExtract = $dataExtract
	        
	        
	        	->orderBy('act_year','desc')->orderBy('act_updated_at','desc')->get();
	        	// 
	        	// dd($dataExtract);
	        // print_r($dataExtract);

	        // $nbMembre = DB::table( 'member_activities')->where('member_activities.activity_id', '=',$dataExtract['act_id'] )->count();
	        // print_r($nbMembre);
	        // dd($dataExtract);
	        foreach ($dataExtract as $key => $value) {
	        	# code...
	        	$nbMembre = DB::table( 'member_activities')->where('member_activities.activity_id', '=',$value->act_id )->count();
	        	echo "</br>";
	        	print_r($nbMembre);
	        	$dataExtract[$key]->nbMembre = $nbMembre;
	        	// exit;
	        }
	        				
			//dd(DB::getQueryLog());

			 // $entitiesArray = $this->entities->toArray();
	        $GLOBALS['dataExtract'] = $dataExtract;
	        //dd($dataExtract);
			        	
	        // try{

	        // 	Excel::create('activities',function($excel){
	        // 		$excel->sheet('activities', function($sheet){
	        // 			$sheet->loadView('admin/export_activities', ["dataExtract" => $GLOBALS['dataExtract']]);
	        // 		});
	        // 	})->export('xlsx');
	        // }
	        // catch(Exception $e){
	        // 	if (getenv('APP_ENV') !== 'testing'){
	        // 		throw $e;
	        // 	}
	        // }

			   
        }
    }



}
