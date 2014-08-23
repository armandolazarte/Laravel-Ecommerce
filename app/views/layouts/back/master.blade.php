<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic&subset=latin,cyrillic-ext,greek-ext,greek,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}" type="text/css" media="all"/>

	<script src="//cdnjs.cloudflare.com/ajax/libs/holder/2.3.1/holder.js"></script>
	<script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</head>
<body>
	<header>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Birdie Land</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="#">Products</a></li>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</header>
	<main>
		<div class="container">
			@yield('content')
		</div>
	</main>
</body>
</html>