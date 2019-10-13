@csrf
<div class="Form-group row">
        <label for="nama" class="col-md-2 col-Form-label text-md-right">{{ __('Nama') }}</label>

        <div class="col-md-4">
            
            {!! Form::text('nama', null,['class'=>"form-control", 'required', 'autofocus']); !!}

            @error('nama')
           <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
           </span>
           @enderror
        </div>
</div>

<div class="Form-group row">
        <label for="keterangan" class="col-md-2 col-Form-label text-md-right">{{ __('Keterangan') }}</label>

        <div class="col-md-10">
            {!! Form::text('keterangan', null,['class'=>'form-control']); !!}
            
            @error('path')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
</div>

<div class="Form-group row">
    <label for="path" class="col-md-2 col Form-label text-md-right">{{__('Path')}}</label>

    <div class="col-md-10">
        {!! Form::text('path', null,['class'=>'form-control']); !!}

        @error('path')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="Form-group row">
    <label for="kategori_galeri_id" class="col-md-2 col Form-label text-md-right">{{__('Kategori Galeri')}}</label>

    <div class="col-md-10">
        {!! Form::select('kategori_galeri_id', $galeri, null, ["class"=> "Form-control", "required"]) !!}

        @error('path')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

{!! Form::hidden('users_id', Auth::id() ); !!}

<div class="form-group row mb-0">
    <button type="submit" class="btn btn-primary">
        {{ __('Simpan Data') }}
    </button>
    <a href="{!! route('galeri.index') !!}"class="btn btn-danger">
        {{ __('Batal') }}
    </a>
</div>
