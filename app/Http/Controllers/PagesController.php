<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    



public function index()
{
	return view('index');
}

public function course()
{

	$activities = \App\Models\Activity::join('types_activities', 'types_activities.id', '=', 'activities.type_activity_id')->get(['types_activities.*','activities.* ']);
	print_r($activities);
	exit;
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



}
