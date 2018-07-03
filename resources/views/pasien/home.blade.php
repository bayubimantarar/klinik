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
        <p><a href="{{ route('pasien.create') }}" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Tambah data pasien baru</a></p>
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Pasien
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="pasien-table">
                    <thead>
                        <tr>
                            <th>Kode Pasien</th>
                            <th>Nama Pasien</th>
                            <th>Alamat Pasien</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                </table>
                <!-- /.table-responsive -->
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
        $('#pasien-table').DataTable({
            serverSide: true,
            processing: true,
            ajax: '/pasien/data',
            columns: [
                {data: 'kode_pasien'},
                {data: 'nama_pasien'},
                {data: 'alamat_pasien'},
                {data: 'action', orderable: false, searchable: false}
            ]
        });
    });
</script>
@endpush
