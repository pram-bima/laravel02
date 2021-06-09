<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA_Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<ul>
	@foreach ($siswa as $item)
		<li>{{$item}}</li>
	@endforeach
	</ul>
</body>
</html>