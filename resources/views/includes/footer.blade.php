<div id="bgImage" class="container-fluid"> <!--DIV used to apply a global background to the footer-->
	<footer class="container">


		<section class="row caemSection"> <!--First section of the footer, containing informations about CAEM, Logo, and Social Networks links-->

			<address class="col-md-5 col-sm-6"> <!--Informations about CAEM, adress, phone number and mail-->
				<div class="caemInfos col-md-12">
					<img class="col-md-2" src="{{ asset('images/position_icon-05.svg')}}" />
					<p class="col-md-10" id="address">13 A avenue Ile-de-France 25 000 Besançon</p>
				</div>
				<div class="caemInfos col-md-12">
					<img class="col-md-2" src="{{ asset('images/phone_icon-05.svg')}}" />
					<p class="col-md-10" id="phone">03.81.51.21.36</p>
				</div>
				<div class="caemInfos col-md-12">
					<img class="col-md-2" src="{{ asset('images/mail_icon-05.svg')}}" />
					<p class="col-md-10" id="email">&#097;&#099;&#099;&#117;&#101;&#105;&#108;&#064;&#099;&#097;&#101;&#109;&#045;&#098;&#101;&#115;&#097;&#110;ç&#111;&#110;&#046;&#102;&#114;</p>
				</div>
			</address>

			<img class="col-md-2 hidden-sm hidden-xs center-block" src="{{ asset('images/logo_CAEM.svg')}}" alt="logo CAEM"> <!--Logo of CAEM-->

			<div class="socialNetwork col-md-5 col-sm-6"> <!--Links to social networks-->
				<p>Suivez-nous sur :</p>
				<div>
					<a href="#"><img src="{{ asset('images/facebook_logo.svg')}}" /></a>
					<a href="#"><img src="{{ asset('images/twitter_logo.svg')}}" /></a>
					<a href="#"><img src="{{ asset('images/youtube_logo.svg')}}" /></a>
				</div>
			</div>

		</section>


		<nav class="row"> <!--Footer "navbar" to some sections of the website, "L'association", "Credits" and "Mentions légales"-->
		  <ul class="list-inline">
			<li class="col-md-4 col-sm-4 col-xs-12 text-center"><a href="#">L'association</a></li>
			<li class="col-md-4 col-sm-4 col-xs-12 text-center"><a href="#">Crédits</a></li>
			<li class="col-md-4 col-sm-4 col-xs-12 text-center"><a href="#">Mentions légales</a></li>
		  </ul>
		</nav>


		<section class="row banner"> <!--Footer section to display partnership logotypes-->

			<div class="col-md-3 col-sm-6 col-xs-6">
			  <img class="img-responsive" src="{{ asset('images/besancon_logo.png')}}" alt="Logo ville de Besançon">
			</div>

			<div class="col-md-3 col-sm-6 col-xs-6">
			  <img class="img-responsive" src="{{ asset('images/grandbesancon_logo.png')}}" alt="Logo grand Besançon">
			</div>

			<div class="col-md-3 col-sm-6 col-xs-6">
			  <img class="img-responsive" src="{{ asset('images/doubs_logo.png')}}" alt="Logo Doubs">
			</div>

			<div class="col-md-3 col-sm-6 col-xs-6">
			  <img class="img-responsive" src="{{ asset('images/creditmutuel_logo.png')}}" alt="Logo Crédit Mutuelle">
			</div>

		</section>


	</footer>
</div>
