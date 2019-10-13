@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
		    <div class=card>
			    <div class="card-header">Pengumuman</div>
			         <div class="card-body">
			            {!! Form::model($pengumuman, ['route' => ['pengumuman.update', $pengumuman->id], 'method'=>'patch']) !!}
			            @include('pengumuman.form')
			            {!! Form::close() !!}
			            </form>
		        </div>
	       </div>
       </div>
   </div>
</div>

@section('scripts')
<script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
<script>
$(document).ready(function(){
    CKEDITOR.replace('isi');
});
</script>
@endsection

@endsection