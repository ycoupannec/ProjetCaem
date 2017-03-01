<!--CALLING THE DEFAULT LAYOUT-->
@extends('layouts.default')
<!------------------------------>



<!--HEAD TITLE :-->
@section('pageTitle')
CAEM - Mon parcours musical
@endsection
<!---------------->

<!--  OG & TT CARD-->
@section('ogtags')
    @include('includes.og_tags', ['title' => 'CAEM Besançon École de musique - Équipe'])
		{{-- you can precise title, type, url, image, description--}}
@stop
<!---------------->

<!--MAIN CONTENT :-->
@section('pageContent')
<main class="container mainEquipe">


	<section class="col-md-12">
		<h2>Intervenants</h2>
		@foreach($professeurs as $professeur)
		<div class="col-md-3">
			<div>
				@if($professeur->picture != null)
				<img src="uploads/{{ $professeur->picture }}">
				@else
				<img src="uploads/photo_team/placeholder.png">
				@endif
				<h3>{{ $professeur->firstname }} {{ $professeur->name }}</h3>
				<p>{{ $professeur->instrument }}</p>
			</div>
		</div>
		@endforeach
	</section>


	<section class="col-md-12">
		<h2>Salariés administration</h2>
		@foreach($bureaux as $bureau)
		<div class="col-md-3">
			<div>
				@if($bureau->picture != null)
				<img src="uploads/{{ $bureau->picture }}">
				@else
				<img src="uploads/photo_team/placeholder.png">
				@endif
				<h3>{{ $bureau->firstname }} {{ $bureau->name }}</h3>
				<p>{{ $bureau->instrument }}</p>
			</div>
		</div>
		@endforeach
	</section>


	<section class="col-md-12">
		<h2>Conseil d'Administration</h2>
		@foreach($administrations as $administration)
		<div class="col-md-3">
			<div>
				@if($administration->picture != null)
				<img src="uploads/{{ $administration->picture }}">
				@else
				<img src="uploads/photo_team/placeholder.png">
				@endif
				<h3>{{ $administration->firstname }} {{ $administration->name }}</h3>
				<p>{{ $administration->instrument }}</p>
			</div>
		</div>
		@endforeach
	</section>


	<section class="col-md-12">
		<h2>Autres membres</h2>
		@foreach($autres as $autre)
		<p>{{ $autre->firstname }} {{ $autre->name }}</p>
		@endforeach
	</section>


</main>
@endsection
<!------------------>
