<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Carbon\Carbon;

class Person extends Model
{
    use CrudTrait;

     /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

    //protected $table = 'persons';
    //protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
     protected $fillable = ['gender','name', 'family_name', 'mail', 'tel_fix', 'tel_mob', 'postal_code', 'adress', 'birthday', 'observation','code_analytique','image_right', 'city_id', 'district_id', 'familly_id'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
	|--------------------------------------------------------------------------
	| FUNCTIONS
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	*/


	public function city(){
        return $this->belongsTo('App\Models\City');
    }

    public function district(){
        return $this->belongsTo('App\Models\District');
    }

    public function familly(){
        return $this->belongsTo('App\Models\Familly');
    }



    public function people_people()
    {
        return $this->belongsToMany('App\Models\Person', 'person_people','person_id','people_link_id');
        // return $this->belongsToMany('App\Models\Person');
    }

    public function type_people()
    {
        return $this->belongsToMany('App\Models\Type_person', 'people_types_people','person_id','type_person_id');
        // return $this->belongsToMany('App\Models\Person');
    }


    public function membership(){

        return $this->belongsTo('App\Models\Membership');
    }



	public function getFullNameAttribute() {
   		return $this->family_name.' '.$this->name;
}

    
    public function people_instruments()
    {
        return $this->belongsToMany('App\Models\Instrument', 'people_instruments','person_id','instrument_id');
        // return $this->belongsToMany('App\Models\Person');
    }

    public function getyearsold(){
        $Born = Carbon::parse($this->birthday);
        $Age = $Born->diff(Carbon::now())->format('%y');
        return $Age;
    }

    /*
	|--------------------------------------------------------------------------
	| SCOPES
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| ACCESORS
	|--------------------------------------------------------------------------
	*/

    /*
	|--------------------------------------------------------------------------
	| MUTATORS
	|--------------------------------------------------------------------------
	*/
}