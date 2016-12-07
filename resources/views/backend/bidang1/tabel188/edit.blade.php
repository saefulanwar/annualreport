@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         Jumlah Pasien dan Besarnya Dana yang Terkumpul untuk Pemeriksaan Mini Laboratorium
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel188.index') }}">tabel1.88</a></li>
          <li class="active">Edit tabel1.88</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel188, [
                  'method' => 'PUT',
                  'route'  => ['tabel188.update', $tabel188->id],
                  'files'  => TRUE,
                  'id' => 'tabel188-form'
              ]) !!}

              @include('backend.bidang1.tabel188.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel188.script')
