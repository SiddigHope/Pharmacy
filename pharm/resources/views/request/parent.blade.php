<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/public/css/a.css">
</head>
<body>
<div class="container">
	<h1>Requests</h1>
	@yield('main')
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{URL::to('/')}}/public/js/bootstrap.min.js"></script>
</body>
</html>