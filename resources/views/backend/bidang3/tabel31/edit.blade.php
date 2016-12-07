@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         Rekapitulasi Mahasiswa Penerima Penghargaan Prestasi Mahasiswa Berdasarkan Bidang Pembinaan
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel31.index') }}">tabel3.1</a></li>
          <li class="active">Edit tabel3.1</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel31, [
                  'method' => 'PUT',
                  'route'  => ['tabel31.update', $tabel31->id],
                  'files'  => TRUE,
                  'id' => 'tabel31-form'
              ]) !!}

              @include('backend.bidang2.tabel31.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang2.tabel31.script')
