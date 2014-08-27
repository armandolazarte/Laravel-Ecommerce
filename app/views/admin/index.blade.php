<html ng-app="eCommerce">
<head>

    <base href="/admin/" />

    <!-- CSS Dependencies -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic&subset=latin,cyrillic-ext,greek-ext,greek,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}" type="text/css" media="all"/>
	<link rel="stylesheet" href="{{ asset('components/fontawesome/css/font-awesome.min.css') }}" type="text/css" media="all"/>
	<link rel="stylesheet" href="{{ asset('components/animate.css/animate.css') }}" type="text/css" media="all"/>

    <!-- Application CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}" type="text/css" media="all"/>

    <!-- AngularJS dependencies -->
	<script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
	<script src="{{ asset('components/angular/angular.min.js') }}"></script>
	<script src="{{ asset('components/lodash/dist/lodash.underscore.js') }}"></script>
	<script src="{{ asset('components/restangular/dist/restangular.min.js') }}"></script>
	<script src="{{ asset('components/angular-route/angular-route.js') }}"></script>
	<script src="{{ asset('components/angular-animate/angular-animate.js') }}"></script>

    <!-- Application specific -->
	<script src="{{ asset('assets/js/app.js') }}"></script>
	<script src="{{ asset('assets/js/directives.js') }}"></script>
	<script src="{{ asset('assets/js/controllers.js') }}"></script>

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
					<a class="navbar-brand" href="/">Birdie Land</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="products">Products</a></li>
                    </ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</header>
	<main>
        <div class="container" ng-view></div>
	</main>
</body>
</html>