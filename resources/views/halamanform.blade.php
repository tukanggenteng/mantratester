{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Halaman Form')

@section('content_header')
    <h1>Halaman Form</h1>
@stop

@section('content')
      @if (!empty(session('success')))
        <div class="alert alert-success alert-dismissible">
          <button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>
            {{ session('success') }}
        </div>
      @endif
      @if (!empty(session('error')))
        <div class="alert alert-warning alert-dismissible">
          <button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>
            {{ session('error') }}
        </div>
      @endif

      <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Input data rekap Absen</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-3">

                <form method="post" action="{{route('dt.postdata')}}">
                @csrf
                <div class="form-group">
                  <label>NIP</label>
                  <input type="text" class="form-control" data-inputmask='"mask": "999999999999999999"' data-mask name="nip">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Periode</label>
                  <input type="text" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask name="periode">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Jumlah Hari Kerja</label>
                  <input type="text" class="form-control" data-inputmask='"mask": "99"' data-mask name="harikerja">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Jumlah Hadir</label>
                  <input type="text" class="form-control" data-inputmask='"mask": "99"' data-mask name="hadir">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Jumlah Apel</label>
                  <input type="text" class="form-control" data-inputmask='"mask": "99"' data-mask name="apel">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Jumlah Akumulasi</label>
                  <input type="text" class="form-control" data-inputmask='"mask": "99:99:99"' data-mask name="akumulasi_jk">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->

              <!-- col 2 -->
              <div class="col-md-3">
                <div class="form-group">
                  <label>Jumlah Tanpa Kabar</label>
                  <input type="text" class="form-control" data-inputmask='"mask": "99"' data-mask name="tanpakabar">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Jumlah Ijin</label>
                  <input type="text" class="form-control" data-inputmask='"mask": "99"' data-mask name="ijin">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Jumlah Ijin Terlambat</label>
                  <input type="text" class="form-control" data-inputmask='"mask": "99"' data-mask name="ijin_t">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Jumlah Ijin Pulang Cepat</label>
                  <input type="text" class="form-control" data-inputmask='"mask": "99"' data-mask name="ijin_pc">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Jumlah Sakit</label>
                  <input type="text" class="form-control" data-inputmask='"mask": "99"' data-mask name="sakit">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Jumlah Cuti</label>
                  <input type="text" class="form-control" data-inputmask='"mask": "99"' data-mask name="cuti">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->

              <!-- col 3 -->
              <div class="col-md-3">

                <div class="form-group">
                  <label>Jumlah Tugas Luar</label>
                  <input type="text" class="form-control" data-inputmask='"mask": "99"' data-mask name="tugasluar">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Jumlah Tugas Belajar</label>
                  <input type="text" class="form-control" data-inputmask='"mask": "99"' data-mask name="tugasbelajar">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Jumlah Kepentingan Lain</label>
                  <input type="text" class="form-control" data-inputmask='"mask": "99"' data-mask name="ijin_kl">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Jumlah Terlambat Masuk Kerja</label>
                  <input type="text" class="form-control" data-inputmask='"mask": "99"' data-mask name="terlambat_mk">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Akumulasi Terlambat</label>
                  <input type="text" class="form-control" data-inputmask='"mask": "99:99:99"' data-mask name="akumulasi_t">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Jumlah Pulang Cepat</label>
                  <input type="text" class="form-control" data-inputmask='"mask": "99"' data-mask name="pulangcepat">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->

            </div>
            <!-- /.row -->

            <div>
                <button type="submit" class="btn btn-primary col-md-9">Simpan</button>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            Rekap dengan model input data
          </div>

        </form>
        </div>
        <!-- /.box -->
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script src="vendor/adminlte/plugins/input-mask/jquery.inputmask.js"></script>
    <script src="vendor/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="vendor/adminlte/plugins/timepicker/bootstrap-timepicker.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script> console.log('Hi!'); </script>
    <script>
      $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()


        //Timepicker
        $('.timepicker').timepicker({
          showInputs: false
        })
      })
    </script>
@stop
