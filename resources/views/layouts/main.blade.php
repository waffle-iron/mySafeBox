<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title> mySafebox - @yield('title') </title>

	@section('styles')
		@include('layouts.styles')
	@show

</head>
<body class="@yield('bodyClass')">
	<div class="wrapper">
		@include('layouts.header')

		@include('layouts.sidebar')

		@yield('content')

		@include('layouts.footer')
	</div>

	@section('scripts')
		@include('layouts.scripts')
	@show
</body>

</html>
