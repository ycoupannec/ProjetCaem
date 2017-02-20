<main class="container mainParcoursMusical">


	<aside class="col-md-3 col-sm-3 container">


		<section id="sectionAge">
			<h2>Quel est votre âge ?</h2>

			<label for="age1">
				<p>4 - 6 ans</p>
				<input type="radio" id="age1" name="age" value="option1">
			</label>

			<label for="age2">
				<p>6 - 11 ans</p>
				<input type="radio" id="age2" name="age" value="option2">
			</label>

			<label for="age3">
				<p>11 - 26 ans</p>
				<input type="radio" id="age3" name="age" value="option3">
			</label>

			<label for="age4">
				<p>+ de 26 ans</p>
				<input type="radio" id="age4" name="age" value="option4">
			</label>
		</section>


		<section id="sectionInterest">

			<h2>Qu'est-ce qui vous intéresse ?</h2>

			<section id="sectionInstrument">
				<h3>Instruments :</h3>
				<label for="instrument1">
					<p>Guitare</p>
					<input type="checkbox" id="instrument1" value="option1">
				</label>

				<label for="instrument2">
					<p>Basse</p>
					<input type="checkbox" id="instrument2" value="option2">
				</label>

				<label for="instrument3">
					<p>Batterie</p>
					<input type="checkbox" id="instrument3" value="option3">
				</label>

				<label for="instrument4">
					<p>Percussions</p>
					<input type="checkbox" id="instrument4" value="option4">
				</label>

				<label for="instrument5">
					<p>Piano</p>
					<input type="checkbox" id="instrument5" value="option5">
				</label>

				<label for="instrument6">
					<p>Saxophone</p>
					<input type="checkbox" id="instrument6" value="option6">
				</label>

				<label for="instrument7">
					<p>Chant / Coaching vocal</p>
					<input type="checkbox" id="instrument7" value="option7">
				</label>

				<label for="instrument8">
					<p>Trompette</p>
					<input type="checkbox" id="instrument8" value="option8">
				</label>

				<label for="instrument9">
					<p>Violon</p>
					<input type="checkbox" id="instrument9" value="option9">
				</label>

				<label for="instrument10">
					<p>MAO</p>
					<input type="checkbox" id="instrument10" value="option10">
				</label>
			</section>


			<section id="sectionAtelier">
					<h3>Ateliers :</h3>
					<label for="atelier1">
						<p>Blues</p>
						<input type="checkbox" id="atelier1" value="option1">
					</label>

					<label for="atelier2">
						<p>Jazz</p>
						<input type="checkbox" id="atelier2" value="option2">
					</label>

					<label for="atelier3">
						<p>Rock</p>
						<input type="checkbox" id="atelier3" value="option3">
					</label>

					<label for="atelier4">
						<p>Reggae</p>
						<input type="checkbox" id="atelier4" value="option4">
					</label>

					<label for="atelier5">
						<p>Ensemble accoustique</p>
						<input type="checkbox" id="atelier5" value="option5">
					</label>

					<label for="atelier6">
						<p>Percussions africaines</p>
						<input type="checkbox" id="atelier6" value="option6">
					</label>
			</section>

			<section id="sectionActivite">
					<h3>Activités :</h3>
					<label for="activite1">
						<p>Batucada</p>
						<input type="checkbox" id="activite1" value="option1">
					</label>

					<label for="activite2">
						<p>Chorales</p>
						<input type="checkbox" id="activite2" value="option2">
					</label>

					<label for="activite3">
						<p>Fanfare groove</p>
						<input type="checkbox" id="activite3" value="option3">
					</label>

					<label for="activite4">
						<p>Taï Chi</p>
						<input type="checkbox" id="activite4" value="option4">
					</label>

					<label for="activite5">
						<p>Hip-Hip &amp; Breakdance</p>
						<input type="checkbox" id="activite5" value="option5">
					</label>

					<label for="activite6">
						<p>LA Kif</p>
						<input type="checkbox" id="activite6" value="option6">
					</label>

					<label for="activite7">
						<p>Idencité</p>
						<input type="checkbox" id="activite7" value="option7">
					</label>

					<label for="activite8">
						<p>Paye ton groupe</p>
						<input type="checkbox" id="activite8" value="option8">
					</label>
			</section>

		</section>

	</aside>


	<div class="col-md-9 col-sm-9">


		<ul>
		@foreach($activities as $activity)
			<li>{{ $activity->id }}</li>
		@endforeach
		</ul>


		<section class="col-md-12">

			<header class="col-md-12">
				<h3>Guitare</h3>
			</header>

			<main class="col-md-12">
				<article>
					POUETI will not have my fwends widiculed by the common soldiewy. Anybody else feel like a little... giggle... when I
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
