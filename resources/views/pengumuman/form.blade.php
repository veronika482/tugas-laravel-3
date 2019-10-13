@csrf
<div class="Form-group row">
        <label for="judul" class="col-md-2 col-Form-label text-md-right">{{ __('Judul') }}</label>

        <div class="col-md-4">

            {!! Form::text('judul', null,['class'=>"form-control", 'required', 'autofocus']); !!}
            
            @error('judul')
            <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
           </span>
           @enderror
        </div>
</div>

<div class="Form-group row">
    <label for="kategori_pengumuman_id" class="col-md-2 col Form-label text-md-right">{{__('Kategori Pengumuman')}}</label>

    <div class="col-md-10">
        {!! Form::select('kategori_pengumuman_id', $kategori_pengumuman, null, ["class"=> "Form-control", "required"]) !!}

        @error('kategori_pengumuman_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="isi" class="col-md-2 col form-label text-md-right">{{__('isi')}}</label>

    <div class="col-md-10">
        {!! Form::textarea('isi', null,['class'=>'Form-control']); !!}
        @error('isi')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

{!! Form::hidden('users_id', Auth::id() ); !!}

<div class="form-group row offset-md-2">
        <button type="submit" class="btn btn-primary">
            {{ __('Simpan Data') }}
        </button>
        <a href="{!! route('pengumuman.index') !!}"class="btn btn-danger">
            {{ __('Batal') }}
        </a>
    </div>
</div>