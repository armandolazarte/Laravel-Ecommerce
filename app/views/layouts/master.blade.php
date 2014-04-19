<html>
	<head>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" type="text/css" media="all"/>
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" type="text/css" media="all"/>
	</head>
    <body>
    	<header>
    		<div class="container">
    			<div id="logo">
    				<img src="{{ asset('assets/images/logo.png') }}" />
    			</div>
    		</div>
    	</header>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>