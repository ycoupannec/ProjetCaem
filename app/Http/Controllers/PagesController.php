<?php

namespace App\Http\Controllers;

use App\Models\Types_activity;
	
class PagesController extends Controller
{
    



public function index()
{
	return view('index');
}

	
public function course()
{
	$activities = Types_activity::with('activities')->get();
//	 print_r($activities);
	// exit;
	return view('course', ['activities' => $activities]);
}
	

public function prices()
{
	return view('prices');
}

public function events()
{
	return view('events');
}

public function team()
{
	return view('team');
}

public function association()
{
	return view('association');
}

public function credits()
{
	return view('credits');
}

public function legacy_mention()
{
	return view('legacy_mention');
}

public function contact()
{
	return view('contact');
}

public function header()
{
	return view('header');
}

public function footer()
{
	return view('footer');
}

public function head()
{
	return view('head');
}

}
