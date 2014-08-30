<html ng-app="eCommerce">
<head>

    <base href="/admin/" />

    <!-- CSS Dependencies -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic&subset=latin,cyrillic-ext,greek-ext,greek,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo asset('components/bootstrap/dist/css/bootstrap.min.css') ?>" type="text/css" media="all"/>
	<link rel="stylesheet" href="<?php echo asset('components/fontawesome/css/font-awesome.min.css') ?>" type="text/css" media="all"/>
	<link rel="stylesheet" href="<?php echo asset('components/animate.css/animate.css') ?>" type="text/css" media="all"/>

    <!-- Application CSS -->
    <link rel="stylesheet" href="<?php echo asset('assets/css/admin.css') ?>" type="text/css" media="all"/>

    <!-- AngularJS dependencies -->
	<script src="<?php echo asset('components/jquery/dist/jquery.min.js') ?>"></script>
	<script src="<?php echo asset('components/jquery-ui/jquery-ui.min.js') ?>"></script>
	<script src="<?php echo asset('components/angular/angular.min.js') ?>"></script>
	<script src="<?php echo asset('components/lodash/dist/lodash.underscore.js') ?>"></script>
	<script src="<?php echo asset('components/restangular/dist/restangular.min.js') ?>"></script>
	<script src="<?php echo asset('components/angular-route/angular-route.js') ?>"></script>
	<script src="<?php echo asset('components/angular-animate/angular-animate.js') ?>"></script>
	<script src="<?php echo asset('components/angular-bootstrap/ui-bootstrap.min.js') ?>"></script>
	<script src="<?php echo asset('components/angular-ui-sortable/sortable.min.js') ?>"></script>
	<script src="<?php echo asset('components/angular-bootstrap/ui-bootstrap-tpls.min.js') ?>"></script>

    <!-- Application specific -->
	<script src="<?php echo asset('assets/js/app.js') ?>"></script>
	<script src="<?php echo asset('assets/js/services.js') ?>"></script>
	<script src="<?php echo asset('assets/js/directives.js') ?>"></script>
	<script src="<?php echo asset('assets/js/controllers.js') ?>"></script>

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
	<alert ng-repeat="alert in alerts" type="{{alert.type}}">{{alert.msg}}</alert>
	<main>
        <div class="container-fluid" ng-view></div>
	</main>
</body>
</html>