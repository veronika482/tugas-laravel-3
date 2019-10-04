<!DOCTYPE html>
<html>
<head>
    <title> List Galeri</title>
</head>
<body>
<a href="{!! route('galeri.create') !!}" class="btn btn-primary">Tambah Data</a>
<table border="2">
    <tr>
        <td>ID</td>
        <td>Nama</td>
        <td>Keterangan</td>
        <td>Path</td>
        <td>User ID</td>
        <td>Aksi</td>
    </tr>

    @foreach($galeri as $item)


    <tr>
    <td> {!! $item->id !!}</td>
    <td> {!! $item->nama !!}</td>
    <td> {!! $item->keterangan !!}</td>
    <td> {!! $item->path !!}</td>
    <td> {!! $item->users_id !!}</td>
    <td>
        <a href="{!! route('galeri.show',[$item->id]) !!}" class="btn btn-success">
            Lihat
        </a>
</tr>
@endforeach

</table>

</body>
</html>