@extends('layouts.default')

<!--HEAD TITLE :-->
@section('pageTitle')
CAEM - Ecole de musique
@endsection

<!--MAIN CONTENT :-->
@section('pageContent')
<main class="container">


<!-- #PRENSENTATION CAEM -->
<header class="row">
	<h2 class="text-center">Le Carrefour d'Animation et d'Expression Musicales, qu’est-ce que c’est ?</h2>
	<p class="borderLeftBlue">Un parcours personnalisé</p>
	<p class="borderLeftGreen">Des rencontres, de la mixité et de l’échange</p>
	<p class="borderLeftPink">Du jeu dynamique, en groupe</p>
	<p class="borderLeftOrange">L’expérience de la scène</p>
	<div class="text-center">
		<a href="#" class="">Mon parcours musical</a>
	</div>
</header>
<!-- /PRENSENTATION CAEM -->
<!-- #NEWS -->
<section>
	<header>
		<p>En ce moment &hellip;</p>
	</header>
	<article class="col-md-6">
		<div class="new">
			<figure>
				<figcaption >
					<h2>Exemple exemple exemple</h2>
					<time datetime="14/02/2017">mardi 14 février 2017</time>
				</figcaption>
				<img class="img-responsive" src="../assets/img/stagenaty.jpg" alt="">
			</figure>
			<div class="ellipsis">
				<p>
					Du 20 au 24 février, Naty Andria vous pro- pose un stage d'approfondissement sur la maîtrise vocale et l'improvisation, destiné à tous les chanteurs amateurs...
					Du 20 au 24 février, Naty Andria vous pro- pose un stage d'approfondissement sur la maîtrise vocale et l'improvisation, destiné à tous les chanteurs amateurs...
					Du 20 au 24 février, Naty Andria vous pro- pose un stage d'approfondissement sur la maîtrise vocale et l'improvisation, destiné à tous les chanteurs amateur
				</p>
			</div>
			<div class="text-center">
				<a href="#">Lire la suite</a>
			</div>
		</div>
	</article>
	<article class="col-md-6">
		<div class="new">
			<figure>
				<figcaption >
					<h2>Exemple exemple exemple</h2>
					<time datetime="14/02/2017">mardi 14 février 2017</time>
				</figcaption>
				<img class="img-responsive" src="../assets/img/blop.jpg" alt="">
			</figure>
			<p class="block-with-text">
				Du 20 au 24 février, Naty Andria vous pro- pose un stage d'approfondissement sur la maîtrise vocale et l'improvisation, destiné à tous les chanteurs amateurs...
				Du 20 au 24 février, Naty Andria vous pro- pose un stage d'approfondissement sur la maîtrise vocale et l'improvisation, destiné à tous les chanteurs amateurs...
				Du 20 au 24 février, Naty Andria vous pro- pose un stage d'approfondissement sur la maîtrise vocale et l'improvisation, destiné à tous les chanteurs amateurs...
			</p>
			<div class="text-center">
				<a href="#">Lire la suite</a>
			</div>
		</div>
	</article>
	<article class="col-md-6">
		<div class="new">
			<figure>
				<figcaption >
					<h2>Exemple exemple exemple</h2>
					<time datetime="14/02/2017">mardi 14 février 2017</time>
				</figcaption>
				<img class="img-responsive" src="../assets/img/stagenaty.jpg" alt="">
			</figure>
			<p>
				Du 20 au 24 février, Naty Andria vous pro- pose un stage d'approfondissement sur la maîtrise vocale et l'improvisation, destiné à tous les chanteurs amateurs...
				Du 20 au 24 février, Naty Andria vous pro- pose un stage d'approfondissement sur la maîtrise vocale et l'improvisation, destiné à tous les chanteurs amateurs...
				Du 20 au 24 février, Naty Andria vous pro- pose un stage d'approfondissement sur la maîtrise vocale et l'improvisation, destiné à tous les chanteurs amateurs...
			</p>
			<div class="text-center">
				<a href="#">Lire la suite</a>
			</div>
		</div>
	</article>
</section>
<!-- /NEWS -->
</main>
@endsection
