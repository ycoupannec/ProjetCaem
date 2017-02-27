<?php

namespace App\Http\Controllers;
use \App\Models\Article;

class PagesController extends Controller
{




public function index()
{
  // $typeActualities['Actualités'] = \App\Models\Article::news(); // get news
  $typeActualities['Actualités'] = \App\Models\Article::news(); // get news
  foreach ($typeActualities['Actualités'] as $actuality) {
    $typeActualities['Actualités']->formatDate = Article::carbon($actuality->date);
  }

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
  // $typeActualities['A venir'] = \App\Models\Article::news(); // get news
  // $typeActualities['Actualités'] = \App\Models\Article::coming(); // get news


  $typeActualities['Evenements proche'] = Article::actualities()->get();
  foreach ($typeActualities['Evenements proche'] as $actuality) {
    $typeActualities['Evenements proche']->formatDate = Article::carbon($actuality->date);
  }

  $typeActualities['Evenements à venir'] = Article::futureActualities()->get();
  foreach ($typeActualities['Evenements à venir'] as $actuality) {
    $typeActualities['Evenements à venir']->formatDate = Article::carbon($actuality->date);
  }

  $typeActualities['Evenements passés'] = Article::oldActualities()->get();
  foreach ($typeActualities['Evenements passés'] as $actuality) {
    $typeActualities['Evenements passés']->formatDate = Article::carbon($actuality->date);
  }

	return view('pages.events',compact(['typeActualities']));
}

public function event($id){
  $event = Article::find($id);
  $event->formatDate = Article::carbon($event->date);
  return view('pages.event',compact(['event']));
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
