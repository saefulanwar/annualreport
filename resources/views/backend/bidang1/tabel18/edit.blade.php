@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          IPK Mahasiswa UNY dalam Delapan Tahun Terakhir
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel18.index') }}">tabel1.8</a></li>
          <li class="active">Edit tabel18</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel18, [
                  'method' => 'PUT',
                  'route'  => ['tabel18.update', $tabel18->id],
                  'files'  => TRUE,
                  'id' => 'tabel18-form'
              ]) !!}

              @include('backend.bidang1.tabel18.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel18.script')
