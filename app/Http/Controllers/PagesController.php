<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    



public function index()
{
	return view('pages.index');
}

public function course()
{

	$typeActivities = \App\Models\Types_activity::with('activities_web')->get();
/*	 print_r($typeActivities);
	 exit;*/
	return view('pages.course', ['typeActivities' => $typeActivities]);

}

public function prices()
{

	$priceActivities = \App\Models\Types_activity::with('activities_web')->get();
/*	 print_r($priceActivities);
	 exit;*/
	return view('pages.prices', ['priceActivities' => $priceActivities]);
}

public function events()
{
	return view('pages.events');
}

public function team()
{
	$professeurs= \App\Models\Team::where('type', 'Professeur' )->get();
	$bureaux= \App\Models\Team::where('type', 'Bureau' )->get();
	$administrations= \App\Models\Team::where('type', 'Administration' )->get();
	$autres= \App\Models\Team::where('type', 'Autre' )->get();

	return view('pages.team', ['professeurs' => $professeurs, 'bureaux' => $bureaux, 'administrations' => $administrations, 'autres' => $autres]);
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
