@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>Jumlah Pasien dan Besarnya Dana yang Terkumpul untuk Biaya Pembuatan Surat Keterangan dari Dokter

          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel189.index') }}">tabel1.89</a></li>
          <li class="active">Edit tabel1.89</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel189, [
                  'method' => 'PUT',
                  'route'  => ['tabel189.update', $tabel189->id],
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
