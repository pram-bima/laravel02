<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Data Mahasiswa</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>NIM</th>
			<th>Nama Mahasiswa</th>
			<th>Jurusan</th>
			<th>Alamat</th>
			<th>Agama</th>
			<th>Jenis Kelamin</th>
		</tr>
		@foreach ($mahasiswas as $item)
		<tr>
			<td>{{$item->id}}</td>
			<td>{{$item->nim}}</td>
			<td>{{$item->namaMahasiswa}}</td>
			<td>{{$item->jurusan}}</td>
			<td>{{$item->alamat}}</td>
			<td>{{$item->agama}}</td>
			<td>{{$item->jenisKelamin}}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>