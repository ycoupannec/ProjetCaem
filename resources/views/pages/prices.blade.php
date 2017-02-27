<!--CALLING THE DEFAULT LAYOUT-->
@extends('layouts.default')
<!------------------------------>



<!--HEAD TITLE :-->
@section('pageTitle')
CAEM - Tarifs &amp; Inscriptions
@endsection
<!---------------->

<!--MAIN CONTENT :-->
@section('pageContent')
<main class="mainTarifs container">


	<section id="sectionTarifsInformations" class="row">
		<h2 class="titleTop">L'inscription est possible toute l'année</h2>
		<p class="tarifsIntro">Pré-inscriptions par email ou téléphone. Inscriptions au bureau du CAEM avec Sonia du lundi au jeudi de 9h15 à 16h00. Pour le règlement des activités, nous vous donnons la possibilité de choisir le mode de paiement qui vous convient le mieux : mensualisation en prélèvement automatique sur 12 mois, paiement par chèque en plusieurs fois, chèques vacances...</p>
	</section>


	<section id="sectionTarifsEnfants" class="row">

		<h2>Pour les plus jeunes :</h2>

		<article class="col-md-6">
			<div>
				<h3>Éveil musical 4 – 6 ans</h3>
				<p>Tarif CAEM : environ 9 €/mois (109 € l'année)</p>
				<p>Tarif maison de quartier : à partir de 27 € l'année</p>
			</div>
		</article>

		<article class="col-md-6">
			<div>
				<h3>Parcours musical 6 – 11 ans</h3>
				<p>30,25 €/mois (363 € l’année)</p>
			</div>
		</article>

	</section >


	<section id="sectionTarifsActivités" class="row">

		<h2>Cours d'instruments, chant, ateliers &amp; activités :</h2>

		<article class="col-md-12">
			<div>
				<h3>Cours d’instruments</h3>
				<p>Cours en groupe (45 minutes, 2 à 4 personnes selon instrument) : 37,75 €/mois (453 € l’année)</p>
				<p>Cours individuel (30 minutes) : 45,5€/mois (546 € l’année)</p>
			</div>
		</article>

		<article class="col-md-12">
			<div>
				<h3>Cours de chant</h3>
				<p>30 minutes : 32,5 €/mois (390 € l'année)</p>
				<p>45 minutes : 48,75 €/mois (585 € l'année)</p>
			</div>
		</article>

		<article class="col-md-12">
			<div>
				<h3>Ateliers thématiques</h3>
				<p>31,25 €/mois (375 € l’année)</p>
			</div>
		</article>

		<article class="col-md-12">
			<div>
				<h3>Pratiques collectives & Expression Corporelle</h3>
				<p>Batucada 55 € l'année</p>
				<p>Chorale 12,75 €/mois (153 € l'année) + 15 € forfait partitions</p>
				<p>Fanfare Groove 5 €/mois (60 € l'année)</p>
				<p>Taï Chi 10 €/mois (120 € l'année)</p>
				<p>Danse Hip-hop 10 €/mois (120 € l'année)</p>
			</div>
		</article>

	</section>


	<section id="sectionTarifsFormules" class="row">

		<h2>Les formules :</h2>

		<article class="col-md-6">
			<div>
				<h3>La Formule - 26 ans</h3>
				<p>Cours d’instrument en groupe + Atelier de groupe* ou atelier thématique (* 1h / à partir de 10 ans / pratique de musiques actuelles avec des jeunes qui jouent d'autres instruments / 4 à 7 personnes)</p>
				<h4>42 €/mois (504 € l'année)</h4>
			</div>
		</article>

		<article class="col-md-6">
			<div>
				<h3>La Formule adulte</h3>
				<p>Cours d’instrument en groupe + Atelier thématique 1h30 ou 2h selon le nombre d'inscrits</p>
				<h4>environ 50 €/mois (selon atelier)</h4>
			</div>
		</article>

	</section>


</main>
@endsection
<!------------------>



<!--     <section class="row">

        <header>
          <p>Tarifs & inscriptions</p>
        </header>

        <h2 class="titleTop">L'inscription est possible toute l'année</h2>

        <p class="tarifsIntro">Pré-inscriptions par email ou téléphone. Inscriptions au bureau du CAEM avec Sonia du lundi au jeudi de 9h15 à 16h00. Pour le règlement des activités, nous vous donnons la possibilité de choisir le mode de paiement qui vous convient le mieux : mensualisation en prélèvement automatique sur 12 mois, paiement par chèque en plusieurs fois, chèques vacances...</p>



        <h2>Ateliers thématiques</h2>
        <ul>
          <li>31,25 €/mois (375 € l’année) <article class="disclaimer">- 50 % avec la formule !</article></li>
        </ul>

        <h2>La Formule - 26 ans</h2>
        <ul>
          <li>Cours d’instrument en groupe</li>
          <li>+ Atelier de groupe* ou atelier thématique (* 1h / à partir de 10 ans / pratique de musiques actuelles avec des jeunes qui jouent d'autres instruments / 4 à 7 personnes)</li>
          <p class="disclaimer">Tarifs</p>
          <li>42 €/mois (504 € l'année)</li>
        </ul>

        <h2>La Formule adulte</h2>
        <ul>
          <li>Cours d’instrument en groupe</li>
          <li>+ Atelier thématique 1h30 ou 2h selon le nombre d'inscrits</li>
          <p class="disclaimer">Tarifs</p>
          <li>environ 50 €/mois (selon atelier)</li>
        </ul>

        <h2>Pratiques collectives & Expression Corporelle</h2>
        <ul>
          <li>Batucada 55 € l'année</li>
          <li>Chorale 12,75 €/mois (153 € l'année) + 15 € forfait partitions</li>
          <li>Fanfare Groove 5 €/mois (60 € l'année)</li>
          <li>Taï Chi 10 €/mois (120 € l'année)</li>
          <li>Danse Hip-hop 10 €/mois (120 € l'année)</li>
          <p class="disclaimer">- 50 % sur les pratiques collectives et activités d'expression corporelle si vous pratiquez une autre activité au CAEM</p>
        </ul>

    </section>-->
