<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{




public function index()
{
  $typeActualities['Actualités'] = \App\Models\Article::news(); // get news
  $typeActualities['A venir'] = \App\Models\Article::coming(); // get news

	return view('pages.index',compact(['typeActualities']));
}

public function course()
{

	$typeActivities = \App\Models\Types_activity::with('activities')->get();
	// print_r($activities);
	// exit;
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
