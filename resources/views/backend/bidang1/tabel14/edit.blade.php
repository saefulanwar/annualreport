@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Rangking Nasional PTN Paling Diminati pada SNMPTN
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel14.index') }}">tabel1.4</a></li>
          <li class="active">Edit tabel14</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel14, [
                  'method' => 'PUT',
                  'route'  => ['tabel14.update', $tabel14->id],
                  'files'  => TRUE,
                  'id' => 'tabel14-form'
              ]) !!}

              @include('backend.bidang1.tabel14.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel14.script')
