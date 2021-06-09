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
				<h1>Kalkulator</h1>
				<hr>
				<form action="{{url('/aksi-cal')}}" method="POST">
					@csrf
					<div class="form-group">
						<label for="angka1">Angka Pertama</label>
						<input type="text" class="form-control" id="angka1" name="angka1" value="{{old('angka1')}}">
						@error('angka1')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-group">
						<label for="angka2">Angka Kedua</label>
						<input type="text" class="form-control" id="angka2" name="angka2" value="{{old('angka2')}}">
						@error('angka1')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-group">
						<div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="operasi" id="penjumlahan" value="penjumlahan">
								<label class="form-check-label" for="penjumlahan">Penjumlahan</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="operasi" id="pengurangan" value="penjumlahan">
								<label class="form-check-label" for="pengurangan">Pengurangan</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="operasi" id="perkalian" value="perkalian">
								<label class="form-check-label" for="perkalian">Perkalian</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="operasi" id="pembagian" value="pembagian">
								<label class="form-check-label" for="pembagian">Pembagian</label>
							</div>
							@error('operasi')
							<div class="text-danger">{{$message}}</div>
						@enderror
						</div>
					</div>
					<button type="submit" class="btn btn-primary mb-2">Kirim</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>