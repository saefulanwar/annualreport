@extends('backend.main')

@section('title', 'UNY REPORT | Edit data ')

@section('content')

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>          
          Rekapitulasi Proposal Usulan
          <small>Edit data</small>
        </h1>
        <ol class="breadcrumb">
          <li>
              <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li><a href="{{ route('tabel136.index') }}">tabel1.36</a></li>
          <li class="active">Edit tabel1.36</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($tabel136, [
                  'method' => 'PUT',
                  'route'  => ['tabel136.update', $tabel136->id],
                  'files'  => TRUE,
                  'id' => 'tabel136-form'
              ]) !!}

              @include('backend.bidang1.tabel136.form')

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->
    </div>

@endsection

@include('backend.bidang1.tabel136.script')
