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
                Form data pasien baru
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                @if(isset($pasien))
                    {!! Form::model($pasien, ['url' => '/pasien/update/'.$pasien->id, 'method' => 'put']) !!}
                @else
                    {!! Form::open(['url' => '/pasien/store', 'method' => 'post']) !!}
                @endif
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                @if(isset($pasien))
                                    {!! Form::label('kode_pasien', 'Kode', ['class' => 'control-label']) !!}
                                    {!! Form::text('kode_pasien', Input::old('kode_pasien'), ['class' => 'form-control', 'readonly' => true]) !!}
                                @else
                                    {!! Form::label('kode_pasien', 'Kode', ['class' => 'control-label']) !!}
                                    {!! Form::text('kode_pasien', $kodePasien, ['class' => 'form-control', 'readonly' => true]) !!}
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('nama_pasien') ? ' has-error' : ''}}">
                        <div class="row">
                            <div class="col-md-4">
                                {!! Form::label('nama_pasien', 'Nama Lengkap', ['class' => 'control-label']) !!}
                                {!! Form::text('nama_pasien', Input::old('kode_pasien'), ['class' => 'form-control']) !!}
                                @if($errors->has('nama_pasien'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_pasien') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::label('gender_pasien', 'Jenis Kelamin', ['class' => 'control-label']) !!}
                                {!! Form::select('size', ['1' => 'Laki-Laki', '2' => 'Perempuan'], '', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::label('umur_pasien', 'Umur', ['class' => 'control-label']) !!}
                                {!! Form::number('umur_pasien', Input::old('umur_pasien'), ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::label('telepon_pasien', 'Nomor Telepon', ['class' => 'control-label']) !!}
                                {!! Form::number('telepon_pasien', Input::old('telepon_pasien'), ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Alamat Lengkap</label>
                                {!! Form::textarea('alamat_pasien', Input::old('alamat_pasien'), ['class'=>'form-control', 'rows' => 5]) !!}
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
