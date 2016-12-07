@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
         Rekapitulasi Prestasi Mahasiswa
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel32.index') }}">tabel3.2</a></li>
          <li class="active">Edit tabel3.2</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel32, [
                  'method' => 'PUT',
                  'route'  => ['tabel32.update', $tabel32->id],
                  'files'  => TRUE,
                  'id' => 'tabel32-form'
              ]) !!}

              @include('backend.bidang3.tabel32.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang3.tabel32.script')
