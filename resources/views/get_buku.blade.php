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
			<th>JUDUL</th>
			<th>PENGARANG</th>
			<th>PENERBIT</th>
			<th>TAHUN TERBIT</th>
			<th>SAMPUL</th>
			<th>SINOPSIS</th>
            <th>UPDATE</th>
		</tr>
		@foreach ($get_buku as $item)
		<tr>
			<td>{{$item->id}}</td>
			<td>{{$item->judul}}</td>
			<td>{{$item->pengarang}}</td>
			<td>{{$item->penerbit}}</td>
			<td>{{$item->tahun_terbit}}</td>
			<td>{{$item->sampul}}</td>
			<td>{{$item->sinopsis}}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>