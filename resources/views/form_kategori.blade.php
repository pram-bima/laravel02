<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device--width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<title>Form Input Buku</title>
</head>
<body>
	<div class="container pt-4 bg-white">
		<div class="row">
			<div class="col-md-8 col-xl-6">
				<h1>Input Buku Baru</h1>
				<hr>
				<form action="{{url('/insertbook')}}" method="POST">
					@csrf
					<div class="form-group">
						<label for="idKat">Kategori</label>
						<input type="text" class="form-control" id="idKat" name="idKat" value="{{old('idKat')}}">
						@error('idKat')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<button type="submit" class="btn btn-primary mb-2">Masukkan Buku</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>