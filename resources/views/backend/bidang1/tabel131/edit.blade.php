@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Kegiatan Studium General
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel131.index') }}">tabel1.31</a></li>
          <li class="active">Edit tabel1.31</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel131, [
                  'method' => 'PUT',
                  'route'  => ['tabel131.update', $tabel131->id],
                  'files'  => TRUE,
                  'id' => 'tabel131-form'
              ]) !!}

              @include('backend.bidang1.tabel131.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel131.script')
