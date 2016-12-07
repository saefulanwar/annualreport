@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Daftar Nama Dosen yang Mendapatkan Insentif Seminar Nasional/Internasional
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel120.index') }}">tabel1.20</a></li>
          <li class="active">Edit tabel1.20</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel120, [
                  'method' => 'PUT',
                  'route'  => ['tabel120.update', $tabel120->id],
                  'files'  => TRUE,
                  'id' => 'tabel120-form'
              ]) !!}

              @include('backend.bidang1.tabel120.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel120.script')
