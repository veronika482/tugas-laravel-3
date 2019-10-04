<!DOCTYPE html>
<html>
<head>
    <title> List Berita </title>
</head>
<body>
<a href="{!! route('berita.create') !!}" class="btn btn-primary">Tambah Data</a>
<table border="2">
    <tr>
        <td>ID</td>
        <td>Judul</td>
        <td>Isi</td>
        <td>User ID</td>
        <td>Aksi</td>
    </tr>

    @foreach($berita as $item)


    <tr>
    <td> {!! $item->id !!}</td>
    <td> {!! $item->judul !!}</td>
    <td> {!! $item->isi !!}</td>
    <td> {!! $item->users_id !!}</td>
    <td>
        <a href="{!! route('berita.show',[$item->id]) !!}" class="btn btn-success">
            Lihat
        </a>
</tr>
@endforeach

</table>

</body>
</html>