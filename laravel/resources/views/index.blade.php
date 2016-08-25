<!DOCTYPE html>
<html lang="en"  >
<head>
	<meta charset="UTF-8">
	<title>.::. Raspa Uneg .::.</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/estilo.css')}}">

</head>
<body ng-app="RaspaUneg">

	<!-- Encabezado -->

    <header class="navbar-fixed-top navbar navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#menu-toggle" id="menu-toggle">registro</a></li>
        </ul>
    </header>
    <div ng-view id="page-content-wrapper"></div>


<script src="{{ asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
</body>
</html>
