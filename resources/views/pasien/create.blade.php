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
                <form action="{{ route('pasien.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="">Kode Pasien</label>
                                <input type="text" name="kode_pasien" class="form-control" value="{{ Carbon\Carbon::now() }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="nama_pasien" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Gender Pasien</label>
                                <select name="gender_pasien" id="" class="form-control">
                                    <option value="1">Laki-Laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Umur Pasien</label>
                                <input type="number" name="umur_pasien" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Telepon Pasien</label>
                                <input type="number" name="telepon_pasien" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Alamat Pasien</label>
                                <textarea name="alamat_pasien" id="" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Simpan</button>
                </form>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
@endsection

@push('js')
<script>
    $(document).ready(function(){
        console.log('create');
    });
</script>
@endpush
