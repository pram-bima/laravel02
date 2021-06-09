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
					<div class="form-group">
						<label for="judul">Judul</label>
						<input type="text" class="form-control" id="judul" name="judul" value="{{old('judul')}}">
						@error('judul')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
                    <div class="form-group">
						<label for="pengarang">Pengarang</label>
						<input type="text" class="form-control" id="pengarang" name="pengarang" value="{{old('pengarang')}}">
						@error('pengarang')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
                    <div class="form-group">
						<label for="penerbit">Penerbit</label>
						<input type="text" class="form-control" id="penerbit" name="penerbit" value="{{old('penerbit')}}">
						@error('penerbit')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
                    <div class="form-group">
						<label for="tahun_terbit">Tahun Terbit</label>
						<input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" value="{{old('tahun_terbit')}}">
						@error('tahun_terbit')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
                    <div class="form-group">
						<label for="sampul">Sampul</label>
						<input type="text" class="form-control" id="sampul" name="sampul" value="{{old('sampul')}}">
						@error('sampul')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
                    <div class="form-group">
						<label for="sinopsis">Sinopsis</label>
						<input type="text" class="form-control" id="sinopsis" name="sinopsis" value="{{old('sinopsis')}}">
						@error('sinopsis')
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