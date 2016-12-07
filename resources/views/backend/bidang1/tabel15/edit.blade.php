@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Jumlah Mahasiswa Peserta Pelatihan TIK
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel15.index') }}">tabel1.5</a></li>
          <li class="active">Edit tabel15</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel15, [
                  'method' => 'PUT',
                  'route'  => ['tabel15.update', $tabel15->id],
                  'files'  => TRUE,
                  'id' => 'tabel15-form'
              ]) !!}

              @include('backend.bidang1.tabel15.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel15.script')
