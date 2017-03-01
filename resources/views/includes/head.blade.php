<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="École de musique à Besançon" />
	<link rel="icon" type="image/png" href="{{ asset('images/caem_favicon.png')}}" />

	<title>@yield('pageTitle', 'CAEM - Ecole de musique')</title>

	<!-- OPEN GRAPH -->
	<meta property="og:title" content="@yield('pageTitle', 'CAEM - Ecole de musique')" />
	<meta property="og:type" content="Musique" />
	<meta property="og:url" content="url()->current();" />
	<meta property="og:image" content="http://www.caem-besancon.fr/images/IMG5793.jpg" />
	<meta property="og:description" content="Le Carrefour d'Animation et d'Expression Musicales" />

	<!--  TWITTER CARD-->
	<meta property="twitter:summary" content="summary" />
	<meta property="twitter:site" content="@caem" />
	<meta property="twitter:title" content="@yield('pageTitle', 'CAEM - Ecole de musique')" />
	<meta property="twitter:description" content="Le Carrefour d'Animation et d'Expression Musicales" />
	<meta property="twitter:image" content="http://www.caem-besancon.fr/images/IMG5793.jpg" />
	<meta property="twitter:url" content="Request::url()" />

	<!--LEAFLET-->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!--STYLESHEET-->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!--IMPORT FONTS-->
	<link href="http://fonts.googleapis.com/css?family=Quicksand:300,400,700" rel="stylesheet" type="text/css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
