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
                <form action="">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Kode Pasien</label>
                                <input type="text" name="kode_pasien" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="">Nama Pasien</label>
                                <input type="text" name="nama_pasien" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-8">
                                <label for="">Alamat Pasien</label>
                                <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Gender Pasien</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Pria</option>
                                    <option value="">Wanita</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Umur Pasien</label>
                                <input type="number" name="kode_pasien" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">Telepon Pasien</label>
                                <input type="number" name="kode_pasien" class="form-control">
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="store" value="Simpan" class="btn btn-sm btn-primary">
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
