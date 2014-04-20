<html>
<head>
  <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic&subset=latin,cyrillic-ext,greek-ext,greek,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" type="text/css" media="all"/>
</head>
<body>
 <header>
  <div class="container">
   <div id="logo">
    <a href="{{ url() }}"><img src="{{ asset('assets/images/logo.png') }}" /></a>
  </div>
  @include('layouts.partials.nav')
</div>
</header>
<div class="container">
  @yield('content')
</div>
</body>
</html>