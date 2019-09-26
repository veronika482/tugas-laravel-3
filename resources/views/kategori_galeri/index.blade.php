<!DOCTYPE html>
<html>
<head>
	<title>kategori galeri</title>
</head>
<body>

<table border="2">
	<tr>
		<td>ID</td>
		<td>Nama</td>
		<td>User ID</td>
	</tr>

	@foreach($kategori_galeri as $item)


	<tr>
	<td> {!! $item->id !!}</td>
	<td> {!! $item->nama !!}</td>
	<td> {!! $item->users_id !!}</td>
</tr>
@endforeach

</table>

</body>
</html>