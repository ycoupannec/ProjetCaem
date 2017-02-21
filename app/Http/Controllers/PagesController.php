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
	$typeActivities = Types_activity::with('activities')->get();

	return view('pages.course', ['typeActivities' => $typeActivities]);
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
