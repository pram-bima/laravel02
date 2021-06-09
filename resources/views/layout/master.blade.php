<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA_Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h2>HEADER</h2>
	<ul>
		<li><a href="/home">Home</a></li>
		<li><a href="/about">About</a></li>
		<li><a href="/contact">Contact</a></li>
	</ul>
	<hr>
	@yield('content')
	<hr>
	<h2>FOOTER</h2>
</body>
</html>