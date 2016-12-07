@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Jumlah Kontrak PPM Menurut SKIM, Pengabdi dan Mahasiswa
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel137.index') }}">tabel1.37</a></li>
          <li class="active">Edit tabel1.37</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel137, [
                  'method' => 'PUT',
                  'route'  => ['tabel137.update', $tabel137->id],
                  'files'  => TRUE,
                  'id' => 'tabel137-form'
              ]) !!}

              @include('backend.bidang1.tabel137.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel137.script')
