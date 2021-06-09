<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Judul</th>
			<th>Isi</th>
		</tr>
		@foreach ($posts as $item)
		<tr>
			<td>{{$item->id}}</td>
			<td>{{$item->judul}}</td>
			<td>{{$item->isi_berita}}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>