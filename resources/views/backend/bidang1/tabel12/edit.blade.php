@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Rangking Nasional Nilai Rerataan Saintek SBMPTN
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel12.index') }}">tabel1.2</a></li>
          <li class="active">Edit tabel12</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel12, [
                  'method' => 'PUT',
                  'route'  => ['tabel12.update', $tabel12->id],
                  'files'  => TRUE,
                  'id' => 'tabel12-form'
              ]) !!}

              @include('backend.bidang1.tabel12.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel12.script')
