<?php

namespace App\Http\Controllers;

use App\Models\Types_activity;
	
class PagesController extends Controller
{
    



public function index()
{
	return view('pages.index');
}

	
public function course()
{
	$activities = Types_activity::with('activities')->get();
//	 print_r($activities);
	// exit;
	return view('pages.course', ['activities' => $activities]);


/*What do I need:
SIDEBAR:

- Activity name where activity type is [Instruments, Ateliers, Activités];

MAIN CONTENT:

- Block activities ( activities -> Name, Activities -> Description, Activities -> When, Activities -> Teacher, Activities -> Tarifs, Activities -> Images)


*/
}
	

public function prices()
{
	return view('pages.prices');
}

public function events()
{
	return view('pages.events');
}

public function team()
{
	return view('pages.team');
}

public function association()
{
	return view('pages.association');
}

public function credits()
{
	return view('pages.credits');
}

public function legacy_mention()
{
	return view('pages.legacy_mention');
}

public function contact()
{
	return view('pages.contact');
}

}
