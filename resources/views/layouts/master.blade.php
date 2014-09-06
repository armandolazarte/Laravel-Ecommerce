<html>
<head>
	<link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}" type="text/css" media="all"/>
	<link rel="stylesheet" href="{{ asset('components/fontawesome/css/font-awesome.min.css') }}" type="text/css" media="all"/>
	<link rel="stylesheet" href="{{ asset('assets/css/front.css') }}" type="text/css" media="all"/>

	<script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</head>
<body>
    @include('layouts.partials.notification')
	<header>
		<div class="container">
            @include('layouts.partials.cart')
			<div id="logo">
				<a href="{{ url() }}"><img src="{{ asset('assets/images/logo.png') }}" /></a>
			</div>
			@include('layouts.partials.nav')
		</div>
	</header>
	<main>
		<div class="container">
			@yield('content')
		</div>
	</main>
	<footer>
		This is footer
	</footer>
</body>
</html>