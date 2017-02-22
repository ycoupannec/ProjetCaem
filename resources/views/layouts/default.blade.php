<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">


	<!--HEAD-->
	@include('includes.head')
	<!-------->


	<body>

		<!--HEADER-->
		@include('includes.header')
		<!---------->


		<!--MAIN-->
		@yield('pageContent')
		<!-------->


		<!--FOOTER-->
		@include('includes.footer')
		<!---------->


		<!--SCRIPT-->
		@include('includes.script')
		<!---------->

	</body>

</html>
