<header>
<div class="container-fluid">
  <div class="row" id="contact-connection">
	<div id="logo-desktop" class="col-md-11">Suivez-nous sur <a href="#"><img src="{{ asset('images/facebook_logo.svg')}}" /></a> <a href="#"><img src="{{ asset('images/twitter_logo.svg')}}" /></a> <a href="#"><img src="{{ asset('images/youtube_logo.svg')}}" /></a> ou <a href="#">contactez-nous</a> directement.
	</div>
	<div id="logo-mobile" class="col-md-11"><a href="#"><img src="{{ asset('images/facebook_logo.svg')}}" /></a> <a href="#"><img src="{{ asset('images/twitter_logo.svg')}}" /></a> <a href="#"><img src="{{ asset('images/youtube_logo.svg')}}" /></a></div>
	<div  class="col-md-1">
	  <a id="connection" href="#">Connexion</a>
	</div>
  </div>
  <div class="row" id="header">
	<img src="{{ asset('images/logo_CAEM.svg')}}" alt="logo">
  </div>
</div>
<nav>
  <ul class="menu" id="myMenu">
	  <li class="home"><a href="/">Accueil</a></li>
	  <li class="icon">
		  <a href="javascript:void(0);" onclick="myBurger()">&#9776;</a>
	  </li>
	  <li><a href="/parcours">Mon parcours musical</a></li>
	  <li><a href="#">Tarifs &amp; Inscriptions</a></li>
	  <li><a href="#">Évenements</a></li>
	  <li><a href="#">L'équipe</a></li>
  </ul>
</nav>
</header>


<script src="//localhost:35729/livereload.js"></script>
<script>
	function myBurger() {
		var x = document.getElementById("myMenu");
		if (x.className === "menu") {
			x.className += " responsive";
		} else {
			x.className = "menu";
		}
	}
</script>
