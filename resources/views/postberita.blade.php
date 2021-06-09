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
				<h1>Tambah Artikel</h1>
				<hr>
				<form action="{{url('/insert-post')}}" method="POST">
					@csrf
					<div class="form-group">
						<label for="judul">Judul</label>
						<input type="text" class="form-control" id="judul" name="judul" value="{{old('judul')}}">
						@error('judul')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-group">
						<label for="isi_berita">Isi Berita</label>
						<textarea class="form-control" id="isi_berita" name="isi_berita" value="{{old('isi_berita')}}"></textarea>
						@error('isi_berita')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-group">
						<label for="judul">Kategori</label>
						<input type="text" class="form-control" id="kategori" name="kategori" value="{{old('kategori')}}">
						@error('kategori')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<button type="submit" class="btn btn-primary mb-2">Kirim</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>