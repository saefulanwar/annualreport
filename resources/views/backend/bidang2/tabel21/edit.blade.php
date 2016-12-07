@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         Daftar Surat Masuk dan Surat Keluar serta Surat Tugas & SPPD
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel21.index') }}">tabel2.1</a></li>
          <li class="active">Edit tabel2.1</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel21, [
                  'method' => 'PUT',
                  'route'  => ['tabel21.update', $tabel21->id],
                  'files'  => TRUE,
                  'id' => 'tabel21-form'
              ]) !!}

              @include('backend.bidang2.tabel21.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang2.tabel21.script')
