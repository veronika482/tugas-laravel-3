<!DOCTYPE html>
<html>
<head>
	<title>kategori berita</title>
</head>
<body>
	<a href="{!! route('kategori_berita.create') !!}" class="btn btn-primary">Tambah Data</a>
<table border="2">
	<tr>
		<td>ID</td>
		<td>Nama</td>
		<td>User ID</td>
		<td>Aksi</td>

	</tr>

	@foreach($kategori_berita as $item)

	<tr>
	<td> {!! $item->id !!}</td>
	<td> {!! $item->nama !!}</td>
	<td> {!! $item->users_id !!}</td>
	<td>
		<a href="{!! route('kategori_berita.show',[$item->id]) !!}" class="btn btn-success">
			Lihat
		</a>
</tr>
@endforeach

</table>

</body>
</html>