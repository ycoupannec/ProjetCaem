<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Activity extends Model
{
    use CrudTrait;

     /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

    // protected $table = 'activities';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
       protected $fillable = [
        'name',
        'type_activity_id',
        'day',
        'description',
        'status',
        'hour_start',
        'hour_end',
        'year',
    ];
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
    public function type_activity(){
        return $this->belongsTo('App\Models\Types_activity');
    }

    public function member_activities()
    {
        return $this->belongsToMany('App\Models\Person', 'member_activities','activity_id','person_id');
        // return $this->belongsToMany('App\Models\Person');
    }

    public function teachers_activities()
    {
        return $this->belongsToMany('App\Models\Person', 'teachers_activities','activity_id','person_id');
        // return $this->belongsToMany('App\Models\Person');
    }

     public function instruments()
    {
        return $this->belongsToMany('App\Models\Instrument', 'activity_instruments','activity_id','instrument_id');
        // return $this->belongsToMany('App\Models\Person');
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
