<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device--width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<title>Form Mahasiswa</title>
</head>
<body>
	<div class="container pt-4 bg-white">
		<div class="row">
			<div class="col-md-8 col-xl-6">
				<h1>Pendaftaran Mahasiswa</h1>
				<hr>
				<form action="{{url('/insert-mahasiswa')}}" method="POST">
					@csrf
					<div class="form-group">
						<label for="nim">Nomor Induk Mahasiswa</label>
						<input type="text" class="form-control" id="nim" name="nim" value="{{old('nim')}}">
						@error('nim')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-group">
						<label for="namaMahasiswa">Nama Lengkap Mahasiswa</label>
						<input type="text" class="form-control" id="namaMahasiswa" name="namaMahasiswa" value="{{old('namaMahasiswa')}}">
						@error('namaMahasiswa')
							<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-group">
						<label for="jurusan">Jurusan</label>
						<select class="form-control" name="jurusan" id="jurusan">
							<option value="TI">Teknik Informatika</option>
							<option value="MI">Manajemen Informatika</option>
						</select>
						@error('jurusan')
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
						@error('alamat')
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-group">
						<label>Agama</label>
						<div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="agama" id="islam" value="islam">
								<label class="form-check-label" for="islam">Islam</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="agama" id="kristen" value="kristen">
								<label class="form-check-label" for="kristen">Kristen</label>
							</div>
							@error('agama')
							<div class="text-danger">{{$message}}</div>
						@enderror
						</div>
					</div>
					<div class="form-group">
						<label>Jenis Kelamin</label>
						<div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="jenisKelamin" id="laki_laki" value="L">
								<label class="form-check-label" for="laki_laki">Laki-laki</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="jenisKelamin" id="perempuan" value="P">
								<label class="form-check-label" for="perempuan">Perempuan</label>
							</div>
							@error('jenis_kelamin')
							<div class="text-danger">{{$message}}</div>
						@enderror
						</div>
					</div>
					<button type="submit" class="btn btn-primary mb-2">Daftar</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>