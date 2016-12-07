@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Data Rekapitulasi Pelatihan Dalam Negeri Non Gelar
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel121.index') }}">tabel1.21</a></li>
          <li class="active">Edit tabel1.21</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel121, [
                  'method' => 'PUT',
                  'route'  => ['tabel121.update', $tabel121->id],
                  'files'  => TRUE,
                  'id' => 'tabel121-form'
              ]) !!}

              @include('backend.bidang1.tabel121.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel121.script')
