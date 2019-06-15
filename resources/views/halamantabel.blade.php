{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Halaman Tabel')

@section('content_header')
    <h1>Halaman Tabel</h1>
@stop

@section('content')
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">contoh Data Rekap Absensi</h3>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
          <div class="col-md-2">
            <button id="refresh" class="btn btn-primary btn-block btn-flat"> Refresh</button>
          </div>
        </div>

        <div class="box-body">
          <table id="datatabel" class="table table-bordered table-striped table-hover">
            <thead>
            <tr>
              <th>NIP</th>
              <th>Periode</th>
              <th>Hari Kerja</th>
              <th>Hadir</th>
              <th>Apel</th>
              <th>Akumulasi</th>
              <th>Tanpa Kabar</th>
              <th>Ijin</th>
              <th>Ijin Terlambat</th>
              <th>Ijin Pulang Cepat</th>
              <th>Sakit</th>
              <th>Cuti</th>
              <th>Tugas Luar</th>
              <th>Tugas Belajar</th>
              <th>Ijin Kepentingan Lain</th>
              <th>Terlambat Masuk Kerja</th>
              <th>Akumulasi Terlambat</th>
              <th>Pulang Cepat</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
            <tfoot>

            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script>
          $(document).ready(function() {
            var datatabelf = $('#datatabel').DataTable( {
                                "processing": true,
                                "serverSide": true,
                                "ajax": "{{route('dt.tabel')}}",
                                columns: [
                                      { data: 'nip'},
                                      { data: 'periode' },
                                      { data: 'hari_kerja' },
                                      { data: 'hadir' },
                                      { data: 'apel' },
                                      { data: 'akumulasi'},
                                      { data: 'tanpakabar'},
                                      { data: 'ijin'},
                                      { data: 'ijin_t'},
                                      { data: 'ijin_pc'},
                                      { data: 'sakit'},
                                      { data: 'cuti'},
                                      { data: 'tugasluar'},
                                      { data: 'tugasbelajar'},
                                      { data: 'ijin_kl'},
                                      { data: 'terlambat_mk'},
                                      { data: 'akumulasi_t'},
                                      { data: 'pulangcepat'},
                                  ],
                                  columnDefs: [
                                      { targets: [2,3,4,6,7,8,9,10,11,12,13,14,15,17] , className: 'text-right' },
                                      { targets: [5,16] , className: 'text-center' },
                                  ]
                                } );

              $('#refresh').click(function(){
                datatabelf.ajax.reload();
                console.log('reload');
              });
          } );
    </script>
@stop
