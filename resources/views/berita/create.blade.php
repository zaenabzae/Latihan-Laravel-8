@extends('layouts.app')

@section('content')
<div class="content">
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'berita.store']) !!}
            <div class="body m-10">
                <div class="form-group">
                   {!! Form::label('judul', 'Judul'); !!}
                   {!! Form::text('judul', '', ['class' => 'form-control', 'placeholder'=> ' judul berita']);!!}
                </div>
                <div class="form-group">
                    {!! Form::label('isi', 'Isi'); !!}
                    {!! Form::textarea('isi', '', ['class' => 'form-control', 'placeholder'=> ' isi berita']);!!}
                 </div>
                 <button class="btn btn-success">Simpan</button>
                 <a href="{!! route('berita.index') !!}" class="btn btn-danger">Cancel</a>
            </div>
    
        {!! Form::close() !!}
        </div>
    </div>
</div>





    
@endsection