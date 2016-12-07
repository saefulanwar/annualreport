@extends('backend.main')

@section('title','UNY REPORT | Add new data')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        Jumlah Pasien dan Besarnya Dana yang Terkumpul untuk Biaya Pembuatan Surat Keterangan dari Dokter

        <small>Add new</small>
      </h1>
      <ol class="breadcrumb">
        <li>
        <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
        <a href="{{ route('tabel189.index') }}"> tabel1.89</a>
        </li>
        <li class="active">
        Add new
        </li>
      </ol>
    </section>

    <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel189, [
                  'method' => 'POST',
                  'route'  => 'tabel189.store',
                  'files'  => TRUE,
                  'id' => 'tabel189-form'
              ]) !!}

              @include('backend.bidang1.tabel189.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel189.script')

