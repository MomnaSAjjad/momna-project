<!DOCTYPE html>
<html lang="uk" dir="ltr">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Uppsagt" name="description">
		<meta content="Uppsagt" name="author">
		@include('layouts.head')
	</head>
	<body class="bg-login">
		<div class="bg-login__header">
            <div class="text-center">
                <a href="https://kontroll.se"><img src="{{URL::asset('assets/images/kontroll-logo.svg')}}" width="216" alt=""></a>
            </div>
		</div>
		@yield('content')		
		@include('layouts.footer-scripts')
	</body>
</html>