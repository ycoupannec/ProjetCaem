@extends('layouts.default')

<!--HEAD TITLE :-->
@section('pageTitle')
CAEM - Ecole de musique
@endsection

<!--MAIN CONTENT :-->
@section('pageContent')
<main class="container">

<!-- START NEWS -->
	@foreach ($typeActualities as $key => $typeActuality)
	<section class="news">
	<header>
		<h2>{{ $key }}</h2>
	</header>
	<div class="row">
		@foreach ($typeActuality as $actuality)
			<article class="col-md-3">
				<div class="new">
					<figure>
						<figcaption >
							<h2>{{ $actuality->title }}</h2>
							<time datetime="{{ $actuality->date }}">{{ $typeActuality->formatDate }}</time>
						</figcaption>
						<img class="img-responsive center-block" src="{{ $actuality->image }}" alt="">
					</figure>
					<div>
						{!! $actuality->content !!}
					</div>
					<div class="text-center">
						<a href="evenement/{{ $actuality->id }}">Lire la suite</a>
					</div>
				</div>
			</article>
		@endforeach
	</div>
</section>
	@endforeach
<!--END NEWS -->
</main>
@endsection
