@extends('layouts.default')

<!--HEAD TITLE :-->
@section('pageTitle')
CAEM - Ecole de musique
@endsection

<!--MAIN CONTENT :-->
@section('pageContent')
<main class="container">
<!-- START PRENSENTATION CAEM -->
<header class="row" id="presentation">
	<h2 class="text-center">Le Carrefour d'Animation et d'Expression Musicales, qu’est-ce que c’est ?</h2>
	<p class="borderLeftBlue">Un parcours personnalisé</p>
	<p class="borderLeftGreen">Des rencontres, de la mixité et de l’échange</p>
	<p class="borderLeftPink">Du jeu dynamique, en groupe</p>
	<p class="borderLeftOrange">L’expérience de la scène</p>
	<div class="text-center">
		<a href="#" class="">Mon parcours musical</a>
	</div>
</header>
<!-- END PRENSENTATION CAEM -->
<!-- START NEWS -->
<section id="news">
		<header>
				<h2>En ce moment &hellip;</h2>
		</header>
		<div class="row">
				<article class="col-md-3">
						<div class="new">
								<figure>
										<figcaption >
												<h2>Exemple exemple exemple</h2>
												<time datetime="14/02/2017">mardi 14 février 2017</time>
										</figcaption>
										<img class="img-responsive center-block" src="{{ asset('images/stagenaty.jpg')}}" alt="">
								</figure>
								<div>
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
				<article class="col-md-3">
						<div class="new">
								<figure>
										<figcaption >
												<h2>Exemple exemple exemple</h2>
												<time datetime="14/02/2017">mardi 14 février 2017</time>
										</figcaption>
										<img class="img-responsive center-block" src="{{ asset('images/blop.jpg')}}" alt="">
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
				<article class="col-md-3">
						<div class="new">
								<figure>
										<figcaption >
												<h2>Exemple exemple exemple</h2>
												<time datetime="14/02/2017">mardi 14 février 2017</time>
										</figcaption>
										<img class="img-responsive center-block" src="{{ asset('images/blop.jpg')}}" alt="">
								</figure>
								<div>
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
				<article class="col-md-3">
						<div class="new">
								<figure>
										<figcaption >
												<h2>Exemple exemple exemple</h2>
												<time datetime="14/02/2017">mardi 14 février 2017</time>
										</figcaption>
										<img class="img-responsive center-block" src="{{ asset('images/blop.jpg')}}" alt="">
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
		</div>
		</section
<!--END NEWS -->
</main>
@endsection
