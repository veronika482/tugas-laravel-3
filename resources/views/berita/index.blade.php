@extends('layouts.app')

@section('content')

<center>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
              <div class=card>
               <div class="card-header">Berita</div>
               
               <div class="card-body">
                <a href="{!! route('berita.create') !!}" class="btn btn-primary">Tambah Data</a>
                <table border="2">
                <tr bgcolor='pink' align="center">

        <table border= "2">
        <tr bgcolor='pink' align="center"> 
        <td> ID </td>
        <td> JUDUL </td>
        <td> ISI </td>
        <td> USERS ID </td>
        <td> CREATE </td>
        <td> UPDATE </td>
        <td> AKSI </td>
        </tr>

        @foreach($berita as $item)

        <tr>

        <td> {!! $item ->id !!}</td>
        <td> {!! $item ->judul !!}</td>
        <td> {!! $item ->isi !!}</td>
        <td> {!! $item ->users_id !!}</td>
        <td> {!! $item ->created_at->format('d/m/Y H:i:s') !!}</td>
        <td> {!! $item ->updated_at->format('d/m/Y H:i:s') !!}</td>
        <td>
        <a href="{!! route('berita.show',[$item->id]) !!}" 
        class="btn btn-sm btn-success">View</a>
        <a href="{!! route('berita.edit',[$item->id]) !!}" 
        class="btn btn-sm btn-warning">Edit</a>
        {!! Form::open(['route' => ['berita.destroy', $item->id], 'method'=>'delete']) !!}
        {!! Form::submit('Delete',['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm('Apakah anda yakin menghapus data ini?')"]); !!}
        {!! Form::close() !!}
          </td>
        </tr>
      </center>
    @endforeach
@endsection