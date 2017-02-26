@extends('layouts.default')

<!--HEAD TITLE :-->
@section('pageTitle')
CAEM - Ecole de musique
@endsection

<!--MAIN CONTENT :-->
@section('pageContent')
<main id="event" class="container">

<section clas="row">
	<h1 class="col-xs-12">{{ $event->title }}</h1>
	<time class="col-xs-12" datetime="{{ $event->date }}">{{ $event->formatDate }}</time>
	<div class="col-xs-offset-3 col-xs-6">
		<img class="img-responsive" src="http://placehold.it/800x600" alt="">
	</div>
	<div class="col-xs-offset-3 col-xs-6">
		{!! $event->content !!}
	</div>
	<div class="col-xs-offset-3 col-xs-6">
					<h5 class="pull-left"><i class="fa fa-share-alt"></i> Partagez ce contenu&nbsp;&nbsp;</h5>
					<a href="http://twitter.com/intent/tweet?text=Contactez-nous http://www.caem-besancon.fr//contact.html @CaemBesancon" title="Partager sur twitter" target="_blank" class="btn btn-twitter btn-sm"><i class="fa fa-twitter"></i> Twitter</a>
					<a href="https://www.facebook.com/sharer/sharer.php?u=http://www.caem-besancon.fr//contact.html" title="Partager sur Facebook" target="_blank" class="btn btn-facebook btn-sm"><i class="fa fa-facebook"></i> Facebook</a>
					<!-- <a class="button" href="https://plus.google.com/share?url=http://www.caem-besancon.fr//contact.html" title="Partager sur Google+" target="_blank" class="btn btn-googleplus btn-sm"><i class="fa fa-google-plus"></i> Google+</a> -->
	</div
</section>

</main>
@endsection
