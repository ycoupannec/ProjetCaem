<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">



	<!--HEAD-->
	@include('includes.head')
	<!-------->



	<body>


		<!--HEADER-->
		@include('includes.header')
		<!---------->


		<!--MAIN PARCOURS MUSICAL-->
		@include('parcours')
		<!------------------------->


		<!--FOOTER-->
		@include('includes.footer')
		<!---------->


	</body>

</html>
