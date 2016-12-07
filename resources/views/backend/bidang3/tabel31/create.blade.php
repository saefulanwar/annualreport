@extends('backend.main')

@section('title','UNY REPORT | Add new data')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>        
        Rekapitulasi Mahasiswa Penerima Penghargaan Prestasi Mahasiswa Berdasarkan Bidang Pembinaan
        <small>Add new</small>
      </h1>
      <ol class="breadcrumb">
        <li>
        <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
        <a href="{{ route('tabel31.index') }}"> tabel3.1</a>
        </li>
        <li class="active">
        Add new
        </li>
      </ol>
    </section>

    <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel31, [
                  'method' => 'POST',
                  'route'  => 'tabel31.store',
                  'files'  => TRUE,
                  'id' => 'tabel31-form'
              ]) !!}

              @include('backend.bidang3.tabel31.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang3.tabel31.script')

