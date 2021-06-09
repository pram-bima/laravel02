<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device--width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<title>Document</title>
</head>
<body>
	<div class="container pt-4 bg-white">
		<div class="row">
			<div class="col-md-8 col-xl-6">
				<h1>Hasil Operasi</h1>
				<hr>
				<p>Hasil {{$panggil["operasi"]}} dari {{$panggil["angka 1"]}} dan {{$panggil["angka 2"]}} adalah {{$panggil["hasil"]}}</p>
			</div>
		</div>
	</div>
</body>
</html>