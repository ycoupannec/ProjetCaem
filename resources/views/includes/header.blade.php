<header id="header">
  <div class="container-fluid">
    <div class="row " id="contact-connection">
      <div class="col-md-11">Suivez-nous sur
        <a href="https://www.facebook.com/caem.besancon"><img src="{{ asset('images/facebook_logo.svg')}}" /></a>
        <a href="https://www.twitter.com/caembesancon"><img src="{{ asset('images/twitter_logo.svg')}}" /></a>
        <a href="https://www.youtube.com/channel/UC0ixrwCaOvNLfnfDv8ShaOA"><img src="{{ asset('images/youtube_logo.svg')}}" /></a>
        <span class="hidden-xs">
          ou <a href="#">contactez-nous</a> directement.
        </span>
      </div>
      <div  class="col-md-1">
        <!-- <a id="connection" href="#">Connexion</a> -->
      </div>
    </div>
  </div>

  <div id="header-img" class="text-center hidden-xs">
    <a href="/"><img src="{{ asset('images/logo_CAEM.svg')}}" alt="logo"></a>
  </div>

  <nav class="navbar navbar-default navbar-caem">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand visible-xs" href="#">
          <img alt="Brand" src="images/logo_CAEM.svg">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li {{{ (Request::is('/') ? 'class=active' : '') }}}><a href="/">Accueil</a></li>
            <li {{{ (Request::is('parcours') ? 'class=active' : '') }}}><a href="/parcours">Mon parcours musical</a></li>
            <li {{{ (Request::is('tarifs') ? 'class=active' : '') }}}><a href="/tarifs">Tarifs &amp; Inscriptions</a></li>
            <li {{{ (Request::is('evenements') ? 'class=active' : '') }}}><a href="/evenements">Évenements</a></li>
            <li {{{ (Request::is('equipe') ? 'class=active' : '') }}}><a href="/equipe">L'équipes</a></li>
          </ul>
      </div>
    </div>
  </nav>
</header>
