@extends('layouts.default')

<!--HEAD TITLE :-->
@section('pageTitle')
CAEM - Mon parcours musical
@endsection


@section('pageContent')


<!--MAIN CONTENT :-->
<main class="container mainParcoursMusical">


<!--SELECTION COLUMN :-->
	<aside class="col-md-3 col-sm-3 container">
		<section id="sectionInterest">

			<h2>Qu'est-ce qui vous intéresse ?</h2>

			@foreach($typeActivities as $typeActivity)
				<section>

					<h3>{{ $typeActivity->name }}</h3>

					@foreach($typeActivity->activities as $activity)
					<label>
						<p>{{ $activity->name }}</p>
						<input type="checkbox">
					</label>
					@endforeach

				</section>
			@endforeach
		</section>
	</aside>


<!--SELECTED INSTRUMENTS / ACTIVITEES / ATELIERS ZONE:-->
	<div class="col-md-9 col-sm-9">


		<section class="col-md-12">

			<header class="col-md-12">
				<h3>Guitare</h3>
			</header>

			<main class="col-md-12">
				<article>
					I will not have my fwends widiculed by the common soldiewy. Anybody else feel like a little... giggle... when I
					mention my fwiend... Biggus... Dickus? We use only the finest baby frogs, dew picked and flown from Iraq,
					cleansed in finest quality spring water, lightly killed, and then sealed in a succulent Swiss quintuple smooth
					treble cream milk chocolate envelope and lovingly frosted with glucose.
				</article>
			</main>

			<footer class="col-md-12">

				<div class="col-md-4">
					<h4>Quand ?</h4>
					<p>Mercredi 19h-20h30</p>
				</div>

				<div class="col-md-4">
					<h4>Avec qui ?</h4>
					<p>Pierre PERRET</p>
				</div>

				<div class="col-md-4">
					<h4>Tarifs :</h4>
					<p>10€ par mois ou 120€ l’année</p>
				</div>

				<figure class="col-md-12">

					<div class="col-md-6 center-block">
						<img class="col-md-12" src="http://placehold.it/350x150" />
					</div>

					<div class="col-md-6 center-block">
						<img class="col-md-12" src="http://placehold.it/350x150" />
					</div>

				</figure>

			</footer>

		</section>

		<section class="col-md-12">

			<header class="col-md-12">
				<h3>Guitare</h3>
			</header>

			<main class="col-md-12">
				<article>
					I will not have my fwends widiculed by the common soldiewy. Anybody else feel like a little... giggle... when I
					mention my fwiend... Biggus... Dickus? We use only the finest baby frogs, dew picked and flown from Iraq,
					cleansed in finest quality spring water, lightly killed, and then sealed in a succulent Swiss quintuple smooth
					treble cream milk chocolate envelope and lovingly frosted with glucose.
				</article>
			</main>

			<footer class="col-md-12">

				<div class="col-md-4">
					<h4>Quand ?</h4>
					<p>Mercredi 19h-20h30</p>
				</div>

				<div class="col-md-4">
					<h4>Avec qui ?</h4>
					<p>Pierre PERRET</p>
				</div>

				<div class="col-md-4">
					<h4>Tarifs :</h4>
					<p>10€ par mois ou 120€ l’année</p>
				</div>

				<figure class="col-md-12">

					<div class="col-md-6 center-block">
						<img class="col-md-12" src="http://placehold.it/350x150" />
					</div>

					<div class="col-md-6 center-block">
						<img class="col-md-12" src="http://placehold.it/350x150" />
					</div>

				</figure>

			</footer>

		</section>

	</div>


</main>


@endsection
