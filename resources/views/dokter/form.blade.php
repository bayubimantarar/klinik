@extends('layouts.app')

@section('title')
Pasien
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard &raquo; Pasien</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Form data dokter baru
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                @if(isset($dokter))
                    {!! Form::model($dokter, ['url' => '/dokter/update/'.$dokter->id, 'method' => 'put']) !!}
                @else
                    {!! Form::open(['url' => '/dokter/store', 'method' => 'post']) !!}
                @endif
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                @if(isset($pasien))
                                    {!! Form::label('kode_dokter', 'Kode Dokter', ['class' => 'control-label']) !!}
                                    {!! Form::text('kode_dokter', Input::old('kode_dokter'), ['class' => 'form-control', 'readonly' => true]) !!}
                                @else
                                    {!! Form::label('kode_dokter', 'Kode Dokter', ['class' => 'control-label']) !!}
                                    {!! Form::text('kode_dokter', '', ['class' => 'form-control']) !!}
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('kode_poliklinik') ? ' has-error' : ''}}">
                        <div class="row">
                            <div class="col-md-4">
                                {!! Form::label('kode_poliklinik', 'Poliklinik', ['class' => 'control-label']) !!}
                                {!! Form::select('kode_poliklinik', ['1' => 'Laki-Laki', '2' => 'Perempuan'], '', ['class' => 'form-control']) !!}
                                @if($errors->has('kode_poliklinik'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_poliklinik') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('nama_dokter') ? ' has-error' : ''}}">
                        <div class="row">
                            <div class="col-md-4">
                                {!! Form::label('nama_dokter', 'Nama Lengkap', ['class' => 'control-label']) !!}
                                {!! Form::text('nama_dokter', Input::old('nama_dokter'), ['class' => 'form-control']) !!}
                                @if($errors->has('nama_dokter'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_dokter') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('spesialis') ? ' has-error' : ''}}">
                        <div class="row">
                            <div class="col-md-4">
                                {!! Form::label('spesialis', 'Spesialis', ['class' => 'control-label']) !!}
                                {!! Form::text('spesialis', Input::old('spesialis'), ['class' => 'form-control']) !!}
                                @if($errors->has('spesialis'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('spesialis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('telepon_dokter') ? ' has-error' : ''}}">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::label('telepon_dokter', 'Nomor Telepon', ['class' => 'control-label']) !!}
                                {!! Form::number('telepon_dokter', Input::old('telepon_dokter'), ['class' => 'form-control']) !!}
                                @if($errors->has('spesialis'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telepon_dokter') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('alamat_dokter') ? ' has-error' : ''}}">
                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::label('alamat_dokter', 'Alamat Lengkap', ['class' => 'control-label']) !!}
                                {!! Form::textarea('alamat_dokter', Input::old('alamat_dokter'), ['class'=>'form-control', 'rows' => 5]) !!}
                                @if($errors->has('alamat_dokter'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat_dokter') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    {!! Form::button('<i class="fa fa-check"></i> Simpan', ['type' => 'submit', 'class' => 'btn btn-sm btn-primary']) !!}
                    {!! Form::close() !!}
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
@endsection
